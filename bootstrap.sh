#! /usr/bin/env bash

# Variables
DBHOST=localhost
DBNAME=assignments
DBUSER=vagrant
DBPASSWD=password

echo -e "\n--- K, here goes... ---\n"

echo -e "\n--- Updating package lists ---\n"
apt-get -qq update

echo -e "\n--- Installing basic stuff ---\n"
apt-get -y install curl build-essential python-software-properties git >> /vagrant/vm_build.log 2>&1

# MySQL setup for development purposes
echo -e "\n--- Installing MySQL and phpmyadmin ---\n"
debconf-set-selections <<< "mysql-server mysql-server/root_password password $DBPASSWD"
debconf-set-selections <<< "mysql-server mysql-server/root_password_again password $DBPASSWD"
debconf-set-selections <<< "phpmyadmin phpmyadmin/dbconfig-install boolean true"
debconf-set-selections <<< "phpmyadmin phpmyadmin/app-password-confirm password $DBPASSWD"
debconf-set-selections <<< "phpmyadmin phpmyadmin/mysql/admin-pass password $DBPASSWD"
debconf-set-selections <<< "phpmyadmin phpmyadmin/mysql/app-pass password $DBPASSWD"
debconf-set-selections <<< "phpmyadmin phpmyadmin/reconfigure-webserver multiselect none"
apt-get -y install mysql-server phpmyadmin >> /vagrant/vm_build.log 2>&1

echo -e "\n--- Setting up the MySQL user and database ---\n"
mysql -uroot -p$DBPASSWD -e "CREATE DATABASE $DBNAME" >> /vagrant/vm_build.log 2>&1
mysql -uroot -p$DBPASSWD -e "grant all privileges on $DBNAME.* to '$DBUSER'@'localhost' identified by '$DBPASSWD'" > /vagrant/vm_build.log 2>&1

echo -e "\n--- Lets install php ---\n"
apt-get -y install php apache2 libapache2-mod-php php-curl php-gd php-mysql php-gettext >> /vagrant/vm_build.log 2>&1

echo -e "\n--- Enabling mod-rewrite ---\n"
a2enmod rewrite >> /vagrant/vm_build.log 2>&1

echo -e "\n--- Allowing Apache override to all ---\n"
sed -i "s/AllowOverride None/AllowOverride All/g" /etc/apache2/apache2.conf

echo -e "\n--- Setting document root to shared directory ---\n"
rm -rf /var/www/html
ln -fs /vagrant/public /var/www/html

echo -e "\n--- Enabling php error messages ---\n"
sed -i "s/error_reporting = .*/error_reporting = E_ALL/" /etc/php/7.0/apache2/php.ini
sed -i "s/display_errors = .*/display_errors = On/" /etc/php/7.0/apache2/php.ini

echo -e "\n--- Restarting Apache ---\n"
service apache2 restart >> /vagrant/vm_build.log 2>&1

echo -e "\n--- Installing composer for PHP packages ---\n"
curl --silent https://getcomposer.org/installer | php >> /vagrant/vm_build.log 2>&1
mv composer.phar /usr/local/bin/composer

echo -e "\n--- Installing nodejs ---\n"
apt-get -y install nodejs >> /vagrant/vm_build.log 2>&1

echo -e "\n--- Installing javascript components ---\n"
npm install -g gulp bower >> /vagrant/vm_build.log 2>&1


echo -e "\n--- Updating project components and pulling latest versions ---\n"
cd /vagrant

if [[ -s /vagrant/composer.json ]] ;then
  sudo -u vagrant -H sh -c "composer install" >> /vagrant/vm_build.log 2>&1
fi

if [[ -s /vagrant/package.json ]] ;then
  sudo -u vagrant -H sh -c "npm install" >> /vagrant/vm_build.log 2>&1
fi

if [[ -s /vagrant/bower.json ]] ;then
  sudo -u vagrant -H sh -c "bower install -s" >> /vagrant/vm_build.log 2>&1
fi

if [[ -s /vagrant/gulpfile.js ]] ;then
  sudo -u vagrant -H sh -c "gulp" >> /vagrant/vm_build.log 2>&1
fi


#! /usr/bin/env bash

# Variables
DBHOST=localhost
DBNAME=assignments
DBUSER=vagrant
DBPASSWD=password

echo -e "\n\n--- K, here goes... ---\n"

echo -e "\n--- Updating package lists ---\n"
apt-get -qq update

echo -e "\n--- Installing basic stuff ---\n"
apt-get -y install curl build-essential python-software-properties git

# MySQL setup for development purposes
echo -e "\n--- Installing MySQL and phpmyadmin ---\n"
debconf-set-selections <<< "mysql-server mysql-server/root_password password $DBPASSWD"
debconf-set-selections <<< "mysql-server mysql-server/root_password_again password $DBPASSWD"
apt-get -y --no-install-recommends install mysql-server

echo -e "\n--- Setting up the MySQL user and database ---\n"
mysql -uroot -p$DBPASSWD -e "CREATE DATABASE $DBNAME;"
mysql -uroot -p$DBPASSWD -e "grant all privileges on $DBNAME.* to '$DBUSER'@'localhost' identified by '$DBPASSWD';"

echo -e "\n--- Lets install php ---\n"
apt-get -y install php-fpm php-curl php-gd php-mysql php-gettext

echo -e "\n--- Configuring nginx ---\n"
apt-get -y install nginx
rm /etc/nginx/sites-available/default
rm /etc/nginx/sites-enabled/default
cp /home/vagrant/code/nginx/default.conf /etc/nginx/sites-available/default
ln -s /etc/nginx/sites-available/default /etc/nginx/sites-enabled/

echo -e "\n--- Setting document root to shared directory ---\n"
rm -rf /var/www/html
ln -fs /home/vagrant/code/public /var/www/html

echo -e "\n--- Restarting nginx ---\n"
service nginx restart


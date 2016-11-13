# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
    config.vm.box = "bento/ubuntu-16.04"
    config.vm.hostname = "dev-xenial"

    config.vm.network "forwarded_port", guest: 80, host: 8080, auto_correct: true
    config.vm.network "forwarded_port", guest: 3306, host: 3306

    config.vm.synced_folder "./", "/home/vagrant/code/", create: true

    config.vm.provider "virtualbox" do |vb|
        vb.name = "vagrant LEMP stack"
        vb.memory = "1024"
    end

    config.vm.provision "shell", path: "bootstrap.sh"
end

# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
    config.vm.box = "ubuntu/xenial64"
    config.vm.hostname = "dev-xenial"

    config.vm.network "forwarded_port", guest: 80, host: 8080
    config.vm.synced_folder ".", "/vagrant/"

    config.vm.network :private_network, ip: "192.168.33.10"

    config.vm.provision "shell", path: "bootstrap.sh"
end

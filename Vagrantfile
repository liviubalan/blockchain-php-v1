# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  config.vm.define "node1" do |subconfig|
    subconfig.vm.box = "bento/ubuntu-20.04"
    subconfig.vm.network "private_network", ip: "192.168.33.11"
    subconfig.vm.provider "virtualbox" do |vb|
      vb.cpus = 1
      vb.memory = 1024
      vb.name = "blockchain-php-node1"
    end
    subconfig.vm.hostname = "blockchain-php-node1"
    subconfig.vm.provision :shell, path: "provision-shell/bootstrap.sh", privileged: false
  end

  config.vm.define "node2" do |subconfig|
    subconfig.vm.box = "bento/ubuntu-20.04"
    subconfig.vm.network "private_network", ip: "192.168.33.12"
    subconfig.vm.provider "virtualbox" do |vb|
      vb.cpus = 1
      vb.memory = 1024
      vb.name = "blockchain-php-node2"
    end
    subconfig.vm.hostname = "blockchain-php-node2"
    subconfig.vm.provision :shell, path: "provision-shell/bootstrap.sh", privileged: false
  end
end

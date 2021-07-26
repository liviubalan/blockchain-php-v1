# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure("2") do |config|
  config.vm.define "node1" do |subconfig|
    subconfig.vm.box = "bento/ubuntu-20.04"
    subconfig.vm.network "private_network", ip: "192.168.33.11"
    subconfig.vm.provider "virtualbox" do |vb|
      vb.cpus = 1
      vb.memory = 512
      vb.name = "node1"
    end
    subconfig.vm.hostname = "node1.net"
    subconfig.vm.provision :shell, path: "provision-shell/bootstrap.sh", privileged: false
    config.vm.synced_folder ".", "/vagrant",
      create: false,
      disabled: false,
      group: "www-data",
      mount_options: ["dmode=775,fmode=764"],
      owner: "vagrant",
      type: "virtualbox",
      id: "share-host"
  end

  config.vm.define "node2" do |subconfig|
    subconfig.vm.box = "bento/ubuntu-20.04"
    subconfig.vm.network "private_network", ip: "192.168.33.12"
    subconfig.vm.provider "virtualbox" do |vb|
      vb.cpus = 1
      vb.memory = 512
      vb.name = "node2"
    end
    subconfig.vm.hostname = "node2.net"
    subconfig.vm.provision :shell, path: "provision-shell/bootstrap.sh", privileged: false
    config.vm.synced_folder ".", "/vagrant",
      create: false,
      disabled: false,
      group: "www-data",
      mount_options: ["dmode=775,fmode=764"],
      owner: "vagrant",
      type: "virtualbox",
      id: "share-host"
  end

 config.vm.define "node3" do |subconfig|
    subconfig.vm.box = "bento/ubuntu-20.04"
    subconfig.vm.network "private_network", ip: "192.168.33.13"
    subconfig.vm.provider "virtualbox" do |vb|
      vb.cpus = 1
      vb.memory = 512
      vb.name = "node3"
    end
    subconfig.vm.hostname = "node3.net"
    subconfig.vm.provision :shell, path: "provision-shell/bootstrap.sh", privileged: false
    config.vm.synced_folder ".", "/vagrant",
      create: false,
      disabled: false,
      group: "www-data",
      mount_options: ["dmode=775,fmode=764"],
      owner: "vagrant",
      type: "virtualbox",
      id: "share-host"
  end

  config.vm.define "node4" do |subconfig|
    subconfig.vm.box = "bento/ubuntu-20.04"
    subconfig.vm.network "private_network", ip: "192.168.33.14"
    subconfig.vm.provider "virtualbox" do |vb|
      vb.cpus = 1
      vb.memory = 512
      vb.name = "node4"
    end
    subconfig.vm.hostname = "node4.net"
    subconfig.vm.provision :shell, path: "provision-shell/bootstrap.sh", privileged: false
    config.vm.synced_folder ".", "/vagrant",
      create: false,
      disabled: false,
      group: "www-data",
      mount_options: ["dmode=775,fmode=764"],
      owner: "vagrant",
      type: "virtualbox",
      id: "share-host"
  end

  config.vm.define "node5" do |subconfig|
    subconfig.vm.box = "bento/ubuntu-20.04"
    subconfig.vm.network "private_network", ip: "192.168.33.15"
    subconfig.vm.provider "virtualbox" do |vb|
      vb.cpus = 1
      vb.memory = 512
      vb.name = "node5"
    end
    subconfig.vm.hostname = "node5.net"
    subconfig.vm.provision :shell, path: "provision-shell/bootstrap.sh", privileged: false
    config.vm.synced_folder ".", "/vagrant",
      create: false,
      disabled: false,
      group: "www-data",
      mount_options: ["dmode=775,fmode=764"],
      owner: "vagrant",
      type: "virtualbox",
      id: "share-host"
  end
end

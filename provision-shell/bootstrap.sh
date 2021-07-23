#!/bin/bash

sudo apt-get update
sudo apt-get -y install apache2
sudo apt-get -y install php libapache2-mod-php php-xml
sudo rm -rf /var/www/html
sudo ln -s /vagrant/www /var/www/html

#!/bin/bash

sudo apt-get update
sudo apt-get -y install apache2
sudo apt-get -y install php libapache2-mod-php php-mysql
sudo mkdir /var/www/your_domain
sudo rm -rf /var/www/html

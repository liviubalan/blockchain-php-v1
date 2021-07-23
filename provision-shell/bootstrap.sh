#!/bin/bash

sudo apt-get update
sudo apt-get -y install apache2
sudo apt-get -y install php libapache2-mod-php php-xml
sudo rm -rf /var/www/blockchain
sudo ln -s /vagrant/www /var/www/blockchain
sudo cp /vagrant/provision-shell/blockchain.conf /etc/apache2/sites-available/blockchain.conf
sudo a2ensite blockchain.conf
sudo systemctl reload apache2

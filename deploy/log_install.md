### Git clone project to /var/www/html/vilove/
cd /var/www/html/vilove/
### Install Nginx
142  apt install nginx
142  service nginx restart
### Install PHP
113  sudo apt install --no-install-recommends php8.1
117  apt remove apache2*
118  apt install php8.1-curl
120  apt install php8.1-xml
121  apt install php8.1-gd
122  apt install php8.1-zip
123  apt install php8.1-bcmath
124  apt install php8.1-mbstring
127  apt install php8.1-cli
128  apt autoremove
133  apt install php8.1-intl
133  apt install php8.1-fpm
141  service php8.1-fpm status

### Install Free SSL Certificate
2  sudo apt install certbot python3-certbot-nginx
143  certbot --nginx -d vilove.tnet.vn
### Install Composer
129  curl -sS https://getcomposer.org/installer -o composer-setup.php
130  sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
134  composer install


### Troubleshooting with PHP 8.1

Error `https://laracasts.com/discuss/channels/general-discussion/symfonycomponenterrorhandlererrorfatalerror-declaration-of-appproductsluggable-must-be-compatible-with-cviebrockeloquentsluggablesluggablesluggable-array`
`https://stitcher.io/blog/php-81-upgrade-mac`

### Max Image File Upload

go to `vim /etc/php/8.1/fpm/php.ini`

set `post_max_size` => 55M

`service php8.1-fpm restart`

go to `vim /etc/nginx/nginx.conf`

add Add following line to http{..} block in nginx config:

http {
#...
client_max_body_size 100m;
#...
}

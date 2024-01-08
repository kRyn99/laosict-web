1  apt update
3  apt install nginx
4  sudo add-apt-repository ppa:ondrej/php
5  sudo apt-get update
6  sudo apt-get install php7.3 php7.3-fpm
7  apt install git
8  php -v
9  sudo apt-get install php7.3-xml
10  sudo apt-get install php7.3-math
11  sudo apt-get install php7.3-bcmath
12  sudo apt-get install php7.3-json
13  sudo apt-get install php7.3-mbstring
14  mkdir -p ~/.ssh
15  vim ~/.ssh/id_rsa
16  apt install vim
17  vim ~/.ssh/id_rsa
18  vim ~/.ssh/id_rsa.pub
19  chmod 600 ~/.ssh/id_rsa
20  echo > /etc/php/7.3/fpm/pool.d/www.conf
21  vim /etc/php/7.3/fpm/pool.d/www.conf
22  service php7.3-fpm status
23  service php7.3-fpm restart
24  service php7.3-fpm status
25  cd /var/www/html/
26  git clone git@github.com:thienkimlove/phunghanh_backpack.git media
27  git status
28  cd media/
29  ls -la
30  chmod -R 777 storage/
31  chmod -R 777 bootstrap/cache/
32  apt install zip unzip
33  apt install php7.3-curl
34  apt install php7.3-cli
35  curl -sS https://getcomposer.org/installer -o composer-setup.php
36  apt install curl
37  curl -sS https://getcomposer.org/installer -o composer-setup.php
38  sudo php composer-setup.php --install-dir=/usr/local/bin --filename=composer
39  git status
40  rm composer-setup.php
41  vim .gitignore
42  git status
43  vim .gitignore
44  git status
45  vim .gitignore
46  rm storage/.DS_Store
47  git status
48  git add . && git comit -m update
49  git add . && git commit -m update && git push origin master
50  git config --global user.email "thienkimlove@gmail.com"
51  git config --global user.name "Quan Do"
52  git push origin master
53  git add . && git commit -m update && git push origin master
54  composer install
55  rm composer.lock
56  composer install
57  git status
58  git add . && git commit -m update && git push origin master
59  vim .env
60  php artisan migrate
61  apt install php7.3-mysql
62  vim /etc/hosts
63  php artisan migrate
64  php artisan backpack:user
65  php artisan backpack:base:user
66  git fetch && git pull
67  cat .env
68  cd ..
69  mdkir go_run
70  mkdir go_run
71  cd go_run/
72  mkdir phunghanh_backpack_go
73  cp ~/.ssh/id_rsa.pub ~/.ssh/authorized_keys
74  chmod +x phunghanh_backpack_go/main
75  vim /etc/systemd/system/phunghanh_backpack_go.s�service
76  vim /etc/systemd/system/phunghanh_backpack_go.service
77  sudo systemctl daemon-reload
78  sudo systemctl enable phunghanh_backpack_go
79  sudo systemctl start phunghanh_backpack_go

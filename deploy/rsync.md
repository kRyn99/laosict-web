Step 1. Install Rsync on CentOS7 : yum install rsync -y

Step 2. Rsync Upload Files between server1 and server2

Server 1 application directory : /var/www/html/vilove
Server 2 application directory : /var/www/html/vilove

Command test Rsync from server1 to server2

From server1 run command below:

rsync -avzhe ssh /var/www/html/vilove/public/uploads/* root@server2:/var/www/html/vilove/public/uploads/

Command test Rsync from server2 to server1

From server2 run command below:

rsync -avzhe ssh /var/www/html/vilove/public/uploads/* root@server1:/var/www/html/vilove/public/uploads/

Step 3. Add 2 command to /etc/crontab so rsync will run 1 min 1 time

Edit /etc/crontab server 1

* *  *  *  * ssh /var/www/html/vilove/public/uploads/* root@server2:/var/www/html/vilove/public/uploads/

Edit /etc/crontab server 2
* ssh /var/www/html/vilove/public/uploads/* root@server1:/var/www/html/vilove/public/uploads/



#EC2 - WebAPP - Step-by-Step

Amazon Elastic Compute Cloud (EC2) it's a AWS service used for create and execute virtual machines on cloud.

** If you need Launch a new EC2 instance and configure, see [EC2 File](https://bitbucket.org/strobelamp/sl/src/master/Concepts/AWS/EC2.md) . **

1. Configure **Security Group**

* ICMP | Custom ICMP IPV4 | All | All | Custom |  0.0.0.0/0 | ::/0 | 
* ICMP | Custom ICMP IPV6 | All | All | Custom |  0.0.0.0/0 | ::/0 | 
* ICMP | All ICMP - IPV4 | ICMP | All | Custom |  0.0.0.0/0 | ::/0 | 
* ICMP | All ICMP - IPV6 | ICMP | All | Custom |  0.0.0.0/0 | ::/0 | 

* HTTP | TCP | 80 | All | Custom |  0.0.0.0/0 | ::/0 | 

* SSH | TCP | 80 | All | Custom |  0.0.0.0/0 | ::/0 | 

* VPC | All | 0-65535 | Custom | sg-a50d2cc9 |


2. Access your instance using SSH. (Inside the folder with MYKEY.pem file)

	```
	ssh -i "MYKEY.pem" ubuntu@ec2-77-777-47-888.us-east-2.compute.amazonaws.com
	```
	
3. Linux

* Install and update:


	```
	sudo apt-get install software-properties-common
	sudo apt-add-repository universe
	sudo apt-get update
	sudo apt-get install python3-pip python-dev nginx 
	```

* Install **PACKAGE**:

	```
	pip3 install virtualenv
	```
	
4. Configure **PORT**

	```
	iptables -A INPUT -m state --state NEW -m tcp -p tcp --dport 80 -j ACCEPT
	```
	
5. If you need a fixed IP:

	5.a. Create a [new free name](https://www.freenom.com/pt/index.html).

	5.b. Use **Elastic IP** on AWS.

6. Configure **nginx** - [based on](https://www.linode.com/docs/web-servers/nginx/how-to-configure-nginx/).
	
	* Config ** /etc/nginx/nginx.conf **:
	
```
	http {
		include       /etc/nginx/mime.types;
		default_type  application/octet-stream;

		log_format  main  '$remote_addr - $remote_user [$time_local] "$request" '
						  '$status $body_bytes_sent "$http_referer" '
						  '"$http_user_agent" "$http_x_forwarded_for"';

		access_log  /var/log/nginx/access.log  main;

		sendfile        on;
		#tcp_nopush     on;

		keepalive_timeout  65;

		#gzip  on;

		include /etc/nginx/conf.d/*.conf;
	}
```
.
	* Config ** /etc/nginx/sites-enabled/ ** :	
	
```
	server {
		listen         80 default_server;
		listen         [::]:80 default_server;
		server_name    example.com www.example.com;
		root           /var/www/example.com;
		index          index.html;
		try_files $uri /index.html;
	}
```


7. Configure a fixed IP on the WEB application.

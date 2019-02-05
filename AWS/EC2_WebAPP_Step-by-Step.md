# EC2 - WebAPP - Step-by-Step

Amazon Elastic Compute Cloud (EC2) it's a AWS service used for create and execute virtual machines on cloud.

**If you need Launch a new EC2 instance and configure, see [EC2 File](https://bitbucket.org/strobelamp/sl/src/master/Concepts/AWS/EC2.md) .**

1. Configure **Security Group**

ICMP | Custom ICMP IPV4 | All | All | Custom |  0.0.0.0/0 | ::/0 | 

ICMP | Custom ICMP IPV6 | All | All | Custom |  0.0.0.0/0 | ::/0 | 

ICMP | All ICMP - IPV4 | ICMP | All | Custom |  0.0.0.0/0 | ::/0 | 

ICMP | All ICMP - IPV6 | ICMP | All | Custom |  0.0.0.0/0 | ::/0 | 

HTTP | TCP | 80 | All | Custom |  0.0.0.0/0 | ::/0 | 

SSH | TCP | 80 | All | Custom |  0.0.0.0/0 | ::/0 | 

VPC | All | 0-65535 | Custom | sg-a50d2cc9 |


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

6. Create your project and a virtual enviroment:

	```
	mkdir myproject
    	cd myproject/
	virtualenv venv
	source ./venv/bin/activate
	```
	
7. Install the packages to your project:

	```
        pip3 install gunicorn flask
	```
8. Create your application **~/myproject/app.py**, or use this example:

	```
	from flask import Flask
	application = Flask(__name__)

	@application.route("/")
	def index():
    		return "Hello World!"

	if __name__ == "__main__":
    		application.run(host='0.0.0.0', port='8080')
	```

9. Execute your application using the port **www.myapplication.com:8080** to verify if is ok. TIPS:

	```
	execute
	ctrl+z : stop the program.
	bg: running in background.
	jobs: all programs running.
	fg number: open a program in jobs.
	ctrl+c: finish the program.
	```

10. Create a WSGI entrypoint, **~/myproject/wsgi.py**:

	```
	from app import application

	if __name__ == "__main__":
    	application.run()
	```

11. Execute gunicorn to verify the entrypoint:

	```
	gunicorn --bin 0.0.0.0:8080 wsgi
	```

12. Configure the nginx service. Go to **/etc/nginx/nginx.conf** and insert **server** inside **http**:

	```
	http {
        	server {
                	listen       80 default_server;
                	listen       [::]:80 default_server;
              		server_name  www.myservername.com;
                	root         /usr/share/nginx/html;

        		location / {
                		proxy_pass http://unix:/home/ec2-user/myproject/myproject.sock;
        		}
        	}
	...
	}
	```

13. Start nginx service:
	```
	service nginx start
	```

14. Change default port **/etc/nginx/sites-enabled/default** for anyone that you aren't using. 

	```
	server {
	        listen 5000 default_server;
        	listen [::]:5000 default_server;
	...
	}
	```
	
15. Restart nginx service:
	```
	service nginx restart
	```

16. Start your gunicorn application with - **Inside the project folder** : 

	```
	gunicorn --workers 3 --bind unix:myproject.sock -m 000 wsgi
	```

## Reference

* [The best tutorial](https://pyliaorachel.github.io/blog/tech/system/2017/07/07/flask-app-with-gunicorn-on-nginx-server-upon-aws-ec2-linux.html)


#EC2 - AWS

Amazon Elastic Compute Cloud (EC2) it's a AWS service used for create and execute virtual machines on cloud.

1. Launch an EC2 instance.

* Click on ** Launch Instance ** .

2. Configure your instance.

* Click ** Select ** in the ** Amazon Linux AMI 2018.03.0 (HVM), SSD Volume Type ** option .
* The default option of * t2.micro * should already be checked. This instance type is covered within the Free Tier and offers enough compute capacity to tackle simple worloads. Click ** Review ans Launch ** at the bottom of the page.
* Click ** Launch ** .
* Select ** Create a new key pair ** and give the name ** MyKeyPair ** . Next click the ** Download Key Pair ** .
* Click ** Launch ** .

3. Connect to your instance.

![Connect](image/connect.png)

* Install Putty or use SSH. On Windows 10 it's possible ue SSH too.
* Use your instance ID.
* Use your public DNS.
* Use your IPV6 Address.
* Use your private key.

4. Terminate your instance.

* [Virtual Machine](https://aws.amazon.com/getting-started/tutorials/launch-a-virtual-machine/?nc1=h_ls) - Launch a VM.
* [Amazon Linux AMI](https://aws.amazon.com/pt/amazon-linux-ami/) - Information about Linux AWS.
* [Connect to VM](https://docs.aws.amazon.com/pt_br/AWSEC2/latest/UserGuide/putty.html?icmpid=docs_ec2_console) - Using Putty.

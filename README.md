Installation
Creating the database
Create a new MySQL database.
Create a new MySQL username and password.
Assign full privileges to your database username.

|


## AAPanel installation

<pre><code>
#Centos

yum install -y wget && wget -O install.sh http://www.aapanel.com/script/install_6.0_en.sh && bash install.sh aapanel

</code></pre>



<pre><code>
# Ubuntu/Deepin 

wget -O install.sh http://www.aapanel.com/script/install-ubuntu_6.0_en.sh && sudo bash install.sh aapanel
</code></pre>

## Software	Modules
PHP 8.0.x
PHP 8.1.x	BCMath, Ctype, Fileinfo, JSON, Mbstring, OpenSSL, PDO, Tokenizer, XML, GD, cURL
Apache 2+	mod_rewrite
MySQL 5.7.7+
MariaDB 10.3.17+	
OpenAI	gpt-3.5-turbo or gpt-4, DALL·E, Whisper


## Cron job
The software requires a cron job task to be set up on your server in order to automate some of its functions.

Go to Admin Settings Cron job.
Copy the Command field and set up a cron job for it that runs every minute.
Useful resources
https://forum.aapanel.com/d/273-how-to-run-a-php-file-with-cron-job/5



## Type of cron job.

Execution cycle

Every Min

Script content

<pre><code>

"wget -q -O /dev/null http://your.domain/cronjob?key=K0TQlmXNm0vEYGbC3pLDAqSmCDW0bgpT"

.</code></pre>


![Screenshot from 2023-09-26 14-12-09](https://github.com/piktokenn/PHP-AI--Content-GEN/assets/120285373/27979b48-4aa5-42e3-8081-ef4702417643)

![Screenshot from 2023-09-26 14-37-33](https://github.com/piktokenn/PHP-AI--Content-GEN/assets/120285373/773aac96-35b2-4d72-bff1-08391806f08d)

![Screenshot from 2023-09-26 14-10-55](https://github.com/piktokenn/PHP-AI--Content-GEN/assets/120285373/40b08b23-d332-480b-83ef-9a8b986b3bb2)





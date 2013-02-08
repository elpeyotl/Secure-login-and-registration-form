 _____                            _             _          __                     
/  ___|                          | |           (_)        / _|                    
\ `--.  ___  ___ _   _ _ __ ___  | | ___   __ _ _ _ __   | |_ ___  _ __ _ __ ___  
 `--. \/ _ \/ __| | | | '__/ _ \ | |/ _ \ / _` | | '_ \  |  _/ _ \| '__| '_ ` _ \ 
/\__/ /  __/ (__| |_| | | |  __/ | | (_) | (_| | | | | | | || (_) | |  | | | | | |
\____/ \___|\___|\__,_|_|  \___| |_|\___/ \__, |_|_| |_| |_| \___/|_|  |_| |_| |_|
                                           __/ |                                  
                                          |___/                                  



########

This is a showcase of a secure login & registration form. It sends the password in a 512sha encrypted hash to the mysql database. 

########

Features:

- Based on Twitter Bootstrap
- Alerts

#########

Easy to configure:

- Create a database. 
- Two tables are needed. Here's the SQL input:

**************************************
	
	CREATE TABLE `secure_login`.`members` (
  `id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, 
  `username` VARCHAR(30) NOT NULL, 
  `email` VARCHAR(50) NOT NULL, 
  `password` CHAR(128) NOT NULL, 
  `salt` CHAR(128) NOT NULL
) ENGINE = InnoDB;

*******************************************

CREATE TABLE `secure_login`.`login_attempts` (
  `user_id` int(11) NOT NULL,
  `time` VARCHAR(30) NOT NULL 
) ENGINE=InnoDB

********************************************

- Configure your db_connect.php with your database and user settings.

###########

This should work!






Credits goes out to the tutorial on http://www.wikihow.com/Create-a-Secure-Login-Script-in-PHP-and-MySQL. Thank you guys!





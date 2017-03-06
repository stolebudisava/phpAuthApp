# phpAuthApp
Basic authentication php app with use of slim framework and few other frameworks.

How to setup:

1)Install composer
https://getcomposer.org/download/

2)Run **composer install** in console and deploy app to wamp/xampp server.

3)Create MySQL table with query:


```mysql
 	CREATE TABLE `users` (
     `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
     `email` varchar(255) DEFAULT NULL,
     `username` varchar(20) NOT NULL,
     `first_name` varchar(50) DEFAULT NULL,
     `last_name` varchar(50) DEFAULT NULL,
     `password` varchar(255) NOT NULL,
     `active` tinyint(1) DEFAULT '0',
     `active_hash` varchar(255) DEFAULT NULL,
     `recover_hash` varchar(255) DEFAULT NULL,
     `remember_identifier` varchar(255) DEFAULT NULL,
     `remember_token` varchar(255) DEFAULT NULL,
     `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
     `updated_at` timestamp NULL DEFAULT NULL,
     PRIMARY KEY (`id`)
)
```


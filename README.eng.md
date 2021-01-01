Simple guessing game
------------

Application needs to be run by script ./yii serve/index.<br>
It will run on localhost on 8080 port.

PHP version
------------

Project has been created and tested on PHP 7.2.34 (because I was doing it on LAMPP for easy installation this version on Ubuntu 20.10).


Configuration
-------------

### Database

The access to database needs to be configured by file `config/db.php` for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=simple-guessing',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
```

The file is by default configured to accessing the database from LAMPP, it means on localhost, by root user without password. In the database there is 1 table `numbers` with columns `id` (int, NOT NULL, PK, AI) and `randomizedNumber` (int, NOT NULL). 

Powered by Yii2

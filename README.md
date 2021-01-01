Prosta zgadywanka
------------

Program należy uruchomić np. poprzez uruchomienie skryptu ./yii serve/index.<br>
Uruchomi się wtedy na localhoście na porcie 8080.

Wersja PHP
------------

Projekt był tworzony i testowany za pomocą PHP 7.2.34 (dlatego instalowałem LAMPPa, aby na Ubuntu 20.10 mieć łatwy dostęp do nieco starszych binarek).


Konfiguracja
-------------

### Baza danych

Należy skonfigurować dostęp do bazy danych za pomocą pliku `config/db.php` na przykład:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=simple-guessing',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];
```

Plik jest skonfigurowany do domyślnej bazy danych z LAMPP'a, tzn. na localhoście, z rootem bez hasła. Baza do aplikacji nazywa się domyślnie "simple-guessing".
W bazie znajduje się 1 tabela `numbers` z kolumnami `id` (int, NOT NULL, PK, AI) oraz `randomizedNumber` (int, NOT NULL).

Powered by Yii2

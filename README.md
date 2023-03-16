# Assignment for Eco baltia vide

## Prerequesites

* MySql/MariaDB server with an empty database
* Change .env DB section data according to your database
* Run migrations using ```php artisan migrate:refresh --seed```

## Running
* Clone this repository
* Open the console and cd your project root directory ```/eco-baltic-assignment```
* Run composer install or php composer.phar install
* Run ```php artisan key:generate```
* Run ```php artisan migrate:refresh --seed```
* Run ```php artisan serve```

## API
### Top - {number} books for current month
* ```/api/books/monthly-top/{number of books you want to see}``` 
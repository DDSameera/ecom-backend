<h1>Ecomm app Backend</h1>

<h2>Documentation</h2>

## Installation

- Rename ".env.example" to ".env"
- Setup DB Configueration
   ```ruby   
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=xxxxx
   DB_USERNAME=xxxx
   DB_PASSWORD=xxxx
   ```
 - Run ```composer update```
 - Run ```npm install && npm dev``` 
 - Run ```php artisan storage:link```
 - Run ```php artisan serve```
 - Run ```php artisan migrate:fresh```
 - Run ```php artisan key:generate```


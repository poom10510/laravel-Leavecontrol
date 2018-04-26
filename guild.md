 ##command
 
 start
 
 - php artisan migrate:fresh
 - php artisan db:seed --class=DatainfoSeeder
 - php artisan db:seed --class=UserinfoSeeder
 -  php artisan serve
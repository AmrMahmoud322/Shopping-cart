to Run Shopping Cart Project on localhost:

1- Download Shopping Cart ZIP file .
2- open termenal from project folder.
3- Check whether everything has been installed correctly (git , node , npm and composer).
4- Run Mysql on your PC.
5- Change the .env file settings to fit your database settings (such as DB_PORT).
5- Run commands:
	1-	$ composer install
	2-	$ npm install
	3-	$ npm install --no-bin-links
	4-	$ php artisan migrate
	5-	$ php artisan db:seed
	6-	$ php artisan serve
6- Now you can go to your browser and open project link (Project like such as http://localhost:8000).




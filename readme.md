to Run Shopping Cart Project on localhost: <br><br>

1- Download Shopping Cart ZIP file . <br>
2- open termenal from project folder.<br>
3- Check whether everything has been installed correctly (git , node , npm and composer).<br>
4- Run Mysql on your PC.<br>
5- Create a database called "shopping-cart".<br>
6- Change the .env file settings to fit your database settings (such as DB_PORT).<br>
7- Run commands:<br>
	 1-	 $ composer install<br>
	 2-	 $ npm install<br>
	 3-	 $ npm install --no-bin-links<br>
	 4-	 $ php artisan migrate<br>
	 5-	 $ php artisan db:seed<br>
	 6-	 $ php artisan serve<br>
8- Now you can go to your browser and open project link (Project like such as http://localhost:8000).<br>




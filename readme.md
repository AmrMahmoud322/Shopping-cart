to Run Shopping Cart Project on localhost: <br><br>

1- Download Shopping Cart ZIP file 'shopping-cart.zip'. <br>
2- open termenal from project folder.<br>
3- Check whether everything has been installed correctly (git , node , npm and composer).<br>
4- Run Mysql on your PC.<br>
5- Create a database called "shopping-cart".<br>
6- Change the .env file settings to fit your database settings (such as DB_PORT).<br>
<ul>
	7- Run commands:<br>
	 <li>	 $ composer install</li>
	 <li>	 $ npm install</li>
	 <li>	 $ npm install --no-bin-links</li>
	 <li>	 $ php artisan migrate</li>
	 <li>	 $ php artisan db:seed</li>
	 <li>	 $ php artisan serve</li>
</ul>
8- Now you can go to your browser and open project link (Project like such as http://localhost:8000).<br>




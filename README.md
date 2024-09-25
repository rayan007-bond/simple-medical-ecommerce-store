Simple Medical E-Commerce Store
This repository contains the source code for a Simple Medical E-Commerce Store. The project is designed to offer users a seamless experience to browse medical products, add them to their cart, and purchase them after logging in or registering on the site. It is built using HTML, CSS, JavaScript, and PHP for front-end and back-end logic.

Table of Contents
Features
Technologies Used
File Structure
Installation
Database Setup
Usage
Contributing
License
Features
User Authentication: Users can sign up, log in, and manage their accounts.
Add to Cart: Users can browse medical products and add them to their shopping cart.
Product Pages: Information about each product is displayed clearly for users.
Responsive Design: Pages are responsive and work on both mobile and desktop.
Contact Page: Users can submit queries or contact the store for support.
Database-Driven: The backend is powered by PHP, and the data is stored in a MySQL database.
Modular and Easy to Extend: The store can be expanded with more features such as payment integration and product reviews.
Technologies Used
HTML/CSS: Used for the structure and styling of the website.
JavaScript: Handles front-end interactivity.
PHP: Back-end scripting language for handling forms, user login, and registration.
MySQL: Database system for storing user data, product details, and orders.
File Structure
Front-End
index.html / index1.php: The main homepage where users can browse products.
about.html: Page with information about the store.
contact.html: Contact form for user queries or support.
meun.html: Likely a menu or navigation page (possibly a misspelling of "menu").
addtocart.html: Page displaying products added to the cart by the user.
Stylesheets
account.css: Styles for the user account management pages.
contract.css: Styles for the contact page.
index.css: Styles for the homepage and other key pages.
signup.css: Styles for the signup page.
login.css: Styles for the login page.
JavaScript
index.js: Handles homepage interactivity and front-end logic.
login.js: Manages the login form validation and functionality.
PHP Scripts
conection.php: Handles database connections for backend data fetching.
login.php: Processes user login by checking credentials from the database.
signup.php: Processes new user registrations and stores data in the database.
index1.php: A PHP version of the homepage.
index2.php: An alternative homepage layout using PHP.
Assets
icons8-add-to-cart-30.png: Icon used in the add-to-cart button.
Installation
To run this project locally, follow these steps:

1. Clone the repository
bash
Copy code
git clone https://github.com/username/simple-medical-ecommerce-store.git
cd simple-medical-ecommerce-store
2. Set up a local server
You can use XAMPP or WAMP as a local server for PHP files.

Install XAMPP or WAMP.
Place the project folder in the htdocs directory (for XAMPP) or the www directory (for WAMP).
Start Apache and MySQL from your server control panel.
3. Configure the Database
Create a new MySQL database using PHPMyAdmin or your preferred MySQL client.
Import the SQL dump (if provided) or manually create tables for users, products, and orders.
Update the database connection settings in conection.php:
php
Copy code
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "your_database_name";
4. Run the Application
Once everything is set up, you can access the project by visiting http://localhost/simple-medical-ecommerce-store/index1.php in your browser.

Database Setup
To make the store functional, you'll need to create a few database tables.

Users Table
This table will store user credentials and account details.

sql
Copy code
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
);
Products Table
This table will store product details such as name, description, price, and stock.

sql
Copy code
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10, 2) NOT NULL,
  `stock` int(11) NOT NULL,
  PRIMARY KEY (`id`)
);
Orders Table
This table will store user orders and associated details.

sql
Copy code
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`user_id`) REFERENCES `users`(`id`),
  FOREIGN KEY (`product_id`) REFERENCES `products`(`id`)
);
Usage
1. Home Page
Users can visit the homepage, browse products, and add them to the cart.

2. User Registration
New users can sign up using the signup.php page, where their credentials will be securely stored in the MySQL database.

3. Login and Account Management
Returning users can log in through login.php to manage their account and make purchases.

4. Adding to Cart
Users can add items to their cart through addtocart.html and proceed to checkout (which you can implement in future versions).

Contributing
If you want to contribute to this project, feel free to submit a pull request or open an issue for discussion.

License
This project is licensed under the MIT License. See the LICENSE file for more details.

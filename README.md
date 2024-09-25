# Simple Medical E-Commerce Store

This repository contains the source code for a Simple Medical E-Commerce Store. The project is designed to offer users a seamless experience to browse medical products, add them to their cart, and purchase them after logging in or registering on the site. It is built using HTML, CSS, JavaScript, and PHP for front-end and back-end logic.

## Table of Contents

- [Features](#features)
- [Technologies Used](#technologies-used)
- [File Structure](#file-structure)
- [Installation](#installation)
- [Database Setup](#database-setup)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

---

## Features

- **User Authentication**: Users can sign up, log in, and manage their accounts.
- **Add to Cart**: Users can browse medical products and add them to their shopping cart.
- **Product Pages**: Information about each product is displayed clearly for users.
- **Responsive Design**: Pages are responsive and work on both mobile and desktop.
- **Contact Page**: Users can submit queries or contact the store for support.
- **Database-Driven**: The backend is powered by PHP, and the data is stored in a MySQL database.
- **Modular and Easy to Extend**: The store can be expanded with more features such as payment integration and product reviews.

---

## Technologies Used

- **HTML/CSS**: Used for the structure and styling of the website.
- **JavaScript**: Handles front-end interactivity.
- **PHP**: Back-end scripting language for handling forms, user login, and registration.
- **MySQL**: Database system for storing user data, product details, and orders.

---

## File Structure

### Front-End

- `index.html` / `index1.php`: The main homepage where users can browse products.
- `about.html`: Page with information about the store.
- `contact.html`: Contact form for user queries or support.
- `menu.html`: Likely a menu or navigation page (possibly a misspelling of "menu").
- `addtocart.html`: Page displaying products added to the cart by the user.

### Stylesheets

- `account.css`: Styles for the user account management pages.
- `contact.css`: Styles for the contact page.
- `index.css`: Styles for the homepage and other key pages.
- `signup.css`: Styles for the signup page.
- `login.css`: Styles for the login page.

### JavaScript

- `index.js`: Handles homepage interactivity and front-end logic.
- `login.js`: Manages the login form validation and functionality.

### PHP Scripts

- `connection.php`: Handles database connections for backend data fetching.
- `login.php`: Processes user login by checking credentials from the database.
- `signup.php`: Processes new user registrations and stores data in the database.
- `index1.php`: A PHP version of the homepage.
- `index2.php`: An alternative homepage layout using PHP.

### Assets

- `icons8-add-to-cart-30.png`: Icon used in the add-to-cart button.

---

## Installation

To run this project locally, follow these steps:

1. Clone the repository

    ```bash
    git clone https://github.com/username/simple-medical-ecommerce-store.git
    cd simple-medical-ecommerce-store
    ```

2. Set up a Local Server

You can use **XAMPP** or **WAMP** as a local server for PHP files.

### Steps:

1. **Install XAMPP or WAMP.**
2. Place the project folder in the `htdocs` directory (for XAMPP) or the `www` directory (for WAMP).
3. Start **Apache** and **MySQL** from your server control panel.
## Database Setup

1. Create a new MySQL database using **PHPMyAdmin** or your preferred MySQL client.
2. Import the SQL dump (if provided) or manually create tables for users, products, and orders.
3. Update the database connection settings in `connection.php`:

    ```php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "your_database_name";
    ```

## Run the Application

Once everything is set up, you can access the project by visiting:

```url
http://localhost/simple-medical-ecommerce-store/index1.php



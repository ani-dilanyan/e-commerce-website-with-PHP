# E-Commerce Website with PHP

This repository contains a basic e-commerce website developed using PHP and MySQL. It provides functionalities for displaying products, managing a shopping cart, and processing orders.

## 🛍️ Features

- **Product Listings**: Display a list of products fetched from a MySQL database.
- **Shopping Cart**: Add, remove, and update products in the cart.
- **Order Processing**: Submit orders and store order details in the database.
- **User Authentication**: Register and log in users to manage their shopping experience.
- **Admin Panel**: Manage products, view orders, and handle user accounts.

## 🛠️ Technologies Used

- **PHP**: Server-side scripting language.
- **MySQL**: Relational database management system.
- **HTML/CSS**: Front-end structure and styling.
- **JavaScript**: Client-side scripting for interactivity.

## 🚀 Getting Started

### Prerequisites

- PHP 7.x or higher
- MySQL 5.x or higher
- Web server (e.g., Apache)

### Installation

1. **Clone the repository**:

   ```bash
   git clone https://github.com/ani-dilanyan/e-commerce-website-with-PHP.git
2. **Import the database:**

    - Create a new MySQL database (e.g., ecommerce).
    - Import the products.sql file located in the repository to set up the necessary tables and data.

3. **Configure database connection:**

    - Update the database connection settings in the PHP files (e.g., config.php) with your database credentials.

4. **Run the application:**

    - Place the project folder in your web server's root directory (e.g., htdocs for XAMPP).
    - Access the application via http://localhost/e-commerce-website-with-PHP/ in your web browser.
  
## 📁 Project Structure
```pgsql
e-commerce-website-with-PHP/
├── index.php
├── products.php
├── cart.php
├── checkout.php
├── login.php
├── register.php
├── admin/
│   ├── dashboard.php
│   ├── manage_products.php
│   └── manage_orders.php
├── includes/
│   ├── header.php
│   ├── footer.php
│   └── config.php
├── assets/
│   ├── css/
│   └── js/
├── products.sql
└── README.md
```

## 📄 License
This project is licensed under the MIT License. See the LICENSE file for details.

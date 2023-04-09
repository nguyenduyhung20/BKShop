CREATE DATABASE bkshop ;
USE bkshop ;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    first_name VARCHAR(50) DEFAULT NULL,
    last_name VARCHAR(50) DEFAULT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(100) NOT NULL,
    phone VARCHAR(20),
    address VARCHAR(100),
    role ENUM('USER', 'ADMIN') NOT NULL DEFAULT 'USER',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    CONSTRAINT check_role CHECK (role IN ('USER', 'ADMIN'))
);

-- CREATE TABLE categories (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     name VARCHAR(255) NOT NULL,
--     description TEXT
-- );

-- CREATE TABLE products (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     name VARCHAR(255) NOT NULL,
--     description TEXT,
--     price DECIMAL(10, 2) NOT NULL,
--     image_url VARCHAR(255),
--     stock INT NOT NULL,
--     category_id INT,
--     FOREIGN KEY (category_id) REFERENCES categories(id)
-- );

-- CREATE TABLE orders (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     customer_id INT,
--     order_date DATETIME NOT NULL,
--     status ENUM(
--         'Pending',
--         'Processing',
--         'Shipped',
--         'Delivered',
--         'Cancelled'
--     ) NOT NULL,
--     total DECIMAL(10, 2) NOT NULL,
--     FOREIGN KEY (customer_id) REFERENCES customers(id)
-- );

-- CREATE TABLE order_items (
--     id INT AUTO_INCREMENT PRIMARY KEY,
--     order_id INT,
--     product_id INT,
--     quantity INT NOT NULL,
--     price DECIMAL(10, 2) NOT NULL,
--     FOREIGN KEY (order_id) REFERENCES orders(id),
--     FOREIGN KEY (product_id) REFERENCES products(id)
-- );
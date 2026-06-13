CREATE DATABASE the_icon;

USE the_icon;

CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    phone VARCHAR(20) NOT NULL,
    password VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    product_name VARCHAR(100) NOT NULL,
    category VARCHAR(50) NOT NULL,
    description TEXT,
    price DECIMAL(10,2) NOT NULL,
    stock INT DEFAULT 0
);

INSERT INTO products
(product_name,category,description,price,stock)

VALUES

('Embroidered Kurta','Women','Premium embroidered women kurta',300,20),

('Printed Lawn Dress','Women','Stylish printed lawn dress',450,15),

('Embroidered Kurta Deluxe','Women','Luxury embroidered kurta',250,10),

('Classic Kurta','Men','Traditional mens kurta',350,25),

('Elegant Waistcoat','Men','Formal waistcoat for men',500,12),

('Classic Kurta Premium','Men','Premium quality kurta',600,8),

('Cute T-Shirt','Kids','Comfortable kids t-shirt',105,30),

('Stylish Jeans','Kids','Fashionable kids jeans',260,18),

('Cute T-Shirt Printed','Kids','Printed kids t-shirt',107,22),

('Winter Scarf','Accessories','Warm winter scarf',150,40),

('Leather Bag','Accessories','Premium leather bag',700,10),

('Winter Scarf Premium','Accessories','Premium winter scarf',155,15),

('Leather Bag Deluxe','Accessories','Luxury leather bag',708,7);

CREATE TABLE cart (
    cart_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT DEFAULT 1,

    FOREIGN KEY (user_id)
    REFERENCES users(user_id)
    ON DELETE CASCADE
    ON UPDATE CASCADE,

    FOREIGN KEY (product_id)
    REFERENCES products(product_id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

CREATE TABLE orders (
    order_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    order_date DATE DEFAULT (CURRENT_DATE),
    total_amount DECIMAL(10,2) NOT NULL,

    status ENUM(
        'Pending',
        'Confirmed',
        'Delivered'
    ) DEFAULT 'Pending',

    FOREIGN KEY (user_id)
    REFERENCES users(user_id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

CREATE TABLE order_items (
    order_item_id INT AUTO_INCREMENT PRIMARY KEY,
    order_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    price DECIMAL(10,2) NOT NULL,

    FOREIGN KEY (order_id)
    REFERENCES orders(order_id)
    ON DELETE CASCADE
    ON UPDATE CASCADE,

    FOREIGN KEY (product_id)
    REFERENCES products(product_id)
    ON DELETE CASCADE
    ON UPDATE CASCADE
);

CREATE TABLE contact_messages (
    message_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE VIEW customer_orders AS
SELECT
    u.user_id,
    u.name,
    o.order_id,
    o.total_amount,
    o.status
FROM users u
INNER JOIN orders o
ON u.user_id = o.user_id;

CREATE INDEX idx_user_email
ON users(email);

CREATE INDEX idx_product_name
ON products(product_name);



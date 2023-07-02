SHOW DATABASES ;

USE belajar_mysql;

SHOW TABLES;

CREATE TABLE customers
(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(100) NOT NULL UNIQUE ,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100)
);

SELECT * FROM wishlist JOIN products ON (wishlist.id_product = products.id);
SELECT products.id, products.name, wishlist.description FROM wishlist JOIN products ON (wishlist.id_product = products.id);

DESCRIBE customers;
DESCRIBE wishlist;

SHOW CREATE TABLE wishlist;

ALTER TABLE wishlist
ADD COLUMN id_customer INT;

ALTER TABLE wishlist
ADD CONSTRAINT fk_wishlist_customer
FOREIGN KEY (id_customer) REFERENCES customers (id);

INSERT INTO customers (email, first_name, last_name)
VALUES ('muhammadsatrya12@gmail.com', 'Satrya', 'Putra'),
       ('eko@gmail.com', 'Eko', 'Kurniawan');

SELECT * FROM customers;
SELECT * FROM wishlist;

UPDATE wishlist
SET id_customer = 1
WHERE id = 1;

SELECT customers.email, products.id, products.name, wishlist.description
FROM wishlist
JOIN products ON (wishlist.id_product = products.id)
JOIN customers ON (wishlist.id_customer = customers.id);

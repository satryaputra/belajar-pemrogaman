USE belajar_mysql;
SHOW TABLES;

CREATE TABLE categories
(
    id INT(10) NOT NULL,
    name VARCHAR(100) NOT NULL,
    PRIMARY KEY (id)
);

ALTER TABLE products
   ADD CONSTRAINT fk_product_category
        FOREIGN KEY (id_categories) REFERENCES categories (id);

DESC products;
SHOW CREATE TABLE products;

SELECT * FROM products;

INSERT INTO categories (id, name)
VALUES ('C0001', 'Makanan'),
       ('C0002', 'Minuman'),
       ('C0003', 'Lain-lain');

UPDATE products
SET id_categories = 'C0001' WHERE name LIKE '%mie%';

UPDATE products
SET id_categories = 'C0003' WHERE name = 'Krupuk Kulit';

SELECT products.id, products.name, c.name
FROM products
JOIN categories c on products.id_categories = c.id;
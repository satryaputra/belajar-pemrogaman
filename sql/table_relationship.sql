USE belajar_mysql;

SHOW TABLES ;

CREATE TABLE wishlist
(
    id INT NOT NULL AUTO_INCREMENT,
    id_product VARCHAR(10) NOT NULL,
    description TEXT,
    PRIMARY KEY (id),
    CONSTRAINT fk_wishlist_product
        FOREIGN KEY (id_product) REFERENCES products (id)
);

SHOW CREATE TABLE wishlist;

DESCRIBE wishlist;

ALTER TABLE wishlist
    DROP CONSTRAINT fk_wishlist_product;

ALTER TABLE wishlist
    ADD CONSTRAINT fk_wishlist_product
        FOREIGN KEY (id_product) REFERENCES products (id);

INSERT INTO wishlist (id_product, description) values ('P0001', 'Makanan Kesukaan');

SELECT * FROM wishlist;
TRUNCATE wishlist;

ALTER TABLE wishlist MODIFY `id_product` varchar(10) NOT NULL UNIQUE ;




SHOW DATABASES ;
USE belajar_mysql;
SHOW TABLES;

CREATE TABLE wallet
(
    id INT NOT NULL AUTO_INCREMENT,
    id_customer INT NOT NULL,
    balance INT NOT NULL DEFAULT 0,
    PRIMARY KEY (id),
    UNIQUE KEY id_customer_unique (id_customer),
    CONSTRAINT fk_wallet_customer
        FOREIGN KEY (id_customer) REFERENCES customers (id)
);

select * from customers;
select * from wallet;

insert into wallet(id_customer) values (1), (2);

select c.email, wallet.balance
from wallet
join customers c on wallet.id_customer = c.id;
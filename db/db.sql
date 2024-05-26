CREATE TABLE IF NOT EXISTS parks (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    address CHAR(100) NOT NULL
) ENGINE = InnoDB CHARACTER SET utf8;

CREATE TABLE IF NOT EXISTS cars (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    park_id INT UNSIGNED DEFAULT NULL,
    model VARCHAR(100) NOT NULL,
    price FLOAT NOT NULL,
    FOREIGN KEY (park_id) REFERENCES parks (id)
) ENGINE = InnoDB CHARACTER SET utf8;

CREATE TABLE IF NOT EXISTS drivers (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    car_id INT UNSIGNED NOT NULL,
    name VARCHAR(100) NOT NULL,
    phone VARCHAR(100),
    FOREIGN KEY (car_id) REFERENCES cars (id)
) ENGINE = InnoDB CHARACTER SET utf8;

CREATE TABLE IF NOT EXISTS customers (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    phone VARCHAR(100)
) ENGINE = InnoDB CHARACTER SET utf8;

CREATE TABLE IF NOT EXISTS orders (
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    driver_id INT UNSIGNED NOT NULL,
    customer_id INT UNSIGNED NOT NULL,
    start TEXT NOT NULL,
    finish TEXT NOT NULL,
    total FLOAT NOT NULL,
    FOREIGN KEY (driver_id) REFERENCES drivers (id),
    FOREIGN KEY (customer_id) REFERENCES customers (id)
) ENGINE = InnoDB CHARACTER SET utf8;

CREATE TABLE IF NOT EXISTS table_for_delete(
    id INT UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    discription VARCHAR(300)
) ENGINE = InnoDB CHARACTER SET utf8;

ALTER TABLE table_for_delete ADD something TEXT;

ALTER TABLE table_for_delete DROP discription;

DROP TABLE table_for_delete;

INSERT INTO
    parks (address)
VALUES
    ('address 1'),
    ('address 2'),
    ('address 3');

INSERT INTO
    cars (park_id, model, price)
VALUES
    (1, 'Toyota Prius', 20000),
    (2, 'Honda Civic', 22000),
    (3, 'Ford Focus', 18000);

INSERT INTO
    drivers (car_id, name, phone)
VALUES
    (1, 'Bob', '380953347625'),
    (2, 'Bodjer', '380957476546'),
    (3, 'Garlic Farmer', '380953342625');

INSERT INTO
    customers (name, phone)
VALUES
    ('Shiro', '380953347625'),
    ('Nadeko', '380957476546'),
    ('Neko', '380953342625');

INSERT INTO
    orders (driver_id, customer_id, start, finish, total)
VALUES
    (1, 1, "Point A", "Point B", 40.5),
    (2, 2, "Point C", "Point D", 45.2),
    (3, 3, "Point E", "Point F", 52.75);

ALTER TABLE orders MODIFY start VARCHAR(100) NOT NULL;

ALTER TABLE orders MODIFY finish VARCHAR(100) NOT NULL;

SELECT * FROM customers;

SELECT * FROM orders WHERE customer_id = 3 AND driver_id = 3;

SELECT * FROM cars WHERE price > 20000;

UPDATE parks SET address = 'address ?' WHERE id = 2;

DELETE FROM ordes WHERE driver_id = 3;

SELECT
    orders.id,
    orders.start,
    orders.finish,
    drivers.id AS driver_id,
    drivers.name AS drivers_name,
    customers.id AS customer_id,
    customers.name AS customer_name,
    orders.total
FROM
    orders
    JOIN drivers ON orders.driver_id = drivers.id
    JOIN customers ON orders.customer_id = customers.id
WHERE
    customer_id = 1;

SELECT 
    drivers.id,
    drivers.name,
    customers.model AS car_model,
    parks.address AS park_adress
FROM
    drivers
    JOIN cars ON cars.id = drivers.car_id
    JOIN parks ON parks.id = cars.park_id
WHERE
    drivers.phone = '380953347625';
CREATE DATABASE homeluxedesign;

USE homeluxedesign;

CREATE TABLE users {
    login VARCHAR(255),
    password VARCHAR(255),
    PRIMARY KEY login,
};

INSERT INTO users VALUES ('admin', 'admin');
INSERT INTO users VALUES ('user', 'password');



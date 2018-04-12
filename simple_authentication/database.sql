CREATE DATABASE test;
use test;

CREATE TABLE `users` (
    `id` int(11) NOT NULL auto_increment,
    `email` varchar(100) NOT NULL,
    `password` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)

);
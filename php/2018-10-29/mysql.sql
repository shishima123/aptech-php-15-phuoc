-- create db
CREATE database phuoc_users;
use phuoc_users;

-- CREATE table
CREATE TABLE users (
    Id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    LastName VARCHAR(255),
    FirstName VARCHAR(255),
    Email VARCHAR(255) NOT NULL,
    Password VARCHAR(255) NOT NULL
);

-- them du lieu
INSERT INTO users (LastName,FirstName,Email,Password)
VALUES
( 'Phuoc', 'Nguyen', 'phuocnguyen@gmail.com','32156'),
( 'John', 'Cenna', 'cenna.john@hotmail.com','ad156'),
( 'Henry', 'Tran', 'tranhe@resolutioninc.com','3345df6'),
('Christiaan', 'Hunter', 'ch.pageworth@pageworth.com','sdf234'),
( 'Vicky', 'Nguyen', 'vicky06@gmail.com','asd32156');
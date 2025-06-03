CREATE DATABASE hotel_db;
USE hotel_db;

CREATE TABLE roles (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(20) NOT NULL
);

INSERT INTO roles (name) VALUES ('Administrator'), ('Hotel Manager'), ('Receptionist'), ('Customer'), ('Supplier');

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  email VARCHAR(100) UNIQUE NOT NULL,
  password VARCHAR(100) NOT NULL,
  role_id INT NOT NULL,
  FOREIGN KEY (role_id) REFERENCES roles(id)
);

CREATE TABLE rooms (
  id INT AUTO_INCREMENT PRIMARY KEY,
  room_number INT NOT NULL,
  room_type VARCHAR(20) NOT NULL,
  room_price DECIMAL(10, 2) NOT NULL,
  is_available BOOLEAN NOT NULL DEFAULT TRUE
);

CREATE TABLE bookings (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT NOT NULL,
  room_id INT NOT NULL,
  booking_date DATE NOT NULL,
  check_in_date DATE NOT NULL,
  check_out_date DATE NOT NULL,
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (room_id) REFERENCES rooms(id)
);

CREATE TABLE supplies (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  quantity INT NOT NULL,
  supplier_id INT NOT NULL,
  FOREIGN KEY (supplier_id) REFERENCES users(id)
);

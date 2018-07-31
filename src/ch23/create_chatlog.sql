CREATE DATABASE chat;
USE chat;
CREATE TABLE chatlog (
  id INT(10) AUTO_INCREMENT PRIMARY KEY,
  message TEXT,
  sent_by VARCHAR(50),
  date_created INT(11)
);
CREATE DATABASE  testProject;
USE testProject;
CREATE TABLE articles (
  `id` INT,
  `name` text DEFAULT NULL,
  `requirements` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `ecpc` text DEFAULT NULL,
  `click_url` text DEFAULT NULL,
  PRIMARY KEY (id)
);

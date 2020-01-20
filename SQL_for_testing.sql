-- A script to initialize the form database. Can be run directly or copied to execute.

CREATE DATABASE codeigniter_test;
USE codeigniter_test;

CREATE TABLE aspirasi (
  id int(11) NOT NULL,
  nama varchar(100) NOT NULL,
  nrp varchar(9) NOT NULL,
  aspirasi text NOT NULL,
  file_aspirasi char(36) NOT NULL
);
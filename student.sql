

CREATE DATABASE student_db;
USE student_db;

CREATE TABLE students (
    id INT PRIMARY KEY,
    name VARCHAR(100),
    age INT,
    cgpa DECIMAL(3, 2)
);

INSERT INTO students (name,id, age, cgpa) VALUES
('Aliaa Omar',2206187, 20, 4.0),
('Nada Magdy', 227, 19, 4.0),
('Habiba Mohamed', 229, 19, 4.0);


SELECT * FROM students;





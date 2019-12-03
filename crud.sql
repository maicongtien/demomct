CREATE TABLE users (
  userId serial PRIMARY KEY,
  employeename varchar(100) NOT NULL,
  designation varchar(100) NOT NULL,
  mobilenumber varchar(250) NOT NULL,
  salary NOT NULL
) 


  

INSERT INTO users (employeename, designation, mobilenumber, salary) VALUES
('Vetrivel pandian', 'Admin', '8940379384', 20000),
('Vetri Selvan', 'Team Lead', '9751513231', 15000),
('Jeya Bashkaran', 'Manager', '9600418806', 17000),
('Jeya Krishnan', 'Founder', '9865649423', 30000);





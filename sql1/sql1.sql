create table addresses( id INT AUTO_INCREMENT, name VARCHAR(32) , address VARCHAR(50), phone VARCHAR(32), email VARCHAR(50), PRIMARY KEY(id) )

INSERT INTO addresses (name , address , phone,email)
         VALUES ('工科 太郎','八王子','012-345-6789','tarou@example.com');


INSERT INTO addresses (name , address , phone,email)
         VALUES ('蒲田 花子','蒲田','987-654-3210','hanako@example.com');

SELECT * from addresses

SELECT * FROM addresses
where address='八王子'

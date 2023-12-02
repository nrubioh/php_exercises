CREATE DATABASE database_ex1;
/*
--CREATE DATABASE--
1. Get-Content 1.create-database.sql | mysql -u root -p
or inside 
--mysql -u root -p (to log)

2. CREATE DATABASE database_name;  
3. SHOW DATABASES; (to see) 
4. DROP DATABASE database_name;
5. exit (to logout)

--USER--
1.to create user: CREATE USER 'username'@'localhost' IDENTIFIED BY 'password';
2.to delete user: DROP USER 'username'@'localhost';
3.to give privileges: GRANT ALL PRIVILEGES ON *.* TO 'username'@'localhost';
    3.1 if you want give privileges in all tables = *.*
    3.2 if you want give specific table privileges = database_name.table_name
4.to see privileges: SHOW GRANTS FOR 'nombre_de_usuario'@'localhost';

5. go to workbench,etc and enter with you user.
*/

Setting environment for using XAMPP for Windows.
abhis@TUFF c:\xampp
# mysql -u root --password=PHPPass@123
Welcome to the MariaDB monitor.  Commands end with ; or \g.
Your MariaDB connection id is 8
Server version: 10.4.32-MariaDB mariadb.org binary distribution

Copyright (c) 2000, 2018, Oracle, MariaDB Corporation Ab and others.

Type 'help;' or '\h' for help. Type '\c' to clear the current input statement.

MariaDB [(none)]> CREATE DATABASE widget_corp;
Query OK, 1 row affected (0.025 sec)

MariaDB [(none)]> USE widget_corp;
Database changed
MariaDB [widget_corp]> CREATE TABLE subjects (
    -> id int(11) NOT NULL auto_increment,
    -> menu_name varchar(30) NOT NULL,
    -> position int(3) NOT NULL,
    -> visible tinyint(1) NOT NULL,
    -> PRIMARY KEY (id)
    -> );
Query OK, 0 rows affected (0.051 sec)

MariaDB [widget_corp]> INSERT INTO subjects (menu_name, position, visible)
    -> VALUES ('About Widget Corp', 1, 1);
Query OK, 1 row affected (0.186 sec)

MariaDB [widget_corp]> SELECT * FROM subjects;
+----+-------------------+----------+---------+
| id | menu_name         | position | visible |
+----+-------------------+----------+---------+
|  1 | About Widget Corp |        1 |       1 |
+----+-------------------+----------+---------+
1 row in set (0.004 sec)

MariaDB [widget_corp]> INSERT INTO subjects (menu_name, position, visible) VALUES ('PRODUCTS', 2, 1);
Query OK, 1 row affected (0.008 sec)

MariaDB [widget_corp]> SELECT * FROM subjects;
+----+-------------------+----------+---------+
| id | menu_name         | position | visible |
+----+-------------------+----------+---------+
|  1 | About Widget Corp |        1 |       1 |
|  2 | PRODUCTS          |        2 |       1 |
+----+-------------------+----------+---------+
2 rows in set (0.001 sec)

MariaDB [widget_corp]> INSERT INTO subjects (menu_name, position, visible) VALUES ('SERVICES', 3, 1);
Query OK, 1 row affected (0.007 sec)

MariaDB [widget_corp]> SELECT * FROM subjects;
+----+-------------------+----------+---------+
| id | menu_name         | position | visible |
+----+-------------------+----------+---------+
|  1 | About Widget Corp |        1 |       1 |
|  2 | PRODUCTS          |        2 |       1 |
|  3 | SERVICES          |        3 |       1 |
+----+-------------------+----------+---------+
3 rows in set (0.001 sec)

MariaDB [widget_corp]> INSERT INTO subjects (menu_name, position, visible) VALUES ('MISC', 4, 0);
Query OK, 1 row affected (0.003 sec)

MariaDB [widget_corp]> SELECT * FROM subjects;
+----+-------------------+----------+---------+
| id | menu_name         | position | visible |
+----+-------------------+----------+---------+
|  1 | About Widget Corp |        1 |       1 |
|  2 | PRODUCTS          |        2 |       1 |
|  3 | SERVICES          |        3 |       1 |
|  4 | MISC              |        4 |       0 |
+----+-------------------+----------+---------+
4 rows in set (0.001 sec)

MariaDB [widget_corp]> SELECT * FROM subjects
    -> WHERE visible = 1
    -> ORDER BY position ASC;
+----+-------------------+----------+---------+
| id | menu_name         | position | visible |
+----+-------------------+----------+---------+
|  1 | About Widget Corp |        1 |       1 |
|  2 | PRODUCTS          |        2 |       1 |
|  3 | SERVICES          |        3 |       1 |
+----+-------------------+----------+---------+
3 rows in set (0.006 sec)

MariaDB [widget_corp]> ORDER BY position DESC;
ERROR 1064 (42000): You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'ORDER BY position DESC' at line 1
MariaDB [widget_corp]> SELECT * FROM subjects;
+----+-------------------+----------+---------+
| id | menu_name         | position | visible |
+----+-------------------+----------+---------+
|  1 | About Widget Corp |        1 |       1 |
|  2 | PRODUCTS          |        2 |       1 |
|  3 | SERVICES          |        3 |       1 |
|  4 | MISC              |        4 |       0 |
+----+-------------------+----------+---------+
4 rows in set (0.001 sec)

MariaDB [widget_corp]> SELECT * FROM subjects
    -> WHERE visible = 1
    -> ORDER BY position DESC;
+----+-------------------+----------+---------+
| id | menu_name         | position | visible |
+----+-------------------+----------+---------+
|  3 | SERVICES          |        3 |       1 |
|  2 | PRODUCTS          |        2 |       1 |
|  1 | About Widget Corp |        1 |       1 |
+----+-------------------+----------+---------+
3 rows in set (0.001 sec)

MariaDB [widget_corp]> SELECT id, menu_name FROM subjects WHERE visible = 1 ORDER by position DESC;
+----+-------------------+
| id | menu_name         |
+----+-------------------+
|  3 | SERVICES          |
|  2 | PRODUCTS          |
|  1 | About Widget Corp |
+----+-------------------+
3 rows in set (0.001 sec)

MariaDB [widget_corp]> UPDATE subjects
    -> SET visible = 1
    -> WHERE id=4;
Query OK, 1 row affected (0.008 sec)
Rows matched: 1  Changed: 1  Warnings: 0

MariaDB [widget_corp]> SELECT * FROM subjects;
+----+-------------------+----------+---------+
| id | menu_name         | position | visible |
+----+-------------------+----------+---------+
|  1 | About Widget Corp |        1 |       1 |
|  2 | PRODUCTS          |        2 |       1 |
|  3 | SERVICES          |        3 |       1 |
|  4 | MISC              |        4 |       1 |
+----+-------------------+----------+---------+
4 rows in set (0.000 sec)

MariaDB [widget_corp]> DELETE FROM subjects WHERE id=4;
Query OK, 1 row affected (0.010 sec)

MariaDB [widget_corp]> SELECT * FROM subjects;
+----+-------------------+----------+---------+
| id | menu_name         | position | visible |
+----+-------------------+----------+---------+
|  1 | About Widget Corp |        1 |       1 |
|  2 | PRODUCTS          |        2 |       1 |
|  3 | SERVICES          |        3 |       1 |
+----+-------------------+----------+---------+
3 rows in set (0.001 sec)

MariaDB [widget_corp]> quit
Bye

abhis@TUFF c:\xampp

# Prison Management System

A management system for indian prisons made using HTML,CSS,Javascript with a PHP MySQL backend that runson wamp server

# Requirements: 

WampServer

# Saving the project:

Save the project in the www folder of the wamp folder in your drive, i.e.,
C:/wamp/www

# Database Structure: 

You can view and create the database in phpmyadmin.
This project connects to a database titled 'project' with the following tables:

1. table name: prisoner

id, int, primary key
name, varchar(30)
age, int
sex, varchar(1)
offence,varchar(30)
sentence, varchar(30),
prison, varchar(30),
release,date

2. tablename: users

username,varchar(10),primary key
password, varchar(10)
name, varchar(30)
number, bigint(20)

3. tablename:visitor

id,int, primary key
name1,varchar(30)
date1,date
name2,varchar(30)
date2,date
name3,varchar(30)
date3,date
name4,varchar(30)
date4,date

#Running the project

Run the project in the browser with the url: localhost/prison-management/Home.html
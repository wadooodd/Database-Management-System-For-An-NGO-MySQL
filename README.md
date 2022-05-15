# Database-Management-System-For-An-NGO
1.Created NGO's database using MySQL's DDL(Data Definition Language) commands.
2.Maintained the database using DML(Data Manipulation Language) commands.
3.Created the frontend for handling the database using html and Bootstrap.
4.Implemented the PHP code for connecting the MySQL database with the frontend.

# IMPORTANT:
  Visit Report folder above for detailed project description.

# Table’s Description:
1.Subject
   This table describes the subjects of each through each subject
2.Course
   This tables the courses that are offered by the institution, it is linked to subject and student 
3.Student
  This table contains the information of every student and is linked to various entities like caretaker, course, class
4.Registers
This is a bridge entity between course and student it defines how a student will interact with course, It also has an additional attribute course status which tells us whether has completed or not completed his or her course 
5.Parent
 This is a child attribute of caretaker and spawns further child entities mother and father
6.Caretaker
 This defines information in regards to the caretaker of a particular student, it also spawns 2 further child entities which are parent and guardian
7.Fee
It a entity which defines the amount of fee that a caretaker of a student should pay
8.Father
It is a child entity of parent
9.Mother
It is a child entity of parent
10.History
It is an entity that keeps track of the history of a particular student, each history id represent a unit of time, it also has a sessionid which keeps track of the session of a particular student
11.Class
It is an entity which tells us about the class that a student belongs to and tells the display information regarding a class like section, class name and subject.




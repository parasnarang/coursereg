
Create table students (
id int AUTO_INCREMENT Primary Key ,
regno varchar(15) not null UNIQUE,
fname varchar(30) not null,
lname varchar(30) not null,
gender varchar(1),
dob date,
address varchar(200),
department_id int,
yearenrolled varchar(15) not null,
cgpa float (3,2),
age int,
email varchar(30),
foreign key (department_id) references departments(id)
);

Create table logins (
id int not null AUTO_INCREMENT Primary Key,
username varchar(20) not null UNIQUE,
password varchar(20) not null,
type varchar(1) not null,
studfacid int
);

Create table instructors(
id int AUTO_INCREMENT Primary Key ,
fname varchar(30) not null,
lname varchar(30) not null,
gender varchar(1) not null,
dob date not null,
age int,
roomno varchar(30) not null,
yearEnrolled varchar(15) not null
);

Create table departments (
id int AUTO_INCREMENT primary key,
dname varchar(50) not null
);

Create table courses (
id int AUTO_INCREMENT primary key,
cname varchar(50),
department_id int,
credits int not null,
foreign key (department_id) references departments(id)
);

Create table prerequisites_courses (
course_id int,
prereq_id int,
foreign key (course_id) references courses(id),
foreign key (prereq_id) references courses(id)
);

Create table students_courses (
student_id int,
course_id varchar(10),
term varchar(15),
grade varchar(1) default null ,
foreign key (student_id) references students(id),
foreign key (course_id) references courses(id)
);

Create table departments_instructors (
instructor_id int,
department_id int,
foreign key (instructor_id) references instructors(id),
foreign key (department_id) references departments(id)
);

Create table instructors_courses (
instructor_id int,
course_id int,
term varchar(15) not null,
foreign key (instructor_id) references instructors(id),
foreign key (course_id) references courses(id)
);

Create table classrooms (
id int AUTO_INCREMENT primary key,
location varchar(30) not null,
maxCapacity int not null,
seatsLeft int not null
);

Create table classrooms_courses (
classroom_id int not null,
course_id int not null,
slot varchar(10) not null,
term varchar(15) not null,
foreign key (classroom_id) references classrooms(id),
foreign key (course_id) references courses(id)
);


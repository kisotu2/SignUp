create database upload_image

create table images{
    id int (100) not null auto_increment PRIMARY KEY,
    name varchar (50) not null,
    file_name varchar(255) not null
};

insert into images (`name`,`file_name`)
values('samwel Kisotu','/Applications/XAMPP/xamppfiles/htdocs/SignUp/image/forest_gump.jpg');
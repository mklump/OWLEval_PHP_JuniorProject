
<?php

include("../global.dat");
function main($user_type, $conn)
{
  $error_str=create_DB();
  $error_str=populate();
  return $error_str;
}

function create_DB()
{
  $result=mysql_query("drop table eval_questions");
if(!$result) {echo mysql_error() . "<bR>" ;}
  $result=mysql_query("drop table demo_results");
if(!$result) {echo mysql_error() . "<bR>" ;}
  $result=mysql_query("drop table eval_results");
if(!$result) {echo mysql_error() . "<bR>" ;}
  $result=mysql_query("drop table student_keys");
if(!$result) {echo mysql_error() . "<bR>" ;}
  $result=mysql_query("drop table users");
if(!$result) {echo mysql_error() . "<bR>" ;}
  $result=mysql_query("drop table access_log");
if(!$result) {echo mysql_error() . "<bR>" ;}
  $result=mysql_query("drop table access_control");
if(!$result) {echo mysql_error() . "<bR>" ;}

  $result=mysql_query("create table student_keys (e_key varchar(25) primary key, CRN int not null, creator varchar(50) not null, create_time int not null, valid_begin int not null, valid_end int not null)");
if(!$result) {echo mysql_error() . "<bR>" ;}
  $result=mysql_query("create table eval_questions(question_ID int auto_increment primary key, question varchar(255) not null, sequence float not null, type varchar(10) not null, current bit default 1, CRN int not null)");
if(!$result) {echo mysql_error() . "<bR>" ;}
  $result=mysql_query("create table users (user_name varchar(50) primary key, password varchar(25) not null, privilege varchar(10))");
if(!$result) {echo mysql_error() . "<bR>" ;}
  $result=mysql_query("create table demo_results(ID int auto_increment primary key, CRN int not null, course_standing varchar(25) not null, expect_grade varchar(5) not null, course_required varchar(100) not null, time_stamp int not null, course_inmajor varchar(100) not null, foreign key (CRN) references student_keys)");
if(!$result) {echo mysql_error() . "<bR>" ;}
  $result=mysql_query("create table eval_results(ID int auto_increment primary key, CRN int not null, question_ID int not null, response blob, time_stamp int not null, foreign key (CRN) references student_keys, foreign key (question_ID) references eval_questions)");
if(!$result) {echo mysql_error() . "<bR>" ;}
  $result=mysql_query("create table access_control (ID int auto_increment primary key, CRN int not null, user_name varchar(50), foreign key (user_name) references users)");
if(!$result) {echo mysql_error() . "<bR>" ;}
  $result=mysql_query("create table access_log (ID int auto_increment primary key, user_name varchar(50) not null, IP_address varchar(17) not null, time_stamp int not null, foreign key (user_name) references users)");
if(!$result) {echo mysql_error() . "<bR>" ;}
  return "";
}

function populate()
{

$result=mysql_query("insert into users values ('gdiviney','guest123','adfac')");
if(!$result) {echo mysql_error() . "<bR>" ;}
$result=mysql_query("insert into users values ('groberts','guest123','adfac')");
if(!$result) {echo mysql_error() . "<bR>" ;}
$result=mysql_query("insert into users values ('mculbertson','guest123','adfac')");
if(!$result) {echo mysql_error() . "<bR>" ;}
$result=mysql_query("insert into users values ('mklump','guest123','adfac')");
if(!$result) {echo mysql_error() . "<bR>" ;}
$result=mysql_query("insert into users values ('lbell','guest123','adfac')");
if(!$result) {echo mysql_error() . "<bR>" ;}
$result=mysql_query("insert into users values ('guest','guest','adfac')");
if(!$result) {echo mysql_error() . "<bR>" ;}

$result=mysql_query("insert into access_control (CRN, user_name) values (12345, 'gdiviney')");
if(!$result) {echo mysql_error() . "<bR>" ;}
$result=mysql_query("insert into access_control (CRN, user_name) values (12345, 'mklump')");
if(!$result) {echo mysql_error() . "<bR>" ;}
$result=mysql_query("insert into access_control (CRN, user_name) values (12345, 'mculbertson')");
if(!$result) {echo mysql_error() . "<bR>" ;}
$result=mysql_query("insert into access_control (CRN, user_name) values (12345, 'lbell')");
if(!$result) {echo mysql_error() . "<bR>" ;}
$result=mysql_query("insert into access_control (CRN, user_name) values (12345, 'groberts')");
if(!$result) {echo mysql_error() . "<bR>" ;}
$result=mysql_query("insert into access_control (CRN, user_name) values (12345, 'guest')");
if(!$result) {echo mysql_error() . "<bR>" ;}

$result=mysql_query("insert into eval_questions (question, sequence, type, CRN, current) values ('The quality of instruction in this course met your expectations',0.0,'multi',0,1)");
if(!$result) {echo mysql_error() . "<bR>" ;}
$result=mysql_query("insert into eval_questions (question, sequence, type, CRN, current) values ('The course was well organized',1.0,'multi',0,1)");
if(!$result) {echo mysql_error() . "<bR>" ;}
$result=mysql_query("insert into eval_questions (question, sequence, type, CRN, current) values ('Class time was well spent',2.0,'multi',0,1)");
if(!$result) {echo mysql_error() . "<bR>" ;}
$result=mysql_query("insert into eval_questions (question, sequence, type, CRN, current) values ('The instructor was helpful when students had difficulty',3.0,'multi',0,1)");
if(!$result) {echo mysql_error() . "<bR>" ;}
$result=mysql_query("insert into eval_questions (question, sequence, type, CRN, current) values ('The workload for this course was heavy in comaprison with other courses',4.0,'multi',0,1)");
if(!$result) {echo mysql_error() . "<bR>" ;}
$result=mysql_query("insert into eval_questions (question, sequence, type, CRN, current) values ('The instructor told students how they would be evaluated in this course',5.0,'multi',0,1)");
if(!$result) {echo mysql_error() . "<bR>" ;}
$result=mysql_query("insert into eval_questions (question, sequence, type, CRN, current) values ('The instructor assigned grades fairly and impartially',6.0,'multi',0,1)");
if(!$result) {echo mysql_error() . "<bR>" ;}
$result=mysql_query("insert into eval_questions (question, sequence, type, CRN, current) values ('What did you like about this course',7.0,'narra',0,1)");
if(!$result) {echo mysql_error() . "<bR>" ;}
$result=mysql_query("insert into eval_questions (question, sequence, type, CRN, current) values ('What did you not like about this course',8.0,'narra',0,1)");
if(!$result) {echo mysql_error() . "<bR>" ;}
$result=mysql_query("insert into eval_questions (question, sequence, type, CRN, current) values ('Additional comments that may be beneficial to this instructor',9.0,'narra',0,1)");
if(!$result) {echo mysql_error() . "<bR>" ;}

$result=mysql_query("insert into eval_questions (question, sequence, type, CRN, current) values ('Please comment about my pants',0.0,'narra',12345,1)");
if(!$result) {echo mysql_error() . "<bR>" ;}

$time=time();
$timeend=time()+4500000; 
mysql_query("insert into student_keys (creator, CRN, e_key, create_time, valid_begin, valid_end) values ('gdiviney',12345,'apple',$time,$time,$timeend)");
  return "";
}
?>
<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head>
       <title>Create Evaluation</title>
</head>
<body>
Create Evaluation  <br><br>

This is where you will create an evaluation for a course. <br>
The following information was entered. <br>

<! http://www.culbertson.info/blues/ >

<TABLE>
<TR><TH align=right>Instructor Name<TD><?php echo $_POST['name']; ?>
<TR><TH align=right>CRN<TD><?php echo $_POST['CRN']; ?>
<TR><TH align=right>Number of students in the course<TD><?php echo $_POST['number']; ?>
</TABLE>

</body>
</html>

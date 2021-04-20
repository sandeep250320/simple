<html>
<head>


<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
.container{
	
	color:black;
}
.a{
	height:85%;
	width:60%;
	background-color:skyblue;
	border-radius:80px;
}
</style>
</head>
Go to <a href="data.php">Job Post page</a>
<body class="container" style="background-color:orange">

<center><h1 style="background-color:red ; color:white;padding-top:20px;height:80px;width:90%; border-radius:50px;">JOB POST </h1><hr/>
<form  class="a" action="index.php" method="post"><h3>
Job Title<br/>
<input type="text" name="title" placeholder="Enter Job Title" size="60" required="true" autocomplete="off"/>
 <br/><br/>
KEY SKILLS<br/>
<input type="text" name="keyskills" placeholder="keyskills" size="60"required="true" autocomplete="off"/>
<br/><br/>
Location<br/>
<input type="text" name="location" placeholder="Job location" size="60" required="true"autocomplete="off"/>
<br/><br/>
Job Description<br/>
<input type="text" name="jobdescription" placeholder="Job description"size="60" required="true" autocomplete="off"/>
<br/><br/>
Work Experience<br/>
<input type="text" name="experience"  placeholder="enter work experience"size="60"required="true" autocomplete="off"/>
<br/><br/> 
Salary <br/>
<input type="number_format" name="salary" placeholder=" enter job salary "size="60" required="true" autocomplete="off"/>
<br/><br/>
<input type="submit" style="background-color:yellow"
	 value="Register" name="submit"/></h3>
</form>
</center>
</body>
<?php
if(isset($_POST['submit'])){
$name=$_POST['title'];
$skills=$_POST['keyskills'];
$location=$_POST['location'];
$description=$_POST['jobdescription'];
$experience=$_POST['experience'];
$salary=$_POST['salary'];
mysql_connect("localhost","root","");
mysql_select_db("SANDEEPKUMAR");
$query="insert into register(title,keyskills,location,jobdescription,experience,salary) values ('$name','$skills','$location','$description','$experience','$salary')";
mysql_query($query);
 echo "<script> alert('Data Saved Successfully !');
                               window.location='data.php';
                     </script>";
echo "<br>","<br>";
echo "Thanks For Registration :)";
}
?>
</html>
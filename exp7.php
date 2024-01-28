<?php
$n=$_POST['srollno']; 
$c=$_POST['sname']; 
$p=$_POST['semail'];
$con=mysqli_connect("localhost","root","","student_info"); 
$sql="INSERT INTO student_details(Rollno,Name,Email) values('$n','$c','$p')"; $r=mysqli_query($con,$sql); 
if($r) 
{
echo"user details added succesfully";
}
else 
{ 
echo"user detils not added"; 
} 
?>

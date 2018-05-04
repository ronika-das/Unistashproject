<?php


/*$name=$semester=$subject=$type=" ";
$nameErr=$semesterErr=$subjectErr=$typeErr="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($_POST["name"]))
		$nameErr="Name is required";
	else
	{	$name=ti($_POST["name"]);
	
	}
	if(empty($_POST["semester"]))
		$semesterErr="";
	else
		$semester=ti($_POST["semester"]);
	
	if(empty($_POST["subject"]))
		$subjectErr="";
	else
		$subject=ti($_POST["subject"]);
	
	if(empty($_POST["type"]))
		$typeErr="";
	else
		$type=ti($_POST["type"]);
	
	if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = ti($_POST["comment"]);
  }
}
function ti($data)
{
	$data=trim($data);
	$data=stripcslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}
*/
/*$name=mysql_real_escape_string($_POST['name']);
$subject=$_POST['subject'];
$type=$_POST['type'];
$comment=$_POST['comment'];
$semester=$_POST['semester']; */
$host='localhost';
$user='root' ;
$pass='';
$db='unistash';

$con= new mysqli($host, $user, $pass, $db);

/*if(!$con)
{
	echo "Not connected To server ";
	
}
if(!mysqli_select_db($con, 'unistash'))
{
	echo "Database not selected";
}
*/
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 



$sql="INSERT INTO contribute('name', 'semester', 'subject','type','comment') values ($_POST['name'].",".$_POST['semester'].",".$_POST['subject'].", ".$_POST['type']. ", ".$_POST['comment'])" ;
/*if(!mysqli_query($con , $sql)).
{
	echo "Not inserted";
	
}
else
{
	echo "Inserted";
}
*/
echo $sql;
if($con->query($sql)==TRUE)
{
	echo "Inserted";
}
else
	echo "Error";

//header("refresh:2; url=welcome.html");
?>
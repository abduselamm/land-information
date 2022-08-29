<!DOCTYPE html>
<html>
<head>
	<title>upload image</title>
</head>
<body>
	<center>
		<h1>upload / insert an image</h1>
	<form action="" method="POST" enctype="multipart/form-data">
			<label>choose an profile pic: </label><br>
			<input type="file" name="image" id="image" /><br>

			<label>enter user name: </label><br>
			<input type="text" name="username" placeholder="enter username" /><br>

			<label>enter designation: </label><br>
			<input type="text" name="designation" placeholder="enter designation" /><br>

			<input type="submit" name="upload" value="upload image "  /><br>
		
	</form>
	</center>
</body>
</html>>
<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection,"land");

if(isset($_POST['upload']))
{
	$file = addslashes(file_get_contents($_FILES['image']["tmp_name"]))	
	$username = $_POST['username'];
	$designation = $_POST['designation'];

	$query = "INSERT INTO 'image'('image','username','designation') VALUES ('$file','$username','$designation') ";
	 $query_run = mysqli_query($connection,$query);

	 if($query_run)
	 {
	 	echo '<script type="text/javascript"> alert("image profile uploaded") </script>';
	 }
	 else
	 {
	 	echo '<script type="text/javascript"> alert("image profile not uploaded") </script>';
	 }
}
?>
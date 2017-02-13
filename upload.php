<?php
//error_reporting(0);
$name=$_FILES['file']['name'];
echo $name;
$temploc=$_FILES['file']['tmp_name'];
if(isset($name))
{
	if(!empty($name)){
		$location='uploads/';
		if(move_uploaded_file($temploc,$location.$name))
		{echo ' is uploaded';}
	else
	{echo 'error';}
	}
	else{
		echo 'please choose a file';
	}
	
}

?>

<form action="upload.php" method="POST" enctype="multipart/form-data">
<input type="file" name="file">
<input type="submit" value="submit">
</form>
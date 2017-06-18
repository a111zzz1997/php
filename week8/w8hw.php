<?php

	$Link=@mysqli_connect(
		'localhost',
		'root',
		'ZXCasdqwe',
		'php2017'
	);
	if($Link){
		echo "DB connected";
	}else{
		echo "DB connection failed<br>";
	}

	$uname=$_POST["uname"];
	$email=$_POST["email"];
	$tel=$_POST["tel"];
	$date=$_POST["date"];
	$people=$_POST["people"];
	$word=$_POST['word'];

	$sql="INSERT INTO w8hw (name,email,phone,choicedate,people,advice) VALUES('$uname','$email','$tel','$date','$people','$word')";
	$result=mysqli_query($Link,$sql);

	$result=mysqli_query($Link,"SELECT*FROM w8hw");
	echo"<table border=1>";
	while($row=mysqli_fetch_assoc($result)){

		echo "<tr>";
		echo "<td>";
		echo $row["name"];
		echo "</td><td>";
		echo $row["email"];
		echo "</td><td>";
		echo $row["phone"];
		echo "</td><td>";
		echo $row["choicedate"];
		echo "</td><td>";
		echo $row["people"];
		echo "</td><td>";
		echo $row["advice"];
		echo "</td></tr>";
	
	}
	echo"</table>";

	mysqli_close($Link);



?>
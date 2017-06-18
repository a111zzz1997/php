<?php

	$uname=$_POST["uname"];
	$email=$_POST["email"];
	$tel=$_POST["tel"];
	$date=$_POST["date"];
	$people=$_POST["people"];
	$word=$_POST['word'];


	echo "姓名是：".$uname."<br>";
	echo "電子信箱是：".$email."<br>";

	if(is_numeric($tel)){
		echo $tel."<br>";
	}else{
		echo "please type numbers<br>,請回上一頁重新輸入";
		echo "<a href='hww2.html'>back</a><br>";
	}

	echo "挑選的日期是：".$date."<br>";

	echo "你選的明星是：".$people;

	if($people=="fu"){
		echo "郭雪芙<br>";
		echo "<img src='http://img.ltn.com.tw/Upload/ent/page/800/2015/10/30/phpdFXJ0o.jpg'/ width='80%'><br>";
	}elseif ($people=="t6") {
		echo "周星馳<br>";
		echo "<img src='http://www.zhouxingchi.info/Uploads/news/2015-05-29/5567b93d66e09.jpg'/ width='100%'><br>";
	}elseif ($people=="jay") {
		echo "周杰倫<br>";
		echo "<img src='https://img1.doubanio.com/img/musician/large/22817.jpg'/ width='80%'>";
	}elseif ($people=="yoga") {
		echo "林宥嘉<br>";
		echo"<img src='https://lh5.googleusercontent.com/-qScAvGBSwDw/AAAAAAAAAAI/AAAAAAAAF8I/eU6w4NFVvMg/photo.jpg'/ width='80%'><br>";
	}elseif ($people=="eason") {
		echo "陳奕迅<br>";
		echo "<img src='http://starryworldcpa.com/wp-content/uploads/2016/06/cinepoly_1.jpg'/ width='100%'><br>";
	}elseif ($people=="pong") {
		echo "彭佳慧<br>";
		echo "<img src='http://www.xineee.com/uploads/allimg/130323/114K21136-0.jpg'/ width='80%'><br>";
	}

	echo "給製作單位的建議是：".$word."<br>";


	echo "<br>";

?>
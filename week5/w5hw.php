<?php

	date_default_timezone_set('Asia/Taipei'); 

	$shownowtime=date("Y年m月d日 H:i:s l");
	echo "現在時間：".$shownowtime."<br>";

	$showdestroydate=date("Y年m月d日 H:i:s l",mktime(0,0,0,12,31,2017));
	echo "毀滅日：".$showdestroydate."<br>";


	$nowtime=date("U");

	$destroydate=mktime(0,0,0,12,31,2017);

	$time=$destroydate-$nowtime;

	$showday=intval($time/60/60/24);
	$showhr=intval($time/60/60%24);
	$showmin=intval($time/60%60);
	$showsec=intval($time%60);
	echo "距離2017年0點0分0秒還有".$showday."天".$showhr."小時".$showmin."分".$showsec."秒";

	if(date("m")==1){
		echo "<body background='https://img.clipartfest.com/f9b84c59c5af1c21b13001e7dae300fc_1-clipart-1-clipart_826-1324.png'>";
	}elseif(date("m")==2){
		echo "<body background='https://img.clipartfest.com/fa79d3a54f8881d7affadf435de6af9d_clipart-number-2-2-number-clipart-tg_830-1129.png'>";
	}elseif(date("m")==3){
		echo "<body background='https://img.clipartfest.com/d9ccaf0e164373b63445205e8af10cbc_number-3-clip-art-3-clipart_1247-1600.png'>";
	}elseif(date("m")==4){
		echo "<body background='https://www.wpclipart.com/sign_language/American_Numbers/4.png'>";
	}elseif(date("m")==5){
		echo "<body background='https://img.clipartfest.com/60daa5519a8041e4850c890fcfaf07ac_number-5-clipart-5-clipart_1184-1469.png'>";
	}elseif(date("m")==6){
		echo "<body background='https://kennethauthor.files.wordpress.com/2012/02/6.jpg'>";
	}elseif(date("m")==7){
		echo "<body background='https://s-media-cache-ak0.pinimg.com/originals/23/72/c1/2372c1fb1af97e1886662479c69f6f90.jpg'>";
	}elseif(date("m")==8){
		echo "<body background='https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Playing_card_diamond_8.svg/819px-Playing_card_diamond_8.svg.png'>";
	}elseif(date("m")==9){
		echo "<body background='http://c3.thejournal.ie/media/2015/01/9-88-752x501.png'>";
	}elseif(date("m")==10){
		echo "<body background='https://img.clipartfest.com/bb9dde62d28a72b8488b651557bb4f4b_count-on-fingers-10-clipart-count-to-10-clipart_899-586.png'>";
	}elseif(date("m")==11){
		echo "<body background='https://cdn2.pcadvisor.co.uk/cmsdata/features/3629353/ios_11_wish_list_thumb800.png'>";
	}elseif(date("m")==12){
		echo "<body background='http://uncommonchick.com/wp-content/uploads/december12.jpg'>";
	}

?>
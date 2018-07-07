 <!DOCTYPE html>
<html lang="en">
<head>
<title>Oservi| home of transcribers</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="navbar">
<div class="logo">
<span><a href="index.html">Oservi</a></span>
</div>
<div class="menu">
<div class="dropdown">
<a class="dropbtn "><img src="images/menu.png"></a>
<div class="dropdown-content">
<a href="index.html">home</a>
<a href="about.html">about</a>
<a href="services.html">services</a>
<a href="price.html">prices</a>
<a href="contact.html">info@oservi.com</a>
<a href="http://blog.orservi.com">blog</a>
</div>
</div>

<ul class="men" id="nav" >
<li><a href="index.html"><img src="images/bar/home.png"/>home</a></li>
<li><a href="about.html"><img src="images/bar/about.png"/>about</a></li>
<li><a href="services.html"><img src="images/bar/serve.png"/>services</a></li>
<li><a href="price.html"><img src="images/bar/price.png"/>prices</a></li>
<li><a href="contact.html"><img src="images/bar/mail.png"/>info@oservi.com</a></li>
<li><a href="http://blog.orservi.com">blog</a></li>

</ul>

</div>
</div>
<div id="body" style="top:60px;">
<div id="top">
<b><center>payment</center> </b>
<hr />
</div>
<?php
require("include.php");
error_reporting(E_ALL);
ini_set('display_errors',1);

$target_dir="~/aud/";
$target_direc="aud/";
$target_file=$target_dir.basename($_FILES["file"]["name"]);
$target_storage=$target_direc.basename($_FILES["file"]["name"]);
$uploadOk=1;
$tmp_name=$_FILES["file"]["tmp_name"];
$imageFileType= strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if(isset($_POST["submit"])){

if(move_uploaded_file($tmp_name,"$target_storage")){
$uploadOk=1;

}

}
require_once('getid3/getid3.php');
$filename=$target_storage;
$res=new getID3;
$fileinfo=$res->analyze($filename);
$duration2=$fileinfo['playtime_seconds'];



$time=$duration2/60;
$name=$_POST["name"];
$payment=$_POST["payment"];
$company=$_POST["company"];
$email=$_POST["email"];
$cell=$_POST["cell"];
$filetype=$_POST["filetype"];
$transcription=$_POST["transcription"];
$noise=$_POST["noise"];
$quality=$_POST["quality"];
$description=$_POST["description"];

$sql="select price,name from transcription where type=".$transcription;
$query=mysqli_query($con,$sql);
$result=mysqli_fetch_array($query);
$price=$result["price"];
$trans=$result["name"];
$timeprice= $time*$price;

$sql1="insert into ordered_item (name,company,email,cell,location,length,filetype,transcription,noise,quality,description,price,payment) values('$name','$company','$email','$cell','$target_storage','$time','$filetype','$transcription','$noise','$quality','$description','$timeprice','$payment')";
$query1=mysqli_query($con,$sql1) or die (mysqli_error($con) . "failed please contact the web admin at".'<a href="contact.html">contact</a>');
echo '<p style="margin-left:2em;font-size:25px;font-wight:700;color: green; ">Your request has been sent successfully</p>';
echo '<div id="payment">

<table>
<tr><th> particulars</th><th>details</th></tr>
<tr><td> type of transcription ordered</td><td>'.$filetype.'</td></tr>
<tr><td> transcription ordered</td><td>'.$trans.'</td></tr>
<tr><td> type of noise</td><td>'.$noise.'</td></tr>
<tr><td> minutes</td><td>'.$time.'</td></tr>
<tr><td> price per minute</td><td>'.$price.'</td></tr>
<tr><td> price</td><td>'.$timeprice.' $ </td></tr>
</table><br /> <br />';
echo 'thankyou for transcribing with us..our agent will get back to you as soon as possible..please proceed to pay !!<br><br>
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
           <input
							type="hidden" name="item_number" value="'. $transcription.'"> 
							<input type="hidden" name="business" value= "info@oservi.com">
							<input type="hidden" name="description" value="'. $description.'">
							<input type="hidden" name="amount" value="'.$timeprice.'">
							<input type="hidden" name="email" value="'.$email.'">
							<input type="hidden" name="currency_code" value="USD"> 
							<input type="hidden" name="notify_url" value="http://oservi.com/notify.php">
							<input type="hidden" name="return" value="http://oservi.com/response.php">
							<input type="hidden" name="cmd" value="_xclick"> 
							<input type="hidden" name="order" value="'.$target_storage.'">
           <input type="hidden" name="hosted_button_id" value="RAY5YF7QC5YM2">
           <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_paynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
           <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
           </form>
</div>

';







?>

</div>



<div id="footer">
<div class="links">
<H1>LINKS</H1>
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="about.html">About</a></li>
<li><a href="services.html">Services</a></li>
<li><a href="price.html">Pricing</a></li>
<li><a href="">Blog</a></li>
</ul>
</div>
<div class="contacts">
<h1>CONTACTS</h1>
<a href="contact.html">info@oservi.com</a>
</div>
<div class="socials">

</div>
</div>
<div id="res-footer">
<a href="index.html">Home</a>
<a href="about.html">About</a>
<a href="services.html">Services</a>
<a href="price.html">Pricing</a>
<a href="contact.html">contact</a>
<a href="">Blog</a>

</div>
</body>
</html>


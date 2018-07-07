
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
<b><center>contact us!</center> </b>
<hr />
</div>
<p> Thank you for your feedback. We highly appreciate.!!<br>
<a href="index.html">go back</a></p><br><br>
 <?php
 include("include.php");
 $name=$_POST["jina"];
 $email=$_POST["email"];
 $cell=$_POST["cell"];
 $subject=$_POST["subject"];
 $message=$_POST["message"];
 
 $sql="insert into contact (name,email,phone,subject,message) values('$name','$email','$cell','$subject','$message')";
 $result=mysqli_query($con,$sql) or die("sorry there has been an error but don't worry it will be fixed soon. Check later");
 
 
 
 
 
 
 
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
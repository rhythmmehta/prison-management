<html>
<head>
<title>Management System</title>
<style>
body {font-family:Arial}
.images:hover {opacity:0.50; cursor:pointer;}
.footer {color:white; background-color:black;}
#footerbar ul { width: 100%; padding: 0; margin: 0; list-style-type: none;}
#footerbar a {width: 6em; text-decoration: none; color: white; background-color: brown; padding: 0.2em 0.6em; border-right: 1px solid white;}
#footerbar a:hover {background-color:black;}
#footerbar li {display: inline;}
#menubar ul { width: 100%; padding: 0; margin: 0; list-style-type: none;}
#menubar a {width: 10em; text-decoration: none; color: black; padding: 0.2em 0.6em; }
#menubar a:hover {background-color:orange; color:white;}
#menubar li {display: inline; font-size:20px}
#about { background-color:brown; color: grey;}
#la {font-size:20px;}
</style>
</head>
<body bgcolor="FFFFCC">
<center><img src="india.gif" width="15%" height="30%" ></img></center>
<marquee> <h1> Indian Prison Service </h1></marquee>
<div id="menubar" align="center">
<ul>
<li><a href="home.html">Home</a></li>|
<li><a href="abt.html">About Us</a></li>|
<li><a href="management.html">Management System</a></li>|
<li><a href="contact.html">Contact</a></li>
</ul>
</div>
<br><br>
<pre><div id="la">
<?php     
    include 'config.php';

    $username = $_POST['username'];
    $password = $_POST['password'];
	$name = $_POST['name'];
	$number = $_POST['phoneno'];
   

    $result = mysqli_num_rows(mysqli_query($bd,"SELECT * FROM users WHERE username = '$username'"));

    if($result == 1)
    {
        echo "The username you have chosen already exists!";
    }
    else
    {
        mysqli_query($bd,"INSERT INTO users(username, password, name,number) VALUES ('$username', '$password', '$name', '$number')");
        echo "<p>Congratulations! You have successfully registered! </p> 
        <p>Click <a href = \"management.html\">here</a> to go back to login.</p>";

    }
?>
</pre>
</div>
<br>
<br>
<div class="footer" width="100%" height="30%">
<div id="footerbar" align="center">
<ul>
<li><a href="register.html">Register</a></li>
<li><a href="privacy.html">Privacy Policy</a></li>
<li><a href="contact.html">Contact</a></li>
<li><a href="#">Sitemap</a></li>
</ul>
</div>
<br><br>
<div id="details" align="center">
<pre>
For Enquiry,
mail us at:
indiaprisonhelp@gov.in

India Prison Management Office:
14160, Cannaught Place,
New Delhi
Ph: 011-25550119/9811564996 

Information provided by: Prison Department , Government of India
Hosted by: National Informatics Centre
<script language="Javascript">
document.write("Last Updated on: " + document.lastModified +"");
</script>
</pre></div>
<br><br>
</div>
</body>
</html>
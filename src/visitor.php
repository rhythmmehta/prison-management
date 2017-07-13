<html>

<head>
<link rel="stylesheet" href="menu.css">
</head>
    <body>
<div id="menu">
<ul>
<li><a href="home.html">HOME</a></li>
<li><a href="abt.html">ABOUT US</a></li>
<li><a href="menu1.html">ADMINISTRATOR MENU</a></li>
<li><a href="menu.html">USER MENU</a></li>
</ul>
</div>
<div id="container">
<pre><?php     
    include 'config.php';

    $id = $_POST['id'];
$result = mysqli_num_rows(mysqli_query($bd,"SELECT * FROM prisoner WHERE id = '$id'"));
if($result == 1)
{
$result=mysqli_query($bd,"SELECT * FROM visitor WHERE id = '$id'");
while($row=mysqli_fetch_array($result))
{

echo "Prisoner Id:".$row[0]."<br><br>";
echo "Name:".$row[1]."<br>";
echo "Date:".$row[2]."<br>";
echo "Name:".$row[3]."<br>";
echo "Date:".$row[4]."<br>";
echo "Name:".$row[5]."<br>";
echo "Date:".$row[6]."<br>";
echo "Name:".$row[7]."<br>";
echo "Date:".$row[8]."<br>";
}
}
else
{
 echo "Prisoner does not exist";
}
?></pre> </div> 
    </body>
</html>
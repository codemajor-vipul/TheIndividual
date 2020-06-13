<!Doctype html>
<head><title></title>
<style>
input{
display:inline-block;
float:left;
}
textarea{
	display:inline-block;
float:left;
}
label{
    display: inline-block;
    float: left;
    clear: left;
    width: 200px;
    text-align: left;
}
.header{
	background: url('https://expertphotography.com/wp-content/uploads/2018/09/texture-photography-atmospheric-light.jpg');
	width: 1365px;
	margin-top:-7px;
	margin-left: -7px;
	height: 150px;
	display: flex;
}
.options{
	display: flex;
}
a:hover{
	color: #FF6347	;
}
a{
	color:white;
}
</style>
<?php
if(isset($_POST["submit"]))
{
$local='127.0.0.1';
$db='test';
$user='root';
$password='';
$c=uniqid (rand (),true);
$conn= mysqli_connect($local,$user,$password,$db) or die('couldn\'t connect');
$p= "CREATE TABLE IF NOT EXISTS `posts`(  `title` varchar(100),
 `content` varchar(1000) )";
$conn->query($p);
$title= $_POST["title"];
$content= $_POST["body"];
$q= "INSERT INTO `posts` VALUES('$title','$content','$c')";
$conn->query($q);
}

 ?>
</head>
<body>
<div class="header">
<h2 style="margin-top:-7px;margin-left:-7px;padding:20px;"><a href="https://localhost/initialtion.php" style="text-decoration: none;">The World Is Here</a></h2>
<h2 style="margin-left:300px;color:white;" >WELCOME ADMIN</h2>
<h3 style="margin-left:600px;"><a href="" style="text-decoration:none;">Logout</a></h3>
</div>
<hr style="color:white;margin-top:-60px;">
<div class="options">
<h3 style="margin-top:0px;margin-left:0px;"><a href="" style="text-decoration:none;">View your posts</a></h3>
<h3 style="margin-left:10px;margin-top:-1px;"><a href="" style="text-decoration:none;">Create Posts</a></h3>
</div><br>
<form  method="post"  action="<?php echo $_SERVER["PHP_SELF"] ?>" >
<label>Enter title:</label><input name="title" id="title" type="text"><br><br>
<label>Enter body:</label><textarea name="body" id="body" type="text" rows="6"></textarea><br><br><br><br><br><br>
<input type="submit" name="submit" id="submit" value="SAVE">
</form>
</body>

</html>
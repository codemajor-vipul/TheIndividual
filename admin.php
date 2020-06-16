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
 <link rel="stylesheet" href="admin.css">
 <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Metal+Mania&display=swap" rel="stylesheet">
</head>
<body>
  <script></script>
  <div class="backdrop"></div>
    <div class="modal">
        <h1 class="modal__title">Enter the Admin Credentials</h1>
        <div class="modal__actions">
          <form method="post" class="form">
            <input type="email" placeholder="enter the email id" class="email" name="email" required email><br>
            <input type="password" placeholder="enter password" class="pass" name="pass" required><br><br>
            <button type="submit" name="submit" class="modal__action">LOGIN!</button>
            <button class="modal__action modal__action--negative" type="button">No!</button>
          </form>
        </div>
    </div>
<header class="main-header">
        <div>
            <a href="https://localhost/initialtion.php" class="main-header__brand">
                The Individual
            </a>
        </div>
        <nav class="main-nav">
            <ul class="main-nav__items">
				<li class= "main-nav__item main-header__items--cta">
                    <a  href="https://localhost/createpost.php" class="main-header__items">Create Post</a>
                </li>
                <li class= "main-nav__item main-header__items--cta">
                    <a  class="main-header__items">Logout</a>
				</li>
            </ul>
		</nav>
</header>
<main>
<section class="kaboom">
    <section class="myposts">
      <section id="plan">
        <a href="" class="posts">
          <div>
                    <img src="https://usatmmajunkie.files.wordpress.com/2019/08/joe-rogan-ufc-241-weigh-ins.jpg?w=1000&h=600&crop=1" class="post-image">
          </div>
          <div>
            <ul class="post__content">
              <li class="title">Keeping a Clean Hygiene</li>
              <li><h3>Post body...</h3></li>
            </ul>
          </div>
        </a>
      </section>
      <section id="plan">
        <a href="" class="posts">
          <div>
                    <img src="https://usatmmajunkie.files.wordpress.com/2019/08/joe-rogan-ufc-241-weigh-ins.jpg?w=1000&h=600&crop=1" class="post-image">
          </div>
          <div>
            <ul class="post__content">
              <li><h1>Post title</h1></li>
              <li><h3>Post body</h3></li>
            </ul>
          </div>
        </a>
      </section>
      <section id="plan">
        <a href="" class="posts">
          <div>
                    <img src="https://usatmmajunkie.files.wordpress.com/2019/08/joe-rogan-ufc-241-weigh-ins.jpg?w=1000&h=600&crop=1" class="post-image">
          </div>
          <div>
            <ul class="post__content">
              <li><h1>Post title</h1></li>
              <li><h3>Post body</h3></li>
            </ul>
          </div>
        </a>
      </section>
	</section>
</section>
</main>
<script src="admin.js"></script>
</body>

</html>
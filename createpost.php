<!DOCTYPE html>
<head>
    <title></title>
<link rel="stylesheet" href="createpost.css">
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Metal+Mania&display=swap" rel="stylesheet">
</head>
<?php
  include 'classes/user.php';
  session_start();
  if(!isset($_SESSION['email'])){
    header("location: https://localhost/theindividual.php");
}
else{
  if(isset($_POST['submit'])){
    mkdir('C:/xampp/htdocs/postsimages',0777,true);
    $target_dir = "C:/xampp/htdocs/postsimages/"; 
    if(isset($_FILES["postimage"]))
    {
      $target_file = $target_dir.basename($_FILES["postimage"]["name"]);  
      move_uploaded_file($_FILES["postimage"]["tmp_name"], $target_file);
    }
    $currentDate= date("Y-m-d");
    $currentTime= date("h:i:sa");
  $obj = new user();
  $c = $obj->id();
  $obj->insert($c,$_POST['title'],$_POST['body'],$target_file,$currentTime,$currentDate,$_POST['category']);
  }
}
 ?>
<body>
<header class="main-header">
        <div>
            <a href="https://localhost/initialtion.php" class="main-header__brand">
                The Individual
            </a>
        </div>
</header>
<main>
<div class="createpost">
<h1 class="modal__title">Create your Post</h1>
        <div class="modal__actions">
          <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form" enctype="multipart/form-data">
            <input type="text" placeholder="enter the title" class="title" name="title" required><br>
            <input type="text" placeholder="enter the category" class="category" name="category" required><br>
            <textarea placeholder="enter the body" class="body" name="body" cols="20"required></textarea><br><br>
            <input type="file" name="postimage" class="postimage" id="postimage"><br><br>
            <button type="submit" name="submit" class="modal__action">Create!</button>
          </form>
        </div>
</div>
<main>
</body>
</html>
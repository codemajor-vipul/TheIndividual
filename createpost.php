<!DOCTYPE html>
<head>
    <title></title>
<link rel="stylesheet" href="createpost.css">
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Metal+Mania&display=swap" rel="stylesheet">
</head>
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
          <form method="post" class="form">
            <input type="text" placeholder="enter the email id" class="title" name="title" required><br>
            <textarea placeholder="enter password" class="body" name="body" cols="20"required></textarea><br><br>
            <input type="file"><br><br>
            <button type="submit" name="submit" class="modal__action">Create!</button>
          </form>
        </div>
</div>
<main>
</body>
</html>
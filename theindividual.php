<!DOCTYPE html>
<head><title></title>
<style>

</style>
<link rel="stylesheet" href="styles.css">
<link href="https://fonts.googleapis.com/css2?family=Lobster&family=Metal+Mania&display=swap" rel="stylesheet">
</head>
<?php 
$x=33;

?>
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
            <a href="https://localhost/theindividual.php" class="main-header__brand">
                The Individual
            </a>
        </div>
        <nav class="main-nav">
            <ul class="main-nav__items">
                <li class= "main-nav__item main-header__items--cta">
                    <a  class="main-header__items">Admin</a>
                </li>
            </ul>
        </nav>
</header>
<main>
  <section class="stargazer">
    <p>WELCOME TO MY BLOG</p>
</section>
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
    <section class="categories">
      <div class="cats">
          <h2 class="cats__title">Categories</h2>
          <ul>
            <li>Technology</li>
            <li>Sports</li>
          </ul>
      </div>
      <div class="meetme">
        <ul>
        <li><img src="https://drive.google.com/uc?id=1QxsDz3RX6hlU18zCjOD3ueharENa8NJB"  class="image"></li>
        <li class="mine"><br><br><br>Click here to know more about the author of the Blog</li>
        </ul>
      </div>
    </section>
  </section>
  </main>
  <footer class="main-footer">
        <nav>
            <ul class="main-footer__links">
                <li class="main-footer__link">
                    <a href="#">FeedBack</a>
                </li>
                <li class="main-footer__link">
                    <a href="#">Terms of Use</a>
                </li>
            </ul>
        </nav>
  </footer>
  <script src="shared.js"></script>
</body>
</html>
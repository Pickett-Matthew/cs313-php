<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Entertainement 720</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="<?php echo ($page == "home" ? "active" : "")?>"><a href="./home.php">Home</a></li>
      <li class="<?php echo ($page == "about-us" ? "active" : "")?>"><a href="./about-us.php">About Us</a></li>
      <li class="<?php echo ($page == "login" ? "active" : "")?>"><a href="./login.php">Login</a></li>
      <li><a href="./home.php">Logout</a></li>
    </ul>
  </div>
</nav>
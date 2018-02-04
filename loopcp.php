<!DOCTYPE html>
<html lang="en">
<head>
    <?php
      $names = array("Every", "1", "Other", "2", "Element", "3", "Of", "4", "This","5", "Array","6", "Will","7", "Be","8","Displayed");
      $index = 0;
      $max = sizeof($names);
      $count = 0;
    ?>
  <title><||Loop||></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="index.html" class="navbar-brand">HOME | LOOP</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="profilePage.html">LOGIN</a></li>
        <li><a href="aboutEther.html">ABOUT</a></li>
        <li><a href="signup.html">REQUEST</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="container-fluid bg-1 text-center">
  <h1>Loop || pooL</h1>
  <img src="loopimage.jpeg">
<div class="container text-center">
  <h2 class="wordSpace">Course Project</h2>
  <br>
  <blockquote>
    <?php
    while ($count<=10)
      {
            if (($max%2) == 0)
          {
        $max++;
        $index++;
        continue;
          }
            else
          {
        echo $names[$index].'<br /> <hr />';
        $count++;
        $max++;
        $index++;
          }
    }
  ?>

 </blockquote>
</div>
<div class="container-fluid bg-2 text-center">
<!--
    <div class="space">
    <h4><a href="https://mail.protonmail.com/login">Secure Mail</a></h4>
    <br>
    <h4><a href="https://slack.com/downloads/osx">Message Service</a></h4>
    <br> -->

  <h3 class="bottomBye">This is Where We Loop</h3>

</div>
<br>
<h4 class="contact contactReduce"><a href="mailto:deathTheKid@protonmail.com?subject=Hola
&body=Please grant me the wisdom to loop!">Contact</a></h4>


<!-- footer remover {css bg.4} -->
<footer class="container-fluid space bg-4 text-center">
  <p>Remember To <a href="https://motherboard.vice.com/en_us/article/59zdjq/an-idiots-guide-to-building-an-ethereum-mining-rig">Learn</a></p>
</footer>

</body>
</html>

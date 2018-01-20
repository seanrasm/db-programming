<html>
<head>
  <?php
    $string = "Sean";
    $int = 10;
    $float = 17.4;
    $array = array("Hi", "Friend");
  ?>
  <title>Data | Type</title>
</head>
  <body>
    <h1 style="color:#72ce76e6;">Data Type Display</h1>
    <p style="size:20px;">Variable Display</p>
    <div>
      <?php
          echo "$string <br>";
          echo "$int <br>";
          echo "$float <br>";
          echo "$array[0]; <br>";
          echo "$array[1];"
       ?>
<hr>
           <p>Data Type Display</p>
     <?php
          var_dump($string);
          var_dump($int);
          var_dump($float);
          var_dump($array);
      ?>
  </body>
</html>

<html>
<head>
  <?php
          $move = true;
          $notTrue = 17;
          $orToo = false;
          $index = 0;
   ?>

  <title>Conditional | IfElse</title>
  <html>
		<head>
	<title>Conditional</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="themes/rasmussenthemeroller.min.css" />
  <link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
  <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
  <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
	<body>

		<div id="page" data-role="page" data-theme="b" >
	<div data-role="header" data-theme="b">
<h1>
	Conditional Testing
		</h1>	</div>
				<div data-role="content">


                        <p>If</p>
                        <?php
                                # If statement
                                  if ($move == true){
                                  echo "You're seeing this, the code has worked!"; }
                                  echo "<br>";
                              ?>
                      <hr>
                        <p>If ... Else</p>
                        <?php

                                # If else statement
                                  if ($notTrue == $index){
                                  echo "This should not execute";

                                }  else {
                                      echo "Check out this &quot;else&quot; statement!";
                                    }

                                  echo "<br>";
                              ?>
                      <hr>
                        <p>If..ElseIf..Else</p>
                        <?php

                                # If, elseif, else statement
                                  if ($orToo == true){
                                  echo "shouldn't run";

                                }  elseif ($notTrue == $index) {
                                      echo "really shouldn't run";

                                  }  else {
                                        echo "When all goes according to plan, you'll see this" . ":)";
                                      }


                                  echo "<br>";
                              ?>
                        <hr>
												<?php
												date_default_timezone_set("America/Chicago");
												$date = date("h:i:sa");
												$count = date("h");

												echo "If the current time is exactly: " . date("h:i:sa") . " You'll get to see another sentence!";
												echo "<br>";
												if ($count < 10) {
												  echo "<br>Here's that sentence I was talking about...";
												} elseif ($count < 12) {
												    echo "<br>Say Hi to elseIf!";
												} else {
												    echo "<br>You've reached the final condition, else";
												}
												?>


	</div>


				<div data-role="footer" data-theme="b">
	  <h4>Conditional &copy; 2017</h4>
	</div>
	</body>
</html>

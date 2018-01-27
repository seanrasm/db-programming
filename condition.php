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
                                  echo "Condition is True!"; }
                                  echo "<br>";
                              ?>
                      <hr>
                        <p>If ... Else</p>
                        <?php

                                # If else statement
                                  if ($notTrue == $index){
                                  echo "This should not execute";

                                }  else {
                                      echo "This is an &quot;else&quot; statement";
                                    }

                                  echo "<br>";
                              ?>
                      <hr>
                        <p>If..ElseIf..Else</p>
                        <?php

                                # If, elseif, else statement
                                  if ($orToo == true){
                                  echo "How did this execute?";

                                }  elseif ($notTrue == $index) {
                                      echo "Why did this execute?";

                                  }  else {
                                        echo "This was an if, elseif, else statement!";
                                      }


                                  echo "<br>";
                              ?>
                        <hr>


	</div>


				<div data-role="footer" data-theme="b">
	  <h4>Conditional &copy; 2017</h4>
	</div>
	</body>
</html>

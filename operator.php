<html>
<head>
  <?php
          $trueAnd = true;
          $trueToo = true;
          $orAnd = true;
          $orToo = false;
          $xorAnd = true;
          $xorToo = false;
          $trueAn = true;
          $trueTo = true;
          $orAn = true;
          $orTo = false;
          $notHolder = false;
   ?>

  <title>Operator</title>
  <html>
		<head>
	<title>Operator</title>
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
	Operate
		</h1>	</div>
				<div data-role="content">


                        <p>Operate AND</p>
                        <?php

                                #$trueAnd = true;
                                #$trueToo = true;
                                  if ($trueAnd and $trueToo == true){
                                  echo "Both are True!"; }
                                  echo "<br>";
                              ?>
<hr>
                        <p>Operate OR</p>
                        <?php

                                #$orAnd = true;
                                #$orToo = false;
                                  if ($orAnd or $orToo == true){
                                  echo "One is True!"; }
                                  echo "<br>";
                              ?>
<hr>
                        <p>Operate XOR</p>
                        <?php

                                #$orAnd = true;
                                #$orToo = false;
                                  if ($xorAnd or $xorToo == true){
                                  echo "One is False!"; }
                                  echo "<br>";
                              ?>
<hr>
                        <p>Operate <?php echo "&&"?></p>
                        <?php

                                #$trueAn = true;
                                #$trueTo = true;
                                  if ($trueAn && $trueTo == true){
                                  echo "Both are True!"; }
                                  echo "<br>";
                              ?>
<hr>
                        <p>Operate <?php echo "||"?></p>
                        <?php

                                #$orAn = true;
                                #$orTo = false;
                                  if ($orAn || $orTo == true){
                                  echo "One is True!"; }
                                  echo "<br>";
                              ?>
<hr>
                        <p>Operate <?php echo "! &quot;not&quot;";?></p>
                        <?php
                                #$notHolder = false;
                                  if (!$notHolder){
                                  echo "Variable is NOT true"; }
                                  echo "<br>";
                              ?>
<hr>

	</div>


				<div data-role="footer" data-theme="b">
	  <h4>Operate &copy; 2017</h4>
	</div>
	</body>
</html>

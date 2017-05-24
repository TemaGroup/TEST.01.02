<?php
//This file is the base for all pages in the site. 
	include ("dbconnect.php");
?>
<html>
<head>
<title>Lorem ipsum goes here</title>

<link href="styles.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="container">
	<?php
		include ("header.php");
	?>
    <div class="maincontent">
 <!-- main content goes here-->
      <p>Lorem ipsum goes here</p>
  </div>
	<?php
		include ("seccontent.php");
	?>

	<div class="footer"></div>
</div><!-- Container ends here-->
</body>
</html>

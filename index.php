<?php
include ("includes/login_script.php")
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<html>
<head>
<meta name="description" content="cretae a chatroom, and upgrade it!" />
<meta name="keywords" content="chat, room, social, network, programming" />
<link href="Style.css" rel="stylesheet">
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<title> [ChatBoxer] </title>
<script type="text/javascript">
    function lor(){
     alert("thats not yet available... which is just fancy talk saying that it's not finished");
  }
</script>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Archivo+Narrow:400,700" rel="stylesheet" type="text/css" />
<link href='http://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Rambla' rel='stylesheet' type='text/css'>
<script language="javascript">
if (!Modernizr.borderradius) {
    $.getScript("jquery.corner.js", function () {
  $("#cornerDiv").corner();
    });
}
</script>
<script>
$('#sub').click(function() {
  $(this).parents('from:first').submit();
});
</script>
<link rel="icon"
      type="image/png"
         href="images/img2.png" />
</head>
<body>

<?php 
include ("includes/header.php");
?>

<?php
include ("includes/surrounding.php");
?>

<?php
include ("includes/tcol.php");
?>

</body>
</html>

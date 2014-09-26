<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
    <!--[if lt IE 9]>
<script src="dist/html5shiv.js"></script>
<![endif]-->
	<title>[chatboxer help]</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="keywords" content="help, chabtoxer" />
	<link href="Style.css" rel="stylesheet" />
	<link href="htype.css" rel="stylesheet" />
	<link href='http://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Rambla' rel='stylesheet' type='text/css'>
   <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Archivo+Narrow:400,700" rel="stylesheet" type="text/css" />
   
   <script>
    $('[placeholder]').focus(function() {
  var input = $(this);
  if (input.val() == input.attr('placeholder')) {
    input.val('');
    input.removeClass('placeholder');
  }
}).blur(function() {
  var input = $(this);
  if (input.val() == '' || input.val() == input.attr('placeholder')) {
    input.addClass('placeholder');
    input.val(input.attr('placeholder'));
  }
}).blur();
 
   </script>
   
</head>

<body>
<div id="header-wrapper">
<div class="mask">

<div id="logo">
<h1 class="header"> [Chat<span class="red">Boxer</span>]</h1>
</div>

<center>
<div id="login">
<input type="text" class="q" placeholder="Contact an admin (if you know details)" />
<a class="b" type="button" onclick="lor()" href="#"> post </a>
</div>
</center>

<div id="menu">
   <ul>
   <a href="index.php">Home</a>
   <a href="#">Help</a>
   <a href="blog.php">Blog</a>
   </ul>
</div>

<!-- mask end tag --></div>
<!-- header wrapper end tag --></div>

<!--END OF HEADER -->

<div id = "faq">

     <div id="surrounding">

<!-- SIGN UP -->

<div class="signup">

<!-- IMAGE THAT FLOATS ON LEFT -->
<div id="imagel">
<h1 style="font-family: ubunut, 'Rambla';" class="featured">Frequently Asked Questions</h1>
<iframe style="padding-top: 0;" width="560" height="315" src="http://www.youtube.com/embed/DIyr5TXqe8Y" frameborder="0" allowfullscreen></iframe>
<p class="disclaimer">How to behave properly in chatrooms.</p>
</div>
<!-- END OF IMAGE LEFT -->

<!-- SIGN UP INFO -->
<div id="info">
<form> <!-- START FORM -->
<h1 class="sign"> Still Need Help? </h1>
         
         <!-- INPUT TYPES -->
                   <p class="centerE"> If you're still having some problems with the site, we are here to help, some of the other problems you're expieriencing may be in this list. If not go to the top and type your question.</p>
				   
				   <ul>
				   <li class="fqa"><a href="#">Freezing?</a></li>
				   <li class="fqa"><a href="#">layout issue?</a></li>
				   <li class="fqa"><a href="#">Gltches</a></li>
				   <li class="fqa"><a href="#">being reported?</a></li>
				   </ul>
				   
				   <p class="centerE"> Still having problems? enter them here: </p>
				   <br />
				    <input type = "text" class="q2" />
                   <a class="button" onclick = "lor();" href="#">send it</a>
         <!-- END INPUT TYPES -->
  </form> <!-- END FORM -->    
        
</div>
<!-- END INFO --> 

</div>

</div>
</div>
<!-- start THREE COLLUMNS -->
 <div id="sround">
<br />
<center><h2 class="title">Some More Questions</h2></center>
 <div id="three-collumns">
     <div id="collumn-1">
	     <h1> Layout </h1>
		 <img width="250" height="100" src="images/de.jpg" />
		 <p> If the layout isn't correct on the website, try either going back to normal zoom, or checking your browser version.</p>
	 </div>
	      <div id="collumn-2">
	     <h1> Freezing </h1>
		 <img width="250" height="100" src="images/dt.jpg" />
		 <p> If your chatroom is freezing, just refresh the page, or try to connect to a different chat room server. </p>
	 </div>
	   <div id="collumn-3">
	     <h1> Glitches </h1>
		 <img width="250" height="100" src="images/ly.png" />
		 <p> if there are glitches in your chatroom, or on the site, you can contact an administrator for your problem, report all glitches. </p>
	 </div>
 </div>
 </div>
 <!-- END 3 COLLUMNS -->
</body>

</html>

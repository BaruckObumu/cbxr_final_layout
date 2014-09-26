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
<script language="javascript">
if (!Modernizr.borderradius) {
    $.getScript("jquery.corner.js", function () {
  $("#cornerDiv").corner();
    });
}
</script>
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600|Archivo+Narrow:400,700" rel="stylesheet" type="text/css" />
<script type="text/javascript">
    function lor(){
     alert("thats not yet available... which is just fancy talk saying that it's not finished");
  }
</script>
<link rel="icon"
      type="image/png"
         href="images/img2.png" />
<link href='http://fonts.googleapis.com/css?family=VT323' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Rambla' rel='stylesheet' type='text/css'>
</head>
<body>
<div id="header-wrapper">
<div class="mask">

<div id="logo">
<h1 class="header"> [Chat<span class="red">Boxer</span>]</h1>
</div>

<center>
<div id="login">
<input type="text" class="l" placeholder="username">
<input type="password" class="l" placeholder="password">
<a class="b" type="button" onclick="lor()" href="#"> login </a>
</div>
</center>

<div id="menu">
   <ul>
   <a href="index.php">Home</a>
   <a href="help.php">Help</a>
   <a href="blog.php">Blog</a>
   </ul>
</div>

<!-- mask end tag --></div>
<!-- header wrapper end tag --></div>

<!--END OF HEADER -->


<div id="surrounding">

<!-- SIGN UP -->

<div class="signup">

<!-- IMAGE THAT FLOATS ON LEFT -->
<div id="imagel">
<h1 style="font-family: 'Open Sans', Arial;" class="featured">Featured Video of the Week</h1>
<iframe style="padding-top: 0px; border-radius: 5px;" width="560" height="315" src="http://www.youtube.com/embed/A6XUVjK9W4o" frameborder="0" allowfullscreen></iframe>
<p class="disclaimer">video name: People Are Awesome 2013 (hadouken! - levitate).</p>
</div>
<!-- END OF IMAGE LEFT -->

<!-- SIGN UP INFO -->
<form method="aftercreate.php" type="get"> <!-- START FORM -->
<div id="info">

<h1 class="sign"> Start your chat! </h1>
         
         <!-- INPUT TYPES -->
               <input class="ip2" placeholder="Frst name" name="fname" id="tbx" type="text">
                    <input class="ip2" placeholder="Last name" name="sname" type="text">
                    <br />
                        <br />
                    <input class="ip" type="text" name="email" placeholder="someone@place.com">
                 <br />
                     <br />
                   <input class="ip" name="usrname" placeholder="Username" type="text">
               <br />
                    <br />
           <input class="ip" name="chatname" placeholder="Chatroom Name" type="text">
               <br />
                    <br />
                  <input class="ip" name="password" placeholder="Password"  type="password">
                  <div id="gender">
           <p class="mof"><input name="radioBtn" id="radioBtn1" value="A" onMouseDown="this.__chk = this.checked" onClick="if (this.__chk) this.checked = false" type="radio" />Man &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="radioBtn" id="radioBtn1" value="A" onMouseDown="this.__chk = this.checked" onClick="if (this.__chk) this.checked = false" type = "radio">Woman&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="radioBtn" id="radioBtn1" value="A" onMouseDown="this.__chk = this.checked" onClick="if (this.__chk) this.checked = false" type="radio" />N/A </p>
            </div> <!-- END GENDER -->
           <a style="font-family: 'rambla', Arial; width: 200px; float: left; color: #fff; text-decoration: none;" href="#" onclick="lor()" class="forg">Did you forget your password, or username?</a>
                   <a class="button" onclick = "lor();" href="#">sign up</a>
                   
         <!-- END INPUT TYPES -->
  </form> <!-- END FORM -->    
        
</div>
<!-- END INFO --> 

</div>

</div>
<!-- END SIGN UP -->
 <div id="blank2"></div>
 
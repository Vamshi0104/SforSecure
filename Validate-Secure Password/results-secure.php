
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet-res.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Result-Page</title>
<style>
.strong {
display:inline-block;
  height: 25px;
  color:white;
  font-weight:600;
  width: 65px;
  background-color: green;
   border:3px solid black;
}
.medium {
display:inline-block;
  height: 25px;
  text-align:center;
  color:white;
  font-weight:600;
  width: 75px;
  background-color: orange;
   border:3px solid black;
}
.weak {
display:inline-block;
  height: 25px;
  color:white;
  font-weight:600;
  width: 65px;
  background-color: red;
  border:3px solid black;
}
</style>
</head>
<body>
    <h1 style="color:white;"><?php  $name=$_POST['user'];
    echo 'Hello '.$name.' :)'?></h1> 
    <h2 style="color:white;">Your Password Strength:</h2><br>
    <?php 
     $pwd=$_POST['password'];
     if (preg_match("#.*^(?=.{8,20})(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W).*$#", $pwd))
     {
        echo "<center><div class='strong'></div></center>";
     }
     else if(preg_match("#.*^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9])))(?=.*\\W).*$#",$pwd))
     {
         echo "<center><div class='medium'></div></center>";
     }
      else
     {
         echo "<center><div class='weak'></div></center>";
     }
    ?>
<div class="cont">
  <div class="form">
    <br>
    <?php
   echo"<h3 style='color:lime;'>>>> Your Password : $pwd</h3><br/>";
   echo"<h3>&rArr; Suggested Secure Passwords:</h3><br/>";
    ?>
    <ul>
    <li><h3 style="color:lime;"><?php echo ''.md5($pwd.$name). PHP_EOL;?></h3></li><br>
    <li><h3 style="color:lime;"><?php if(CRYPT_EXT_DES == 1) {echo ''.crypt($pwd,'_4secure..i7am'). PHP_EOL;}?></h3></li><br>
    <li><h3 style="color:lime;"><?php echo ''.sha1($pwd.$name). PHP_EOL;?></h3></li><br>
    <li><h3 style="color:lime;"><?php if(CRYPT_SHA512 == 1) {echo ''.crypt($pwd,'54280$someAmsalt4sha-521secu1$$$red$'). PHP_EOL;}?></h3></li><br>
    <li><h3 style="color:lime;"><?php  echo ''.crypt($pwd, $name)?></h3></li><br>
    <li><h3 style="color:lime;"><?php if(CRYPT_MD5 == 1) {echo ''.crypt($pwd,'$i$Amsecured$'). PHP_EOL;}?></h3></li>
    </ul>
  </div>
 </div>
<center>
<h2>Password Strength Indicator :</h2><br>
<div class="strong">&nbsp;Strong</div>&emsp;
<div class="medium">Medium</div>&emsp;
<div class="weak">&nbsp;Weak</div>
</center>
</body>
</html>
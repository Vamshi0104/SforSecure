<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="stylesheet.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Password-Check</title>
</head>
<body>
<div class="cont">
  <div class="form">
    <form action="results-secure.php" method="post">
      <h1>Are..U..Secured!!</h1>
      <input type="text" name="user" id="user" class="user" placeholder="Enter Your Name" pattern="[a-zA-z]{4,}" size="10" maxlength="30" required/>
      <input name="password" type="text" id="password" class="pass" placeholder="Enter Any Password" size="15" maxlength="100" onkeyup="return passwordChanged();" required/>
      <h3 id="strength"></h3>
     <button type="submit" class="login"><b>CHECK</b></button>
    </form>
  </div>
 </div>
<script>
function passwordChanged() {
        var strength = document.getElementById('strength');
        var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
        var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
        var enoughRegex = new RegExp("(?=.{6,}).*", "g");
        var pwd = document.getElementById("password");
        if (pwd.value.length == 0) {
            strength.innerHTML = '';
        } else if (false == enoughRegex.test(pwd.value)) {
            strength.innerHTML = 'Enter more Characters...';
        } else if (strongRegex.test(pwd.value)) {
            strength.innerHTML = '<span style="color:lime">Great,Your Password is Strong !!</span>';
        } else if (mediumRegex.test(pwd.value)) {
            strength.innerHTML = '<span style="color:orange">Password can be more Stronger...</span>';
        } else {
            strength.innerHTML = '<span style="color:red">Your Password is Weak :(</span>';
        }
    }
</script>
</body>
</html>
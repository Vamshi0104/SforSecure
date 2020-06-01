<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home Page</title>
<link href="https://fonts.googleapis.com/css?family=Oswald:600,700" rel="stylesheet"> 
<br><p id="heading" style="font-size:20px;font-family:verdana;">Encryption &#8658; Secure Password</p><br>
<p>&#187; Main Motto is to provide you suggestions to make your password more Safe & Secure. </p>
<style>
@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,700italic);
body{
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100vh;
background: -moz-linear-gradient(top,  rgba(8,13,40,1) 0%, rgba(38,19,0,1) 100%); /* FF3.6-15 */
background: -webkit-linear-gradient(top,  rgba(8,13,40,1) 0%,rgba(38,19,0,1) 100%); /* Chrome10-25,Safari5.1-6 */
background: linear-gradient(to bottom,  rgba(8,13,40,1) 0%,rgba(38,19,0,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */;
color:black;
  font-family: 'Oswald', sans-serif;
}
.button-three {
   position:relative;
    background-color: black;
color:white;
    border: 2px solid #66FCF1;
    font-size:20px;
    padding: 20px;
    width: 200px;
    text-align: center;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    text-decoration: none;
    overflow: hidden;
}
img[alt="www.000webhost.com"]{display:none;}
.button-three:hover{
   background:green;
   box-shadow:0px 2px 10px 5px #97B1BF;
   color:white;
}

.button-three:after {
    content: "";
    background:lime;
    display: block;
    position: absolute;
    padding-top: 300%;
    padding-left: 350%;
    margin-left: -20px !important;
    margin-top: -120%;
    opacity: 0;
    transition: all 0.8s
}

.button-three:active:after {
    padding: 0;
    margin: 0;
    opacity: 1;
    transition: 0s
}
#text {
  display: flex;
  height: 65vh;
color:black;
  align-items: center;
  justify-content: center;
  text-align: center;
}
#onlybutton {
  display: flex;
  height: .5vh;
color:black;
  align-items: center;
  justify-content: center;
  text-align: center;
}
h1{
  color: #fff;
  font-size: 47px;
  line-height: 40px;
}

#container {
  left: 0px;
  top: -100px;
  height: calc(100vh + 100px);
  overflow: hidden;
  position: relative;
}

#animate{
  margin: 0 auto;
  width: 20px;
  overflow: visible;
  position: relative;
}

#all{
  overflow: hidden;
  height: 100vh;
  width: 100%;
  position: fixed;
}

#footer{
  color: #808080;
  text-decoration: none;
  position: fixed;
  width: 670px;
  bottom: 20px;
  align-content: center;
  float: none;
  margin-left: calc(50% - 376px);
}

a, p{
  text-decoration: none;
  color: #808080;
  letter-spacing: 2px;
  transition: all 0.5s ease-in-out;
  width: auto;
  align-items: center;
  justify-content: center;
  align-content: center;
  text-align: center;
  margin: 0;
  margin-right: 9px;
}

a:hover{
  color: #fff;
  letter-spacing: 2px;
  transition: all 0.5s ease-in-out;
}
#heading{
  color: lime; 
  font-family:serif
  font-size: 22px;
 letter-spacing: 0px;
font-weight:600;
  margin: 10px 0 0 10px;
  white-space: nowrap;
  overflow: hidden;
}
</style>
</head>
<body>
<div id="all">
<div id="container">
  <div id="animate">
  </div>
</div>
</div>
<div id="text">
<h1>I'm Secured</h1>
</div>
<div id="onlybutton">
<button class="button-three" onclick="window.location.href='index-check.php';">GET STARTED</button>
</div>
<div id="footer">
<p align="center" id="pcent">&emsp;&emsp;&emsp;&emsp;&emsp; >>> @Copyrights MVK 2020 <<<</p>
</div>
<script>
var container = document.getElementById('animate');
var emoji = ['0','0','0','1','1','0','1','1','0','0','1','0','1','0','1','0','1','1','1','1'];
var circles = [];
for (var i = 0; i < 15; i++) {
  addCircle(i * 150, [10 + 0, 300], emoji[Math.floor(Math.random() * emoji.length)]);
  addCircle(i * 150, [10 + 0, -300], emoji[Math.floor(Math.random() * emoji.length)]);
  addCircle(i * 150, [10 - 200, -300], emoji[Math.floor(Math.random() * emoji.length)]);
  addCircle(i * 150, [10 + 200, 300], emoji[Math.floor(Math.random() * emoji.length)]);
  addCircle(i * 150, [10 - 400, -300], emoji[Math.floor(Math.random() * emoji.length)]);
  addCircle(i * 150, [10 + 400, 300], emoji[Math.floor(Math.random() * emoji.length)]);
  addCircle(i * 150, [10 - 600, -300], emoji[Math.floor(Math.random() * emoji.length)]);
  addCircle(i * 150, [10 + 600, 300], emoji[Math.floor(Math.random() * emoji.length)]);
}
function addCircle(delay, range, color) {
  setTimeout(function() {
    var c = new Circle(range[0] + Math.random() * range[1], 80 + Math.random() * 4, color, {
      x: -0.15 + Math.random() * 0.3,
      y: 1 + Math.random() * 1
    }, range);
    circles.push(c);
  }, delay);
}
function Circle(x, y, c, v, range) {
  var _this = this;
  this.x = x;
  this.y = y;
  this.color = c;
  this.v = v;
  this.range = range;
  this.element = document.createElement('span');
  /*this.element.style.display = 'block';*/
  this.element.style.opacity = 0;
  this.element.style.position = 'absolute';
  this.element.style.fontSize = '26px';
  this.element.style.color = 'hsl('+(Math.random()*360|0)+',80%,50%)';
  this.element.innerHTML = c;
  container.appendChild(this.element);

  this.update = function() {
    if (_this.y > 800) {
      _this.y = 80 + Math.random() * 4;
      _this.x = _this.range[0] + Math.random() * _this.range[1];
    }
    _this.y += _this.v.y;
    _this.x += _this.v.x;
    this.element.style.opacity = 1;
    this.element.style.transform = 'translate3d(' + _this.x + 'px, ' + _this.y + 'px, 0px)';
    this.element.style.webkitTransform = 'translate3d(' + _this.x + 'px, ' + _this.y + 'px, 0px)';
    this.element.style.mozTransform = 'translate3d(' + _this.x + 'px, ' + _this.y + 'px, 0px)';
  };
}
function animate() {
  for (var i in circles) {
    circles[i].update();
  }
  requestAnimationFrame(animate);
}
animate();
</script>
</body>
</html>
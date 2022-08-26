<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Notification</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="stylesheet.css"> -->
    <!-- new  -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- close nwe -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- font assome icon cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/js/v4-shims.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <!-- close font assume cds  -->

<style type="text/css">
    /*header css */
    /*Configurações Globais*/
html, body {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;

}
a {
    text-decoration: none;
}
li {
    list-style: none;
}
/*Início das configurações da header*/
header {
    width: 100%;
    height: 50px;
    line-height: 50px;
    text-align: center;
    font-family: sans-serif;
    background-color: #f1c40f;
}
.brand {
    width: auto;
    height: 100%;
    float: left;
    margin: 0 0 0 5%;
    font-family: sans-serif;
    font-size:25px ;
}
/*Início das configurações da Navigation*/
.menu {
    width: 80%;
    height: 100%;
    float: right;
}
.menu ul {
    width: 100%;
    height: inherit;
    margin: 0;
    padding: 0;
    display: -webkit-box;      /* OLD - iOS 6-, Safari 3.1-6 */
    display: -moz-box;         /* OLD - Firefox 19- (buggy but mostly works) */
    display: -ms-flexbox;      /* TWEENER - IE 10 */
    display: -webkit-flex;     /* NEW - Chrome */
    display: flex;             /* NEW, Spec - Opera 12.1, Firefox 20+ */
}
.menu ul a {
    width: 20%;
    height: inherit;
    color: #222;
    display: inline-block;
    text-decoration: none;
}
.menu ul a:hover {
    background-color: #222;
    color: #fff;
    text-decoration: none;
}
#menuToggle {
    display: none;
}
.menu-icon {
    display: none;
}
/*Início das configurações da Navigation com dispositivos < 768px*/
@media screen and (max-width: 768px) {
    .menu {
        width: 100%;
        height: auto;
    }
    .menu ul {
        display: block;
        max-height: 0;
      overflow: hidden;
      -webkit-transition: max-height 0.3s;
      -moz-transition: max-height 0.3s;
        -ms-transition: max-height 0.3s;
        -o-transition: max-height 0.3s;
      transition: max-height 0.3s;
        /*Para fazer com que o menu saia da esquerda, você deve trocar max-height por max-width*/
        /*Para fazer com que o menu saia da direita, você deve trocar max-height por max-width e setar float: right*/
    }
    .menu ul a {
        text-align: left;
        width: 100%;
        height: 50px;
        background-color: #f1c40f;
        padding: 10px 0px 10px 5%;
    }
    .menu-icon {
        width: 100px;
        height: inherit;
        display: block;
        position: absolute;
        top: 0;
        right: 0;
        line-height: 60px;
    }
    #menuToggle:checked ~ ul {
        max-height: 750px;
        /*Para fazer com que o menu saia da esquerda ou direita, você deve trocar max-height por max-width*/
    }
    .menu-icon i {
        font-size: 1.7em;
    }
}
/*close css of header*/
/*start footer*/
ul {
  list-style: none;
  padding-left: 0;
}
footer {
  background-color: #555;
  color: #bbb;
  line-height: 1.5;
}
footer a {
  text-decoration: none;
  color: #eee;
}
a:hover {
  text-decoration: underline;
}
.ft-title {
  color: #fff;
  font-family: "Merriweather", serif;
  font-size: 1.375rem;
  padding-bottom: 0.625rem;
}
/* Sticks footer to bottom */
/*body {
  display: flex;
  min-height: 100vh;
  flex-direction: column;
}*/
.container {
  flex: 1;
}
/* Footer main */
.ft-main {
  padding: 1.25rem 1.875rem;
  display: flex;
  flex-wrap: wrap;
}
@media only screen and (min-width: 29.8125rem /* 477px */) {
  .ft-main {
    justify-content: space-evenly;
  }
}
@media only screen and (min-width: 77.5rem /* 1240px */) {
  .ft-main {
    justify-content: space-evenly;
  }
}
.ft-main-item {
  padding: 1.25rem;
  min-width: 12.5rem;
}

/* Footer main | Newsletter form */
form {
  display: flex;
  flex-wrap: wrap;
}
input[type="email"] {
  border: 0;
  padding: 0.625rem;
  margin-top: 0.3125rem;
}
input[type="submit"] {
  background-color: #00d188;
  color: #fff;
  cursor: pointer;
  border: 0;
  padding: 0.625rem 0.9375rem;
  margin-top: 0.3125rem;
}
/* Footer social */
.ft-social {
  padding: 0 1.875rem 1.25rem;
}
.ft-social-list {
  display: flex;
  justify-content: center;
  border-top: 1px #777 solid;
  padding-top: 1.25rem;
}
.ft-social-list li {
  margin: 0.5rem;
  font-size: 1.25rem;
}
/* Footer legal */
.ft-legal {
  padding: 0.9375rem 1.875rem;
  background-color: #333;
}
.ft-legal-list {
  width: 100%;
  display: flex;
  flex-wrap: wrap;
}
.ft-legal-list li {
  margin: 0.125rem 0.625rem;
  white-space: nowrap;
}
/* one before the last child */
.ft-legal-list li:nth-last-child(2) {
    flex: 1;
}
 
 /*css of notification*/
  @import url(//db.onlinewebfonts.com/c/2f407d03c34861737fe4b85ab35eb729?family=Cera+Pro);

@font-face {font-family: "Cera Pro"; src: url("//db.onlinewebfonts.com/t/2f407d03c34861737fe4b85ab35eb729.eot"); src: url("//db.onlinewebfonts.com/t/2f407d03c34861737fe4b85ab35eb729.eot?#iefix") format("embedded-opentype"), url("//db.onlinewebfonts.com/t/2f407d03c34861737fe4b85ab35eb729.woff2") format("woff2"), url("//db.onlinewebfonts.com/t/2f407d03c34861737fe4b85ab35eb729.woff") format("woff"), url("//db.onlinewebfonts.com/t/2f407d03c34861737fe4b85ab35eb729.ttf") format("truetype"), url("//db.onlinewebfonts.com/t/2f407d03c34861737fe4b85ab35eb729.svg#Cera Pro") format("svg"); }

@import url(//db.onlinewebfonts.com/c/98b78079f5ee4295c40260785b4e4fbf?family=Cera+Pro);

@font-face {font-family: "Cera Pro Bold"; src: url("//db.onlinewebfonts.com/t/98b78079f5ee4295c40260785b4e4fbf.eot"); src: url("//db.onlinewebfonts.com/t/98b78079f5ee4295c40260785b4e4fbf.eot?#iefix") format("embedded-opentype"), url("//db.onlinewebfonts.com/t/98b78079f5ee4295c40260785b4e4fbf.woff2") format("woff2"), url("//db.onlinewebfonts.com/t/98b78079f5ee4295c40260785b4e4fbf.woff") format("woff"), url("//db.onlinewebfonts.com/t/98b78079f5ee4295c40260785b4e4fbf.ttf") format("truetype"), url("//db.onlinewebfonts.com/t/98b78079f5ee4295c40260785b4e4fbf.svg#Cera Pro") format("svg"); }

/*html {
    font-size: 23px;
    margin: 57px;
    font-family: 'Cera Pro';
}
*/
h1 {
    margin: 0;
    font-family: 'Cera Pro Bold';
}

b {
    font-family: 'Cera Pro Bold';
}

/* Alert */
.alert {
    padding: 20px;
    background-color: #ffcfcc;
    border: 1px solid #f44336;
    border-left: 9px solid #f44336;
    color: #f44336;
    opacity: 0.83;
    transition: opacity 0.6s;
    margin-bottom: 15px;
    border-radius: 6px;
}

/* Alert Success */
.alert.success {
    border: 1px solid #04AA6D;
    border-left: 9px solid #04AA6D;
    background-color: #a3ffdd;
    color: #04AA6D;
}

/* Alert Info */
.alert.info {
    border: 1px solid #2196F3;
    border-left: 9px solid #2196F3;
    background-color: #c3d9eb;
    color: #2196F3;
}

/* Alert Warning */
.alert.warning {
    border: 1px solid #ff9800;
    border-left: 9px solid #ff9800;
    background-color: #ffe1b5;
    color: #ff9800;
}

/* Closebtn */
.closebtn {
    padding-left: 15px;
    color: #f44336;
    font-weight: bold;
    float: right;
    line-height: 18px;
    cursor: pointer;
    transition: 0.5s;
    font-size: 23px;
}

/* Closebtn Success */
.closebtn.success {
    padding-left: 15px;
    color: #04AA6D;
    font-weight: bold;
    float: right;
    line-height: 18px;
    cursor: pointer;
    transition: 0.5s;
    font-size: 23px;
}

/* Closebtn Info */
.closebtn.info {
    padding-left: 15px;
    color: #2196F3;
    font-weight: bold;
    float: right;
    line-height: 18px;
    cursor: pointer;
    transition: 0.5s;
    font-size: 23px;
}

/* Closebtn Warning */
.closebtn.warning {
    padding-left: 15px;
    color: #ff9800;
    font-weight: bold;
    float: right;
    line-height: 18px;
    cursor: pointer;
    transition: 0.5s;
    font-size: 23px;
}

.closebtn:hover {
    transform: scale(1.3);
}

 /*close css of notification*/
</style>
</head>
<body>
   <header>
        <figure class="brand"><a href="<?= base_url() ?>ecommers"><b>WhoCart</b></a></figure>
        <nav class="menu">
            <input type="checkbox" id="menuToggle">
            <label for="menuToggle" class="menu-icon"><i class="fa fa-bars"></i></label>
            <ul>
                <a href="<?= base_url() ?>ecommers"><li>Home</li></a>
                <a href="<?= base_url() ?>Accountpage"><li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg> Account</li></a>
                <a href="<?= base_url() ?>orderpage"><li><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-check" viewBox="0 0 16 16">
  <path d="M11.354 6.354a.5.5 0 0 0-.708-.708L8 8.293 6.854 7.146a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z"/>
  <path d="M.5 1a.5.5 0 0 0 0 1h1.11l.401 1.607 1.498 7.985A.5.5 0 0 0 4 12h1a2 2 0 1 0 0 4 2 2 0 0 0 0-4h7a2 2 0 1 0 0 4 2 2 0 0 0 0-4h1a.5.5 0 0 0 .491-.408l1.5-8A.5.5 0 0 0 14.5 3H2.89l-.405-1.621A.5.5 0 0 0 2 1H.5zm3.915 10L3.102 4h10.796l-1.313 7h-8.17zM6 14a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm7 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg>Order</li></a>
                <!-- <a href="#"><li>Offer</li></a> -->
                <!-- <a href="#"><li>Language</li></a> -->
            
              <a href="<?= base_url() ?>#"><li>My Cart</li></a>
              <!-- <a href="#"><li>Help</li></a> -->
              <a href="<?= base_url() ?>contactUs"><li>Contact</li></a>
              <a href="<?= base_url() ?>regester1"><li>Regester</li></a>
              <a href="<?= base_url() ?>Accountpage"><li>Login</li></a>
              <a href="<?= base_url() ?>notificarion"><li>Notification</li></a>
            </ul>
        </nav>
    </header>

<div class="container1" style="position:relative;">
  <h1>What is Alert Messages?</h1>
Alert messages can be used to notify the user about something special: danger, success, information or warning.
<br>
<br>
<div class="alert">
  <div class="closebtn">×</div>  
  <i style="margin-right: 14px;" class="fa fa-exclamation fa-1x"></i> Indicates a <b>dangerous</b> or <b>potentially negative action</b>.
</div>
<div class="alert success">
  <span class="closebtn success">×</span>
  <i class="fa fa-check fa-1x"></i> 
  Indicates a <b>successful</b> or <b>positive action</b>.
</div>
<div class="alert info">
  <span class="closebtn info">×</span>
  <i style="margin-right: 12px;" class="fa fa-info fa-1x"></i>  
  Indicates a <b>neutral informative change</b> or <b>action</b>.
</div>
<div class="alert warning">
  <span class="closebtn warning">×</span> 
  <i class="fa fa-warning fa-1x"></i>
  Indicates a <b>warning</b> that might need attention.
</div>
<div class="alert warning">
  <span class="closebtn warning">×</span> 
  <i class="fa fa-warning fa-1x"></i>
  Indicates a <b>warning</b> that might need attention.
</div>
<div class="alert warning">
  <span class="closebtn warning">×</span> 
  <i class="fa fa-warning fa-1x"></i>
  Indicates a <b>warning</b> that might need attention.
</div>

<div class="alert warning">
  <span class="closebtn warning">×</span> 
  <i class="fa fa-warning fa-1x"></i>
  Indicates a <b>warning</b> that might need attention.
</div>

<script >var acc = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].onclick = function(){
        var div = this.parentElement;
        div.style.opacity = "0";
        setTimeout(function(){ div.style.display = "none"; }, 600);
    }
}</script>

























    <!-- footer start -->
 
   <footer>
  <!-- Footer main -->
  <section class="ft-main">
    <div class="ft-main-item">
      <h2 class="ft-title">About</h2>
      <ul>
        <li><a href="#">Services</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Pricing</a></li>
        <li><a href="#">Customers</a></li>
        <li><a href="#">Careers</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Resources</h2>
      <ul>
        <li><a href="#">Docs</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">eBooks</a></li>
        <li><a href="#">Webinars</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Contact</h2>
      <ul>
        <li><a href="#">Help</a></li>
        <li><a href="#">Sales</a></li>
        <li><a href="#">Advertise</a></li>
      </ul>
    </div>
    <div class="ft-main-item">
      <h2 class="ft-title">Stay Updated</h2>
      <p>Get free updates before others do!</p>
        <form method="post" action="<?=base_url()?>whocart/ecommers">
          <div class="feedback">
          <input type="text" name="feedback" placeholder="Enter your feedback" style="height:43px">
        <input type="submit" value="Submit">
        </div>
      </form>
    </div>
  </section>
<!-- heder close -->


  <!-- Footer social -->
  <section class="ft-social" >
    <ul class="ft-social-list">
      <li><a href="https://www.facebook.com/profile.php?id=100036564802583"><i class="fab fa-facebook"></i></a></li>
      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
      <li><a href="https://www.instagram.com/hariomkumar6809?massage=hi."><i class="fab fa-instagram"></i></a></li>
      <li><a href="#"><i class="fab fa-github"></i></a></li>
      <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
      <li><a href="https://youtube.com/channel/UC-M_tkkBslhxGtk_X2pP1Nw"><i class="fab fa-youtube"></i></a></li>
    </ul>
  </section>

</div>

  <!-- Footer legal -->
  <section class="ft-legal">
    <ul class="ft-legal-list">
      <li><a href="#">Terms &amp; Conditions</a></li>
      <li><a href="#">Privacy Policy</a></li>
      <li style="font-family: cursive;">Welcome To <span style="color:  #00d188; font-weight:bold;">WhoCart</span></li>
    </ul>
  </section>
</footer>


 <!-- close footer -->



</body>
</html>






























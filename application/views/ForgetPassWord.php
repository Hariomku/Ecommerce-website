<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://cdn.lineicons.com/2.0/LineIcons.css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>


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

        <style >


            /*header and footer css start*/

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
              /*header and footer css close*/

            html, body.auth_class {
  background: #f9f4ff;
}
.login-container {
  display: flex;  
  margin-top:5%;
  margin-bottom: 5%;
  margin-left:3rem ;
  border: 0px solid #CCD1D1;
  border-radius: 12px;
  box-shadow: 0 0px 28px 0 rgb(0 0 0 / 8%);
  max-width: 50%;
  background: #FFF;
  z-index: 1;
  position: relative;
}
img.triangleA {
  position: absolute;
  margin-left: -16px;
  width: 60px;
  border-radius: 12px 0px 0px 0px;
}
img.triangleB {
  position: absolute;
  right: 0px;
  bottom: 0px;
  width: 360px;
  z-index: 0;
}
.welcome_auth {
  align-items: center;
  display: flex;
  justify-content: center;
}
.auth_welcome a {
  font-weight: 400;
}
.auth_welcome {
  font-weight: 100;
  font-size: 1.5em;
  background: -webkit-linear-gradient( 45deg, #07dd97, #beffe7);
  background-size: 100%;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  background-color: black;
  max-width: 170px;
}
a.auth_branding_in img {
  width: 60px;
  height: 60px;
  border-radius: 1000px;
}

.login-form {
  background: #fbfbfb;
  border-radius: 0px 12px 12px 0px;
  align-items: center;
  display: flex;
  justify-content: center;
}
.login_form_in {
  padding: 4em 1em;
}
.login-form h1 {
  font-size: 1.2em;
  max-width: 600px;
  margin: 0 auto;
  color: #969696;
  line-height: 1.5em;
  padding: 1.2em 0px .8em;
}
.lni {
  display: inline-block;
  font: normal normal normal 1em/1 'LineIcons';
  speak: none;
  text-transform: none;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
.google_signup {
  margin-top: .8em;
}
.google_signup a {
  background: #DB4437;
  color: #FFF;
  display: block;
  text-align: center;
  padding: 12px 4px;
  border-radius: 5px;
}
.btn-primary {
  color: #fff;
  background-color: #5d00ff;
  border-color: #5d00ff;
}
.btn-primary:hover {
  color: #fff;
  background-color: #2900b7;
  border-color: #2900b7;
}
.google_signup a {
  background: #DB4437;
  color: #FFF;
  display: block;
  text-align: center;
  padding: 12px 4px;
  border-radius: 5px;
}
.google_signup a:hover {
  background: #d81505;
  color: #FFF;
}
.other_auth_links a:nth-child(2) {
  float: right;
}
a {
  text-decoration: none;
  color: #afafaf;
}
a:hover {
  text-decoration: none;
  color: #616161;
}    
.alert-success {
  background-color: rgb(190 255 231 / 33%);
  color: #07dd97;
  font-size: .9em;
}   
        </style>

    </head>
    <body class="auth_class">
        <!-- header start -->

   <header>
        <figure class="brand"><a href="ecommers"><b>WhoCart</b></a></figure>
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
                <a href="#"><li>Offer</li></a>
                <a href="#"><li>Language</li></a>
            
              <a href="#"><li>My Cart</li></a>
              <a href="#"><li>Help</li></a>
              <a href="<?=base_url()?>contactUs"><li>Contact</li></a>
              <a href="<?= base_url() ?>regester1"><li>Regester</li></a>
              <a href="<?= base_url() ?>Accountpage"><li>Login</li></a>
              <a href="<?= base_url() ?>notificarion"><li>Notification</li></a>
            </ul>
        </nav>
    </header>


        <!-- header close -->

        <div class="container login-container" >
            <img class="triangleA" src="https://res.cloudinary.com/procraftstudio/image/upload/v1613965232/triangleA_lwqhnl.png" alt='Onestop triangle'>
          <div class="row">
            <div class="col-md-6 welcome_auth" >
                <div class="auth_welcome" style="width:100%;">
                    Dear sir/maa'm Kindly make sure  <span><a href="https://procraft.studio">When You Have Your Email Is Present Then Forget/ reset password</a></span>
                </div>
            </div>         
            <div class="col-md-6 login-form">
                <div class="login_form_in">
                    <div class="auth_branding">
                        <a class="auth_branding_in" href="https://procraft.studio"><img src="https://res.cloudinary.com/procraftstudio/image/upload/v1613964589/Procraft-Studio-Logo-1_tnfxuj.jpg" alt='Procraft Studio'></a>
                    </div>
                  <h1 class="auth_title text-left">Password Reset</h1>
                  <form>
                    <div class="alert alert-success bg-soft-primary border-0" role="alert">
                        Enter your email address and we'll send you an email with instructions to reset your password.
                    </div>                    
                    <div class="form-group" style="width:100%">
                      <input type="email" class="form-control" name="email" placeholder="Email Address">
                    </div>
                    <div class="form-group" style="width:100%">
                      <button type="button" class="btn btn-primary btn-lg btn-block">Reset Password</button>
                    </div>
                    <div class="form-group other_auth_links" style="display:flex;">
                        <a class="" href="Accountpage" style="background-color:#00d188;padding-left:10px; padding-right: 10px; border-radius:5px;color:whitesmoke;">Login</a>
                        <a class="" href="regester1" style="margin-left:6rem;background-color:#00d188;padding-left:2px; padding-right: 2px; border-radius:5px;color:whitesmoke;">Register</a>
                    </div>
                  </form>
                </div>
            </div>       
          </div>
        </div>

        <img class="triangleB" src="https://res.cloudinary.com/procraftstudio/image/upload/v1613965232/triangleB_isffjy.png" alt='Onestop triangle'>


 <!-- footer start -->
 <div class="container"></div>
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

  <!-- Footer social -->
 <section class="ft-social">
    <ul class="ft-social-list">
      <li><a href="https://www.facebook.com/profile.php?id=100036564802583"><i class="fab fa-facebook"></i></a></li>
      <li><a href="#"><i class="fab fa-twitter"></i></a></li>
      <li><a href="https://www.instagram.com/hariomkumar6809?massage=hi."><i class="fab fa-instagram"></i></a></li>
      <li><a href="#"><i class="fab fa-github"></i></a></li>
      <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
      <li><a href="https://youtube.com/channel/UC-M_tkkBslhxGtk_X2pP1Nw"><i class="fab fa-youtube"></i></a></li>
    </ul>
  </section>

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
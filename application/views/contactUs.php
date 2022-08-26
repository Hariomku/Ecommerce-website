<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ContactUs</title>
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


  <!-- link for Account section -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.css">
  <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Roboto&display=swap" rel="stylesheet">
  <!-- close linck -->
<!-- cdn for alert massage -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- close cdn for aleart -->
<style type="text/css">
    /*header css */
    /*Configurações Globais*/
html, body {
    width: 100%;
    height: 100%;
    margin: 0;
    padding: 0;
     font-family: 'Tangerine', serif;
  /*font-size: 48px;*/
  text-shadow: 4px 4px 4px #aaa;
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

/*contact us code css */



.section-contact {
    padding: 120px;
    background-color: #fff;
}

.section-contact .header-section .title {
  position: relative;
  margin-bottom: 17px;
  text-transform: uppercase;
    font-weight: 700;
    font-size: 55px;
}

.section-contact .header-section .title .dot {
    display: inline-block;
  position: absolute;
    bottom: 8px;
    width: 8px;
    height: 8px;
    margin-left: 3px;
    background-color: #df383f;
}

.section-contact .header-section .description {
  font-family: "Roboto", sans-serif;
  color: #2a6287;
}

.section-contact .header-section .big-title {
  position: absolute;
    bottom: 100%;
    left: 50%;
    transform: translate(-50%,70%);
    font-size: 120px;
    font-weight: 700;
    opacity: 0.15;
}

.section-contact .form-contact {

}

.section-contact .form-contact .single-input {
  position: relative;
    margin-top: 40px;
}

.section-contact .form-contact .single-input i {
  position: absolute;
    top: 5px;
    left: 15px;
    color: #de3842;
}

.section-contact .form-contact .single-input input,
.section-contact .form-contact .single-input textarea {
  width: 100%;
    border: none;
    border-bottom: 2px solid #07395c;
    padding-left: 50px;
    padding-bottom: 15px;
    font-size: 15px;
    font-weight: 700;
    text-transform: uppercase;
    transition: border .3s;
}

.section-contact .form-contact .single-input input::placeholder,
.section-contact .form-contact .single-input textarea::placeholder {
  color: rgba(7, 57, 92, .3);
}

.section-contact .form-contact .single-input input:focus,
.section-contact .form-contact .single-input textarea:focus {
  border-color: #df383f;
}

.section-contact .form-contact .single-input textarea {
  height: 150px;
  min-height: 50px;
}

.section-contact .form-contact .submit-input input {
  margin-top: 40px;
    padding: 15px 50px;
    background-color: #de3842;
    color: #fff;
    border: none;
    font-weight: 700;
    transition: background-color .3s;
}

.section-contact .form-contact .submit-input input:hover {
  background-color: #07395c;
}

@media (max-width: 575.99px) {
  .section-contact {
      padding: 80px 60px;
  }

  .section-contact .header-section .title {
      font-size: 40px;
  }

  .section-contact .header-section .big-title {
    font-size: 80px;
  }

  .section-contact .header-section .description {
    font-size: 14px;
  }
}

@media (min-width: 576px) and (max-width: 767.99px) {
  .section-contact {
      padding: 80px 60px;
  }

  .section-contact .header-section .title {
      font-size: 45px;
  }

  .section-contact .header-section .big-title {
    font-size: 100px;
  }
}

@media (min-width: 768px) and (max-width: 991.99px) {
  .section-contact {
      padding: 80px 60px;
  }

  .section-contact .header-section .title {
      font-size: 45px;
  }

  .section-contact .header-section .big-title {
    font-size: 100px;
  }
}


/*close contact code css Css*/
</style>
</head>
<body>
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
                <!-- <a href="#"><li>Offer</li></a> -->
                <!-- <a href="#"><li>Language</li></a> -->
            
              <a href="#"><li>My Cart</li></a>
              <!-- <a href="#"><li>Help</li></a> -->
              <a href="<?= base_url() ?>contactUs"><li>Contact</li></a>
              <a href="<?= base_url() ?>regester1"><li>Regester</li></a>
              <a href="<?= base_url() ?>Accountpage"><li>Login</li></a>
              <a href="<?= base_url() ?>notificarion"><li>Notification</li></a>
            </ul>
        </nav>
    </header>
<!-- header colose -->





<!-- contact page start -->

<div>
  <!-- START CONTACT SECTION -->
  <div class="container">
    <div class="section-contact">
      <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8">
          <div class="header-section text-center">
            <h2 class="title">WhoCart
              <span class="dot"></span>
              <span class="big-title" style=" font-family: 'Tangerine', serif;
/*  font-size: 48px;*/
  text-shadow: 4px 4px 4px #aaa;">CONTACT</span>
            </h2>
            <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean consectetur commodo risus, nec pellentesque turpis efficitur non.</p>
            
          </div>
        </div>
      </div>
      <div class="form-contact">
        <form method="post" action="<?=base_url()?>whocart/contactUs">
          <div class="row">
            <div class="col-md-6">
              <div class="single-input">
                <i class="fas fa-user"></i>
                <input type="text" name="name" placeholder="ENTER YOUR NAME" id="name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="single-input">
                <i class="fas fa-envelope"></i>
                <input type="text" name="email" placeholder="ENTER YOUR EMAIL" id="email">
              </div>
            </div>
            <div class="col-md-6">
              <div class="single-input">
                <i class="fas fa-phone"></i>
                <input type="text" name="phoneNumber" placeholder="ENTER YOUR PHONE NUMBER" id="phone">
              </div>
            </div>
            <div class="col-md-6">
              <div class="single-input">
                <i class="fas fa-check"></i>
                <input type="text" name="subject" placeholder="ENTER YOUR SUBJECT" id="subject">
              </div>
            </div>
            <div class="col-12">
              <div class="single-input">
                <i class="fas fa-comment-dots"></i>
                <textarea placeholder="ENTER YOUR MESSAGE"></textarea>
              </div>
            </div>
            <div class="col-12">
              <div class="submit-input text-center">
                <input type="submit" name="submit" value="SUBMIT NOW" id="submit">
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


  <script>
    
    $('#submit').click(function(){
      var name1=$('#name').val();
      var email1=$('#email').val();
      var phone1=$('#phone').val();
      var subject1=$('#subjcet').val();
      if(name1=='' || email1=='' || phone1=='' || subject1==''){
        swal({
          title: "Fields Empty!!",
          text: "Kindly fill the all Above Information!",
          icon: "warning",
           button: "ok",
          });
        return false;
      }
      else{
        swal({
              title: "Your form is sucessFylly submitted!",
              icon: "success",
              button: "Yes!!!",
});
      }
    });

  </script>
  <!-- / END CONTACT SECTION -->
  </div>

<!-- contact page colese -->




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
      <li><a href="http://www.instagram.com/hariomkumar6809?massage=hi."><i class="fab fa-instagram"></i></a></li>
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


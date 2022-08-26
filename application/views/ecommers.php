<!DOCTYPE html>
<html>
<head>
  <title>WhoCart</title>
  <link rel="image" type="icons/image" href="logoh.png">
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



  <!-- boostrap icon for cart section cdn start -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">  <!-- close ion icon cdn -->

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

/*product greed css */
body {
    margin: 0;
    font-family: Roboto,-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: .8125rem;
    font-weight: 400;
    line-height: 1.5385;
    color: #333;
    text-align: left;
    /*background-color: #2196F3;*/
}

.mt-50{

    margin-top: 50px;
}

.mb-50{

    margin-bottom: 50px;
}



.card {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .1875rem;
}

.card-img-actions {
    position: relative;
}
.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.25rem;
    text-align: center;
}

.card-img{

    width: 350px;
}

.star{
        color: red;
}

.bg-cart {
    background-color:orange;
    color:#fff;
}

.bg-cart:hover {
    
    color:#fff;
}

.bg-buy {
    background-color:green;
    color:#fff;
    padding-right: 29px;
}
.bg-buy:hover {
    
    color:#fff;
}

a{

    text-decoration: none !important;
}
/*close product gride*/
/*footer css */
/* Generic styling */
/** {
  box-sizing: border-box;
  font-family: "Lato", sans-serif;
  margin: 0;
  padding: 0;
}*/
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
/*footer close css*/


/*product grid2 css*/
h1{
  text-align: center;
  margin-top: 30px;
  font-family: 'Source Serif Pro', serif;
}

.buttons{
    font-size: 22px;
    margin-top: 2%;
    margin-left: 4.2%;
}

.fa:hover{
    color: darkcyan;
}

.container{
  display: flex;
  flex-flow: column nowrap;
}
/*CSS Grid*/
.section-grid{
   display: flex; 
   padding-left: 25px;
   padding-right: 25px;
}
.grid-prod{
  flex: 1 1 auto;
  display: flex; 
  flex-flow: row wrap;  
}
.prod-grid{
  flex: 1 1 25%;
  margin:2%;
  padding:12px;
  border: 2px solid #000;
}

.prod-grid img{
  width:100%;
}
h3, p{
  text-align: center;
  line-height: 1.5;
  letter-spacing: 1px;
}

.btn{
    background: darkcyan;
    border: 1px solid darkcyan;
    border-radius: 6px;
    color: white;
    font-size: 18px;
    width: 150px;
    height: 40px;
    position: right;
    margin:3px; 
    letter-spacing: 1px;
    display: inline-block;
}
.btn:hover{
    background: white;
    border: 1px solid darkcyan;
    border-radius: 6px;
    color: darkcyan;
    font-size: 16px;
    width: 150px;
    height: 40px;
    position: right;
    margin: 3px; 
    letter-spacing: 1px;
    /*font-weight: bold;*/
    display: inline-block;
}
button{
  float: right;
}

/*CSS List*/
.section-list{
   display: flex; 
   padding: 2% 4%; 
}
table {
  width: 100%;
  margin: 10px 10px;
  border:2px solid #000;
  border-collapse: collapse;
  border-spacing: 0;
}
table tr td {
  padding: 10px;
  border-top: 2px solid #000;
}
tr td img{
  width:100%;
}
.btn-list{
    background: darkcyan;
    border: 1px solid darkcyan;
    border-radius: 6px;
    color: white;
    font-size: 22px;
    width: 200px;
    height: 40px;
    position: right;
    margin: 10px; 
    margin-top: 10%;
    letter-spacing: 1px;
    display: inline-block;
    
}
.btn-list:hover{
    background: white;
    border: 2px solid darkcyan;
    
    color: darkcyan;

    margin: 10%; 

}
button{
  float: right;
}

@media (min-width : 320px) and (max-width : 480px) { 
  .section-list, .buttons{
    display: none;
  }
}
/*close product gride 2*/
/*product gride 3*/
.card {
   margin-bottom: 1rem;
}

.list-view {
  .row {
    > [class*='col-'] {
      max-width: 100%;
      flex: 0 0 100%;
    }
  }
  .card {
    @media (max-width: 575.98px) {
     flex-direction: column;
    }
    flex-direction: row;
    > .card-img-top {
     width: auto;
    }
    
    .card-body {
      display: inline-block;
    }
  }
}



/*close product gride 3*/
/*main slider css*/
/* Slider */
.carousel-item {
  height: 60vh;
  background-repeat: no-repeat;
  background-position: center center;
  background-size: cover;
}

/*close main slider css*/


/*ion icon css code for size of box*/

.bi {
  font-size: 16px;

}

#bi1{
    font-size: 22px;
}

/*close css of icon of cart*/

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
            
              <a href="#"><li class="cart"> <i class="bi bi-bag-check"></i> <span style="color:whitesmoke;"> 0</span> My Cart</li></a>
              <!-- <a href="#"><li>Help</li></a> -->
              <a href="<?= base_url() ?>contactUs"><li>Contact</li></a>
              <a href="<?= base_url() ?>regester1"><li>Regester</li></a>
              <a href="<?= base_url() ?>Accountpage"><li>Login</li></a>
              <a href="<?= base_url() ?>notificarion"><li>Notification</li></a>
            </ul>
        </nav>
    </header>


    <!-- sider -->
    <!-- Slider -->
<section class="slider-section">
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
            <li data-target="#carousel" data-slide-to="4"></li>

        </ol> <!-- End of Indicators -->

        <!-- Carousel Content -->
        <div class="carousel-inner" role="listbox">



                  <?php $i=1;
       foreach ($this->db->get('slider')->result_array() as  $value) {
       ?>
            <div class="carousel-item <?php if($i==1) { echo "active";}  ?> ">
                <img src="<?= base_url()?>data/<?= $value['image']?>" style="height:450px; width: 100%;">
                
            </div> 
        <?php $i++; }  ?>


            
        </div> <!-- End of Carousel Content -->

        <!-- Previous & Next -->
        <a href="#carousel" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
        <a href="#carousel" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
        </a>
    </div> <!-- End of Carousel -->
</section> <!-- End of Slider -->


                
    <!-- slider close -->
  

          <!-- product grid  -->
<div class="container d-flex justify-content-center mt-50 mb-50" style="background-color: #2196F3;">
            
        <div class="row">

            <?php $i=1; foreach ($this->db->get('productslider1')->result_array() as  $value) { ?>
           <div class="col-md-4 mt-2">
            
                
                <div class="card">
                                    <div class="card-body">
                                        
                                        <div class="card-img-actions">
                                            
                                                <img src="<?= base_url()?>data/<?= $value['image']?>" class="card-img img-fluid" width="96" height="33%" alt="">
                                              
                                           
                                        </div>

                                       
                                    </div>

                                    <div class="card-body bg-light text-center">
                                        <div class="mb-2">
                                            <h6 class="font-weight-semibold mb-2">
                                                <a href="#" class="text-default mb-2" data-abc="true"><?=$value['aboutproduct']?></a>
                                            </h6>

                                            <a href="#" class="text-muted" data-abc="true"><?=$value['name_of_product']?></a>
                                        </div>

                                        <h3 class="mb-0 font-weight-semibold">₹<?=$value['prise_of_product']?></h3>
                                        
                                        <div>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>
                                           <i class="fa fa-star star"></i>

                                        </div>

                                        <div class="text-muted mb-3">34 reviews</div>
                                        <div >
                                            <div class="row" style="display: inline-block;">
                                                <div class="col-md-6" style="width:20px;">
                                                    <a href="" class="btn btn-primary" id="add-cart" ><i class="bi bi-cart-check" id="bi1"></i> Add Cart</a>
                                                </div>
                                                <div class="col-md-6">
                                                    <a href="buy" class="btn btn-danger" id="buy" style="background-color:blue;"><i class="bi bi-cart-check" id="bi1" ></i>BUY Online</a>
                                                </div>
                                            </div>
                                        </div>
                                       

                                        
                                    </div>
                                </div>
                                
                             </div>
                               <?php $i++; }  ?>





        </div>
    </div>

 
                
          <!-- close product gride -->


          <!-- product gride 2 -->
           <title>Product List and Grid View</title>
<meta name"viewport" content="width=device-width, user-scalable=no, initial=scale=1.0, maximun-scale=1.0, minimun-scale=1.0" >

<h1>Best Product By Getting Discount in Percentage On Each Product</h1>

<!--Buttons of grid and list-->
 <div class="buttons">
<i class="fa fa-th-large"  id="showdiv1" aria-hidden="true"></i> &nbsp;  <i class="fa fa-th-list" id="showdiv2" aria-hidden="true"></i> 
</div>

<div class="container">
  <!--Product Grid-->
  <div id="div1">
    <section class="section-grid">
    <div class="grid-prod">

<?php $i=1; foreach ($this->db->get('productsection2')->result_array() as  $value) { ?>


     <div class="prod-grid"><img src="<?= base_url()?>data/<?= $value['image']?>" alt="Product Image Not Show" style="width:100%;height:200px;">
       <h4 style="text-align: center;"><?=$value['aboutproduct']?></h4> 
       <p style="color: #00d188;text-align: center;"> <?=$value['name_of_product']?></p>   
            <h4 style="text-align: center;"> ₹<?=$value['Current_Price_of_product']?> <del> ₹<?=$value['Old_Price_of_product']?></del> <?=$value['Discount_Persentage_On_Product']?>% off</h4>
        <div class="text-muted mb-3" style="text-align: center;">
        <a href="buy" class="btn btn-primary" id="add-cart"><i style="width:60px" class="bi bi-cart-check" id="bi1"></i>Buy Online</a>
         </div>

     </div>


    <?php $i++; }  ?>



    </div>
     </section> 
  </div>
 <!--Product List-->         
 
</div>  

<script>
    $(function() {
    $('#showdiv1').click(function() {
        $('div[id^=div]').hide();
        $('#div1').show();
    });
    $('#showdiv2').click(function() {
        $('div[id^=div]').hide();
        $('#div2').show();
    });

})
</script>
    

          <!-- close product gride 2 -->


 <!-- product gride 3          -->
 <div class="container mb-3 mt-3">
</div>
<div class="container grid-container">
  <div class="row">

    <?php $i=1; foreach ($this->db->get('productsection3')->result_array() as  $value) { ?>


    <div class="col-12 col-md-6 col-lg-4">
      <div class="card">
        <img class="card-img-top" src="<?= base_url()?>data/<?= $value['image']?>" alt="Card image cap" style="width:100%;height:200px;">
        <div class="card-body">
          <h4 style="text-align: center;"><?=$value['aboutproduct']?></h4>
          <p style="color: #00d188;text-align: center;"> <?=$value['name_of_product']?></p> 
         <h4 style="text-align: center;"> ₹<?=$value['Current_Price_of_product']?> <del> ₹<?=$value['Old_Price_of_product']?></del> <?=$value['Discount_Persentage_On_Product']?>% off </h4>
        </div>
         <div class="text-muted mb-3" style="text-align: center;">
       <a href="buy" class="btn btn-primary" id="add-cart"><i style="width:60px" class="bi bi-cart-check" id="bi1"></i>Buy Online</a>
         </div>
      </div>
    </div>


<?php $i++; }  ?>
   
  </div>
  
</div>

<script>
    

function showList(e) {
  var $gridCont = $('.grid-container');
  e.preventDefault();
  $gridCont.hasClass('list-view') ? $gridCont.removeClass('list-view') : $gridCont.addClass('list-view');
}
function gridList(e) {
  var $gridCont = $('.grid-container')
  e.preventDefault();
  $gridCont.removeClass('list-view');
}

$(document).on('click', '.btn-grid', gridList);
$(document).on('click', '.btn-list', showList);
</script>
 <!-- colse product gride 3 -->



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
      <h2 class="ft-title">Service FeedBack</h2>
      <p>It is Helpfull for Us to Improve Our Services!</p>
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



 <!-- script code for add cart section  -->

 <script>
        let carts = document.querySelectorAll('#add-cart');

        let products = [
            {
                name:'grey Tshirt',
                tag:'greytshirt',
                price:15,
                incart:0
            }
            
        ];
        

        for(let i=0; i<carts.length;i++){
          carts[i].addEventListener('click',()=>{
           cartNumbers(products[i]);
          })
        }

        function onloadcartnumbers(){
            let productNumbers = localStorage.getItem('cartNumbers');
            if(productNumbers){
                document.querySelector('.cart span').textContent = productNumbers;
            }
        }

        function cartNumbers(product){
            // console.log("The product is",product);
            let productNumbers = localStorage.getItem('cartNumbers');

            productNumbers = parseInt(productNumbers);
            
            if(productNumbers){
                localStorage.setItem('cartNumbers',productNumbers+1);
                document.querySelector('.cart span').textContent = productNumbers+1;

            }else{
                localStorage.setItem('cartNumbers',1);
                document.querySelector('.cart span').textContent = 1;
            }
            setItems(product);

           
        }
        function setItems(product){
            let cartItems = localStorage.getItem('productsIncart');
            cartItems = JSON.parse(cartItems);
            console.log("My cartItems are",cartItems);
            
            product.incart = 1;

            cartItems = {
                [product.tag]:product
            }
            
            localStorage.setItem("productsIncart",JSON.stringify(cartItems));
        }
        onloadcartnumbers();



    </script>



 <!-- close add cart section -->

</body>
</html>
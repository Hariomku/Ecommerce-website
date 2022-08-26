<?php 

 $this->load->view('backend/include/header');
 $this->load->view('backend/include/sidebar');
 ?>

 </style>
 <main id="main" class="main">

 <!-- registration form    -->
  <div class="container" style="margin-bottom:6.8rem; background-color: yellow;">
  <div class="row justify-content-center">
  <div class="col-md-5">
   <div class="card">
    <h1 class="card-title text-center" style="color:#00d188; ;padding-top: 5px; font-family:cursive;"> Welcome to WhoCArt DataBase Edit form</h1>
     <h2 class="card-title text-center">Fill correct Details
      <div class="card-body py-md-4">



        
       <form _lpchecked="1" method="POST" action="<?= base_url()?>admin/demo/<?= $user->id?>">
          <div class="form-group">
             <input type="text" name="Name" class="form-control" id="Name" value="<?=$user->Name?>" >
          </div>
           <div class="form-group" style="float:left; width: 100%;">
             <input type="Date" name="Date_of_Birth" class="form-control" id="Date_of_Birth" value="<?= $user->Date_of_Birth?>">
        </div>

        <div class="" style="margin-left: 10px; width: 100%; text-align: left;">
            
            <label style="margin-left:%;color: gray;">Select your gender</label><br>
             <input type="radio" value="Male" name="Gender" value="<?=$user->Gender?>">Male
             <input type="radio" value="Female" name="Gender" value="<?=$user->Gender?>">Female
             <input type="radio" value="Other" name="Gender" value="<?=$user->Gender?>">Other

        </div>
        
         <div class="form-group">
             <input type="text" name="State" class="form-control" id="State" value="<?=$user->State?>">
        </div>
         <div class="form-group">
             <input type="text" name="Address" class="form-control" id="Address"  value="<?=$user->Address?>">
        </div>
        <div class="form-group">
             <input type="email" name="Email" class="form-control" id="Email"  value="<?=$user->Email?>">
        </div>
        <div class="form-group">
             <input type="phone" name="Phone_Number" class="form-control" id="Phone_Number"  value="<?=$user->Phone_Number?>">
        </div>
                            
                          
   <div class="form-group">
     <input type="password"  name="Password" class="form-control" id="Password"  value="<?=$user->Password?>">
    <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
   </div>
   <div class="form-group">
      <input type="password" name="Conform_Password" class="form-control" id="Conform_Password"  value="<?=$user->Conform_Password?>">
   </div>
   <div class="">
  
            <center style="background-color: green ; color: whitesmoke; font-weight: bold;"><input type="submit" class="btn"  name="submit" value="Update"></center>
            <span class="sub"></span>
            <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
            <script>
                $(".btn").click(function(){
                    
                    ;
                });
                $(document).ready(function(){
                    $("#show").toggle(function(){
                        var pass = $("#Password").val();
                        $("#Password").set(pass);

                });
                });
            </script>
                          
    </div>
       </form>
     </div>
  </div>
</div>
</div>
</div>
<!-- close Update -->


















 </main><!-- End #main -->
 <?php 

 $this->load->view('backend/include/footer');
 ?>
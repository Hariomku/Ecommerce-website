
<?php 

 $this->load->view('backend/include/header');
 $this->load->view('backend/include/sidebar');
 ?>
  <!-- <main id="main" class="main"> -->

    <div class="Product_Section1" style="text-align: center; font-family:cursive; font-stretch: bold; text-shadow :2px 2px 0px 0px black;color:  #00d188;"><h1> Product Section One Image  and Data Like Rate Uploade</h1></div>

<form action="<?= base_url()?>admin/add_product/" method="post" enctype= multipart/form-data>

  
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control" placeholder="" id="img1" name="image">

<div class="form-group">
    <label for="aboutproduct">About Product</label>
    <input type="text" class="form-control" placeholder="Write here ..." id="aboutproduct" name="aboutproduct">
  </div>

  <div class="form-group">
    <label for="name_of_product">Name Of the Product</label>
    <input type="text" class="form-control" placeholder="Write here ..." id="name_of_product" name="name_of_product">
  </div>

  <div class="form-group">
    <label for="prise_of_product">Price Of the product</label>
    <input type="text" class="form-control" placeholder="Write here ... Price ₹72,536" id="prise_of_product" name="prise_of_product">
  </div>

<button type="submit" class="btn btn-primary mt-5">Submit</button>
</form>











</main>
<?php 

 $this->load->view('backend/include/footer');
 ?>
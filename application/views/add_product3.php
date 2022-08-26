
<?php 

 $this->load->view('backend/include/header');
 $this->load->view('backend/include/sidebar');
 ?>
  <!-- <main id="main" class="main"> -->



<form action="<?= base_url()?>admin/add_product3/" method="post" enctype= multipart/form-data onsubmit="return submitForm(this);">
  
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
    <label for="prise_of_product">Current Price Of Product</label>
    <input type="text" class="form-control" placeholder="Write here ... Price ₹72,536" id="Current_Price_of_product" name="Current_Price_of_product">
  </div>
    <div class="form-group">
    <label for="prise_of_product">Old Price of Product</label>
    <input type="text" class="form-control" placeholder="Write here ... Price ₹72,536" id="Old_Price_of_product" name="Old_Price_of_product">
  </div>
    <div class="form-group">
    <label for="prise_of_product">Discount Persentage Of Product</label>
    <input type="text" class="form-control" placeholder="Write here ... Price ₹72,536" id="Discount_Persentage_On_Product" name="Discount_Persentage_On_Product">
  </div>

<button type="submit" class="btn btn-danger mt-5">Upload Image</button>
</form>












</main>
<?php 

 $this->load->view('backend/include/footer');
 ?>
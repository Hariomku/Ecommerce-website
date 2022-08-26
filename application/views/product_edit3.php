
<?php 

 $this->load->view('backend/include/header');
 $this->load->view('backend/include/sidebar');
 ?>




<form action="<?= base_url()?>admin/product_edit3/<?= $user->id?>" method="post" enctype= multipart/form-data>
  
  <div class="form-group">
    <label for="image">Image</label>
    <input type="file" class="form-control" placeholder="" id="image" name="image" value="<?= $user->image ?>">

<div class="form-group">
    <label for="aboutproduct">About Product</label>
    <input type="text" class="form-control" placeholder="Write here ..." id="aboutproduct" name="aboutproduct" value="<?= $user->aboutproduct ?>">
  </div>

  <div class="form-group">
    <label for="name_of_product">Name Of the Product</label>
    <input type="text" class="form-control" placeholder="Write here ..." id="name_of_product" name="name_of_product" value="<?= $user->name_of_product ?>">
  </div>

  <div class="form-group">
    <label for="prise_of_product">Current Price Of Product</label>
    <input type="text" class="form-control" placeholder="Write here ... Price ₹72,536" id="Current_Price_of_product" name="Current_Price_of_product" value="<?= $user->Current_Price_of_product ?>">
  </div>
    <div class="form-group">
    <label for="prise_of_product">Old Price of Product</label>
    <input type="text" class="form-control" placeholder="Write here ... Price ₹72,536" id="Old_Price_of_product" name="Old_Price_of_product" value="<?= $user->Old_Price_of_product ?>">
  </div>
    <div class="form-group">
    <label for="prise_of_product">Discount Persentage Of Product</label>
    <input type="text" class="form-control" placeholder="Write here ... Price ₹72,536" id="Discount_Persentage_On_Product" name="Discount_Persentage_On_Product" value="<?= $user->Discount_Persentage_On_Product ?>">
  </div>

<button type="submit" class="btn btn-danger mt-5">Upload Image</button>
</form>











</main>
<?php 

 $this->load->view('backend/include/footer');
 ?>
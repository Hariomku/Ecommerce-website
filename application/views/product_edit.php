
<?php 

 $this->load->view('backend/include/header');
 $this->load->view('backend/include/sidebar');
 ?>
  
    <!-- cdn for alert massage -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<!-- close cdn for aleart -->



<form action="<?= base_url()?>admin/product_edit/<?= $user->id?>" method="post" enctype= multipart/form-data>
  
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
    <label for="prise_of_product">Price Of the product</label>
    <input type="text" class="form-control" placeholder="Write here ... Price ₹72,536" id="prise_of_product" name="prise_of_product" value="<?= $user->prise_of_product ?>">
  </div>

<button type="submit" class="btn btn-primary mt-5">Submit</button>
</form>








</main>
<?php 

 $this->load->view('backend/include/footer');
 ?>
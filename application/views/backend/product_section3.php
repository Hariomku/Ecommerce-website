<?php 

 $this->load->view('backend/include/header');
 $this->load->view('backend/include/sidebar');
 ?>
 



<div class="container">
    <div style="display: flex; justify-content: space-between;">
  <h2>First Product Image</h2> 
  <a href="add_product3" class="btn btn-danger">+Add</a>
  </div>         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Product Image</th>
        <th>About Product</th>
        <th>Name Of product</th>
        <th>Current Price</th>
        <th>Old Price</th>
        <th>Discount Persentage</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php 
       foreach ($this->db->get('productsection3')->result_array() as  $value) {
       ?>
      <tr>
        <td><?=$value['id']?></td>
        <td><img src="<?= base_url()?>data/<?= $value['image']?>" style="height: 100px; width: 100px;"></td>
        <td><?=$value['aboutproduct']?></td>
        <td><?=$value['name_of_product']?></td>

        <td><?=$value['Current_Price_of_product']?></td>
        <td><?=$value['Old_Price_of_product']?></td>

        <td><?=$value['Discount_Persentage_On_Product']?></td>


        <td>
            <a href="<?= base_url()?>admin/product_edit3/<?= $value['id']?>" class="btn btn-primary">Edit</a>
            <a href="<?= base_url()?>admin/delete_product3/<?= $value['id']?>" class="btn btn-danger" onclick="geek()">Delete</a>
        </td>
    
      </tr>

      <script>
        function geek() {
            confirm("Kindly Make Sure  You Want to Delete Image");
        }
    </script>
       <?php  }  ?>

    </tbody>
  </table>
</div>


<!--     <button onclick="geek()">Click me!</button>
 
    <script>
        function geek() {
            confirm("Press OK to close this option");
        }
    </script> -->















</main>
    <?php 

 $this->load->view('backend/include/footer');
 ?>
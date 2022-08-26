<?php 

 $this->load->view('backend/include/header');
 $this->load->view('backend/include/sidebar');
 ?>
 



<div class="container">
    <div style="display: flex; justify-content: space-between;">
  <h2>First Product Image</h2> 
  <a href="add_product" class="btn btn-danger">+Add</a>
  </div>         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Product Image</th>
        <th>About Product</th>
        <th>Name Of product</th>
        <th>Prcise of product</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php 
       foreach ($this->db->get('productslider1')->result_array() as  $value) {
       ?>
      <tr>
        <td><?=$value['id']?></td>
        <td><img src="<?= base_url()?>data/<?= $value['image']?>" style="height: 100px; width: 100px;"></td>
        <td><?=$value['aboutproduct']?></td>
        <td><?=$value['name_of_product']?></td>

        <td><?=$value['prise_of_product']?></td>

        <td>
            <a href="<?= base_url()?>admin/product_edit/<?= $value['id']?>" class="btn btn-primary">Edit</a>
            <a href="<?= base_url()?>admin/delete_product/<?= $value['id']?>" class="btn btn-danger">Delete</a>
        </td>
    
      </tr>
       <?php  }  ?>
    </tbody>
  </table>
</div>


















</main>
    <?php 

 $this->load->view('backend/include/footer');
 ?>
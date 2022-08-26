
<?php 

 $this->load->view('backend/include/header');
 $this->load->view('backend/include/sidebar');
 ?>
  



<div class="container">
    <div style="display: flex; justify-content: space-between;">
  <h2>Header Slider</h2> 
  <a href="add_image" class="btn btn-danger">+Add</a>
  </div>         
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Slider Image</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php 
       foreach ($this->db->get('slider')->result_array() as  $value) {
       ?>
      <tr>
        <td><img src="<?= base_url()?>data/<?= $value['image']?>" style="height: 100px; width: 100px;"></td>
        <td>
            <a href="<?= base_url()?>admin/slider_edit/<?= $value['id']?>" class="btn btn-primary">Edit</a>
            <a href="<?= base_url()?>admin/delete_Slider/<?= $value['id']?>" class="btn btn-danger">Delete</a>
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
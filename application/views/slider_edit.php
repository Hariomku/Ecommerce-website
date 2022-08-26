<?php 
$this->load->view('backend/include/header');
$this->load->view('backend/include/sidebar');
?>
  <main id="main" class="main">
<form action="<?= base_url()?>admin/slider_edit/<?= $user->id?>" method="post" enctype= multipart/form-data>
  <div class="form-group">
    <label for="email">Image</label>
    <input type="file" class="form-control" placeholder="" id="image" name="image" 
    value="<?= $user->image?>">
  </div>


<button type="submit" class="btn btn-primary mt-5">Submit</button>
</form>


</main>
<?php
$this->load->view('backend/include/footer');
?>


<?php 

 $this->load->view('backend/include/header');
 $this->load->view('backend/include/sidebar');
 ?>
 


<div class="container5">
  <div class="col-md-6">
    <h2 style="text-align:center;font-weight: bold; text-shadow: blue 2px 2px; text-transform: uppercase; "> All User Details</h2> 
  </div>
  <div class="=col-md-6>
    <a href="<?php echo base_url().'index.php/user/create'?>class="btn btn-primary"> Create Acoount</a>
  </div>
  <div class="row">         
 
  <div class="row">
    <div class="col-md-12">
       <div class="container6" class="col-12" >
    <table >
  <thead style="text-align: center ;border:2px solid black;">
    <tr>
    <th>id</th>
    <th>Name</th>
    <th>Date_of_Birth</th>
    <th>Gender</th>
    <th>State</th>
    <th>Address</th>
    <th>Email</th>
    <th>Phone_Number</th>
    <th>Password</th>
    <th>Conform_Password</th>
    <th>Action</th>
  
    </tr>
  </thead>
  <tbody style="text-align: center;">
    <?php 
       foreach ($this->db->get('regester')->result_array() as  $value) {
       
      
      ?>
    <tr>
    <td><?=$value['id']?></td>
    <td><?=$value['Name']?></td>
    <td><?=$value['Date_of_Birth']?></td>
    <td><?=$value['Gender']?></td>
    <td><?=$value['State']?></td>
    <td><?=$value['Address']?></td>
    <td><?=$value['Email']?></td>
    <td><?=$value['Phone_Number']?></td>
    <td><?=$value['Password']?></td>
    <td><?=$value['Conform_Password']?></td>
    <td>
      <!-- delete button code -->
      <a href="<?= base_url()?>admin/delete_customer/<?= $value['id']?>" class="btn btn-danger">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
  <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
</svg> Delete</a>
<!-- Edit button code -->
<a href="<?= base_url()?>admin/demo/<?= $value['id']?>"  class="btn btn-success btn-sm"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg> Edit</a>
    </td>
    </tr>
     <?php  }  ?>
  </tbody>

</table>
    </div>
  </div>

</div>









   
<?php 

 $this->load->view('backend/include/footer');
 ?>
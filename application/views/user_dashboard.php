<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dash</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<body class="hm-gradient">
    
    <main>
        
        <!--MDB Tables-->
        <div class="container mt-4" style="width:150rem;">

            <div class="text-center darken-grey-text mb-4">
                <h1 class="font-bold mt-4 mb-3 h5">Built with Material Design for Bootstrap 4</h1>
                <a class="btn btn-danger btn-md" href="">Free download<i class="fa fa-download pl-2"></i></a>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <!-- Grid row -->
                    <div class="row">
                        <!-- Grid column -->
                        <div class="col-md-12">
                            <h2 class="pt-3 pb-4 text-center font-bold font-up deep-purple-text">Search within table</h2>
                            <div class="input-group md-form form-sm form-2 pl-0">
                                <input class="form-control my-0 py-1 pl-3 purple-border" type="text" placeholder="Search something here..." aria-label="Search">
                                <span class="input-group-addon waves-effect purple lighten-2" id="basic-addon1"><a><i class="fa fa-search white-text" aria-hidden="true"></i></a></span>
                            </div>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                    <!--Table-->
                    <table class="table table-striped" style="width:100%;">
                        <!--Table head-->
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Date_of_Birth</th>
                                <th>Gender</th>
                                <th>State</th>
                                <th>Address</th>
                                <th style="overflow: hidden;">Email</th>
                                <th>Phone_Number</th>
                                <th>Password</th>
                                <th>Conform_Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <!--Table head-->
                        <!--Table body-->
                        <tbody>
                        <?php $i=1; foreach ($this->db->where('id',$_SESSION['user_id'])->get('regester')->result_array() as $value) {
                               
                           ?>  <tr>
                                <th><?= $i ?></th>
                                <td><?= $value['Name']?></td>
                                <td><?= $value['Date_of_Birth']?></td>
                                <td><?= $value['Gender']?></td>
                                <td><?= $value['State']?></td>
                                <td><?= $value['Address']?></td>
                                <td style="overflow: hidden;"><?= $value['Email']?></td>
                                <td><?= $value['Phone_Number']?></td>
                                <td><?= $value['Password']?></td>
                                <td><?= $value['Conform_Password']?></td>
                                <td></td>
                            </tr>
                            <?php $i++; }  ?>
                        </tbody>
                        <!--Table body-->
                    </table>
                    <!--Table-->
                </div>
            </div>
           
        
          
       
        <!--MDB Tables-->
      
    </main>
  
</body>



<style>
    .hm-gradient {
    background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
}
.darken-grey-text {
    color: #2E2E2E;
}
.input-group.md-form.form-sm.form-2 input {
    border: 1px solid #bdbdbd;
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}
.input-group.md-form.form-sm.form-2 input.purple-border {
    border: 1px solid #9e9e9e;
}
.input-group.md-form.form-sm.form-2 input[type=text]:focus:not([readonly]).purple-border {
    border: 1px solid #ba68c8;
    box-shadow: none;
}
.form-2 .input-group-addon {
    border: 1px solid #ba68c8;
}
.danger-text {
    color: #ff3547; 
}  
.success-text {
    color: #00C851; 
}
.table-bordered.red-border, .table-bordered.red-border th, .table-bordered.red-border td {
    border: 1px solid #ff3547!important;
}        
.table.table-bordered th {
    text-align: center;
}
</style>

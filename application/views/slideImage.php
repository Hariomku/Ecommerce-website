<?php 

 $this->load->view('backend/include/header');
 $this->load->view('backend/include/sidebar');
 ?>

<div class="container" width="50%">
	<div class="row">
		<div class="col-md-6"><h3>Slider</h3></div>
		<div class="col-md-6" >
			<a href=""><button class="btn btn-danger">ADD</button></a>
		</div>

		<table border="1" style="text-align:center">
			<tr>
				<th >Image</th>
				<th>Product About</th>
				<th> Prise and less value</th>

			</tr>
			<tr>
				<td style="width:40%"><input type="file" name="file"></td>
				<td><input type="text" name="About"></td>
				<td><input type="text" name="prics"></td>

			</tr>
		</table>


	</div>
</div>















  </main><!-- End #main -->
 <?php 

 $this->load->view('backend/include/footer');
 ?>

<style>
	.container{
		margin-top:100px;
		margin-left:320px;
		margin-bottom: 20px;
	}
	.btn{
		float: right;
		margin-right:6rem;
	}
	h3{
		margin-left: 100px;
	}
	.tab{
		/*margin-right: 10rem;*/
		margin-left:2rem;

		}
		th, td{
			border: 1px solid black;
			width: 100%;
		}
		th{
			text-align:center;

		}
		td{
			text-align: left;
			
		}

</style>
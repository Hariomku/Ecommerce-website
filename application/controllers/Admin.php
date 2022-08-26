<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *z
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function ecommers(){
		$this->load->view('ecommers');
	}



public function login()
	{
		$this->load->view('login');
		if ($this->input->post()) {
			$this->db->where('UserName',$this->input->post('UserName'));
			$this->db->where('Password',$this->input->post('Password'));
			$row= $this->db->get('pannel')->row();
			if ($row) {
				$this->session->set_userdata('login',$row);
				redirect("admin/admin_dashboard1");
			}
	
		}
	}
public function logOut(){
	$this->session->sess_destroy();
	redirect('admin');
}	
	
	
public function admin_dashboard1()
	{
		$this->load->view('admin_dashboard1');
	}
	




	
public function website_slider()
	{
		$this->load->view('backend/website_slider');
	}
	
public function add_image()
	{
		  
		  if (!empty ($_FILES['image'] ['name'])) {
	  		$data['image'] = $this->Common_model->data('image');
	  		$this->db->insert('slider',$data);
			redirect('admin/website_slider');
		  }
		  $this->load->view('backend/add_image');

  }

	
public function all_customer()
	{
		$this->load->view('all_customer');
	}
public function all_customer1()
	{
		$this->load->view('all_customer1');
	}
// public function regester1()
// 	{
// 		$this->load->view('regester1');
// 		if ($this->input->post()) {
// 			 $data = array(  
//                         'Name'     => $this->input->post('Name'),
//                         'Date_of_Birth'     => $this->input->post('Date_of_Birth'),
//                         'Gender'   => $this->input->post('Gender'), 
//                         'State'     => $this->input->post('State'), 
//                         'Address'		=>$this->input->post('Address'),   
//                         'Email'  => $this->input->post('Email'),
//                         'Phone_Number' =>$this->input->post('Phone_Number'), 
//                         'Password'   => $this->input->post('Password'),  
//                         'Conform_Password'   => $this->input->post('Conform_Password')
//                         );  
    
//         $this->db->insert('regester',$data);  

//         redirect("elogin"); 
// 		}
// 	}
public function regester1(){
	$this->load->view('regester1');
}
public function elogin()
	{
		$this->load->view('elogin');
		if ($this->input->post()) {
			$this->db->where('Name',$this->input->post('Name'));
			$this->db->where('Password',$this->input->post('Password'));
			$row= $this->db->get('regester')->row();
			if ($row) {
				$_SESSION['user_id'] = $row->id;
				$this->session->set_userdata('login');
				redirect("user_dashboard");
			}
				else{
  	redirect("elogin"); 
  }
		}
	}


	public function notificarion(){
		$this->load->view('notificarion');
	}

	public function delete_customer($id){
		$this->db->where('id',$id);
		$this->db->delete('regester');
		redirect("all_customer1"); 

	}

public function demo($id){
	
		
			if ($this->input->post()) {
			 $data = array(  
                        'Name'     => $this->input->post('Name'),
                        'Date_of_Birth'     => $this->input->post('Date_of_Birth'),
                        'Gender'   => $this->input->post('Gender'), 
                        'State'     => $this->input->post('State'), 
                        'Address'		=>$this->input->post('Address'),   
                        'Email'  => $this->input->post('Email'),
                        'Phone_Number' =>$this->input->post('Phone_Number'), 
                        'Password'   => $this->input->post('Password'),  
                        'Conform_Password'   => $this->input->post('Conform_Password')
                        );  
    
        $this->db->where('id',$id);
        $this->db->update('regester',$data);
        redirect("admin/all_customer1"); 
		}
		$data['user'] = $this->db->where('id',$id)->get('regester')->row();
		$this->load->view('demo',$data);
	}


	public function slideImage(){
		$this->load->view("slideImage");
	}

	public function delete_Slider($id){
		$this->db->where('id',$id);
		$this->db->delete('slider');
		redirect("website_slider"); 

	}
	
	

	public function slider_edit($id)
	{
		  
		  if (!empty ($_FILES['image'] ['name'])) {
	  		$data['image'] = $this->Common_model->data('image');
	  		 $this->db->where('id',$id);
        $this->db->update('slider',$data);
        redirect("admin/website_slider"); 
		  }
      $data['user'] = $this->db->where('id',$id)->get('slider')->row();
		  $this->load->view('slider_edit',$data);

  }
  
  public function product_slider(){
  	$this->load->view("backend/product_slider");
  }



  	public function delete_product($id){
		$this->db->where('id',$id);
		$this->db->delete('productslider1');
		redirect("product_slider"); 

	}

	public function product_edit($id){
		if ($this->input->post()) {
		
	if ($_FILES['image']['name']) {
		$data['image'] = $this->Common_model->data('image');
	}
	$data['aboutproduct'] = $this->input->post('aboutproduct');
	$data['name_of_product'] = $this->input->post('name_of_product');
	$data['prise_of_product'] = $this->input->post('prise_of_product');
		
    	
        $this->db->where('id',$id);
        $this->db->update('productslider1',$data);
        redirect("admin/product_slider"); 
		}
		$data['user'] = $this->db->where('id',$id)->get('productslider1')->row();
		$this->load->view('product_edit',$data);
	}




	public function product_edit2($id){
		if ($this->input->post()) {
		
	if ($_FILES['image']['name']) {
		$data['image'] = $this->Common_model->data('image');
	}
	$data['aboutproduct'] = $this->input->post('aboutproduct');
	$data['name_of_product'] = $this->input->post('name_of_product');
	$data['Current_Price_of_product'] = $this->input->post('Current_Price_of_product');
	$data['Old_Price_of_product'] = $this->input->post('Old_Price_of_product');
	$data['Discount_Persentage_On_Product'] = $this->input->post('Discount_Persentage_On_Product');


		
    	
        $this->db->where('id',$id);
        $this->db->update('productsection2',$data);
        redirect("admin/product_section2"); 
		}
		$data['user'] = $this->db->where('id',$id)->get('productsection2')->row();
		$this->load->view('product_edit2',$data);





	}



	public function product_edit3($id){
		if ($this->input->post()) {
		
	if ($_FILES['image']['name']) {
		$data['image'] = $this->Common_model->data('image');
	}
	$data['aboutproduct'] = $this->input->post('aboutproduct');
	$data['name_of_product'] = $this->input->post('name_of_product');
	$data['Current_Price_of_product'] = $this->input->post('Current_Price_of_product');
	$data['Old_Price_of_product'] = $this->input->post('Old_Price_of_product');
	$data['Discount_Persentage_On_Product'] = $this->input->post('Discount_Persentage_On_Product');


		
    	
        $this->db->where('id',$id);
        $this->db->update('productsection3',$data);
        redirect("admin/product_section3"); 
		}
		$data['user'] = $this->db->where('id',$id)->get('productsection3')->row();
		$this->load->view('product_edit3',$data);





	}



	public function add_product()
	{
		$this->load->view('add_product');
		if ($this->input->post()) {
			 $data = array(  
                        'image'     => $this->input->post('image'),
                        'aboutproduct'     => $this->input->post('aboutproduct'),
                        'name_of_product'   => $this->input->post('name_of_product'), 
                        'prise_of_product'     => $this->input->post('prise_of_product')
                        );  
    	$data['image'] = $this->Common_model->data('image');
        $this->db->insert('productslider1',$data);  

        redirect("product_slider"); 
		}
 	

  }



  // Start product 2

  public function product_section2(){
  	$this->load->view("backend/product_section2");
  }



  	public function delete_product2($id){
		$this->db->where('id',$id);
		$this->db->delete('productsection2');
		redirect("product_section2"); 

	}



	
	public function add_product3()
	{
		$this->load->view('add_product3');
		if ($this->input->post()) {
			 $data = array(  
                        'image'     => $this->input->post('image'),
                        'aboutproduct'     => $this->input->post('aboutproduct'),
                        'name_of_product'   => $this->input->post('name_of_product'), 
                        'Current_Price_of_product'     => $this->input->post('Current_Price_of_product'),
                        'Old_Price_of_product'     => $this->input->post('Old_Price_of_product'),
                        'Discount_Persentage_On_Product'     => $this->input->post('Discount_Persentage_On_Product')


                        );  
    	$data['image'] = $this->Common_model->data('image');
        $this->db->insert('productsection3',$data);  

        redirect("product_section3"); 
		}
 	

  }



  // close product second 



  // start product section 3


   public function product_section3(){
  	$this->load->view("backend/product_section3");
  }



  	public function delete_product3($id){
		$this->db->where('id',$id);
		$this->db->delete('productsection3');
		redirect("http://localhost/ci/admin/product_section3"); 

	}


		public function add_product2()
	{
		$this->load->view('add_product2');
		if ($this->input->post()) {
			 $data = array(  
                        'image'     => $this->input->post('image'),
                        'aboutproduct'     => $this->input->post('aboutproduct'),
                        'name_of_product'   => $this->input->post('name_of_product'), 
                        'Current_Price_of_product'     => $this->input->post('Current_Price_of_product'),
                        'Old_Price_of_product'     => $this->input->post('Old_Price_of_product'),
                        'Discount_Persentage_On_Product'     => $this->input->post('Discount_Persentage_On_Product')


                        );  
    	$data['image'] = $this->Common_model->data('image');
        $this->db->insert('productsection2',$data);  

        redirect("product_section2"); 
		}
 	

  }




  // close product section 3
  
 


}


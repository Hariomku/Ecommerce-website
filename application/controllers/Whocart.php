<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class whocart extends CI_Controller {

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
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
		public function notificarion()
	{
		$this->load->view('notificarion');
	}

	public function ecommers()
	{
		$this->load->view('ecommers');
	}
	public function regester1()
	{
		$this->load->view('regester1');
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
				 
    
        $this->db->insert('regester',$data);  

        redirect("Accountpage"); 
		}
	
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
	
public function user_dashboard()
	{
		$this->load->view('user_dashboard');
	}
public function AccountInnerPage()
	{
		$this->load->view('AccountInnerPage');
	}



public function orderpage(){
	$this->load->view("orderpage");
}
public function Accountpage(){
	$this->load->view("Accountpage");
	if ($this->input->post()) {
			$this->db->where('Name',$this->input->post('Name'));
			$this->db->where('Password',$this->input->post('Password'));
			$row= $this->db->get('regester')->row();
			if ($row) {
				$_SESSION['user_id'] = $row->id;
				$this->session->set_userdata('login',$row);
				redirect("AccountInnerPage");
			}
				else{
  	redirect("Accountpage"); 
  }
		}
}

public function ForgetPassWord(){
	$this->load->view('ForgetPassWord');
}


public function contactUs(){
	$this->load->view('contactUs');
	if($this->input->post()){
		$data=array(
				'name'=>$this->input->post('name'),
				'email'=>$this->input->post('email'),

				'phoneNumber'=>$this->input->post('phoneNumber'),

				'subject'=>$this->input->post('subject')

		);
		 $this->db->insert('contact',$data);  

        redirect("ecommers");
	}
}

public function logOut(){
	$this->session->sess_destroy();
	redirect('Accountpage');
}


public function paymentgetway(){
	$this->load->view('paymentgetway');
}
public function buy(){
	


	if ($this->input->post()) {
			 $data = array(  
                        'Fname'     => $this->input->post('Fname'),
                        'Lname'     => $this->input->post('Lname'),
                        'email'   => $this->input->post('email'), 
                        'Landmark'     => $this->input->post('Landmark'), 
                        'Address'		=>$this->input->post('Address'),   
                        'Address'  => $this->input->post('Address'),
                        'state' =>$this->input->post('state'), 
                        'pincode'   => $this->input->post('pincode'),  
                        'countary'   => $this->input->post('countary'),
                        'dob'  =>$this->input->post('dob'),
                        'gender'  =>$this->input->post('gender'),
                        'country_code'  =>$this->input->post('country_code'),
                        'Phone_No'  =>$this->input->post('Phone_No'),

                        'image'  =>$this->input->post('image'),

                        'name_of_product'  =>$this->input->post('name_of_product'),
                        'aboutproduct'  =>$this->input->post('aboutproduct'),
                        'Size'  =>$this->input->post('Size'),

                        'Quantity'  =>$this->input->post('Quantity'),

                        'prise_of_product'  =>$this->input->post('prise_of_product'),
                        'Way_Of_Payment'  =>$this->input->post('Way_Of_Payment')

                    );  
				 
    
        $this->db->insert('user_order',$data);  

        redirect("ecommers"); 
		}
	

	$this->load->view('buy');
}



}


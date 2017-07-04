<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}
	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}
	
	public function login($checkout="")
	{
		$data = array (
			'checkout' => $checkout,
		);
		
		$this->load->view('login',$data);
	}
	
	public function logout()
	{
		session_destroy();
		
		redirect("index.php/main/index");
	}
	
	public function userlogin($checkout="")
	{
		error_reporting( error_reporting() & ~E_NOTICE );
		error_reporting(0);
		
		echo $checkout;
		if ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('email', 'email', 'required',
				array(
				'required' => 'Email Required',
				)
			);
			
			$this->form_validation->set_rules('password', 'password', 'required',
				array(
				'required' => 'Password Required',
				)
			);

			if ($this->form_validation->run() == FALSE)
			{
				$this->session->set_flashdata('loginfail','Login Failed !');
				$this->load->view('login');
			}
			else
			{
				$email = $_POST['email'];
				$password = $_POST['password'];
				
				$getcustomerid = $this->model->getcustomerid($email,$password);
				foreach($getcustomerid as $row)
				{
					$customerid = $row['CustomerID'];
				}
				
				if ($customerid!="")
				{
					$_SESSION['customerid'] = $customerid;
					$this->session->set_userdata('customerid', $customerid);
					
					if ($checkout=="")
					{
						redirect("index.php/main/index");
					}
					else
					{
						redirect("index.php/main/checkout1");
					}
				}
				else
				{
					$this->session->set_flashdata('customeridfail','The email or password you entered is incorrect !');
					
					$this->load->view('login');
				}
			}
		}
	}
	
	public function userregister($checkout="")
	{
		error_reporting( error_reporting() & ~E_NOTICE );
		error_reporting(0);
		
		if ($this->input->server('REQUEST_METHOD') == 'POST')
		{
			$this->load->helper(array('form', 'url'));

			$this->load->library('form_validation');
			
			$this->form_validation->set_rules('regname', 'regname', 'required',
				array(
				'required' => 'Name Required',
				)
			);
			
			$this->form_validation->set_rules('regemail', 'regemail', 'required|valid_email',
				array(
				'required' => 'Email Required',
				)
			);
			
			$this->form_validation->set_rules('regpassword', 'regpassword', 'required',
				array(
				'required' => 'Password Required',
				)
			);
			
			$this->form_validation->set_rules('reggender[]', 'reggender[]', 'required',
				array(
				'required' => 'Gender Required',
				)
			);
			
			$this->form_validation->set_rules('regbirthdate', 'regbirthdate', 'required',
				array(
				'required' => 'Birth Date Required',
				)
			);
			
			$this->form_validation->set_rules('regbirthmonth', 'regbirthmonth', 'required',
				array(
				'required' => 'Birth Month Required',
				)
			);
			
			$this->form_validation->set_rules('regbirthyear', 'regbirthyear', 'required',
				array(
				'required' => 'Birth Year Required',
				)
			);

			if ($this->form_validation->run() == FALSE)
			{
				$this->session->set_flashdata('registerfail','Register Failed !');
				
				$_SESSION['regbirthdate'] = $_POST['regbirthdate'];
				$_SESSION['regbirthmonth'] = $_POST['regbirthmonth'];
				$_SESSION['regbirthyear'] = $_POST['regbirthyear'];
				
				$this->load->view('login');
			}
			else
			{
				$name = $_POST['regname'];
				$email = $_POST['regemail'];
				$password = $_POST['regpassword'];
				$gender = $_POST['reggender'];
				$birthdate = $_POST['regbirthdate'];
				$birthmonth = $_POST['regbirthmonth'];
				$birthyear = $_POST['regbirthyear'];
				
				$gender = $gender[0];

				/* echo "<pre>";
				print_r($_POST);
				echo "</pre>"; */
				
				$data = array(
					'Email' => $email,
					'Password' => $password,
				);
				
				$getcustomerid = $this->model->getcustomerid($email,$password='');
				foreach($getcustomerid as $row)
				{
					$emailexist++;
				}
				
				if ($emailexist > 0)
				{
					$this->session->set_flashdata('emailexist','Email Registered !');
				
					$_SESSION['regbirthdate'] = $_POST['regbirthdate'];
					$_SESSION['regbirthmonth'] = $_POST['regbirthmonth'];
					$_SESSION['regbirthyear'] = $_POST['regbirthyear'];
					
					$this->load->view('login');
				}
				else
				{
					date_default_timezone_set('Asia/Jakarta');

					$this->db->set('RegisterTime', 'NOW()', FALSE);
					$this->db->set('LastLoginTime', 'NOW()', FALSE);
					$this->db->insert('CustomerLogin', $data);
					
					$this->db->insert('CustomerData', array(
						'Name' => $name,
						'BirthDay' => "$birthyear-$birthmonth-$birthdate",
						'Gender' => $gender,
					));
					
					$getcustomerid = $this->model->getcustomerid($email,$password);
					foreach($getcustomerid as $row)
					{
						$customerid = $row['CustomerID'];
					}
					
					$_SESSION['customerid'] = $customerid;
					
					if ($checkout=="")
					{
						redirect("index.php/main/index");
					}
					else
					{
						redirect("index.php/main/checkout1");
					}
				}
				
			}
		}
	}
	
	public function employeeregistration()
	{
		$this->load->view('registrasi_pelamar');
	}
	
	public function companyregistration()
	{
		$this->load->view('registrasi_perusahaan');
	}
}

<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
class Prof_dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('pages_model','pages');
		$this->load->model('classes_model','classes');
		$this->load->library('session');
		$this->load->library('form_validation');
	}
	public function index($scene = null) {
		if(!isset($_SESSION['prof_id'])){
			// Load Login Page
			$this->load->view('template/header');
			$this->load->view('login_page');
			$this->load->view('template/footer');
		}
		else{
			// Load Dashboard
			$this->load->view('template/prof_dashboard_header',$_SESSION);
			switch ($scene) {
				case 'classes':
				$data = $this->get_classes();
				$this->load->view('professors/prof_classes',$data);
				break; 
				default:
				echo $scene;
				$this->load->view('professors/prof_dashboard',$_SESSION);
				break;
			}
			$this->load->view('template/student_dashboard_footer');
		}

	}
	public function login_validate(){
	$password = $this->input->post('psw');
	$result = $this->pages->read_users($_POST['uname'],$_POST['psw']);
	if(!empty($result))
	{

		foreach($result as $pass){
			// Get the DATA
			$data['username']=$pass['Account_ID'];
			$account_result = $this->pages->read_profaccount($pass['Account_ID']);
			$result2 = $this->pages->get_image($pass['Account_ID']);
		}
		foreach ($account_result as $account_pass) {
			$data['prof_id']=$account_pass['Prof_ID'];
			$data['name']=$account_pass['L_name'].", ".$account_pass['F_name']." ".$account_pass['M_name'];
		}
		foreach($result2 as $pass3){
			$data['img_id']=$pass3['img_ID'];
		}
		$session_data = array(
			'prof_id' => $data['username'],
			'password' => $password,
			'name' => $data['name'],
			'img_id' => $data['img_id']
		);
		$this->session->set_userdata($session_data);
		redirect(base_url().'prof_dashboard');

	}
	else{
		$this->session->set_flashdata('error', 'Invalid Username and Password');
		redirect(base_url().'login');
		}
	}
	public function logout(){
		session_destroy();
		redirect(base_url().'pages');
	}

  public function get_classes(){
		$x=0;
		$result = $this->classes->read_subjects($_SESSION['prof_id']);
		foreach($result as $pass){
			// Get the DATA
			$data['code'][$x]= $pass['Subject_code'];
				$desc_result = $this->classes->read_desc($pass['Subject_code']);
				foreach($desc_result as $desc_pass){
					$data['description'][$x] = $desc_pass['S_description'];
				}
			$x = $x+1;
			}
		return $data;
	}
		
}
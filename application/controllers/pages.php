<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
class Pages extends CI_Controller {
		public function __construct(){
		parent::__construct();
		$this->load->helper('form');		
		//pre load all models
		$this->load->model('pages_model','pages');
		$gdata;
		}
		
        public function index(){
			$this->load->view('home');
        }
        public function view(){

              if ( ! file_exists(APPPATH.'views/home.php')){
                      // Whoops, we don't have a page for that!
                      show_404();
              }
              $this->load->view('home');
        }
       	public function login_authorize(){	
			$result = $this->pages->read_users($_POST['uname'],$_POST['psw']);
			if(!empty($result))
			{
				
				foreach($result as $pass){
					//Get the DATA
					$data['username']=$pass['Account_ID'];
					$account_result = $this->pages->read_account($pass['Account_ID']);
				}
				foreach ($account_result as $account_pass) {
					$data['student_id']=$account_pass['Student_ID'];
					$data['name']=$account_pass['L_name'].", ".$account_pass['F_name']." ".$account_pass['M_name'];
				}
				$this->Snav_Bar($data);
				$this->Dboard();
			}	
			else{
				$data['msg']='<font color=red>Invalid username and/or password.</font><br />';
				$data['username']=$_POST['uname'];
				$data['password']=$_POST['psw'];
				$this->load->view('home',$data);
			}
		}
		public function Dboard(){
			$this->load->view('stud_dashboard');
		}
		public function SNav_Bar($data){
			$this->load->view('stud_nav',$data);
		}
		public function student_classes(){	
			$this->load->view('stud_classes');
		}
		
}
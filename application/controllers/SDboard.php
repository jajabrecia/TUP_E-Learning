<?php if (!defined('BASEPATH')) exit ('No direct script access allowed');
class SDboard extends CI_Controller {

		function __construct(){
		}
		
		public function Dboard($data){
			$this->load->view('stud_dashboard',$data);
        }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
* class Home, class yang pertamakali di aksess
*
*/
class Home extends CI_Controller {
	public function index()
	{
		$data["title"] = "Home";
		$this->load->view('template/index', $data);
	}
}

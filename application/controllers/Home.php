<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


	public function index()
	{
		$this->load->view('common/header');
		$this->load->view('home/home');
		$this->load->view('common/footer');
	}

	public function about()
	{
		$this->load->view('common/header');
		$this->load->view('home/about');
		$this->load->view('common/footer');
	}

	public function events()
	{
		$this->load->view('common/header');
		$this->load->view('home/events');
		$this->load->view('common/footer');
	}
	
	public function blog()
	{
		$this->load->view('common/header');
		$this->load->view('home/blog');
		$this->load->view('common/footer');
	}
	
	public function contact(){
		$this->load->view('common/header');
		$this->load->view('home/contact');
		$this->load->view('common/footer');
	}
}

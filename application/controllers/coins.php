<?php
class Coins extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('coins_model');
	}

	public function index()
	{
		$data['coins'] = $this->coins_model->get_all_coins();
		$data['title'] = 'Coins Index';

		$this->load->view('templates/header', $data);
		$this->load->view('coins/index', $data);
		$this->load->view('templates/footer');
	}

	
}
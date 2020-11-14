<?php

defined('BASEPATH') or exit ('No direct script access allowed');

class Comment extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = "Все новости";
		$this->load->view('templates/header');
		$this->load->view('comment/index', $data);
		$this->load->view('templates/footer');
	}
}

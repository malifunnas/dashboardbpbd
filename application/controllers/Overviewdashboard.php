<?php

class Overviewdashboard extends CI_Controller {
    public function __construct()
    {
		parent::__construct();
	}

	public function index()
	{
        //load view admin/Template.php
        $this->load->view("admin/overview");
	}
}
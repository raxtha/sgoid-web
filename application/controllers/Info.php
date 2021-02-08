<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$data['judul']			= 'Info';
		$data['main']			= 'info';
	}
	
}
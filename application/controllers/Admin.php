<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->vars['halaman'] = 'dashboard';
		$this->vars['content'] = 'admin/dashboard';
		$this->load->view('index', $this->vars);
	}

	public function pengaduan()
	{
		$this->vars['halaman'] = 'pengaduan';
		$this->vars['content'] = 'admin/pengaduan';
		$this->load->view('index', $this->vars);
	}
	
	public function aspirasi()
	{
		$this->vars['halaman'] = 'aspirasi';
		$this->vars['content'] = 'admin/aspirasi';
		$this->load->view('index', $this->vars);
	}
	
	public function pengumuman()
	{
		$this->vars['halaman'] = 'pengumuman';
		$this->vars['content'] = 'admin/pengumuman';
		$this->load->view('index', $this->vars);
	}
}

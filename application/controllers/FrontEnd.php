<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FrontEnd extends CI_Controller {

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
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{

		$this->load->view('FrontOffice/topside');
		$this->load->view('FrontOffice/body');
		$this->load->view('FrontOffice/footer');
	}
	public function terasNasional(){
		$this->load->view('FrontOffice/topside');
		$this->load->view('FrontOffice/body');
		$this->load->view('FrontOffice/footer');
	}
	public function terasSukabumi(){
		$this->load->view('FrontOffice/topside');
		$this->load->view('FrontOffice/body');
		$this->load->view('FrontOffice/footer');
	}
	public function terasCianjur(){
		$this->load->view('FrontOffice/topside');
		$this->load->view('FrontOffice/body');
		$this->load->view('FrontOffice/footer');
	}
	public function terasKriminal(){
		$this->load->view('FrontOffice/topside');
		$this->load->view('FrontOffice/body');
		$this->load->view('FrontOffice/footer');
	}
	public function terasEkonomi(){
		$this->load->view('FrontOffice/topside');
		$this->load->view('FrontOffice/body');
		$this->load->view('FrontOffice/footer');
	}
	public function terasSehat(){
		$this->load->view('FrontOffice/topside');
		$this->load->view('FrontOffice/body');
		$this->load->view('FrontOffice/footer');
	}
	public function mainteance(){
		$this->load->view('CountDown/index');
	}
}

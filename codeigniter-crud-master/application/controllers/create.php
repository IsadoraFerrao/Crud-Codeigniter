<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Create
 *
 * @package     Controllers
 * @subpackage  null
 * @category    Controllers
 * @author      Guilherme Gatti
 * @link        null
 */
class Create extends CI_Controller {

	/**
	 * Construct of CI_Controller
	 *
	 * @param  null  Do not have a param
	 * @return null  Do not have a return
	 */
	public function __construct()
	{
	
		/**
		 * Instead the construct of CI_Controller
		 */
		parent::__construct();

	}

	/**
	 * Index of the create page
	 *
	 * @param  null  Do not have a param
	 * @return null  Do not have a return
	 */
	public function index()
	{

		/**
		 * Load all the views
		 */
		$this->load->view('header');
		$this->load->view('create');
		$this->load->view('footer');

	}

	/**
	 * Create the information of the create page
	 *
	 * @param  null  Do not have a param
	 * @return null  Do not have a return
	 */
	public function create()
	{
		
		/**
		 * Get all form information
		 *
		 * @var string $email  	  Get the email from the form, clean spaces and some characters
		 * @var string $password  Get the password from the form, clean spaces and some characters
		 */
		$email 		= $this->input->post(trim(strip_tags('email')));
		$password 	= $this->input->post(trim(strip_tags('password')));

		/**
		 * Save the form information in a array and encrypt the password
		 *
		 * @var array $data  Create some keys and save all form information
		 */
		$data = array(
			"email"   	=> $email,
			"password"  => md5($password)
		);

		/**
		 * Create the user in the table using the index_model
		 *
		 * @var array $query  Create the user
		 */
		$query = $this->index_model->insert_user($data);

		/**
		 * Redirect to the index page
		 */
		redirect(base_url());

	}

}

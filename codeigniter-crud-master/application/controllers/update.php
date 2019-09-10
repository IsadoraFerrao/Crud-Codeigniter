<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Update
 *
 * @package     Controllers
 * @subpackage  null
 * @category    Controllers
 * @author      Guilherme Gatti
 * @link        null
 */
class Update extends CI_Controller {

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
	 * Index of the update page
	 *
	 * @param  null  Do not have a param
	 * @return null  Do not have a return
	 */
	public function index()
	{

		/**
		 * Save in a variable the third segment of the url
		 *
		 * @var string $segment  Select the third segment of the url
		 */
		$segment = $this->uri->segment(3);

		/**
		 * Select the user query result of the table using the index_model
		 *
		 * @var array $query  Select all the users
		 */
		$query = $this->index_model->get_user($segment);
		
		/**
		 * Save the query result in a new variable
		 *
		 * @var array $data  Create a key and save all the results
		 */
		$data = array(
			"user"   => $query
		);

		/**
		 * Load all the views and send the data variable
		 */
		$this->load->view('header');
		$this->load->view('update', $data);
		$this->load->view('footer');
		
	}

	/**
	 * Update the information of the update page
	 *
	 * @param  null  Do not have a param
	 * @return null  Do not have a return
	 */
	public function update()
	{
		
		/**
		 * Get all form information
		 *
		 * @var int $id  		  Get the id from the form, clean spaces and some characters
		 * @var string $email  	  Get the email from the form, clean spaces and some characters
		 * @var string $password  Get the password from the form, clean spaces and some characters
		 */
		$id 		= $this->input->post(trim(strip_tags('id')));
		$email 		= $this->input->post(trim(strip_tags('email')));
		$password 	= $this->input->post(trim(strip_tags('password')));

		/**
		 * Save the form information in a array and encrypt the password
		 *
		 * @var array $data  Create some keys and save all form information
		 */
		$data = array(
			"id" 		=> $id,
			"email"   	=> $email,
			"password"  => md5($password)
		);

		/**
		 * Update the user query result of the table using the index_model
		 *
		 * @var array $query  Update the specific user
		 */
		$query = $this->index_model->update_user($id, $data);

		/**
		 * Redirect to the index page
		 */
		redirect(base_url());

	}

}

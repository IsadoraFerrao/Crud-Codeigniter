<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Index
 *
 * @package     Controllers
 * @subpackage  null
 * @category    Controllers
 * @author      Guilherme Gatti
 * @link        null
 */
class Index extends CI_Controller {

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
	 * Index of the index page
	 *
	 * @param  null  Do not have a param
	 * @return null  Do not have a return
	 */
	public function index()
	{

		/**
		 * Select all users from the database using the index_model
		 *
		 * @var array $query  Select all the users
		 */
		$query = $this->index_model->get_all();

		/**
		 * Save the query result in a new variable
		 *
		 * @var array $data  Create a key and save all the results
		 */
		$data = array(
			"all"   => $query
		);

		/**
		 * Load all the views and send the data variable
		 */
		$this->load->view('header');
		$this->load->view('index', $data);
		$this->load->view('footer');
	
	}

}

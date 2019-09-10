<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Read
 *
 * @package     Controllers
 * @subpackage  null
 * @category    Controllers
 * @author      Guilherme Gatti
 * @link        null
 */
class Read extends CI_Controller {

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
	 * Index of the read page
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
		 * Read the user in the table using the index_model
		 *
		 * @var array $query  Read a specific user
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
		$this->load->view('read', $data);
		$this->load->view('footer');
	
	}

}

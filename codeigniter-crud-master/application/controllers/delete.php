<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Delete
 *
 * @package     Controllers
 * @subpackage  null
 * @category    Controllers
 * @author      Guilherme Gatti
 * @link        null
 */
class Delete extends CI_Controller {

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
	 * Index of the delete page
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
		 * Delete a user of the table using the index_model
		 *
		 * @var array $query  Delete a specific user
		 */
		$query = $this->index_model->delete_user($segment);

		/**
		 * Redirect to the index page
		 */
		redirect(base_url());

	}
}

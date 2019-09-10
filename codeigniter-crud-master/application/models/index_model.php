<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Index_model
 *
 * @package    Models
 * @subpackage null
 * @category   Models
 * @author     Guilherme Gatti
 * @link       null
 */
class Index_model extends CI_Model{

	/**
	 * Construct of CI_Model
	 *
	 * @param  null  Do not have a param
	 * @return null  Do not have a return
	 */
	public function __construct()
	{
	
		/**
		 * Instead the construct of CI_Model
		 */
		parent::__construct();

	}

	/**
	 * Get all the users in the table
	 *
	 * @param  null   Do not have a param
	 * @return array  Return the query result
	 */
	public function get_all()
	{

		/**
		 * Select all the user query results of the table
		 *
		 * @var array $query  Select all the users
		 */
		$query = $this->db->get("users");
		
		/**
		 * Return the query result
		 */
		return $query;

	}

	/**
	 * Select the segment and use to return a value
	 *
	 * @param  string $segment  Select form the url the id user
	 * @return array  			Return the query result
	 */
	public function get_user($segment)
	{

		/**
		 * Select the user query result of the table when the id is equal to the segment var
		 *
		 * @var array $query  Select all the users
		 */
		$query = $this->db->get_where("users", array("id" => $segment));
		
		/**
		 * Return the query result
		 */
		return $query;

	}

	/**
	 * Insert an new user in the table
	 *
	 * @param  string $data  All the form information
	 * @return null  		 Do not have a return
	 */
	public function insert_user($data)
	{

		/**
		 * Insert all the form information in the user table
		 */
		$this->db->insert("users", $data);

	}

	/**
	 * Update an user in the table
	 *
	 * @param  int $id    	 Get the user id
	 * @param  string $data  All the form information
	 * @return null  		 Do not have a return
	 */
	public function update_user($id, $data)
	{

		/**
		 * Update all the form information in the user table referent to the id
		 */
		$this->db->where("id", $id);
		$this->db->update("users", $data);

	}

	/**
	 * Delete an user in the table
	 *
	 * @param  string $id    Get the user id
	 * @return null  		 Do not have a return
	 */
	public function delete_user($id)
	{

		/**
		 * Update the user table referent to the id
		 */
		$this->db->where("id", $id);
		$this->db->delete("users");

	}

}

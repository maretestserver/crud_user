<?php
/**
 * 
 */
class User extends Application
{

	private $_table= 'user_data';
	private $_hash ='J#sh&^dxjdjslhWstQ`mclsyUtysjh_lsjdh!djd=p';
	/*
	*Insertuje podatke u bazu
	*/
	public  function saveData($name, $email, $password,$user_rola)
	{
		$name = $this->db->escape($name);
		$email = $this->db->escape($email);
		$password = $this->db->escape($password);
		$user_rola = $this->db->escape($user_rola);
	    $password =hash_hmac('sha512', $password, $this->_hash);
		

		

		 $sql = "INSERT INTO `{$this->_table}`(`ime_prezime`, `email`, `lozinka`,`users`)
	      VALUES('".$name."', '".$email."', '".$password."', 
	    '".$user_rola."')";
	
		
		$podaci= $this->db->query($sql);
		
	}
	/*
	*selektuje podatke iz baze
	*/
	public function showTable($record_per_page, $page, $start_from)
	{
		 $sql = "SELECT * FROM `{$this->_table}` ORDER BY ime_prezime DESC LIMIT $start_from, $record_per_page";
		return $podaci= $this->db->query($sql);
		
	}
	/*
	*broji stranice
	*/
	public function button_pagination($record_per_page)
	{
		$sql = "SELECT * FROM  `{$this->_table}` ORDER BY id DESC";
		$podaci= $this->db->query($sql);
		//$podaci= $this->db->fetchAll($sql);
		$total_records = mysqli_num_rows($podaci);  
 		$total_pages = ceil($total_records/$record_per_page); 
 		return $total_pages;
	}

	/*
	*selektuje podatke po id
	*/
	public function editdata($id)
	{
		$id = $this->db->escape($id);
		$sql = "SELECT * FROM  `{$this->_table}` WHERE id=".$id;
		
		return $podaci= $this->db->fetchAll($sql);
	}

	/*
	*Brise podatke iz tabele po id
	*/
	public function delete_user_by_id($id)
	{
		$id = $this->db->escape($id);
		$sql = "DELETE  FROM  `{$this->_table}` WHERE id=".$id;

		$podaci= $this->db->query($sql);
	}
}
?>
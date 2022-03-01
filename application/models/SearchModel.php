<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SearchModel extends CI_Model {

	 function ambil_data($keyword=null){
		$this->db->select('*');
		$this->db->from('registrasi');
        $this->db->like('nama',$keyword);
        $this->db->or_like('nomor_identitas',$keyword);

		// if(!empty($keyword)){
		// 	$this->db->like('nama',$keyword),
		// }
		return $this->db->get()->result_array();
	}

}   
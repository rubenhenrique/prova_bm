<?php
 
class Relatorio_model extends CI_Model {
 
    function __construct() {
        parent::__construct();
    }
 

	function listar_autores() {		
		$query = $this->db->get('author');
		return $query->result();
	}


	function contar_ebooks($author_id_fk) {		
		$query = $this->db->select('count(ebook_id) as total');		
		$query = $this->db->get('ebook');
		$this->db->where('author_id_fk', $author_id_fk);
		return $query->row_array();
	}

	function somar_vendas($author_id_fk) {		
		$query = $this->db->select('sum(sale_price) as total');		
		$query = $this->db->join('ebook','ebook.author_id_fk = author.author_id','inner');
		$query = $this->db->join('sale_items','sale_items.ebook_id_fk= ebook.ebook_id','inner');			
		$query = $this->db->get('author');
		$this->db->where('author_id_fk', $author_id_fk);
		return $query->row_array();
	}	



 //$query = $this->db->group_by('ebook.ebook_id');
	function listar_vendas() {
		$query = $this->db->select('author.author_name,count(ebook.ebook_id)');		
		$query = $this->db->join('ebook','ebook.author_id_fk = author.author_id','inner');
		$query = $this->db->join('sale_items','sale_items.ebook_id_fk= ebook.ebook_id','inner');			
		$query = $this->db->get('author');
		return $query->result();
	}
}
?>
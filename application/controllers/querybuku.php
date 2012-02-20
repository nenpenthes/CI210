<?php if (! defined('BASEPATH')) exit('No direct script access
allowed');

class Querybuku extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{		
		$query=$this->db->query('select * from buku');
		foreach($query->result()as $row)
		{
			echo $row->id.", ";
			echo $row->judul.", ";
			echo $row->pengarang.", ";
			echo $row->terbit.", ";
			echo "<br><br>";
		}

		echo'Total Results: '.$query->num_rows();
	}

	function insert($a,$b,$c)
	{
		$data=array('judul'=>$a,'pengarang'=>$b,'terbit'=>$c);
		$this->db->insert('buku',$data);
	}

	function update($a,$b,$c,$d)
	{
		$data=array('judul'=>$a,'pengarang'=>$b,'terbit'=>$c);
		$this->db->where('id',$d);
		$this->db->update('buku',$data);

	}

	function delete()
	{
		$this->db->where('id',3);
		$this->db->delete('buku');
	}
}

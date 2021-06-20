<?php

class M_detail_keluar extends CI_Model {
	protected $_table = 'detail_keluar';

	public function tambah($data){
		return $this->db->insert_batch($this->_table, $data);
	}

	public function lihat_no_keluar($no_keluar){
		return $this->db->get_where($this->_table, ['no_keluar' => $no_keluar])->result();
	}

	public function hapus($no_keluar){
		return $this->db->delete($this->_table, ['no_keluar' => $no_keluar]);
	}
	
	function grafik()
    {
        $this->db->group_by('satuan');
        $this->db->select('satuan');
        $this->db->select("count(*) as totals");
        return $this->db->from('detail_keluar')
          ->get()
          ->result();
    }
}
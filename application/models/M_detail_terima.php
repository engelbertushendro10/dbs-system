<?php

class M_detail_terima extends CI_Model {
	protected $_table = 'detail_terima';

	public function tambah($data){
		return $this->db->insert_batch($this->_table, $data);
	}

	public function lihat_no_terima($no_terima){
		return $this->db->get_where($this->_table, ['no_terima' => $no_terima])->result();
	}

	public function hapus($no_terima){
		return $this->db->delete($this->_table, ['no_terima' => $no_terima]);
	}
	
	function grafik()
    {
        $this->db->group_by('satuan');
        $this->db->select('satuan');
        $this->db->select("count(*) as total");
        return $this->db->from('detail_terima')
          ->get()
          ->result();
    }
}
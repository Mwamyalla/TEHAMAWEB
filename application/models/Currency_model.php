<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Currency_model extends CI_Model
{
    public function create($formArray)
    {
        $this->db->insert('currencies', $formArray);
        return $id = $this->db->insert_id();
    }

    public function update($catid, $formArray)
    {
        $this->db->where('catid', $catid);
        $this->db->update('currencies', $formArray);
    }


    public function getCurrencies()
    {	
		 $this->db->where('disabled', 0);
        $results = $this->db->get('currencies')->result_array();

        return $results;
    }

    public function getRow($catid)
    {
        $this->db->where('catid', $catid);
        $row = $this->db->get('currencies')->row_array();
        return $row;
    }

    public function delete($catid)
    {
        $this->db->where('catid', $catid);
        $this->db->delete('currencies');
    }
}

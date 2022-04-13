<?php

class KasModel extends CI_Model{
    public function getDebet(){
        $this->db->select("sum(nominal*qty) debet");
        $this->db->where('jenis',"debet");
        $debet = $this->db->get("trans")->row();
        return $debet->debet;
    }
    public function getKredit(){
        $this->db->select("sum(nominal*qty) kredit");
        $this->db->where('jenis',"kredit");
        $kredit = $this->db->get("trans")->row();
        return $kredit->kredit;
    }
    public function getTransaction(){
        $this->db->order_by("tanggal,id");
        return $this->db->get("trans");
    }
}
?>
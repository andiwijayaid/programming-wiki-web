<?php
/**
 * Created by PhpStorm.
 * User: AndiWijaya
 * Date: 12/5/2018
 * Time: 10:01 PM
 */

class M_article extends CI_Model
{

    function tampil_data() {
        return $this->db->get('article');
    }

    function tampil_article($where, $table) {
        return$this->db->get_where($table, $where);
    }

    function input_data($data, $table) {
        $this->db->insert($table, $data);
    }
}
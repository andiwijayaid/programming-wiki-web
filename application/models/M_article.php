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

}
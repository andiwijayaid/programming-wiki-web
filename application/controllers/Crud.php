<?php
/**
 * Created by PhpStorm.
 * User: AndiWijaya
 * Date: 12/5/2018
 * Time: 9:56 PM
 */

class Crud extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_article');
        $this->load->helper('url');

    }

    function index()
    {
        $data['article'] = $this->m_article->tampil_data()->result();
        $this->load->view('v_articles', $data);
    }
}
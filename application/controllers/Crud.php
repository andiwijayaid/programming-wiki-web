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

    function about()
    {
        $this->load->view('v_about');
    }

    function article_detail($id)
    {
        $where = array('id' => $id);
        $data['article'] = $this->m_article->tampil_article($where, 'article')->result();
        $this->load->view('v_article_detail', $data);
    }

    // Add
    function add()
    {
        $this->load->view('v_add_article');
    }

    function add_article()
    {
        $author = $this->input->post('author');
        $image = $this->input->post('image');
        $title = $this->input->post('title');
        $articleText = $this->input->post('article_text');

        $data = array(
            'author' => $author,
            'image' => $image,
            'title' => $title,
            'article_text' => $articleText
        );
        $this->m_article->input_data($data, 'article');
        redirect('crud/index');
    }
    // END OF ADD
}
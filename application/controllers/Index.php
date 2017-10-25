<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function p1()
    {
        $this->load->helper('url')->redirect('www.baidu.com');
    }

    public function p2()
    {
        $this->load->helper('url')->redirect('www.google.com');
    }
}

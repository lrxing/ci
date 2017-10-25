<?php defined('BASEPATH') OR exit('No direct script access allowed');

class CMS_Controller extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        if(isset($_SERVER['REQUEST_URI']))
        {
            $paras = explode('?', $_SERVER['REQUEST_URI']);
            $_SERVER['PHP_SELF'] = $paras[0];
        }
        if(isset($paras[1])){
            $_SERVER['QUERY_STRING'] = $paras[1];
        }
       
    }

    public function output_json($json_str)
    {
        header("Content-type: application/json; charset=utf-8");
        echo $json_str;
    }
}

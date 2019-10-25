<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Bmkg extends CI_Controller {

    function __construct(){
        parent::__construct();

    }

    public function index(){
        $url = 'http://data.bmkg.go.id/autogempa.xml';
        $content = file_get_contents($url);
        $x = new SimpleXmlElement($content);
           //print_r($x);
        $data_array = array(
            'datalist' => $x->gempa
        );

        $this->load->view('v_bmkg',$data_array);
    }
    
}

<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Corona extends CI_Controller {

    function __construct(){
        parent::__construct();

    }

    public function index(){
        $url = "https://corona.elpida.my.id/api/";
//        $url = "https://corona.elpida.my.id/api/detail/";
        $get_url = file_get_contents($url);
        $data = json_decode($get_url, true);
        
        $data_array = array(
            'datalist' => $data
        );
        $this->load->view('v_corona',$data_array);
    }

    public function details(){
        $url = "https://corona.elpida.my.id/api/detail/";
        $get_url = file_get_contents($url);
        $data = json_decode($get_url, true);
        
        $data_array = array(
            'datalist' => $data
        );
        $this->load->view('v_corona_details',$data_array);
    }
    
    public function details1(){
        $url = "https://corona.elpida.my.id/api/detail/";
        $get_url = file_get_contents($url);
        $data = json_decode($get_url, true);
        
        $data_array = array(
            'datalist' => $data
        );
        $this->load->view('v_corona_details1',$data_array);
    }

    public function index2(){
        $url = "https://corona.elpida.my.id/api/";
//        $url = "https://corona.elpida.my.id/api/detail/";
        //header('Content-type: application/json');
        $get_url = file_get_contents($url);
//        $data = json_decode($get_url, true);
        $data = json_decode($this->curl->simple_get($get_url));
        
        //var_dump($data);
//        print_r($data);
 
        $data_array = array(
            'datalist' => $data
        );
        $this->load->view('v_corona',$data_array);
    }

    public function index1(){
        $url = 'http://data.bmkg.go.id/autogempa.xml';
        $content = file_get_contents($url);
        $x = new SimpleXmlElement($content);
           //print_r($x);
        $data_array = array(
            'datalist' => $x->gempa
        );

        $this->load->view('v_corona',$data_array);
    }
    
}

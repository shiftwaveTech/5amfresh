<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class MY_Controller extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }
    public function validateSession($controller = null){
        if(!$this->session->userdata('is_logged_in')){
            if($controller != 'login'){
                redirect('/'); 
            }
        } 
        
    }
    public function paginationConfig($arguments){
		$config = array();
		$config["base_url"] = $arguments['href'];
		$config["total_rows"] = $arguments['total_count'];
		$config["per_page"] = $arguments['record_limit'];
		//$config["uri_segment"] = 3;
		$config["uri_segment"] =  isset($arguments['uri_segment']) ? $arguments['uri_segment'] : 3;
		$config['use_page_numbers'] = TRUE;
		$config['full_tag_open'] = '<ul class="pagination cali-bottom-pagination" id="'.$arguments['attr_id'].'" style="float:right;">';
		$config['full_tag_close'] = '</u>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] ='</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="active disable"><a>';
		$config['cur_tag_close'] = '</a></li>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';
		return $config;
	}
    protected function _is_ajax() {
        if (!$this->input->is_ajax_request()) {
            exit('No direct script access allowed');
       }
    }
}
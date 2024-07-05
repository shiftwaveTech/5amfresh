<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CustomPlanController extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    function __construct() {
        parent::__construct();
        $this->template->write_view('header', 'templates/header');
        $this->template->write_view('footer', 'templates/footer-main');
        $this->template->add_js('assets/js/customplan.js');
        $this->template->write('title', 'Freshoo', TRUE);
        $this->postVals = $this->input->post();
        $this->load->model('CustomPlanModel');
        $this->load->library('session');
    }
    
    // Custom Plan Pages

    public function customplan(){
        $this->template->write_view('menu', 'templates/menu-sec');
        $this->template->write_view('content', 'custom-plan');
        $this->template->render(); 
    }

    public function customplan_1(){
      
      $this->template->write_view('menu', 'templates/menu-sec');
      $this->template->write_view('content', 'custom-plan-screen-1');
      $this->template->render();
    }

    public function customplan_2(){
      $this->template->write_view('menu', 'templates/menu-sec');
		  $this->template->write_view('content', 'custom-plan-screen-2');
      $this->template->render(); 
    }

    public function customplan_3(){
      $this->template->write_view('menu', 'templates/menu-sec');
		  $this->template->write_view('content', 'custom-plan-screen-3');
      $this->template->render();

    }

    public function customplan_4(){
      $this->template->write_view('menu', 'templates/menu-sec');
		  $this->template->write_view('content', 'custom-plan-screen-4');
      $this->template->render(); 
    }

    public function customplan_5(){
      $this->template->write_view('menu', 'templates/menu-sec');
		  $this->template->write_view('content', 'custom-plan-screen-5');
      $this->template->render(); 
    }

    public function custom_plan_final(){
      $this->template->write_view('menu', 'templates/menu-sec');
		  $this->template->write_view('content', 'custom-plan-final');
      $this->template->render();
    }

    public function saveEssentialVegetables()
    {
    // Get the raw JSON string from the request body
    $json_str = file_get_contents('php://input');
    
    // Decode the JSON string into a PHP array
    $post_values = json_decode($json_str, true);
    
    // Check if decoding was successful
    if ($post_values !== null) {
        foreach ($post_values as $item) {
            $item_name = $item['item'];
            $kg_value = $item['kg'];
            $gm_value = $item['gms'];
        }
    } else {
        // Handle JSON decoding error
        echo "Error: Failed to decode JSON data";
    }
}

public function saveLeafyVegetables()
{
  $post_values = $this->input->post();
  print_r($post_values);
}

public function saveRootVegetables()
{
  $post_values = $this->input->post();
  print_r($post_values);
}

public function saveSquashVegetables()
{
  $post_values = $this->input->post();
  print_r($post_values);
}

public function savePoddedVegetables()
{
  $post_values = $this->input->post();
  print_r($post_values);
}

public function saveOtherVegetables()
{
  $post_values = $this->input->post();
  print_r($post_values);
}

}
?>
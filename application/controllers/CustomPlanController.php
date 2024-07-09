<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CustomPlanController extends MY_Controller {

    function __construct() {
        parent::__construct();
        $this->template->write_view('footer', 'templates/footer');
        $this->template->add_js('assets/js/customplan.js');
        $this->template->write('title', '5amFresh', TRUE);
        $this->load->model('CustomPlanModel');
        $this->load->library('session');
    }
    // Custom Plan Pages
    public function customplan(){
        $this->template->write_view('menu', 'templates/menu-sec');
        $this->template->add_js('assets/js/script.js');
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
    public function custom_review() {
      $this->template->write_view('menu', 'templates/menu-sec');
      $data = array(
          'essential_vegetables' => $this->session->userdata('essential_vegetables'),
          'leafy_vegetables' => $this->session->userdata('leafy_vegetables'),
          'root_vegetables' => $this->session->userdata('root_vegetables'),
          'squash_vegetables' => $this->session->userdata('squash_vegetables'),
          'podded_vegetables' => $this->session->userdata('podded_vegetables'),
          'other_vegetables' => $this->session->userdata('other_vegetables')
      );
      $this->template->write_view('content', 'custom_review', $data);
      $this->template->render();
  }
   //
    // public function custom_plan_final(){
    //     $this->template->write_view('menu', 'templates/menu-sec');
    //     $this->template->write_view('content', 'custom-plan-final');
    //     $data = array(
    //         'essential_vegetables' => $this->session->userdata('essential_vegetables'),
    //         'leafy_vegetables' => $this->session->userdata('leafy_vegetables'),
    //         'root_vegetables' => $this->session->userdata('root_vegetables'),
    //         'squash_vegetables' => $this->session->userdata('squash_vegetables'),
    //         'podded_vegetables' => $this->session->userdata('podded_vegetables'),
    //         'other_vegetables' => $this->session->userdata('other_vegetables')
    //     );
    //     $this->load->view('custom-plan-final', $data);
    //     $this->template->render();
    // }
//
// public function saveEssentialVegetables() {
//   $json_str = file_get_contents('php://input');
//   $post_values = json_decode($json_str, true);

//   if ($post_values !== null) {
//       $this->session->set_userdata('essential_vegetables', $post_values);
//       echo "Success: Essential vegetables saved.";
//   } else {
//       echo "Error: Failed to decode JSON data";
//   }
// }
// //
    public function saveEssentialVegetables() {
        $json_str = file_get_contents('php://input');
        $post_values = json_decode($json_str, true);
       
         $data = $this->CustomPlanModel->storeEssential($post_values);
         print_r($data);
        // if ($post_values !== null) {
        //     $this->session->set_userdata('essential_vegetables', $post_values);
        // } else {
        //     echo "Error: Failed to decode JSON data";
        // }
    }
    
    public function saveLeafyVegetables() {
        $post_values = $this->input->post();
        $data = $this->CustomPlanModel->storeleafy($post_values);
        // print_r($data);
    }
    public function saveRootVegetables() {
        $post_values = $this->input->post();
        $this->session->set_userdata('root_vegetables', $post_values);
        $data = $this->CustomPlanModel->storeroot($post_values);
    }

    public function saveSquashVegetables() {
        $post_values = $this->input->post();
        $this->session->set_userdata('squash_vegetables', $post_values);
    }
    public function savePoddedVegetables() {
        $post_values = $this->input->post();
        $this->session->set_userdata('podded_vegetables', $post_values);
    }
    // public function saveOtherVegetables() {
    //     $post_values = $this->input->post();
    //     $this->session->set_userdata('other_vegetables', $post_values);
    // }
    public function saveOtherVegetables() {
      
        $post_values =$this->input->post();
        print_r($post_values);
        if ($post_values !== null) {
            $this->session->set_userdata('other_vegetables', $post_values);
        } else {
            echo "Error: Failed to decode JSON data";
        }
    }   
}
?>


   
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MY_Controller {

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
        $this->template->add_js('assets/js/script.js');
        $this->template->write('title', 'Freshoo', TRUE);
        $this->postVals = $this->input->post();
        $this->load->model('UserModel');
        $this->load->library('session');
    }
    public function index() {
        $this->template->add_js('assets/js/customplan.js');
        $this->data['plans'] = $this->UserModel->get_plans();
        $this->template->write_view('menu', 'templates/menu');
        $this->template->write_view('content', 'index',$this->data,TRUE);
        $this->template->render(); 
    }

    public function plans() {
      $this->template->write_view('menu', 'templates/menu-sec');
      $this->template->write_view('content', 'plan-a-screen-1');
      $this->template->render();	  
    }

    public function userSelOffer(){
       if(isset($_POST['seloffer']))
       {
        $selOfferId = $_POST['seloffer'];
        $offerCost = $_POST['offerCost'];
        $response = $this->UserModel->saveSelOffer($selOfferId ,$offerCost );

			  echo "Response: " . json_encode($response);
      }else {
          echo "No seloffer ID received";
      }
    }

    // public function subscribe(){
    //   $this->template->write_view('menu', 'templates/menu-sec');
    //   $this->data['results'] = $this->UserModel->get_data();     
    //   $this->template->write_view('content', 'subscribe-page-select-plan-1',$this->data);
    //   $this->template->render();	
    // }

    public function subscribe() {
      $this->template->write_view('menu', 'templates/menu-sec');
      $this->template->write_view('content', 'subscribe-page-select-plan-1');
      $this->template->render();
  }

  public function get_user_data() {
      $mobile = $this->input->post('mobile');
      $data = $this->UserModel->get_data_by_mobile($mobile);
      echo json_encode($data);
  }
    public function verifyOTP() {
      $post_values = $this->input->post();
      $response = $this->UserModel->saveUserDetails($post_values);
      echo json_encode($response);    
    }

    public function userAddress() {
      $post_values = $this->input->post();
      $response = $this->UserModel->saveAddress($post_values);
      echo json_encode($response);
    }

    public function chooseday(){
      
      $this->template->write_view('menu', 'templates/menu-sec');
      $this->template->write_view('content', 'subscribe-page-select-day');
      $this->template->render();	  		  
    }

    public function selectedDay(){
      $post_values = $this->input->post();
      $response = $this->UserModel->saveSelectedDay($post_values);
      echo json_encode($response);
    }

    public function selectoffer(){  
      $this->template->write_view('menu', 'templates/menu-sec');
      $this->template->write_view('content', 'subscribe-page-select-offer');
      $this->template->render();	  		  
    }

    public function selectedOffer(){
      $post_values = $this->input->post();
      $response = $this->UserModel->saveSelectedOffer($post_values);
      echo json_encode($response);
    }

    public function preview() {
      $this->template->write_view('menu', 'templates/menu-sec');
      $data['results'] = $this->UserModel->get_data();
      $this->template->write_view('content', 'review',$data);
      $this->template->render();
  }
  
    // RazorPay Payment
    public function save_payment_data() {
      
      $response = $this->input->post('response');
      $paymentDetails = $this->input->post('paymentDetails');
      print_r($paymentDetails);
      $cardNumber = $paymentDetails['cardNumber'];
      $cardName = $paymentDetails['cardName'];
      $status = $paymentDetails['status'];
      $type = $paymentDetails['type'];
      $paymentId = $paymentDetails['paymentId'];
      $response = $this->UserModel->savePayment($cardNumber, $cardName, $status, $type, $paymentId);

      echo json_encode($response);
  }
   
}
?>

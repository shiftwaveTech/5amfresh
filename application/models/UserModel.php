<?php
class UserModel extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    
    public function get_plans()
    {
        $query = $this->db->query("SELECT plan_name, plan_description, plan_varaities_veggies,veggies_weight FROM plans WHERE plan_status = 'Active'");
        return $query->result();
    }

    public function saveSelOffer($selOfferId,$offerCost ,$recommended,$plan_weight , $varieties){
        if($selOfferId){   
            $this->session->set_userdata('logged_offerDivId', $selOfferId);
            $this->session->set_userdata('logged_offerCost', $offerCost);
            $this->session->set_userdata('logged_recommended', $recommended);
            $this->session->set_userdata('logged_plan_weight', $plan_weight);
            $this->session->set_userdata('logged_varieties', $varieties);
            return ['status'=>'success','message'=>'Offer ID saved successfully.']; 
        } else {
            return ['status'=>'error','message'=>'Invalid offer ID.']; 
        }
    }

    public function saveUserDetails($post_vals) {
        if ($post_vals) {
            $existing_record = $this->db->get_where('customers', array('mobile' => $post_vals['userPhone']))->row();
            
            if ($existing_record) {
                $this->session->set_userdata('logged_userPhone', $post_vals['userPhone']);
                return ['status' => 'success', 'message' => 'Phone number already exists.'];
            } else {
                $cost = $this->session->userdata('logged_offerCost');
                $this->session->set_userdata('logged_userPhone', $post_vals['userPhone']);
                $ip_address = $this->input->ip_address();
                $data = array(
                    'name' => $post_vals["userName"],
                    'email' => $post_vals['userMail'],
                    'mobile' => $post_vals['userPhone']
                );               
                $this->db->insert('customers', $data);
                
                return ['status' => 'success', 'message' => 'Address Saved.'];
            }
        } else {
            return ['status' => 'error', 'message' => 'Invalid Address!'];
        }
    }

    public function saveAddress($post_vals) {
        if($post_vals) {
            // $userPhone = $this->session->userdata('logged_userPhone');
            $userPhone = $post_vals['customer_phone'];
            // $address = $post_vals['house_no'] . ' ' . $post_vals['street'];
    
            $existing_record = $this->db->get_where('customers', array('mobile' => $userPhone))->row();
    
            $data = array(
                'area' => $post_vals["area"],
                'address' => $post_vals['street'],
                'house_no' => $post_vals['house_no'],
                'landmark' => $post_vals['landmark'],
                'whatsapp_number' => $post_vals['whatsapp_num']
            );
            if ($existing_record) {
                $this->db->where('mobile', $post_vals['customer_phone']);
                $this->db->update('customers', $data);
                return ['status' => 'success', 'message' => 'Address Saved.'];
            } else {
                return ['status' => 'error', 'message' => 'Invalid Address!'];   
            }
        }
    }

    public function saveSelectedDay($post_vals){
        if (isset($post_vals["selectedDay"]) && isset($post_vals["selectedPlan"])) {
            $userPhone = $this->session->userdata('logged_userPhone');
            $this->session->set_userdata('logged_offerCost', $post_vals["selectedPlan"]);
            $existing_record = $this->db->get_where('customers', array('mobile' => $userPhone))->row();
            $data = array(
                'selected_day' => $post_vals["selectedDay"],
                'selected_plan' => $post_vals["selectedPlan"]
            );
            if ($existing_record) {
                $this->db->where('mobile', $userPhone);
                $this->db->update('customers', $data);
                return ['status' => 'success', 'message' => 'Address Saved.'];
            } else {
                return ['status' => 'error', 'message' => 'Invalid Address!'];   
            }
        } else {
            return ['status' => 'error', 'message' => 'Missing parameters: selectedDay and/or selectedPlan.'];   
        }
    }
    

    
    public function saveSelectedOffer($post_vals){
        $userPhone = $this->session->userdata('logged_userPhone');
        $this->session->set_userdata('logged_offerCost', $post_vals["selectedPlan"]);
        $existing_record = $this->db->get_where('customers', array('mobile' => $userPhone))->row();
        $data = array(
        'selected_offer' => $post_vals["selectedOffer"],
        'selected_plan' => $post_vals["selectedPlan"]
        );
        if ($existing_record) {
            $this->db->where('mobile', $userPhone);
            $this->db->update('customers', $data);
            return ['status' => 'success', 'message' => 'Address Saved.'];
        }else {
            return ['status' => 'error', 'message' => 'Invalid Address!'];   
    }

    } 

    //Get Preview Page Data
    public function get_data() {
        $userPhone = $this->session->userdata('logged_userPhone');
        $this->db->where('mobile', $userPhone);
        $query = $this->db->get('customers');
        return $query->result();
    }
    public function get_data_by_mobile($mobile) {
        $this->db->where('mobile', $mobile);
        $query = $this->db->get('customers');
        return $query->row(); // Use row() for a single record
    }

    //Save Payment Data 
    // public function savePayment($response, $paymentDetails) {
    //     $data = array(
    //         '' => $paymentDetails[''],
    //         '' => $paymentDetails[''],
    //         '' => $paymentDetails[''],
    //         '' => $paymentDetails[''],
    //         '' => $paymentDetails[''] ,
    //         '' => $paymentDetails['']
    //     );
    //     $this->db->insert('payments', $data);
    // }
   
}
?>

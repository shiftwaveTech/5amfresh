<?php
class CusAgreementModel extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->table = 'sw_clientagreement_forms';
    }
    public function getCustomerAgreement($post_data = []){
        $customers = [];
        $limit = 20;
        $start_from = 0;
        $userId =  $this->session->userdata('logged_userid');
        if ( isset( $post_data['page_no'] ) &&  $post_data['page_no'] > 0 ){
            $start_from = ( $post_data['page_no'] - 1 ) * $limit ;
        }
        $this->db->select('swca_id,swca_name,swca_email,swca_status,swca_signed_date,swca_document');
        $this->db->from($this->table);
        $this->db->where(['swca_status!='=>0]);
         if(isset($post_data['search_txt']) && $post_data['search_txt']!=""){
            $term = trim($post_data['search_txt']);
            $columns_arr = ['swca_name'=>$term,
                            'swca_email'=>$term
                           ];
            $this->db->group_start(); 
            foreach($columns_arr as $key=>$value){
                 $this->db->or_like($key,$value);
            }
            $this->db->group_end(); 
        }
        $this->db->order_by("swca_id", "DESC");
        $this->db->limit($limit,$start_from);
        $getDetails = $this->db->get();
        $cus_agg_results = $getDetails->result();
       
        foreach($cus_agg_results as $customer){        
            $customers[$customer->swca_id] = [ 'swca_id'=>$customer->swca_id,
                                               'swca_name'=>$customer->swca_name,
                                               'swca_email'=>$customer->swca_email,
                                               'swca_status'=>$customer->swca_status,
                                               'swca_signed_date'=>$customer->swca_signed_date,
                                               'swca_document'=>$customer->swca_document
            ];
        }
        
        return $customers;
     }
    public function totalcusagreement_customerCount($post_data){
        $this->db->select('*');
        $this->db->from($this->table);
        $this->db->where(['swca_status!='=>0]);
        $getDetails = $this->db->get();
        return $getDetails->num_rows();
    } 

    public function updateCusData($postVals){
        if(is_array($postVals['cus_ag_id'])){           
            $CusAgSel = []; 
                foreach ($postVals['cus_ag_id'] as $swca_id) {    
                    print_r($swca_id);
                    $CusAgSel[] = array(       
                    'swca_id'=>$swca_id,      
                    'swca_status'=>0,    
                    ); 
                } 
            $this->db->update_batch($this->table, $CusAgSel,'swca_id');
            return $postVals['cus_ag_id'];
        }

    }
    
}  
?>
<?php 
class LeadModel extends CI_Model {

    public function __construct(){
        parent::__construct();
        $this->table = 'lgs_leads';
    }

    public function getLeads($post_data = []){
        $leads = [];
        $limit = 20;
        $start_from = 0;
        $userId =  $this->session->userdata('logged_userid');
        if ( isset( $post_data['page_no'] ) &&  $post_data['page_no'] > 0 ){
            $start_from = ( $post_data['page_no'] - 1 ) * $limit ;
        }
        $this->db->select('ll.lead_id,lcu.cid,lcu.first_name,lcu.last_name,lcu.email,lcu.customer_created_date as created,ll.lastmodify_date as last_action,
        ,lead_status_id,lcu.mobile as phone_number,ll.read_status as read_status,ll.lead_owner as lead_owner');
        $this->db->from($this->table.' as ll');
        $this->db->join('lgs_customers as lcu', 'll.cid=lcu.cid','left');
        $this->db->join('lgs_users as lu', 'll.lead_owner=lu.uid','left');
        if(isset($post_data['lead_type']) && $post_data['lead_type']=='myleads'){
            $this->db->where(['ll.lead_deleted!='=>1,'ll.lead_hide_status!='=>1,'ll.lead_owner='=>$userId]);
        }else if(isset($post_data['lead_type']) && $post_data['lead_type']=='deletedleads'){
           // $this->db->where(['ll.lead_deleted'=>1]);
           if($userId == 1 || $userId == 2){
            $this->db->where(['ll.lead_deleted'=>1]);
            } else{
                $this->db->where(['ll.lead_deleted'=>1,'ll.lead_owner='=>$userId]);
            } 
        }elseif(isset($post_data['lead_type']) && $post_data['lead_type']=='hiddenleads'){
            $this->db->where(['ll.lead_hide_status'=>1]);
        }else{
            if($userId == 1 || $userId == 2){
                $this->db->where(['ll.lead_deleted!='=>1,'ll.lead_hide_status!='=>1]);
            } else{
             $this->db->where(['ll.lead_deleted!='=>1,'ll.lead_hide_status!='=>1,'ll.lead_owner='=>$userId]);
            }
        }
        //$this->db->where(['ll.lead_deleted!='=>1,'ll.lead_hide_status!='=>1]);
        if(isset($post_data['search_txt']) && $post_data['search_txt']!=""){
            $term = trim($post_data['search_txt']);
            $columns_arr = ['ll.lead_id' => $term,
                            'lcu.first_name'=>$term,
                            'lcu.last_name'=>$term,
                            'company_name'=>$term,
                            'cust_source'=>$term,
                            'lcu.mobile'=>$term,
                            'lcu.email'=>$term,
                            'lcu.cust_comments'=>$term
                           ];
            $this->db->group_start(); 
            foreach($columns_arr as $key=>$value){
                 $this->db->or_like($key,$value);
            }
            $this->db->group_end(); 
        }
        $this->db->order_by("ll.lastmodify_date", "DESC");
        $this->db->limit($limit,$start_from);
        $getDetails = $this->db->get();
        $lead_results = $getDetails->result();
       // echo $str = $this->db->last_query();
        foreach($lead_results as $lead){
            $leadUsername = $this->getLeadName($lead->lead_owner);
            $leadStatus = $this->getLeadStatus($lead->lead_status_id);
            $leads[$lead->lead_id] = ['lead_id'=>$lead->lead_id,
                                      'customer_name'=>$lead->first_name.''.$lead->last_name,
                                      'phone_number'=>$lead->phone_number,
                                      'created_at'=>$lead->created,
                                      'last_action'=>$lead->last_action,
                                      'lead_status_name'=>$leadStatus,
                                      'read_status'=>$lead->read_status,
                                      'email' => $lead->email,
                                      'cid' => $lead->cid,
                                      'lead_owner' => $leadUsername
                                      //'lead_results_name'=>$lead->lead_results_name,
            ];
        }
        
        return $leads;
    }
    public function getLeadName($lead_owner = false){ 
        $this->db->select('user_name');
        $this->db->from('lgs_users');
        if($lead_owner == NULL){
            $this->db->where(['uid'=>1]);
        }else{
            $this->db->where(['uid'=>$lead_owner]);
        }      
         $getname = $this->db->get()->row();
         return $getname->user_name;
    }

    public function getLeadStatus($statusId = false){        
        $this->db->select('lead_status_name, lead_status_id');
        $this->db->from('lgs_lead_status');
        if($statusId){
             $this->db->where(['lead_status_id'=>$statusId]);
             $getStatus = $this->db->get()->row();
        }else{
             $getStatus = $this->db->get()->result();
        }
            return ($statusId) ? (isset($getStatus->lead_status_name) ? $getStatus->lead_status_name : '' ) : $getStatus;
      }

    public function totalLeadCount($post_data){
        $userId =  $this->session->userdata('logged_userid'); 
        $this->db->select('ll.lead_id,lcu.first_name,lcu.last_name,lcu.customer_created_date as created,ll.lastmodify_date as last_action,
        ,lead_status_id,lcu.mobile as phone_number');
        $this->db->from($this->table.' as ll');
        $this->db->join('lgs_customers as lcu', 'll.cid=lcu.cid','left');
        $this->db->join('lgs_users as lu', 'll.lead_owner=lu.uid','left');
        if(isset($post_data['lead_type']) && $post_data['lead_type']=='myleads'){
            $this->db->where(['ll.lead_deleted!='=>1,'ll.lead_hide_status!='=>1,'ll.user_id='=>$userId]);
        }else if(isset($post_data['lead_type']) && $post_data['lead_type']=='deletedleads'){
            $this->db->where(['ll.lead_deleted'=>1]);
        }elseif(isset($post_data['lead_type']) && $post_data['lead_type']=='hiddenleads'){
            $this->db->where(['ll.lead_hide_status'=>1]);
        }else{
             $this->db->where(['ll.lead_deleted!='=>1,'ll.lead_hide_status!='=>1]);
        }
        if(isset($post_data['search_txt']) && !empty($post_data['search_txt'])){
            $term = trim($post_data['search_txt']);
            $columns_arr = ['ll.lead_id' => $term,
                            'lcu.first_name'=>$term,
                            'lcu.last_name'=>$term,
                            'company_name'=>$term,
                            'cust_source'=>$term,
                            'lcu.mobile'=>$term,
                            'lcu.email'=>$term,
                            'lcu.cust_comments'=>$term
                           ];
                    $this->db->group_start(); 
                    foreach($columns_arr as $key=>$value){
                        $this->db->or_like($key,$value);
                    }
                    $this->db->group_end(); 
        }
        $getDetails = $this->db->get();
       // echo $str = $this->db->last_query();
        return $getDetails->num_rows();
    }
    public function markAsUnread($postVals){
        if($postVals){
            $leadSel = []; 
                foreach ($postVals['lead_id'] as $lead_id) {    
                    $leadSel[] = array(       
                    'lead_id'=>$lead_id,//this is current lead id       
                    'read_status'=>0,    
                    ); 
                } 
            $this->db->update_batch($this->table, $leadSel,'lead_id');
            return $postVals['lead_id'];
        }
    }

    public function markAsHide($postVals){
        if($postVals){
            $leadSel = []; 
                foreach ($postVals['lead_id'] as $lead_id) {    
                    $leadSel[] = array(       
                    'lead_id'=>$lead_id,//this is current lead id       
                    'lead_hide_status'=>1,    
                    ); 
                } 
            $this->db->update_batch($this->table, $leadSel,'lead_id');
            return $postVals['lead_id'];
        }
    }
    public function DeleteLead($postVals){
         $data[] = array(
            'lead_id'=>$postVals['lead_id'],
            'lead_deleted'=>1,
        );    
        $this->db->update_batch($this->table, $data,'lead_id');
            return $postVals['lead_id'];
    }
    
    public function leadDelete($postVals){        
        if(is_array($postVals['lead_id'])){
            $leadSel = []; 
                foreach ($postVals['lead_id'] as $lead_id) {    
                    $leadSel[] = array(       
                    'lead_id'=>$lead_id,//this is current lead id       
                    'lead_deleted'=>1,    
                    ); 
                } 
            $this->db->update_batch($this->table, $leadSel,'lead_id');
            return $postVals['lead_id'];
        }
    }
    public function leadRestore($postVals){
        if(is_array($postVals['lead_id'])){
            $leadSel = []; 
                foreach ($postVals['lead_id'] as $lead_id) {    
                    $leadSel[] = array(       
                    'lead_id'=>$lead_id,//this is current lead id       
                    'lead_deleted'=>0,
                    'lead_delete_user'=> $this->session->userdata('logged_userid'),    
                    ); 
                } 
            $this->db->update_batch($this->table, $leadSel,'lead_id');
            return $postVals['lead_id'];
        }
    }

    public function leadUnhide($postVals){
        if(is_array($postVals['lead_id'])){
            $leadSel = []; 
                foreach ($postVals['lead_id'] as $lead_id) {    
                    $leadSel[] = array(       
                    'lead_id'=>$lead_id,//this is current lead id       
                    'lead_hide_status'=>0,
                    'user_id'=> $this->session->userdata('logged_userid'), 
                    'lead_hide_user' => $this->session->userdata('logged_userid'),
                    ); 
                } 
            $this->db->update_batch($this->table, $leadSel,'lead_id');
            return $postVals['lead_id'];
        }
    }

    public function leadDetailsModel($lead_id){
        $this->db->select('ll.lead_id,lcu.cust_source as cust_source,lcu.first_name,lcu.ip_address,lcu.last_name,lcu.customer_created_date as created,ll.lastmodify_date as last_action,lcu.company_name as company_name,lcu.website,
        ,ll.lead_status_id as lead_status_id,lcu.mobile as phone_number,ll.read_status as read_status,lcu.cust_comments as cust_comments, lcu.cid as cid, lcu.street as street,lcu.zipcode as zipcode,lcu.city_id as city, lcu.state_id as state,  
        lcu.email as email,lcu.home_phone as alt_phone,ls.state_name as state_name,lls.lead_status_name as lead_status_name,lu.user_name,lcu.country,lis.ind_state_full_name as ind_state_full_name');
        $this->db->from($this->table.' as ll');
        $this->db->join('lgs_customers as lcu', 'll.cid=lcu.cid','left');
        $this->db->join('lgs_users as lu', 'll.lead_owner=lu.uid','left');
        $this->db->join('lsf_states as ls', 'ls.state_id=lcu.state_id','left');
        $this->db->join('lsf_ind_states as lis', 'lis.ind_state_id=lcu.state_id','left');
     //   $this->db->join('view_cities as vc', 'vc.city_id=lcu.city_id','left');
        $this->db->join('lgs_lead_status as lls', 'lls.lead_status_id=ll.lead_status_id','left');
        $this->db->where(['ll.lead_id'=>$lead_id]);
        $getDetails = $this->db->get();
       // echo $str = $this->db->last_query();
        $lead_results = $getDetails->row();
        return $lead_results;
    }

    public function leadNoteDetails($lead_id){
      $sql = "(SELECT sent_date AS date_order,lu.user_name,lu.user_profile_pic,
      lfe.email_follow_id,lfe.email_subject,lfe.email_message,lfe.email_privacy_status,DATE_FORMAT(lfe.sent_date,'%b %d,%Y') AS sent_date,
      '' AS note_id,'' AS lead_notes,lfe.sender_id AS user_id,'' AS created,'' AS notes_privacy
      FROM lgs_follow_email lfe LEFT OUTER JOIN lgs_users lu ON lfe.sender_id=lu.uid
      WHERE lfe.lead_id='$lead_id') 
      UNION
      (SELECT created AS date_order,lu.user_name,lu.user_profile_pic,
      '' AS email_follow_id,'' AS email_subject,'' AS email_message,'' AS email_privacy_status,'' AS sent_date,
      lln.note_id,lln.lead_notes,lln.user_id,
      IF((DATE_FORMAT(lln.created,'%b %d,%Y')=DATE_FORMAT(NOW(),'%b %d,%Y')),
      DATE_FORMAT(lln.created,'%h:%i %p'), DATE_FORMAT(lln.created,'%b %d,%Y')) AS created,lln.notes_privacy_status
      FROM lgs_lead_notes lln 
      INNER JOIN  lgs_users lu ON lln.user_id=lu.uid
      WHERE lln.lead_id='$lead_id') ORDER BY date_order DESC ";
      $maxLeadNoteQry = $this->db->query($sql);
      $leadNote = $maxLeadNoteQry->result();
        return $leadNote;
    }
    public function getFollowupAttachments() {
      $getattData = $this->db->get("lgs_followup_attachments");
       if ($getattData->num_rows() > 0)
       {
          return $getattData->result();
       }
        
    }
    public function fetchleadData($leadId){
      $this->db->where("note_id", $leadId);  
      $query=$this->db->get('lgs_lead_notes');  
      return $query->result(); 
   }
    public function UpdateLeadModel($postVals){
        $user_id = $this->session->userdata('logged_userid'); 
        $customer_id = $postVals['customer_id'];
        if(is_array($postVals)){
      //   if($postVals['table_field'] == 'state_id' || $postVals['table_field'] == 'city_id'){
             //    $data = array(
                  //   'state_id' => $postVals['state_id'],
               //      'city_id' => $postVals['city_id'],                                 
              //   );
        //  }else{
                 $data = array(
                     $postVals['table_field'] => $postVals['field_value'],                                
                 ); 
       //  }             
        $this->db->where('cid', $postVals['customer_id']); 
        $this->db->update($postVals['dbtable'], $data);
        $this->db->query("UPDATE lgs_leads SET lastmodify_date=now(),user_id='$user_id' WHERE cid='$customer_id'");
        // if($postVals['table_field'] == 'state_id' || $postVals['table_field'] == 'city_id'){
        //     return $postVals['state_id']. '#' .$postVals['city_id'];
        // }else{
            return $postVals['field_value'];
        // }
               
       }
    }

    public function NewLeadInsert($postVals){
        $this->ip = $this->input->ip_address();
        if($postVals){
          $data = array(
              "first_name" => $postVals['first_name'],
              "last_name" => $postVals['last_name'],
              "mobile" => $postVals["mobile"],
              "home_phone" => $postVals["home_phone"],
              "email" => $postVals["email"],
              "street" => $postVals["street"],
              "website" => $postVals["website"],
              "customer_created_date" => date('Y-m-d H:i:s'),
              "zipcode" => $postVals["zip"],
              "company_name" => $postVals["businessname"],
              "city_id" => $postVals["city"],
              "state_id" => $postVals["state"],
              "country" => $postVals["country"],
              "business_type" => $postVals["typeofbusiness"],
              "cust_comments" => $postVals["comments"],
              'ip_address' => $this->ip
          );               
          if($this->db->insert('lgs_customers',$data)){
          $last_id = $this->db->insert_id();
          $maxLeadQry = $this->db->query("SELECT IFNULL(MAX(lead_id)+1,'5000') AS maxLead FROM lgs_leads");
          $maxLeadRow = $maxLeadQry->row();
          $leadId = $maxLeadRow->maxLead;    
          $userId =  $this->session->userdata('logged_userid');     
          $leaddata = array(
              "lead_id" => $leadId,
              "cid" => $last_id,
              "lastmodify_date" => date('Y-m-d H:i:s'),
              "user_id" =>  $userId,
              "lead_owner" => $userId,
              "lead_perm_user" => $postVals["lead_permission"]
          );
          if($this->db->insert('lgs_leads', $leaddata)){
             // return ['status' => "succes"];
              return ['status'=>'success','message'=>'created success...'];	
          }else{
              return ['status' => "error"];
          }
        //   return ['status'=>'success','message'=>'created success...'];	
          }else {
              return ['status'=>'error','message'=>'Something wrong'];           	
          }   
      }
    }
    public function getStates(){
      $getStateData = $this->db->get("lsf_states");
      if ($getStateData->num_rows() > 0)
      {
          return $getStateData->result();
      }
    }
    public function getIndStates(){
        $getStateData = $this->db->get("lsf_ind_states");
        if ($getStateData->num_rows() > 0)
        {
            return $getStateData->result();
        }
      }
    public function getAllStatesData($countryVals) {
        if($countryVals == 1){
            $getStateData = $this->db->get("lsf_states");
        }else {
            $getStateData = $this->db->get("lsf_ind_states");
        }
        if ($getStateData->num_rows() > 0)
        {
            return $getStateData->result();
        }
        
    }
    // public function getCitiesData($postStateVals){
    //       if($postStateVals){
    //       $maxLeadQry = $this->db->query("SELECT * FROM view_cities WHERE state_id = $postStateVals");
    //       foreach($maxLeadQry->result() as $row){
    //            $city_arr[] = $row;
    //       }
    //          return $city_arr;
    //     }
    // }
    public function getEmails($postIdVals){       
     if($postIdVals){ 
        $cid = implode(',', array_filter($postIdVals['selectedValues']));
        $maxLeadQry = $this->db->query("SELECT email FROM lgs_customers WHERE cid IN ($cid)");     
      foreach($maxLeadQry->result() as $row){
           $new_arr[] = $row->email;
      }
           return $new_arr;
     }    
   }
    public function sendEmailAction($postData){
      $this->load->library('email');
      $email_to = $postData['email_to'];  
      $email_to = explode(",",$email_to);     
      $email_cc = $postData['email_cc'];    
      $email_from = $postData['email_from'];
      $emailMessage = $postData['email_message'];
      $userId = $this->session->userdata('logged_userid');
        if(isset($postData['email_privacy']) || isset($postData['email_signature'])){
         $email_privacy = $postData['email_privacy'];
         $email_signature = $postData['email_signature'];
        }else{
         $email_privacy = null;
         $email_signature = null;  
        }          
     $email_subject = $postData['email_subject'];
     if(isset($postData['leadId'])){
        $lead_id = $postData['leadId'];    
     }
     if(isset($postData['customer_id'])){   
        $customer_id = $postData['customer_id'];      
     $maxLeadQry = $this->db->query("SELECT lead_id FROM lgs_leads WHERE cid = $customer_id");
     foreach($maxLeadQry->result() as $row){
        $lead_id[] = $row->lead_id;
     }
    }    
     if(is_array($lead_id)){
         foreach ($lead_id as $key => $_lead_id) {
             $data[] = array( 
                 "lead_id" => $_lead_id,
                 "email_from" =>  $email_from,
                 "email_to" => $email_to[$key],
                 "email_cc" => $email_cc,
                 "email_subject" => $email_subject,
                 "email_message" => $emailMessage,
                 "sender_id" =>  $userId,
                 "sent_date" => date('Y-m-d h:i:s'),
                 "email_privacy_status" => $email_privacy,
                 "email_signature" => $email_signature
              );
           }
       }
       if($this->db->insert_batch('lgs_follow_email',$data)) {
          $leadEmailFollowId = $this->db->insert_id(); 
          if(isset($postData['customer_id'])){   
            $customer_id = $postData['customer_id'];        
          $this->db->query("UPDATE lgs_leads SET lastmodify_date=now(),user_id=$userId WHERE cid='$customer_id'");
          }
          if(isset($postData["multipleFileData"])!=''){
          $multipleFileData=$postData["multipleFileData"];                       
          for ($i=0; $i < sizeof($multipleFileData) ; $i++) {     
            foreach ($lead_id as $key => $_lead_id) {
              $data =  array(
                    "attachment_name" => $multipleFileData[$i],
                    "followup_id" => $leadEmailFollowId,
                    "followup_type" => 2,
                    "lead_id" =>  $_lead_id,
                    "attachment_created" => date('Y-m-d h:i:s')
                    );  
                }
                $this->db->insert('lgs_followup_attachments', $data);                          
              }                
            }             
        }
      $email_cc = explode(",",$email_cc);   
      $url = base_url();
      for($i=0;$i<count($email_to);$i++) {
      // should write select query user_first_name and user_last_name about siteNam...
      $txt="<div style='font-family: Arial, Helvetica, sans-serif; background: #f2f2f2; padding: 10px;'>
      <div style='max-width: 480px; margin: auto; background: #ffffff; padding:15px;'>
      <div align='center'><a href='http://www.shifwtave.com/'><img src='https://www.shiftwave.com/email-imgs/logo-img-email.png' width='200'></a></div>
      <div style='font-size: 24px; text-align: center; color: #333333; padding: 8px;border-top: 1px solid #f2f2f2; margin-top: 10px;'>We have received the new lead from <span style='display: inline-block; color: #4fbdb6;'>Admin</span></div>
      <div style='background: #f9f9f9; border-radius: 6px; padding: 12px; color: #888888; margin-bottom: 2px;'>
      Name
      <div style='color: #333333;'>admin</div>
      </div>
      <div style='background: #f9f9f9; border-radius: 6px; padding: 12px; color: #888888; margin-bottom: 2px;'>
      Email
      <div style='color: #333333; word-break: break-all;'>johnsmith@gmail.com</div>
      </div>
      
      <div style='background: #f9f9f9; border-radius: 6px; padding: 12px; color: #888888; margin-bottom: 2px;'>
      Mobile
      <div style='color: #333333; word-break: break-all;'>9246733161</div>
      </div>
      <div style='background: #f9f9f9; border-radius: 6px; padding: 12px; color: #888888; margin-bottom: 2px;'>
      Services
      <div style='color: #333333; word-break: break-all;'>Website Design, PPC</div>
      </div>
      
      <div style='background: #f9f9f9; border-radius: 6px; padding: 12px; color: #888888; margin-bottom: 2px;'>
      Comments
      <div style='color: #333333; word-break: break-all;'>$emailMessage</div>
      </div>				
      <div style='font-size: 14px; text-align: center; color: #6d6d6d; padding-top: 15px;'>Copyright &copy 2021 - Shiftwave Technologies Inc</div>
      </div>
  </div>";
       $this->email->from($postData['email_from'], 'Support Team');       
       $this->email->to($email_to[$i]);
        if($email_cc){
         $this->email->cc($email_cc);
       }      
        $this->email->subject($postData['email_subject']);
        $this->email->message($txt);
        $this->email->set_mailtype("html");
      if(!$this->email->send()){
          echo $this->email->print_debugger();
       }
       }   
        return ['status'=>'1','message'=>'successfully send...'];
    }
    public function getCustomerServiceType(){
      $getCustomerServiceType = $this->db->get('lgs_customers_plans');
      if($getCustomerServiceType->num_rows() > 0 ) {
        return $getCustomerServiceType->result();
      }
    }
    public function getServiceCustomresPlans($serviceType){
     if($serviceType){
        $maxLeadQry = $this->db->query("SELECT plans,id FROM lgs_selected_customers_plans  WHERE cid_plans_id = $serviceType" );
        foreach($maxLeadQry->result() as $row){
             $sertype_arr[] = $row;
        }
           return $sertype_arr;
      }  
    }
    public function saveLeadNotes($noteVals){
     if($noteVals){
        $userId = $this->session->userdata('logged_userid');
        $this->load->helper('date');
        $leadNote = $noteVals["leadNotes"];
        $leadNoteId = $noteVals["leadId"];
        $this->db->query("UPDATE lgs_leads SET lastmodify_date=now(),user_id='$userId' WHERE lead_id='$leadNoteId'");
        $date = date('Y-m-d H:i:s');
        $data = array(
            "lead_id" => $leadNoteId,
            "lead_notes" => $leadNote,
            "user_id" =>  $userId ,
            "created" => $date,
            "notes_privacy_status" => $noteVals["note_privacy"]
        );
        $this->db->select('user_name,user_profile_pic')->from('lgs_users')->where(['uid' => $userId]);
        $userRow = $this->db->get()->row();
        $userName= $userRow->user_name;
        $datec = date('M j,Y H:i A', strtotime($date))  ;
        $noteUserImage="../../assets/img/user-default-img-new.jpg";
        if($userRow->user_profile_pic){
        $noteUserImage="../../assets/img/users/".$userRow->user_profile_pic;
        }       
        if($this->db->insert('lgs_lead_notes',$data)){
             $leadNoteId = $this->db->insert_id();
             $url = base_url();
             $leadView = "<div id='mainLeadFollowNote$leadNoteId' class='leadDetailsBox'>
             <div class='row'>
             <div class='col-lg-1 col-md-1 col-sm-2 col-xs-3'>
               <div class='address-hr biography'>
                   <p><img src=$noteUserImage></p>
               </div>
             </div>
           <div class='col-lg-11 col-md-11 col-sm-10 col-xs-9'>
               <div class='address-hr biography dispalyField'>
                   <p><b>$userName</b> $datec<br><span class='upnote-$leadNoteId'>$leadNote</span></p>
                   <button data-toggle='tooltip' title='' class='pd-setting-ed' data-original-title='Edit' name='notesFollowupupdate' id='notesFollowupupdate_$leadNoteId' onclick='editleadnote($leadNoteId)'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button>
                   <button data-toggle='tooltip' title='' onclick='deleteLeadNote($leadNoteId)' class='pd-setting-ed' data-original-title='Delete' style='background: #e00000;'><i class='fa fa-trash-o' aria-hidden='true'></i></button>
                 </div>
           </div>
            </div>";
             if(isset($noteVals["multipleFileData"])!=''){
                $multipleFileData=$noteVals["multipleFileData"];                        
                for ($i=0; $i < sizeof($multipleFileData) ; $i++) {     
                  $data =  array(
                        "attachment_name" => $multipleFileData[$i],
                        "followup_id" => $leadNoteId,
                        "followup_type" => 1,
                        "lead_id" =>  $noteVals["leadId"],
                        "attachment_created" => date('Y-m-d h:i:s')
                    );  
                $this->db->insert('lgs_followup_attachments', $data);                
                  }
            return ['status'=>'success','response'=>$leadView]; 
            } 
          }      
        return ['status'=>'success','response'=>$leadView];    
      }
    }
    public function saveLeadNotesupdate($noteupdateVals) {
        $userId = $this->session->userdata('logged_userid');
         $this->db->select('lead_id')->from('lgs_lead_notes')->where(['note_id' => $noteupdateVals['upId']]);
          $lead = $this->db->get()->row();
        $this->db->query("UPDATE lgs_leads SET lastmodify_date=now(),user_id='$userId' WHERE lead_id='$lead->lead_id'");
      $data = array(
         'lead_notes' => $noteupdateVals['leadNotes'],
         'notes_privacy_status' => $noteupdateVals['note_privacy'],
         'created' => date('Y-m-d h:i:s')
         );
        $this->db->set($data);
        $this->db->where('note_id', $noteupdateVals['upId']);
        $this->db->update('lgs_lead_notes');   
        return $noteupdateVals;
    }
    public function deleteleadNote($deleteNoteVal){
      $this->db->where('note_id', $deleteNoteVal);
      $data = $this->db->delete('lgs_lead_notes');
      if($data){
       $this->db->where('followup_id', $deleteNoteVal);
       $data = $this->db->delete('lgs_followup_attachments');
       }
       return $deleteNoteVal;    
    }
    public function updateEmailnote($updateEmailVal){
     $data = array("email_privacy_status" => $updateEmailVal['emailPrivacyUpdate'] );
     $this->db->where('email_follow_id', $updateEmailVal['email_id']);
     $this->db->update('lgs_follow_email',$data);
     return ['status' => "success"];   
    }
    public function DeleteEmailFollowup($deletelefollowup) {
     if($deletelefollowup['type'] == 'email'){
     $this->db->where('email_follow_id', $deletelefollowup['followup_id']);
     $data = $this->db->delete('lgs_follow_email');
     if($data){
        $this->db->where('followup_id', $deletelefollowup['followup_id']);
        $data = $this->db->delete('lgs_followup_attachments');
      }
       return $deletelefollowup['followup_id'];
      }    
   }

}
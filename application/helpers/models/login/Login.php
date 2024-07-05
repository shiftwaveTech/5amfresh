<?php 
class Login extends CI_Model {

    public function __construct(){
        parent::__construct();
		$this->load->database();
    }
    public function checkLogins($post_vals){
        if($post_vals){
            $this->load->helper(array('cookie', 'url'));
            $this->ip = $this->input->ip_address();
            $this->postVals = $post_vals;
            $date = new DateTime("now");
			$curr_date = $date->format('Y-m-d H:i:s');
            $this->db->select('a.id as aid,a.username as username,a.ency_pass as password, a.userlevel as userlevel');
			$this->db->from('admin as a');
			$this->db->where('a.username',trim($post_vals['username'])); 
            // $sql = $this->db->get_compiled_select();
            // echo $sql;
		    $chkLoginQuery = $this->db->get();
		    $count  = $chkLoginQuery->num_rows();
		    $fetchUser  = $chkLoginQuery->row(); 
            if($count){
                if(md5($post_vals['password']) !== $fetchUser->password) {      
                    $log_data = array(    
                        'user_id' => NULL,    
                        'ip_address' => $this->ip,    
                        'log_date' => $curr_date,    
                        'logged_from' => 'Etihad Muslim Community Welfare Society',  
                        'login_form_data' => serialize($post_vals),  
                        'login_status' => 'failed',  
                      );                      
                    $result = $this->db->insert("logdetails",$log_data);                  
                    return ['status'=>'error','message'=>'Invalid Username or Password'];
                }else{   
                    $log_data = array(    
                        'user_id' => $fetchUser->aid,    
                        'ip_address' => $this->ip,    
                        'log_date' => $curr_date,    
                        'logged_from' => 'Etihad Muslim Community Welfare Society',  
                        'login_form_data' => serialize($post_vals),  
                        'login_status' => 'success',  
                      );                                                       
                      $this->session->set_userdata('is_logged_in', true);
                      $this->session->set_userdata('userid', $fetchUser->aid);
                      $this->session->set_userdata('username', $post_vals['username']);              
                      $this->session->set_userdata('userlevel', $post_vals['account_type']);           
                      $result = $this->db->insert("logdetails",$log_data); 
				
                      return ['status'=>'success','message'=>'logged in success...'];
                }
            }else{
                return ['status'=>'error','message'=>'Invalid Username or Password'];
            }
        }
    }

    
    public function getRandomString($length){
        $validCharacters = "abcdefghijklmnopqrstuvwxyz123456789";
        $validCharNumber = strlen($validCharacters);
        $result = "";
        for ($i = 0; $i < $length; $i++) {
            $index = mt_rand(0, $validCharNumber - 1);
            $result .= $validCharacters[$index];
        }
        return $result;
    }

    public function validateAccessToken($token){
        if($token){
            $this->db->select('user_token as token');
			$this->db->from('lgs_users as u');
			$this->db->where('u.user_token',trim($token)); 
		    $getToken = $this->db->get();
		    $count  = $getToken->num_rows();
		    return ($count) ? true : false;
        }
    }
}
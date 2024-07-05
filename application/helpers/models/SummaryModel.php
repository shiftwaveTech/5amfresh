<?php
class SummaryModel extends CI_Model {
     
    public function __construct()
    {
        parent::__construct();
        $this->table = 'lgs_onboard_webdetails';
    }
    public function getCustomerSummary($post_data = []){
        $customers = [];
        $limit = 20;
        $start_from = 0;
        $userId =  $this->session->userdata('logged_userid');
        if ( isset( $post_data['page_no'] ) &&  $post_data['page_no'] > 0 ){
            $start_from = ( $post_data['page_no'] - 1 ) * $limit ;
        }
        $this->db->select('lob.ob_webdetails_id,lob.ob_web_domainname,lob.ob_services_email,lob.ob_business_ad_phone,lob.ob_creteddate as created_on');
        $this->db->from($this->table.' as lob');
        // if($userId == 1 || $userId == 2){
        if($userId == 2){
            $this->db->where(['lob.ob_cust_status!='=>0]);
         }else{
            $this->db->where(['lob.ob_cust_status!='=>0,'lob.ob_team_memberid='=>2]);
         }
         if(isset($post_data['search_txt']) && $post_data['search_txt']!=""){
            $term = trim($post_data['search_txt']);
            $columns_arr = ['lob.ob_webdetails_id' => $term,
                            'lob.ob_web_domainname'=>$term,
                            'lob.ob_services_email'=>$term,
                            'lob.ob_business_ad_phone'=>$term
                           ];
            $this->db->group_start(); 
            foreach($columns_arr as $key=>$value){
                 $this->db->or_like($key,$value);
            }
            $this->db->group_end(); 
        }
        $this->db->order_by("lob.ob_webdetails_id", "DESC");
        $this->db->limit($limit,$start_from);
        $getDetails = $this->db->get();
        $summary_results = $getDetails->result();
        foreach($summary_results as $customer){        
            $customers[$customer->ob_webdetails_id] = ['ob_webdetails_id'=>$customer->ob_webdetails_id,
                                                       'customer_name'=>$customer->ob_web_domainname,
                                                       'ob_services_email'=>$customer->ob_services_email,
                                                       'ob_business_ad_phone'=>$customer->ob_business_ad_phone,
                                                       'created_on'=>$customer->created_on
            ];
        }
        
        return $customers;
     }
    public function totalOnboarding_customerCount($post_data){
        $this->db->select('lob.ob_webdetails_id,lob.ob_web_domainname,lob.ob_services_email,lob.ob_business_ad_phone,lob.ob_creteddate as created_on');
        $this->db->from($this->table.' as lob');
        $getDetails = $this->db->get();
        return $getDetails->num_rows();
    } 
    public function OnboardCusDetails($onboard_id){
        $this->db->select('ob_services_email')->from($this->table)->where(['ob_webdetails_id='=>$onboard_id]);
        $getCusEmail = $this->db->get()->row();
        $getCustomerEmail = $getCusEmail->ob_services_email;
        $this->db->select('lob.ob_business_name,lob.ob_website_url,lob.ob_business_tagline,lob.ob_web_ad_trust_siganl_name as comments,lob.ob_web_competitor_url,lob.ob_business_service,
                           los.obseo_fbsploffer,loe.ob_fbef_trgtaud_age,loe.ob_fbef_trgtaud_gender,loe.ob_fbef_trgtaud_lang,los.obseo_fbcinfo,lob.ob_business_year,lob.ob_client_otherlocation,
                           loe.ob_ef_states,loe.ob_ef_nation,lob.ob_web_domainname,lob.ob_web_domainnumber,lob.ob_web_domainemail,loe.ob_ef_contact_check,loe.ob_ef_personName,loe.ob_ef_personNumber,
                           loe.ob_ef_personEmail,loe.ob_ef_personCmnts,lob.ob_business_ad_street,lob.ob_web_comments,lob.ob_business_ad_city,lob.ob_business_ad_state,lob.ob_business_ad_zip,
                           lob.ob_business_ad_phone,lob.ob_client_office_email,loe.ob_ef_location_check,loe.ob_ef_location_doc,lob.ob_web_color,lob.ob_web_font,lob.ob_web_logo,lob.ob_web_trust_signals,
                           lob.ob_web_ad_ts,lob.ob_web_ad_trust_siganl_logo,loe.ob_web_content,loe.ob_web_content_upload,loe.ob_web_content_create,lob.ob_client_name,lob.ob_web_domaincomments,
                           lob.ob_web_dontdomaindetails,lob.ob_web_domain_name,lob.ob_web_domain_username,loe.ob_vf_web_domain_un,lob.ob_web_domain_pwd,loe.ob_vf_web_domain_pwd,lob.ob_web_dontdetails,
                           lob.ob_web_host_platform,lob.ob_web_host_username,loe.ob_vf_web_host_un,lob.ob_web_host_pwd,loe.ob_vf_web_host_pwd,los.obseo_fbaddress,loe.ob_ef_seokey_doc,los.obseo_competitors,
                           los.obseo_compliance,los.obseo_crtgwm,los.obseo_gwm_username,los.obseo_gwm_pwd,loe.ob_vf_web_domain_un,loe.ob_vf_web_domain_pwd,los.obseo_crtgmb,los.obseo_gmb_username,los.obseo_gmb_pwd,
                           loe.ob_vf_crtgmb_un,loe.ob_vf_crtgmb_pwd,los.obseo_crtgal,los.obseo_gal_username,los.obseo_gal_pwd,loe.ob_vf_crtgal_un,loe.ob_vf_crtgal_pwd,los.obseo_crtfb,los.obseo_fbusername,loe.ob_vf_crtfb_un,
                           los.obseo_fbpwd,loe.ob_vf_crtfb_pwd,los.obseo_fbwebrlandingpage,los.obseo_fbaccess,los.obseo_fbareas,los.obseo_fbimagevideo,los.obseo_fbdailybudget,loe.ob_fbef_bdgt_days,loe.ob_fbef_bdgt_daily_amt,
                           loe.ob_fbef_bdgt_month,loe.ob_fbef_cobj_awr,loe.ob_fbef_cobj_cons,loe.ob_fbef_cobj_conv,loe.ob_ef_fbCobj_cmnts,los.obseo_fbpixel,los.obseo_fbtargetaudience,los.obseo_fb_gaaccess,los.obseo_crtgadw,
                           los.obseo_gadw_username,los.obseo_gadw_pwd,loe.ob_vf_crtgadw_un,loe.ob_vf_crtgadw_pwd,los.obseo_crtgadw_acnum,loe.obseo_vf_crtgadw_acnum,los.obseo_gadw_webrlandingpage,los.obseo_gadw_adtype,
                           los.obseo_fburl,los.obseo_gadw_monthbudget,loe.ob_gadsef_bdgt_days,loe.ob_gadsef_bdgt_month,loe.ob_gadsef_bdgt_daily_amt,loe.ob_gadsef_cobj_awr,loe.ob_ef_gadsCobj_cmnts,los.obseo_gadw_keywords,
                           los.obseo_fbtargetads,los.obseo_fbcontactinfo,los.obseo_gadw_existingaccount,los.obseo_gadw_gaaccess,los.obseo_crttwt,los.obseo_twtusername,los.obseo_twtpwd,loe.ob_vf_crttwt_un,loe.ob_vf_crttwt_pwd,
                           los.obseo_crtlikedin,los.obseo_likedinusername,los.obseo_likedinpwd,loe.ob_vf_crtlikedin_un,loe.ob_vf_crtlikedin_pwd,los.obseo_crtinsta,los.obseo_instausername,los.obseo_instapwd,loe.ob_vf_crtinsta_un,
                           loe.ob_vf_crtinsta_pwd,los.obseo_crtyoutube,los.obseo_youtubeusername,los.obseo_youtubepwd,loe.ob_vf_crtyoutube_un,loe.ob_vf_crtyoutube_pwd,lob.ob_services_opt_weddesign,lob.ob_services_opt_seo,
                           lob.ob_services_opt_fbads,lob.ob_services_opt_smo,lob.ob_services_opt_gads');
        $this->db->from($this->table.' as lob');
        $this->db->join('lgs_onboard_seodetails as los', 'lob.ob_services_email=los.obseo_services_email','left');
        $this->db->join('lgs_ob_extrafields as loe', 'lob.ob_services_email=loe.obseo_services_email','left');
        $this->db->where(['lob.ob_services_email'=>$getCustomerEmail]);
        $getDetails = $this->db->get();
     //   echo $str = $this->db->last_query();
        $webDetails_result = $getDetails->row();
        return $webDetails_result;
     }
     
    
}  
?>
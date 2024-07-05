<?php
class DashboardModel extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->table = 'lgs_leads';
    }
    public function CountAllLeads()
    {
        $this->db->from($this->table);
         $query = $this->db->get();
         return $query->num_rows();    
    }
    public function CountTodayLeads() {
       $query = $this->db->query("SELECT * FROM lgs_customers WHERE customer_created_date >= CURRENT_DATE AND customer_created_date < CURRENT_DATE + INTERVAL 1 DAY");
        return $query->num_rows();             
    }
    
}
?>
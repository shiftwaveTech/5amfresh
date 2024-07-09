<?php
class CustomPlanModel extends CI_Model {
    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
     public function storeEssential($data)
    {
        $this->session->set_userdata('storeEssential_vegetables', $data);
        foreach ($data as $item) {
            $item_name = $item['item'];
            $kg_value = $item['kg'];
            $gm_value = $item['gms'];
            if($kg_value != '' && $gm_value != "")
            {
                $concat =$item_name.$kg_value.'kg'.$gm_value.'gms';
            }else if($kg_value != '' && $gm_value == "")
            {
                $concat =$item_name.$kg_value.'kg';
            }
            else if($kg_value == '' && $gm_value != "")
            {
                $concat =$item_name.$gm_value.'gms';
            }
            $finalConcat = $finalConcat.' ,'.$concat;
        }
        $this->session->set_userdata('storeEssential', $finalConcat);
       $query = $this->db->query("INSERT INTO vegetables_plan (items)
       VALUES ('$finalConcat');");
       
       if($query)
       {
        return "success";
       }
    }
 public function storeleafy($data) {
    $this->session->set_userdata('leafy_vegetables', $data);
    $leafyitems = $data['leafyitems'];
    $kg_value = $data['kgValue'];
    $gm_value = $data['gmValue'];
    if($kg_value != '' && $gm_value != "")
    {
        $concat ='leafy-items : '.$leafyitems.', '.$kg_value.'kg'.' '.$gm_value.'gms';
    }else if($kg_value != '' && $gm_value == "")
    {
        $concat ='leafy-items : '.$leafyitems.', '.$kg_value.'kg';
    }else if($kg_value == '' && $gm_value != "")
    {
        $concat ='leafy-items : '.$leafyitems.', '.$gm_value.'gms';
    }
    $data =$this->session->userdata('storeEssential');
    $finalConcat = $data.' ,'.$concat;
    print_r($finalConcat);

    // $query = $this->db->query("INSERT INTO vegetables_plan (items)
    //    VALUES ('$finalConcat');");
    //    $this->session->set_userdata('storeleafy', $finalConcat);
    //    if($query)
    //    {
    //     return "success";
    //    }
}
    public function storeroot($data) {
        foreach ($data as $item) {
            // echo "Debugging individual item:\n";
            // print_r($item); 
    
            // if ($this->db->affected_rows() == 0) {
            //     echo "Error inserting item:\n";
            //     print_r($item);
            // } else {
            //     echo "Item inserted successfully:\n";
            //     print_r($item);
            // }
        }
    }
}
?>   
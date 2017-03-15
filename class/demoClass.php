<?php

include("admin/class/demo_reel_adminClass.php");

class demo_display{
    
    public function getDemoReel(){
        $arrayDemoData = array();
        $query = mysql_query("SELECT *
                              FROM demo_reels ORDER BY demo_id DESC")or die(mysql_error());
        $row = mysql_fetch_array($query, MYSQL_ASSOC);
        $demo_id = $row['demo_id'];
        $arrayDemoData['demo_id'] = $demo_id;
        
        $demo_name = $row['demo_name'];
        $arrayDemoData['demo_name'] = $demo_name;
        
        $demo_path = $row['demo_path'];
        $arrayDemoData['demo_path'] = $demo_path;
        
        return $arrayDemoData;
    }
}

?>
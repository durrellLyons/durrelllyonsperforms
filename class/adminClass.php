<?php

 class admin_view{
    
    public function better_print_r($input){
        echo "<pre>";
        print_r($input);
        echo "</pre>";
    }
    
    public function closeObject($object){
        unset($object);
    }
 }

?>
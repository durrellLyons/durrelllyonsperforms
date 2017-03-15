<?php

include("admin/class/books_adminClass.php");

class books_view extends books{
    
    public function getAllActiveBooks(){
        return $this->getAllBooks();
    }
    
}

?>
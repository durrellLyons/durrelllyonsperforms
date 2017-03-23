<?php

/***
    *  In the event that the client sends an email for contat
    *  This is the alert message that will be displayed.
    *  The "@" symbol is placed next to the $emailerror variable to indicate that the script should execute as normal
    *  and no errors need to be displayed if this variable is not retrieved, it is only retrieved if data has been modified
    *  A javaScript function is used to allow this message to begin fade out after 2 full seconds
***/
   if(@$emailerror = $_GET['emailerror']){
       /***
        * $emailerror variable holds the value that describes the status of the email sent
        * it uses the strtoupper function to be displayed in all caps
       ***/
       $emailerror = strtoupper($emailerror);
       echo "
               <span id='promptNotify' class='promptNotify'>
                   <strong>$emailerror</strong>
               </span>
           ";
   }
   elseif(@$confirmation = $_GET['confirmation']){
        echo "
           <span id='promptNotify' class='promptNotify'>
               <strong>$confirmation</strong>
           </span>
       ";
   }
/*****************************************/
?>
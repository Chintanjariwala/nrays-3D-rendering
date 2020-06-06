<?php

function myerror($error_no, $error_msg) { 
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>We ecounter an error!</strong> We are working on fixing the issue. Please try again some time.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>'; 
// When error occurred script has to be stoped 
    die(); 
} 
// Setting set_error_handler 
//set_error_handler("myerror"); 

$con = mysqli_connect("192.168.64.2","chintan","chintan","nrays") ;
?>
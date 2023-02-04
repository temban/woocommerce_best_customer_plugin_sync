

        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>LIST OF THE BEST CUSTOMERS FROM THE FIRST TO THE LAST</h1>
</div>    

        </div>



<?php 

include('Control/best_customers_Control.php');
$get_data =new PrintBestCustomerClass;
$get_data->PrintCustomer($_POST['server'],$_POST['username'],$_POST['password'],$_POST['DB_Name']); 


$send_data =new PrintBestCustomerClass;
$succeed = $send_data->PrintCustomer_JSON($_POST['server'],$_POST['username'],$_POST['password'],$_POST['DB_Name']); 
$res = {"userName":"admin","quantity":1}{"userName":"user1","quantity":3}{"userName":"user2","quantity":3}{"userName":"user3","quantity":1}{"userName":"user4","quantity":0}{"userName":"user5","quantity":0};


if($succeed == $res){
echo '<div class="updated"><p><strong>'. __( 'SENT', 'myplugin' ) .'</strong></p></div>';
}
else{
  echo '<div class="updated"><p><strong>'. __( 'Not SENT: try again later', 'myplugin' ) .'</strong></p></div>';
}

?>







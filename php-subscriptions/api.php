<?php 

require_once('./classes/Master.php');
$action = $_GET['action'] ?? '';
$master = new Master();
switch($action){
    case 'save_subscriber':
        echo $master->save_subscriber();
        break;
    case 'verify_subscriber':
        echo $master->verify_subscriber();
        break;
    case 'test':
        echo $master->send_verification(2, 'mcooper62314@gmail.com', "Mark Cooper");
        break;
    default:
        echo json_encode(['status'=>'failed','error'=> 'Invalid given action on this request.']);
        break;
}
?>
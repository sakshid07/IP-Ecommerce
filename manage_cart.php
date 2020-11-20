<?php 
require('connection.php');
require('functions.php');
require('add_to_cart.inc.php');
include('top.php');

$id=get_safe_value($con,$_POST['id']);
$qty=get_safe_value($con,$_POST['qty']);
$type=get_safe_value($con,$_POST['type']);

$obj=new add_to_cart();

if($type=='add'){
	$obj->addProduct($id,$qty);
}

if($type=='remove'){
	$obj->removeProduct($id);
}



echo $obj->totalProduct();
?>

?>
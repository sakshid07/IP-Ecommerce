<?php
class add_to_cart{
	function addProduct($id,$qty){
		$_SESSION['cart'][$id]['qty']=$qty;
	}
	
	function updateProduct($id,$qty){
		if(isset($_SESSION['cart'][$id])){
			$_SESSION['cart'][$id]['qty']=$qty;
		}
	}
	
	function removeProduct($id){
		if(isset($_SESSION['cart'][$id])){
			unset($_SESSION['cart'][$id]);
		}
	}
	
	function emptyProduct(){
		unset($_SESSION['cart']);
	}
	
	function totalProduct(){
		if(isset($_SESSION['cart'])){
			return count($_SESSION['cart']);
		}else{
			return 0;
		}
		
	}

}
?>
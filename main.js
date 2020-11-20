function manage_cart(pid,type){
	
    var qty=jQuery("#qty").val();

jQuery.ajax({
    url:'manage_cart.php',
    type:'post',
    data:'pid='+pid+'&qty='+qty+'&type='+type,
    success:function(result){
        
    }	
});	
}
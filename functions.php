<?php

function pr($arr) {
    echo '<pre>';
    print_r($arr);
}
function prx($arr) {
    echo '<pre>';
    print_r($arr);
    die();
}


function get_product($dbconnect, $id) {
    $sql = "select * from macrame";
    
    
    if($id!=''){
		$sql.=" where id=$id ";
    }
    $res = mysqli_query($dbconnect,$sql );
    $data[] = array();
    while($row=mysqli_fetch_assoc($res)){
        $data[] = $row;
    }
    return $data;
}
?>
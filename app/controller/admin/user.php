<?php 
if(isset($_GET['act'])){
	$act = $_GET['act'];
}

switch ($act) {
	case 'list':
		$user = $model->getUser();
		
		require_once '../view/admin/user/list.php';
		break;
	case 'delete':
    	if(isset($_GET['id'])){
    		$id = $_GET['id'];
    		$del = $model->delete('table_user',$id);
    		if($del){
    			header("location:index.php?com=user&act=list");
					return;
    		}
    		else{
    			header("location:index.php?com=user&act=list");
					return;
    		}
    	}
    	
    	break;
	
	default:
		# code...
		break;
}
?>
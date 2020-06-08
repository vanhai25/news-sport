<?php 
if(isset($_GET['act'])){
	$act = $_GET['act'];
}
else{
	$act ="";
}


switch ($act) {
	case 'list':
		 $cm = $model->getComment();
		if(!$cm){
			$message = "Dữ liệu rỗng!";
		}
		require_once "../view/admin/comment/list.php";
		break;

	case 'edit':
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$data = $model->selectTableById('table_comment',$id);
			if(isset($_POST['edit'])){

				$comment = $_POST['comment'];
				$status = $_POST['status'];

					$d = $model->updateComment($comment,$status,$id);

					if($d){
						header("location:index.php?com=comment&act=list");
						return;
					}

			}


		}

		
    	require_once "../view/admin/comment/edit.php";
		break;

	case 'delete':
    	if(isset($_GET['id'])){
    		$id = $_GET['id'];
    		$del = $model->delete('table_comment',$id);
    		if($del){
    			header("location:index.php?com=comment&act=list");
					return;
    		}
    		else{
    			header("location:index.php?com=comment&act=list");
					return;
    		}
    	}
    	
    	break;
      	case 'search':
      	
      		require_once "view/tintuc/search.php";
      		break;
	
	default:
		
		break;
}
?>
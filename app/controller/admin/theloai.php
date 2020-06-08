<?php 
if(isset($_GET['act'])){
	$act = $_GET['act'];
}
else{
	$act = '';
}

switch ($act) {
	case 'list':
		$data = $model->selectTable('table_catalog');
		require_once "../view/admin/theloai/list.php";
		break;
	case 'add':
		if(isset($_POST['add_type'])){
			$tentl = $_POST['tentl'];
			$tentl_ko = convert_vi_to_en($tentl);
			$c = $model->insertType($tentl,$tentl_ko);
			if($c){
				header('location:?com=theloai&act=list');
			}
			else{
				$message = 'Lỗi !';
			}
		}
		
		require_once "../view/admin/theloai/add.php";
		break;
	case 'edit':


		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$data=$model->selectTableById('table_catalog',$id);

			if(isset($_POST['edit_type'])){
				$tentl = $_POST['tentl'];
				$tentl_ko = convert_vi_to_en($tentl);

				$m = $model->updateType($tentl,$tentl_ko,$id);
				if($m){
				header('location:?com=theloai&act=list');
			}
			else{
				$message = 'Lỗi !';
			}
			}
		}

		
		require_once "../view/admin/theloai/edit.php";
		break;
	case 'delete':
    	if(isset($_GET['id'])){
    		$id = $_GET['id'];
    		$del = $model->delete('table_catalog',$id);
    		if($del){
    			header("location:index.php?com=theloai&act=list");
					return;
    		}
    		else{
    			header("location:index.php?com=theloai&act=list");
					return;
    		}
    	}
    	
    	break;
	default:
		# code...
		break;
}
?>
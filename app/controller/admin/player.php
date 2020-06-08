<?php 
if(isset($_GET['act'])){
	$act = $_GET['act'];
}
else{
	$act ="";
}


switch ($act) {
	case 'list':
		$player = $model->selectTable('table_player');
		if(!$player){
			$message = "Dữ liệu rỗng!";
		}
		require_once "../view/admin/player/list.php";
		break;
	case 'add':
		if(isset($_POST['add'])){
			$error = array();
	    		if(($_FILES['img']['type']!="image/png")
					&& ($_FILES['img']['type']!="image/gif")
					&& ($_FILES['img']['type']!="image/jpeg")
					&& ($_FILES['img']['type']!="image/jpg")
				){
					echo "File không đúng định dạng";
				}
				elseif($_FILES['img']['size'] > 5000000){
					echo "Ảnh phải nhỏ hơn 1MB";
				}
				elseif($_FILES['img']['size'] =""){
					echo "Bạn chọn phải chọn ảnh";
				}
				else{
					$files=$_FILES['img'];
					$img=$files['name'];
					$avatar = time()."-".$img;

					$link_img="../upload/player".$avatar;
					move_uploaded_file($files['tmp_name'],"../upload/player/".$avatar);
				}
			if(empty($_POST['number'])) $error[]='number'; else $number = $_POST['number'];
			if(empty($_POST['name'])) $error[]='name'; else $name = $_POST['name'];
			if(isset($name)){
	        $name_ko = convert_vi_to_en($name);
			}
			if(empty($_POST['pos'])) $error[]='pos'; else $position = $_POST['pos'];
			if(empty($_POST['content'])) $error[]='content'; else $infomation = $_POST['content'];	
			if(empty($error)){
				$pl = $model->insertPlayer($number,$name,$name_ko,$avatar,$position,$infomation);
				// xử lý tags 

				if($pl){
					header("location:index.php?com=player&act=list");
					return;
				}
			}
			else{
				$message = "Bạn cần điển đủ thông tin";
			}
			
	      }
		
		require_once "../view/admin/player/add.php";
		break;
	case 'edit':
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$data = $model->selectTableById('table_player',$id);
			if(isset($_POST['edit'])){
				$file = $_FILES['img']['name'];
					if($file!=''){
						if(($_FILES['img']['type']!="image/png")
						&& ($_FILES['img']['type']!="image/gif")
						&& ($_FILES['img']['type']!="image/jpeg")
						&& ($_FILES['img']['type']!="image/jpg")
						){
							echo "File không đúng định dạng";
						}
						elseif($_FILES['img']['size'] > 5000000){
							echo "Ảnh phải nhỏ hơn 1MB";
						}
						elseif($_FILES['img']['size'] =""){
							echo "Bạn chọn phải chọn ảnh";
						}
						else{
							$files=$_FILES['img'];
							$img=$files['name'];
							$avatar = time()."-".$img;

							$link_img="../upload/".$avatar;
							move_uploaded_file($files['tmp_name'],"../upload/player/".$avatar);
						}
					}
					else{
						$avatar = $data->avatar;

					}

				$name = $_POST['name'];
				$number = $_POST['number'];
				if(isset($name)){
		        $name_ko = convert_vi_to_en($name);
				}
				$position = $_POST['pos'];
				$information = $_POST['content'];		
				// xử lý tags 


					$d = $model->updatePlayer($number,$name,$name_ko,$avatar,$position,$information,$id);

					if($d){
						header("location:index.php?com=player&act=list");
						return;
					}

			}


		}

		
    	require_once "../view/admin/player/edit.php";
		break;

	case 'delete':
    	if(isset($_GET['id'])){
    		$id = $_GET['id'];
    		$del = $model->delete('table_player',$id);
    		if($del){
    			header("location:index.php?com=player&act=list");
					return;
    		}
    		else{
    			header("location:index.php?com=player&act=list");
					return;
    		}
    	}
    	
    	break;
      	case 'search':
      	
      		require_once "view/tintuc/search.php";
      		break;
	
	default:
		require_once "../view/admin/tintuc/list.php";
		break;
}
?>
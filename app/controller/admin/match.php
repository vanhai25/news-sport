<?php 
if(isset($_GET['act'])){
	$act = $_GET['act'];
}
else{
	$act ="";
}


switch ($act) {
	case 'list':
		$m = $model->selectTable('table_match');
		if(!$m){
			$message = "Dữ liệu rỗng!";
		}
		require_once "../view/admin/match/list.php";
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
					$imgname = time()."-".$img;

					$link_img="../upload/".$imgname;
					move_uploaded_file($files['tmp_name'],"../upload/post/".$imgname);
				}

			if(empty($_POST['match'])) $error[]='match'; else $match = $_POST['match'];
			if(empty($_POST['date'])) $error[]='date'; else $date = $_POST['date'];
			if(empty($_POST['hour'])) $error[]='hour'; else $hour = $_POST['hour'];
			if(empty($_POST['loc'])) $error[]='loc'; else $location = $_POST['loc'];
			if(empty($_POST['content'])) $error[]='content'; else $content = $_POST['content'];	
			if(empty($error)){
				$mat = $model->insertMatch($imgname,$match,$date,$hour,$location,$content);

				if($mat){
					header("location:index.php?com=match&act=list");
					return;
				}
			}
			else{
				$message = "Bạn cần điển đủ thông tin";
			}
			
	      }
		
		require_once "../view/admin/match/add.php";
		break;
	case 'edit':
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$data = $model->selectTableById('table_match',$id);
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
							$imgname = time()."-".$img;

							$link_img="../upload/".$imgname;
							move_uploaded_file($files['tmp_name'],"../upload/post/".$imgname);
						}
					}
					else{
						$imgname = $data->img;

					}

				$match = $_POST['match'];
				$date = $_POST['date'];
				$hour = $_POST['hour'];		
				$location = $_POST['loc'];
				$content = $_POST['content'];


					$d = $model-> updateMatch($imgname,$match,$date,$hour,$location,$content,$id);

					if($d){
						header("location:index.php?com=match&act=list");
						return;
					}

			}


		}

		
    	require_once "../view/admin/match/edit.php";
		break;

	case 'delete':
    	if(isset($_GET['id'])){
    		$id = $_GET['id'];
    		$del = $model->delete('table_match',$id);
    		if($del){
    			header("location:index.php?com=match&act=list");
					return;
    		}
    		else{
    			header("location:index.php?com=match&act=list");
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
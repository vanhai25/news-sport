<?php 
if(isset($_GET['act'])){
	$act = $_GET['act'];
}
else{
	$act ="";
}


switch ($act) {
	case 'list':
		$news = $model->selectNews();
		if(!$news){
			$message = "Dữ liệu rỗng!";
		}
		require_once "../view/admin/tintuc/list.php";
		break;
	case 'add':
		$player = $model->selectTable('table_player');
		$type = $model->selectTable('table_catalog');
		if(isset($_POST['add_news'])){
			if(!empty($_POST['player'])) $player = $_POST['player'];
			$idtype = $_POST['type'];
			$iduser = $_SESSION['uid'];
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

			if(empty($_POST['title'])) $error[]='title'; else $title = $_POST['title'];
			if(isset($title)){
	        $titleko = convert_vi_to_en($title);
	
			}
			if(empty($_POST['ndesc'])) $error[]='ndesc'; else $ndesc = $_POST['ndesc'];
			if(empty($_POST['content'])) $error[]='content'; else $content = $_POST['content'];	
			$tags = $_POST['tags'];			
			$video = $_POST['video'];
			$status = $_POST['status'];
			if(empty($error)){
				$idTintuc = $model->insertNews($idtype,$iduser,$imgname,$title,$titleko,$ndesc,$content,$tags,$video,$status);
				// xử lý tags 
				if(!empty($tags)){

				$arrTags = explode(",",$tags);
				foreach($arrTags as $tag){
					$tag = trim($tag);
					$result = $model->selectTags($tag);

					if($result){
						$idTags = $result->id;
					}
					else{
						$idTags = $model->insertTags($tag,convert_vi_to_en($tag));
					}
					
					
					$b=$model->insertTTTags($idTintuc,$idTags);
				
				}
				}
				if(!empty($player)){
					foreach($player as $value => $item){
						$cl = $model->setPostPlayer($idTintuc,$item);
					}
				}
				if($idTintuc){
					header("location:index.php?com=tintuc&act=list");
					return;
				}
			}
			else{
				$message = "Bạn cần điển đủ thông tin";
			}
			
	      }
		
		require_once "../view/admin/tintuc/add.php";
		break;
	case 'edit':
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$type = $model->selectTable('table_catalog');
			$data = $model->selectTableById('table_post',$id);
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

				$title = $_POST['title'];
				if(isset($title)){
		        $titleko = convert_vi_to_en($title);
				}
				$ndesc = $_POST['ndesc'];
				$content = $_POST['content'];		
				$status = $_POST['status'];
				$tags = $_POST['tags'];
				$video = $_POST['video'];
				// xử lý tags 
				if($tags !== $data->tags){
					$c=$model->deleteTags($data->id);
				$arrTags = explode(",",$tags);
				foreach($arrTags as $tag){
					$tag = trim($tag);
					$result = $model->selectTags($tag);

					if($result){
						$idTags = $result->id;
					}
					else{
						$idTags = $model->insertTags($tag,convert_vi_to_en($tag));
					}
					
					
					$b=$model->insertTTTags($data->id,$idTags);
				
				}
				}

					$d = $model->updateNews($imgname,$title,$titleko,$ndesc,$content,$tags,$video,$status,$id);

					if($d){
						header("location:index.php?com=tintuc&act=list");
						return;
					}

			}


		}

		
    	require_once "../view/admin/tintuc/edit.php";
		break;

	case 'delete':
    	if(isset($_GET['id'])){
			$id = $_GET['id'];

			$del = $model->deletePost($id);
			if($del){

    			header("location:index.php?com=tintuc&act=list");
					return;
    		}
    		else{
    			header("location:index.php?com=tintuc&act=list");
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
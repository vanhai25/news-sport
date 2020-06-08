<?php 




if(isset($_GET['page'])){
	$page = $_GET['page'];
}
else{
	$page = 'home';
}




switch ($page) {
	case 'home':
		$news = $model->getNews();
		$newsHot = $model->getNewsHot();
		$match = $model->getMatch();
		$video = $model->getNewsVideo();
		require"view/site/home.php";
		break;
	case 'news':
		$news = $model->getNewst();
		require"view/site/news.php";
		break;

	case 'post':
	if(isset($_GET['name']) && isset($_GET['id'])){
		$link = $_GET['name'];
		$id = $_GET['id'];
		$post = $model->getPostNews($link,$id);
		if(!$post){
			header("location:trang-chu");
			return;
		}
		$newsx=$model->getNewsts($post->id);
		$recent = $model->getNewsRecent($post->id,$post->id_catalog);
		$tags = $model->getTagPost($post->id);
		$pl = $model->getPlayerByPost($post->id);
		// fetch comment
		$cm = $model->getComment($post->id);
		// thêm bình luận
			if(isset($_POST['sm'])){
				$err = '';
			if(empty($_POST['comment'])) $err = 'err'; else $comment = $_POST['comment'];
			$id_user = $_SESSION['id_user'];
			$id_post = $post->id;
			
			if(empty($err)){

				$send = $model->setComment($id_post,$id_user,$comment);
				if($send){
					$mess = '<div class="alert alert-primary" role="alert">
	  Bình luận thành công, đợi admin duyệt
	</div>';
				}
				
			}
			else{
				$er = '<div class="alert alert-danger" role="alert">
	  Vui lòng không để trống
	</div>';
			}
		}

	}
	else{
		header("location:trang-chu");
		return;
	}

		
		require"view/site/post.php";
		break;
	case 'catalog':
		if(isset($_GET['url'])){
			$url = $_GET['url'];
			$cat = $model->getNewsByCatalog($url);
			if(!$cat){
				header("location:trang-chu");
		return;
			}
		}
		else{
		header("location:trang-chu");
		return;
	}
		require"view/site/catalog.php";
		break;
	case 'detail':
		if(isset($_GET['id'])){
			$id = $_GET['id'];
			$detail = $model->getDetailMatch($id);
			if(!$detail){
			header("location:trang-chu");
			return;
		}
		}
		else{
		header("location:trang-chu");
		return;
	}

		require"view/site/detailMatch.php";
		break;
	case 'login':
		if(isset($_POST['sm'])){
			$err=array();
			if(empty($_POST['mail'])) $err[]='mail'; else $mail = $_POST['mail'];
			if(empty($_POST['pass'])) $err[]='pass'; else $pass = $_POST['pass'];
			if(empty($err)){
				$a = $model->login($mail,$pass);
				if($a){
					$_SESSION['id_user'] = $a->id;
					$_SESSION['name_user'] = $a->name;
					$mess ='<div class="alert alert-primary" role="alert">
  Đăng nhập thành công
</div>';
				}
				else{
					$er ='<div class="alert alert-danger" role="alert">
  Tài khoản không tồn tại
</div>';
				}
			}
			else{
				$er = '<div class="alert alert-danger" role="alert">
  Không để trống
</div>';
			}
		}
		require"view/site/login.php";
		break;
	case 'register':
	if(isset($_POST['sm'])){
		$err = array();
		if(empty($_POST['name'])) $err[] = 'name'; else $name = $_POST['name'];
		if(empty($_POST['mail'])) $err[] = 'mail'; else $mail = $_POST['mail'];
		if(empty($_POST['pass'])) $err[] = 'pass'; else $pass = $_POST['pass'];
		if(empty($_POST['rpass'])) $err[] = 'rpass'; else $rpass = $_POST['rpass'];
		if(empty($err)){
			if($model->getMailUser($mail)){
				$er = '<div class="alert alert-danger" role="alert">
  Mail đã đăng ký
</div>';
			}
			elseif(strlen($pass) < 6){
				$er = '<div class="alert alert-danger" role="alert">
  Mật khẩu có kí tự lớn hơn 6
</div>';
			}
			elseif($rpass != $pass){
				$er = '<div class="alert alert-danger" role="alert">
  Mật khẩu nhập lại không giống
</div>';
			}
			else{
				$a = $model->register($name,$mail,$pass);
				$mess ='<div class="alert alert-primary" role="alert">
  Đăng ký thành công
</div>';
			}
		}
		else{
			$er = '<div class="alert alert-danger" role="alert">
  Không để trống
</div>';
		}
	}
		require"view/site/register.php";
		break;
	case 'search':
	if(isset($_POST['sm'])){
		$sr = $_POST['search'];
		$s = $model->search($sr);


	}
	else{
		header("location:trang-chu");
		return;
	}

	
		require"view/site/search.php";
		break;
	case 'team':
		$player = $model->getPlayer();
		require"view/site/team.php";
		break;
	case 'player':
	if(isset($_GET['name']) && isset($_GET['id'])){
		$name = $_GET['name'];
		$id = $_GET['id'];
		$pl = $model->getDetailPlayer($name,$id);
		if(!$pl){
			header("location:trang-chu");
			return;
		}
	}
	else{
		header("location:trang-chu");
		return;
	}
		require"view/site/player.php";
		break;
	case 'tags':
		if($_GET['tag']){
			$tag = $_GET['tag'];
			$tags = $model->getNewsByTags($tag);
			if(!$tags){
			header("location:trang-chu");
			return;
		}
		}
		else{
		header("location:trang-chu");
		return;
	}
		require"view/site/tags.php";
		break;
	case 'thuvien':
		require"view/site/thuvien.php";
		break;
	case 'lienhe':
		require"view/site/contact.php";
		break;
	case 'lichsu':
		require"view/site/lichsu.php";
		break;
	default:
		require"view/site/home.php";
		break;
}


?>
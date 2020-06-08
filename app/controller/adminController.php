<?php 
if(!isset($_SESSION['uid'])){
    header('location:login.php');
}
?>
<?php 


 require_once "../app/model/adminModel.php";
 require_once "../lib/VitoEn.php";
 $model = new adminModel;

  if(isset($_GET['com'])){
    $com = $_GET['com'];
  }
  else{
    $com = 'dashboard';

  }

  switch ($com) {
    case 'theloai':
      require_once "../app/controller/admin/theloai.php";
      break;

    case 'tintuc':
      require_once "../app/controller/admin/tintuc.php";
      break;

    case 'player':
      require_once "../app/controller/admin/player.php";
      break;

    case 'match':
      require_once "../app/controller/admin/match.php";
      break;
    case 'comment':
    

      require_once "../app/controller/admin/comment.php";
      break;

    case 'user':
      require_once "../app/controller/admin/user.php";
      break;
    case 'caidat':
     $data = $model->getUserAdmin($_SESSION['uid']);
     if(isset($_POST['sm'])){
      $name = $_POST['name'];
      $mail = $_POST['mail'];
      $pass = $_POST['pass'];
      $c = $model->updateUser($name,$mail,$pass,$_SESSION['uid']);
      if(isset($c)){
        header("location:?com=caidat");
        return;
      }
     }
      require_once "../view/admin/setting.php";
      break;

    default:
    $post = $model->count('table_post');
    $user = $model->count('table_user');
    $player = $model->count('table_player');
    $comment = $model->count('table_comment');
      require_once "../view/admin/dashboard.php";
      break;

    
  }


?>







 
<?php 
require"DBConnect.php";
class Model extends DBConnect{
	// lấy danh mục tin
	function getCatalog(){
		$sql = "SELECT *
				FROM table_catalog
				WHERE status = 0
		";
		return $this->getMoreRows($sql);
	}
	// Lấy danh sách tin tức để đầu trang
	function getNews(){
		$sql = "SELECT *
				FROM table_post
				WHERE deleted = 0
				ORDER BY id DESC 
				LIMIT 0,6
		";
		return $this->getMoreRows($sql);
	}
	// lấy danh sách tin hot
	function getNewsHot(){
		$sql = "SELECT *
				FROM table_post
				WHERE deleted = 0
				AND status = 1
				ORDER BY id DESC 
				LIMIT 0,2
		";
		return $this->getMoreRows($sql);
	}
	// Lấy danh sách trận đấu
	function getMatch(){
		$sql = "SELECT *
				FROM table_match
				ORDER BY id DESC 
				LIMIT 0,2
		";
		return $this->getMoreRows($sql);
	}
	// Lấy tin tức có video
	function getNewsVideo(){
		$sql = "SELECT *
				FROM table_post
				WHERE video != ''
				AND deleted = 0
				ORDER BY id DESC
				LIMIT 0,4
		";
		return $this->getMoreRows($sql);
	}

	// Lây tin tức 
	function getNewst(){
		$sql = "SELECT p.*, u.name
				FROM table_post p
				INNER JOIN table_user u ON u.id = p.id_user 
				WHERE deleted = 0
				ORDER BY id DESC
				LIMIT 0,9
		";
		return $this->getMoreRows($sql);
	}
	// lấy chi tiết tin
	function getPostNews($link,$id){
		$sql = "SELECT p.*, c.name, c.name_ko
				FROM table_post p 
				INNER JOIN table_catalog c ON c.id = p.id_catalog
				WHERE p.id = $id 
				AND title_ko = '$link'
				AND deleted = 0
		";
		return $this->getOneRow($sql);
	}
	// lấy chi tiết trận đấu
	function getDetailMatch($id){
		$sql = "SELECT *
				FROM table_match
				WHERE id = $id
		";
		return $this->getOneRow($sql);
	}
	// lấy tin tức theo giải đấu
	function getNewsByCatalog($url){
		$sql = "SELECT p.*, c.name,c.name_ko
				FROM table_post p 
				INNER JOIN table_catalog c ON c.id = p.id_catalog
				WHERE c.name_ko = '$url'
				AND p.deleted = 0
				ORDER BY id DESC
		";
		return $this->getMoreRows($sql);
	}
	// đăng ký tài khoản
	function register($name,$mail,$pass){
		$sql = "INSERT INTO table_user(name,mail,pass)
				VALUES('$name','$mail','$pass')
		";
		return $this->executeQuery($sql);
	}
	// Đăng nhập tài khoản
	function login($mail,$pass){
		$sql = "SELECT *
				FROM table_user
				WHERE mail = '$mail'
				AND pass = '$pass'
		";
		return $this->getOneRow($sql);
	}
	// Thêm bình luận
	function setComment($id_post,$id_user,$comment){
		$sql = "INSERT INTO table_comment(id_post,id_user,comment)
				VALUES($id_post,$id_user,'$comment')
		";
		return $this->executeQuery($sql);
	}
	// Lấy bình luận
	function getComment($id_post){
		$sql = "SELECT c.*, u.name, u.avatar  
				FROM table_comment c   
				INNER JOIN table_user u ON u.id = c.id_user
				WHERE c.id_post = $id_post
				AND c.status = 1
				ORDER BY id DESC
		";
		return $this->getMoreRows($sql);
	}
	// check mail ở user
	function getMailUser($mail){
		$sql = "SELECT *
				FROM table_user
				WHERE mail = '$mail'
		"; 
		return $this->getOneRow($sql); 
	}
	// lấy tin trước tin sau của bài viết
	function getNewsts($id){
		$sql = "SELECT *
				FROM table_post 
				WHERE id != $id
				AND deleted = 0
				LIMIT 0,2 
		";
		return $this->getMoreRows($sql);
	}
	// lấy tin liên quan
	function getNewsRecent($id,$x){
		$sql = "SELECT *
				FROM table_post 
				WHERE id != $id
				AND deleted = 0
				AND id_catalog = $x
				LIMIT 0,4
		";
		return $this->getMoreRows($sql);
	}
	// tìm kiếm cầu thủ
	function search($sr){
		$sql = "SELECT *
				FROM table_player
				WHERE name LIKE '%$sr%'
		";
		return $this->getMoreRows($sql);
	}
	//  lấy danh sách cầu thủ
	function getPlayer(){
		$sql = "SELECT *
				FROM table_player
				ORDER BY number ASC 
		";
		return $this->getMoreRows($sql);
	}
	//  lấy chi tiết cầu thủ
	function getDetailPlayer($name,$id){
		$sql = "SELECT *
				FROM table_player
				WHERE name_ko = '$name'
				AND id =$id
		";
		return $this->getOneRow($sql);
	}
	// Lấy tag ở mỗi bài Viết
	function getTagPost($id_post){
		$sql = "SELECT pt.*, t.name, t.name_ko
				FROM table_post_tags pt 
				INNER JOIN table_tags t ON t.id = pt.id_tags
				WHERE id_post = $id_post
		";
		return $this->getMoreRows($sql);
	}
	// Từ tags lấy danh sách tin liên quan
	function getNewsByTags($tag){
		$sql = "SELECT p.*, t.name
				FROM table_post_tags pt 
				INNER JOIN table_tags t ON t.id = pt.id_tags
				INNER JOIN table_post p ON p.id = pt.id_post
				WHERE t.name_ko = '$tag'
		";
		return $this->getMoreRows($sql);
	}
	// Lấy ds cầu thủ liên quan đến bài viết
	function getPlayerbyPost($id){
		$sql = "SELECT p.*
				FROM table_post_player pp 
				INNER JOIN table_player p ON p.id = pp.id_player
				WHERE id_post = $id 
				ORDER BY number ASC
		";
		return $this->getMoreRows($sql);
	}

}
?>
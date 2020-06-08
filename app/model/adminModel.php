<?php
require"DBConnect.php"; 
class adminModel extends DBConnect{
	// Đăng nhập
	function login($mail,$pass){
		$sql = "SELECT *
				FROM table_user
				WHERE mail = '$mail'
				AND pass = '$pass'
				AND status = 1
		";
		return $this->getOneRow($sql);
	}
	// đêm số cột của bảng
	function count($tb){
		$sql = "SELECT count(id) as sl
				FROM $tb
		";
		return $this->getOneRow($sql);
	}
	// lấy user người dùng
	function getUser(){
		$sql = "SELECT *
				FROM table_user
				WHERE status = 0
		";
		return $this->getMoreRows($sql);
	}
	// lấy user quản trị 
	function getUserAdmin($id){
		$sql = "SELECT *
				FROM table_user
				WHERE status = 1
				and id = $id
		";
		return $this->getOneRow($sql);
	}
	// update admin
	function updateUser($name,$mail,$pass,$id){
		$sql = "UPDATE table_user
				SET name = '$name',
				    mail = '$mail',
				    pass = '$pass'
				WHERE id = $id
		";
		return $this->executeQuery($sql);
	}
	// hàm lấy dữ liệu tin tức + thể loại 
	function selectNews(){
		$sql = "SELECT *
				FROM table_post 
				WHERE deleted = 0
				ORDER BY id DESC

		";
		return $this->getMoreRows($sql);
	}
		// Hàm lấy dữ liệu thông qua id
	function selectTableById($tb,$id){
		$sql = "SELECT * 
				FROM $tb 
				WHERE id = $id
		";
		return $this->getOneRow($sql);
	}
		// Hàm lấy dữ liệu
	function selectTable($tb){
		$sql = "SELECT * 
				FROM $tb
				ORDER BY id DESC
				

		";
		return $this->getMoreRows($sql);
	}
		// Hàm thêm dữ liệu tin tức 
	function insertNews($idtype,$iduser,$imgname,$title,$titleko,$ndesc,$content,$tags,$video,$status){
		$sql = "INSERT INTO table_post
				(id_catalog,id_user,img,title,title_ko,description,content,tags,video,status)
				VALUES 
				($idtype,$iduser,'$imgname','$title','$titleko','$ndesc','$content','$tags','$video',$status)
				
		";
		$check = $this->executeQuery($sql);
		if($check) return $this->getIdInsert();
		return false;
	}
		// hàm kiểm tra tags có tồn tại không
	function selectTags($tags){
		$sql = "SELECT *
				FROM table_tags
				WHERE name = '$tags' 
		";
		return $this->getOneRow($sql);
	}
	
	// Hàm thêm dữ liệu tags
	function insertTags($ten_tags,$tags_ko){
		$sql = "INSERT INTO table_tags(name,name_ko)
				VALUES ('$ten_tags', '$tags_ko')

		";
		$check = $this->executeQuery($sql);
		if($check) return $this->getIdInsert();
		return false;
	}
	// Hàm thêm dữ liệu tags + tintuc
	function insertTTTags($idTintuc,$idTags){
		$sql = "INSERT INTO table_post_tags(id_post,id_tags)
				VALUES ('$idTintuc','$idTags')
		";
		return $this->executeQuery($sql);
	}
	function deleteTags($idPost){
		$sql = "DELETE FROM table_post_tags
				WHERE id_post = $idPost
		";
		return $this->executeQuery($sql);
	}

	function setPostPlayer($idPost,$idPlayer){
		$sql = "INSERT INTO table_post_player(id_post,id_player)
				VALUES($idPost,$idPlayer);
		";
		return $this->executeQuery($sql);
	}
	function updateNews($imgname,$title,$titleko,$ndesc,$content,$tags,$video,$status,$id){
		$sql = "UPDATE table_post 
				SET 
					img = '$imgname',
					title = '$title',
					title_ko = '$titleko', 
					description = '$ndesc', 
					content = '$content', 
					tags = '$tags', 
					video = '$video', 
					status = $status
				WHERE id = $id

		";
		return $this->executeQuery($sql);
	}
	function deletePost($id){
		$sql = "UPDATE table_post
				SET deleted = 1
				WHERE id = $id
		";
		return $this->executeQuery($sql);
	}
	// Hàm thêm dữ liệu thể loại
	function insertType($tentl,$tentl_ko){
		$sql = "INSERT INTO table_catalog
				(name,name_ko)
				VALUES
				('$tentl','$tentl_ko')
		";
		return $this->executeQuery($sql);
	}
		// Hàm sửa dữ liệu thể loại
	function updateType($tentl,$tentl_ko,$id){
		$sql = "UPDATE table_catalog
				SET name = '$tentl',
					name_ko = '$tentl_ko'
				WHERE id = $id
		";
		return $this->executeQuery($sql);
	}
	function delete($tb,$id){
		$sql = "DELETE FROM $tb 
				WHERE id = $id
		";
		return $this->executeQuery($sql);
	}
	// thêm cầu thủ
	function insertPlayer($number,$name,$name_ko,$avatar,$position,$infomation){
		$sql = "INSERT INTO table_player(number,name,name_ko,avatar,position,information)
				VALUES ('$number','$name','$name_ko','$avatar','$position','$infomation')
		";
		return $this->executeQuery($sql);
	}
	// update cầu thủ
	function updatePlayer($number,$name,$name_ko,$avatar,$position,$information,$id){
		$sql = "UPDATE table_player
				SET number = '$number',
					name = '$name',
					name_ko = '$name_ko',
					avatar = '$avatar',
					position = '$position',
					information = '$information'
				WHERE id = $id
		";
		return $this->executeQuery($sql);
	}
	// thêm trận đấu
	function insertMatch($img,$match,$date,$hour,$location,$content){
		$sql = "INSERT INTO table_match(img,match_m,date_m,hour_m,location,content)
				VALUES ('$img','$match','$date','$hour','$location','$content')
		";
		return $this->executeQuery($sql);
	}
	function updateMatch($img,$match,$date,$hour,$location,$content,$id){
		$sql = "UPDATE table_match
				SET img = '$img',
					match_m = '$match',
					date_m = '$date',
					hour_m = '$hour',
					location = '$location',
					content = '$content'
				WHERE id = $id
		";
		return $this->executeQuery($sql);
	}
	// lấy bình luận
	function getComment(){
		$sql = "SELECT c.*, p.title
				FROM table_comment c 
				INNER JOIN table_post p ON p.id = c.id_post
				ORDER BY c.id DESC 
		";
		return $this->getMoreRows($sql);
	}
	// update bình luận
	function updateComment($comment,$status,$id){
		$sql = "UPDATE table_comment
				SET comment = '$comment',
					status = $status
				WHERE id = $id
		";
		return $this->executeQuery($sql);
	}
}
?>
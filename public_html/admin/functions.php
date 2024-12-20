<?php 
	function getCategoryName($conn,$id){
		//echo $id;
		$query = "SELECT * FROM category WHERE id = $id";
		//echo $query;die;
		$result = mysqli_query($conn,$query);
		//echo $result;die;
		$data = mysqli_fetch_assoc($result);
		return $data['name'];
		
	}
	function getAllCategory($conn){
		$query = "SELECT * FROM category ORDER BY name ASC";
		$result = mysqli_query($conn,$query);
		$data = array();

		while ($d = mysqli_fetch_assoc($result)) {
			$data[]=$d;
		}
		return $data;
		
	}
	function getimageName($conn,$post_id){
		$query = "SELECT * FROM images WHERE post_id = $post_id";
		$result = mysqli_query($conn,$query);
		$data = array();

		while ($d = mysqli_fetch_assoc($result)) {
			$data[]=$d;
		}
		return $data;
		
	}
	function getallpost($conn){
		$selectallpost = "SELECT * FROM blog_article ORDER BY articleid DESC";
		$qry = mysqli_query($conn, $selectallpost);
		$data = array();

		while ($rn = mysqli_fetch_assoc($qry)) {
			$data[]=$rn;
		}
		return $data;

	}

	function getADDthumbnail($conn,$id){
		$query = "SELECT * FROM images WHERE post_id =$id";
		$result = mysqli_query($conn,$query);
		$data = mysqli_fetch_assoc($result);
		return $data['image'];
		
	}
	function getarticleid($conn,$id){
		$query = "SELECT * FROM blog_article WHERE articleid =$id";
		$result = mysqli_query($conn,$query);
		$data = mysqli_fetch_assoc($result);
		return $data['articleid'];
		
	}
	/*function getUsername($conn,$id){
		$query = "SELECT * FROM user WHERE id =$id";
		$result = mysqli_query($conn,$query);
		$data = mysqli_fetch_assoc($result);
		return $data['username'];
		
	}*/

/*	function getAdminInfo($conn,$email){
		$query = "SELECT * FROM admin WHERE email = '$email'";
		$result = mysqli_query($conn,$query);
		
		$data = mysqli_fetch_assoc($result);
		return $data;
		
	}*/
	function getComments($conn,$post_id){
		$query = "SELECT * FROM comments WHERE post_id = $post_id AND status=1 ORDER BY id DESC";
		$result = mysqli_query($conn,$query);
		$data = array();

		while ($d = mysqli_fetch_assoc($result)) {
			$data[]=$d;
		}
		return $data;
		
	}
	function getallcomments($conn){
		$selectallcomments = "SELECT * FROM comments ORDER BY id DESC";
		$qry = mysqli_query($conn, $selectallcomments);
		$data = array();

		while ($rn = mysqli_fetch_assoc($qry)) {
			$data[]=$rn;
		}
		return $data;

	}
 ?>
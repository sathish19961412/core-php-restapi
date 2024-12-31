
<?php
	require_once 'server.php';
	if(ISSET($_POST['edit'])){
		$id = $_POST['id'];
		$image = $_FILES['images']['name'];
		$image_temp = $_FILES['images']['tmp_name'];
		$title=$_POST['title'];
		$previous = $_POST['previous'];
		$exp = explode(".", $image);
		$end = end($exp);
		$name = time().".".$end;
		$path = "assets/upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if($previous){
				if(move_uploaded_file($image_temp, $path)){
					mysqli_query($conn, "UPDATE `products` set `title` = '$title',`images` = '$name' WHERE `id` = '$id'") or die(mysqli_error());
					echo "<script>alert('User account updated!')</script>";
					header("location:tables-data.php");
				}
			}		
		}else{
			echo "<script>alert('Image only')</script>";
		}
	
	}
?>
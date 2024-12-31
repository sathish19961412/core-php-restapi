
<?php
include_once 'server.php'; 

if(isset($_POST['submit']))
{
    $image=$_FILES['image']['name'];       
    $tmp_name=$_FILES['image']['tmp_name'];
    $title=$_POST['title'];
    $address=$_POST['address'];
    $price=$_POST['price'];
    $unit=$_POST['unit'];
    $size=$_POST['size'];

    $target_dir="assets/upload/".$image;  
    
    if(move_uploaded_file($tmp_name,$target_dir))
    {
      echo "";
    }


    $sqlinsert = "INSERT INTO products (images,title,address,price,unit,size) 
                  VALUES ('$image','$title','$address','$price','$unit','$size')";
    
    mysqli_query($conn,$sqlinsert);

    echo "<script>window.location.href='tables-data.php';</script>";


}

$conn->close();
 
?>
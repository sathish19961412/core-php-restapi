<?php 
    session_start();

    if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

 ?>
<!doctype html>
<html lang="en-US">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!--BootNavbar CSS-->
    <link rel="stylesheet" href="css/bootnavbar.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <!--Medeia Scrren-->
    <link rel="stylesheet" media="screen" href="assets/css/responsive.css">
    <!--Aos animation-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--custom css-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Aos Animation-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!--Font style-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=League+Gothic&family=Sintony:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Sintony:wght@400;700&display=swap" rel="stylesheet">
    <!--Animate CSS-->
    <link rel="stylesheet" href="https://raw.githubusercontent.com/daneden/animate.css/master/animate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>landspace | Admin</title>
  </head>
  <style>
    #padding-1
    {
        padding-top:15px;
    }
    .registration
    {
        padding:10%;
    }
    #product
    {
        background:#fbfbd6;
    }
    .line-3
    {
        background: #ff5b00;
        width: 163px;
        height: 3px;
        text-align: center;
        display: flex;
        position: relative;
        left:0%;
    }
    .img--3
    {
        max-width: 19%;
        height: auto;
        position: relative;
        left: 38%;
        padding-bottom: 1%;
    }
    .line-4
    {
        background: #ff5b00;
        width: 50px;
        height: 8px;
        text-align: center;
        display: flex;
        position: relative;
        left: 7%;
        top: -6px;
    }
    .button--1
    {
        
        background: #ff5b00;
        color: white;
        font-weight: 500;
        text-decoration: none;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 10px;
        padding-left: 10px;
        display: flex;
        justify-content: center;
        width: 34%;
    }
    .button--1:hover
    {
       
        background: #353d50;
        color: white;
        font-weight: 500;
        text-decoration: none;
        padding-top: 10px;
        padding-bottom: 10px;
        padding-right: 10px;
        padding-left: 10px;
        display: flex;
        justify-content: center;
        width: 34%;
    }
    #model-1
    {
        padding-bottom: 50px;
    }
    .img-1
    {
        width: 122%;
        height: auto;
        position: relative;
        left: -83px;
    }
    #services
    {
        margin-top:60px;
        background-color: #151515;
        background-image:url("assets/img/ppstern2.jpg");
        background-repeat: repeat;
        padding: 0px 60px 60px 60px;
    }
    .icon-1
    {
        background: #ff5b00;
        padding-top: 10px;
        padding-left: 15px;
        padding-right: 15px;
        padding-bottom: 10px;
        border-radius: 100%;
        transition: transform .5s ease-out ; 
    }
    .icon-1:hover {
        padding-top: 10px;
        padding-left: 15px;
        padding-right: 15px;
        padding-bottom: 10px;
        border-radius: 100%;
        transform: rotate(360deg);
    }
    #icon--2
    {
        font-size:28px;
    }
    #price
    {
        font-size:18px;
        font-weight:600;
    }
    .logo
    {
        margin-top: -62px;
    }
    #talent
    {

        padding-bottom: 5%;
        padding-top: 5%;
    }
    #talent-1
    {
        padding-top: 30px;
        font-size: 15px;
        line-height: 30px;
    }
/* Scroller styling */
.scroller 
{
  height: 1.2em;
  line-height: 1.2em;
  position: relative;
  overflow: hidden;
  font-size: 52px;
}
.scroller > span {
  position: absolute;
  top: 0;
  animation: slide 5s infinite;
  font-weight: bold;
  
}
@keyframes slide {
  0% {
    top: 0;
  }
  25% {
    top: -1.2em;
  }
  50% {
    top: -2.4em;
  }
  75% {
    top: -3.6em;
  }
  100%{
    top: -3.6em;
  }
}

  </style>
  <body id="product">
   <section id="talent">
       <div class="container">
            <div class="row">
                 <div class="col-md-12">
                      <div class="d-flex">
                            <img src="assets/img/logo.png" class="img--3">
                      </div>
                      <div class="d-flex justify-content-center pb-3">
                           <h5>Rasikitchen Products Add</h5>
                      </div>
                 </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex justify-content-center">
                        &nbsp;
                    </div>
                </div>
                <div class="col-md-4" style="background:#fdfdfd;">
                    <form  method="post" enctype="multipart/form-data" name="registration" class="registration">
                        <div class="mb-3 row">
                            <div class="col-md-12">
                                <label for="recipient-name" class="col-form-label">Title</label>
                                <input  type="text" class="form-control" id="title" name="title" placeholder="Title" autocomplete="off">
                            </div>
                            <div class="col-md-12">
                                <label for="recipient-name" class="col-form-label">Category</label>
                              
                                <select class="custom-select"  name="category" id="category" class="form-control">
                                <option selected>Choose...</option>
                                 <?php
                                    include_once 'server.php'; 
                                    $query=mysqli_query($conn,"SELECT*FROM category");
                                    while($row=mysqli_fetch_array($query))
                                    {
                                        $id=$row['id'];
                                        $category1 = $row['category1'];
                                    ?>
                                    <option value="<?php echo $row['category1']; ?>"><?php echo $row['category1']; ?> </option>
                                    <?php    
                                        }
                                    ?>
                                </select>
                            </div>                 
                            <div class="col-md-12">
                                <label for="recipient-name" class="col-form-label">Product</label>
                                <input type="file" class="form-control" id="photo" name="file" autocomplete="off"  required>
                            </div>
                            <div class="col-md-12">
                                <label for="recipient-name" class="col-form-label">Description</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" id="description" name="description" placeholder="description" rows="3"></textarea>
                            </div>
                                                            
                            <div class="modal-footer">
                                <input type="hidden" name="submit" id="submit" class="btn btn-primary" onclick="myFunction()"></input>
                                <input type="submit" value="submit" name="submit" id="submit" class="btn btn-primary" onsubmit="return validateForm()" ></input>
                            </div>

                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="d-flex justify-content-center mt-5">
                        <a href="admin_dashboard.php" class="btn btn-danger">View Admin Dashboard</a>
                    </div> 
                </div>
            </div>
       </div>
   </section>
  </body>
</html>

<?php
include_once 'server.php'; 

if(isset($_POST['submit']))
{
    $title=$_POST['title'];
    $category=$_POST['category'];
    $description=$_POST['description'];
    $file=$_FILES['file']['name'];          
    $tmp_name=$_FILES['file']['tmp_name'];
    $target_dir="assets/products/".$file;         
    if(move_uploaded_file($tmp_name,$target_dir))
    {
            echo "";
    }  

    $sqlinsert = "INSERT INTO products (title,category,images,description) 
                  VALUES ('$title','$category','$file',' $description')";
    
    mysqli_query($conn, $sqlinsert);

    echo "<script>window.location.href='product.php';</script>";

}
?>

<?php
include_once 'server.php'; 

if(isset($_POST['add']))
{
    $category1=$_POST['category1'];

    $sqlinsert = "INSERT INTO category (category1) 
                  VALUES ('$category1')";
    
    mysqli_query($conn, $sqlinsert);
    echo "<script>window.location.href='product.php';</script>";

}

$conn->close();
 
?>

<?php 
}else{
     header("Location: index.php");
     exit();
}
?>

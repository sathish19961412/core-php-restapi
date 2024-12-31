<?php 
   session_start();
   
   if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>landspace| Display Details</title>
      <meta content="" name="description">
      <meta content="" name="keywords">
      <!-- Favicons -->
      <link href="assets/img/favicon.png" rel="icon">
      <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
      <!-- Google Fonts -->
      <link href="https://fonts.gstatic.com" rel="preconnect">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
      <!-- Vendor CSS Files -->
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
      <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
      <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
      <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- Template Main CSS File -->
      <link href="assets/css/style1.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/css/lightbox.min.css"/>
      <!-- =======================================================
         * Template Name: NiceAdmin
         * Updated: Sep 18 2023 with Bootstrap v5.3.2
         * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
         * Author: BootstrapMade.com
         * License: https://bootstrapmade.com/license/
         ======================================================== -->
   </head>
   <style>
      #action_btn
      {
      margin-top: 73px;
      justify-content: space-evenly;
      }
      #slider1
      {
         width:150px;
         height: auto;
      }
      #details-i h5
      {
        font-size:18px;
      }
      #details-i span
      {
         color:green;
         font-weight:500;
      }
      #slider2
      {
         width:150px;
         height: auto;
      }
      #slider3
      {
         width:150px;
         height: auto;
      }
      #slider4
      {
         width:150px;
         height: auto;
      }
      #slider5
      {
         width:150px;
         height: auto;
      }
      p
      {
      font-size:14px;
      font-weight:500;
      }
     
      #box-shadow1
      {
      background: #fff;
      border: 1px solid #0000003d;
      padding: 12px 0px;
      margin-top: 5px;
      }
      .btn{
      font-size:12px;
      }
      #details--1
      {
      background: #fb711f;
      color: #f7f7f7;
      padding: 3px;
      border-radius: 10px 15px 5px;
      text-align: center;
      }
      #productimage
      {
      max-width: 100%;
      height:165px;
      }
      .col{
      flex: 5 0 17%;
      padding:5px;
      }
      .cat--3
      {
      max-width: 100%;
      height: auto;
      }
      h6 
      {
      font-size: 14px;
      }
      #box---14
      {
         border:1px solid #d7d7d7;
         background:#f5f5dc;
      }
      @media only screen and (max-width:767px)
      {
      #productimage
      {
      max-width: 100%;
      height:auto;
      }
      }
   </style>
   <body id="banner">
      <?php include_once('admin_header.php'); ?>
      <?php include_once('sidemenu_bar.php'); ?>
      <main id="main" class="main">
         <div class="pagetitle">
            <h1>View Products</h1>
         </div>
         <!-- End Page Title -->
         <section class="section">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <?php
                        include_once 'server.php'; 
                        $id=$_GET['view'];
                        $query=mysqli_query($conn,"SELECT*FROM products WHERE id=$id");
                        while($row=mysqli_fetch_array($query))
                        {
                           $id=$row['id'];
                           $image = $row['images'];
                           $title = $row['title'];
                           $address = $row['address'];
                           $price = $row['price'];
                           $unit = $row['unit'];
                           $size = $row['size'];
                        ?>
                     <div class="row" id="box-shadow1">
                        <div class="col-md-6" style="border: 1px solid #f6f9ff;background:#fff;">
                           <div class="d-flex justify-content-center">
                              <img src="assets/upload/<?php echo  $mainimage= $row['images']; ?>" class="img-fluid" id="images" name="images" >
                           </div>
                        </div>
                        <div class="col-md-6" id="box---14">
                           <div class="mt-5" id="details-i">
                              <h5 style="color:#d40807;"><span>Name :</span> <?php echo $row['title']; ?></h5>
                              <h5 style="color:#d40807;"><span>Address :</span> <?php echo $row['address']; ?></h5>
                              <h5 style="color:#d40807;"><span>Price :</span> <?php echo $row['price']; ?></h5>
                              <h5 style="color:#d40807;"><span>Unit :</span> <?php echo $row['unit']; ?></h5>
                              <h5 style="color:#d40807;"><span>Size :</span> <?php echo $row['size']; ?></h5>
                           </div>
                           <span> 
                              <a href="delete.php?id=<?php echo $row['id'];?>" onclick="return confirm('Are you sure you want to delete this Place?');" class="bg-danger text-white btn"><i class="fa fa-trash-o" aria-hidden="true"></i></a> 
                              <button type="button" class="btn btn-warning text-white" data-toggle="modal" data-target="#edit<?php echo $row['id']?>"><span class="glyphicon glyphicon-edit text-white"></span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                           </span>
                           <div class="modal fade" id="edit<?php echo $row['id']?>" aria-hidden="true">
                              <div class="modal-dialog">
                                 <div class="modal-content">
                                    <form method="POST" enctype="multipart/form-data" action="edit.php">
                                       <div class="modal-body">
                                          <div class="col-md-2"></div>
                                          <div class="col-md-8">
                                             <div>
                                                <input type="text" name="id" value="<?php echo $row['id']?>"/>
                                                </div>
                                             <div class="form-group">
                                                <h3>Current Photo</h3>
                                                <img src="assets/upload/<?php echo $row['images']?>" height="120" width="150" />
                                                <input type="hidden" name="previous" value="<?php echo $row['images']?>"/>
                                                <h3>New Photo</h3>
                                                <input type="file" class="form-control" name="images" value="<?php echo $row['images']?>" required="required"/>
                                             </div>
                                             <div class="form-group">
                                                <label>Title</label>
                                                <input type="text" class="form-control" value="<?php echo $row['title']?>" name="title" required="required"/>
                                             </div>
                                          <div class="modal-footer">
                                             <button class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>
                                             <button class="btn btn-warning" name="edit"><span class="glyphicon glyphicon-save"></span> Update</button>
                                          </div>
                                       </div>
                                 </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- End Table with stripped rows -->
               </div>
            </div>

            </div>
            <?php    
               }
               ?>
         </section>
      </main>
      <!-- End #main -->
      <!-- ======= Footer ======= -->
      <!-- End Footer -->
      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      <!-- Vendor JS Files -->
      <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/chart.js/chart.umd.js"></script>
      <script src="assets/vendor/echarts/echarts.min.js"></script>
      <script src="assets/vendor/quill/quill.min.js"></script>
      <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
      <script src="assets/vendor/tinymce/tinymce.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>
      <script src="assets/js/lightbox.js"></script>
      <!-- Template Main JS File -->
      <script src="assets/js/main1.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <!-- Datatable JS -->
      <script src="assets/DataTables/datatables.min.js"></script>
      <!--Popper Js-->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
      <!--Bootstrap 4 Js-->
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
      <script>
         Fancybox.bind('[data-fancybox="gallery"]', {
           //
         });    
      </script>
   </body>
</html>
<?php 
   }else{
        header("Location:index.php");
        exit();
   }
    ?>
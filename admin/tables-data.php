
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
         font-size: 12px;
         background: #254324;
         border: 1px solid #254324;
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
            <h1>View Cards</h1>
         </div>
         <!-- End Page Title -->
         <section class="section">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="row" >
                     <?php
                        include_once 'server.php'; 
                        $query=mysqli_query($conn,"SELECT*FROM products");
                        while($row=mysqli_fetch_array($query))
                        {
                           $id=$row['id'];
                           $image = $row['images'];
                           $title=$row['title'];
                        ?>
                       
                        <div class="col-md-3" style="border:10px solid #f6f9ff;background:#fff;padding:5px;" id="box-shadow1">
                        <a href="tables-view.php?view=<?php echo $row['id'];?>">
                           <div class="d-flex justify-content-center">
                              <img src="assets/upload/<?php echo  $image= $row['images']; ?>" id="images" name="images" class="img-fluid">
                           </div>
                           <span style="color:#d40807;"><?php echo $row['title']; ?></span>
                        </a>
                        </div>
                       
                        <?php    
                        }
                         ?>
                     </div>
                  <!-- End Table with stripped rows -->
               </div>
            </div>
            </div>
           
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

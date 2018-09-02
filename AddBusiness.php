<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add Business</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body id="page-top" >
    <!-- Navbar  -->
     <?php include 'dash_navbar.php'; ?>
     <!-- Navbar End -->
    

   <div id="wrapper">
   

   <!-- sideBar  -->
   <?php include 'sidebar.php'; ?>
   <!-- sideBar End -->
   <div id="content-wrapper">

        <div class="container-fluid">

   

          
          <div class="row">
            <div class="col-xl-3 col-md-3"></div>
             <div class="col-xl-6 col-md-6">

                <div class="card card-login mx-auto mt-5">
                <div class="card-header">Add Business</div>
                <div class="card-body">
          <form method="post" action="addBusAction.php" enctype="multipart/form-data">
                <div class="form-group">
                <div class="form-label-group">
                    <input type="text" id="inputName" class="form-control" placeholder="Name"  name="b_name" required="required" autofocus="autofocus">
                    <label for="inputName"> Business Name</label>
                </div>
                </div>
            <div class="form-group">
            <div class="form-label-group">
                    <input type="text" id="inputCity" class="form-control" placeholder="City" name="b_city" required="required" autofocus="autofocus">
                    <label for="inputCity"> City</label>
            </div>
            </div>
            <div class="form-group">
            <div class="form-label-group">
                    <input type="text" id="inputArea" class="form-control" placeholder="Area" required="required" name="b_area" autofocus="autofocus">
                    <label for="inputArea">Area</label>
                  </div>
                  </div>
                  <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" id="inputLoction" class="form-control" placeholder="Location" required="required" name="b_location" autofocus="autofocus">
                    <label for="inputLocation"> Location</label>
                  </div>
                  </div>
                  <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" id="inputDays" class="form-control" placeholder="Open Days" required="required" name="b_open" autofocus="autofocus">
                    <label for="inputDays">Open Days</label>
                  </div>
                  </div>
                  <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" id="inputServices" class="form-control" placeholder="Services" required="required" name="b_service" autofocus="autofocus">
                    <label for="inputServices">Services</label>
                  </div>
                  </div>
                  <div class="form-group">
                  <div class="form-label-group">
                    <input type="text" id="inputCharges" class="form-control" placeholder="Booking Charges" required="required"  name="b_charge" autofocus="autofocus">
                    <label for="inputCharges">Business Charges</label>
                  </div>
                  </div>

                  <div class="form-group">
                  <div class="form-label-group">
                    <input type="number" id="inputNumber" class="form-control" placeholder="Contact Number" required="required" name="b_contact" autofocus="autofocus">
                    <label for="inputNumber">Business Contact</label>
                  </div>
                  </div>
                  <div class="form-group">
                     <input type="file" name="image"  required="required" accept="image/*">
                  </div> 
                  <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                  
          </form>
         </div>
      </div>
      </div>
      <div class="col-xl-3 col-md-3"></div>
      </div>
      <br>

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright ©  assort tech Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
    </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script>

  </body>

</html>

<?php include("functions.php"); ?>
<?php include("includes/admin_header.php"); ?>
  
  <div class="container-scroller">

    <!-- partial:partials/_navbar.html -->

    <?php include("includes/admin_navbar.php"); ?>

    <!-- partial -->


    <div class="container-fluid page-body-wrapper">

      <!-- partial:partials/_settings-panel.html -->

      <!-- partial:partials/_sidebar.html -->

    <?php include("includes/admin_sidebar.php"); ?> 

          <!-- partial -->



      <div class="main-panel">
        <div class="content-wrapper">

              <div class="row">

                 <div class="col-md-12">

                   <?php

                   if(isset($_GET['source'])){
                    $source = $_GET['source'];

                    switch($source){
                      case "view_all_students":
                        include ("view_all_students.php");
                        break;
                     case "search_students":
                        include ("search_students.php");
                        break;
                      case "add_students":
                          include ("add_students.php");
                          break;
                      case "edit_students":
                          include ("edit_students.php");
                          break;
                      default:
                        echo "None";
                    }

                   }



                   ?>
           
                 </div>
               </div>

        </div>


<?php include("includes/admin_footer.php"); ?>
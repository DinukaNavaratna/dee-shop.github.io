<?php
    include_once 'php/sessions.php';
    if(!isset($_SESSION['admin'])){
        header("Location: login.php"); 
        exit();
    }
?>
<?php 
        include_once 'config/config.php';
        $result = mysqli_query($con, "SELECT * FROM vendor ");
    ?>
<!DOCTYPE html>
<html xmlns="">
<head>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="css/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style >
    .pt-3-half { padding-top: 1.4rem; }


  #button {
  background-color: #25cc9a; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
                </style>
</head>
<body>
    <?php include_once 'php/navbar.php'; ?>

<!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">View  Vendor  Data</h1>
                        <h1 class="page-subhead-line">WELCOME TO OUR CLOTHING STORE.... </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
 <?php
    if(mysqli_num_rows($result) > 0){

 ?> 
             <!-- Editable table -->
                
<div class="card">
  <h3 class="card-header text-center font-weight-bold text-uppercase py-4">
    Vendor Data Table
  </h3>
  <a href="venInvoice.php" id="button" class="button">Print PDF</a> 

<hr/>  
  <div class="card-body">
    <div id="table" class="table-editable">
      <span class="table-add float-right mb-3 mr-2">
        
      </span><br><br>
      <table class="table table-bordered table-responsive-md table-striped text-center" id="editable table">
        <thead>
          <tr>
            <th class="text-center">ID</th>
            <th class="text-center">First Name</th>
            <th class="text-center">Last Name</th>
            <th class="text-center">Email</th>
            <th class="text-center">Phone</th>
            <th class="text-center">Type</th>
            <th class="text-center">Details</th>
            <th class="text-center">Colour</th>
            <th class="text-center">Size</th>
            <th class="text-center">Quantity</th>
            <th class="text-center">Price(1 piece)  </th>
            <th class="text-center">Edit  </th>
            <th class="text-center">Remove </th>
          </tr>
        </thead>
        <?php
        $i =0;
        while($row = mysqli_fetch_array($result)){
            ?>
        <tbody>
          <tr>
            <td class="pt-3-half" contenteditable="true"><?php echo $row["ven_id"]; ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo $row["ven_fname"]; ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo $row["ven_lname"]; ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo $row["ven_email"]; ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo $row["ven_phone"]; ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo $row["ven_type"]; ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo $row["item_details"]; ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo $row["item_color"]; ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo $row["item_size"]; ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo $row["item_qty"]; ?></td>
            <td class="pt-3-half" contenteditable="true"><?php echo $row["item_price"]; ?></td>

            <td class="pt-3-half" >
            <a href="php/updateVen.php?id=<?php echo $row["ven_id"]; ?>">
            <span class="table-up">
                <button type="update" class="btn btn-sucess  btn-rounded btn-sm my-0" style="background: #4CAF50;">
                  Update
                </button>
            </span>
              </a>
            </td>
            
            <td>
              <span class="table-remove">
               <a href ="php/updateVen.php?id=<?php echo $row["ven_id"]; ?>">
                <button type="button" class="btn btn-danger btn-rounded btn-sm my-0">
                  Remove

                </button></span
              ></a>
            </td>
          </tr>
          <?php
            $i++;
        }
            ?>
            </tbody>
        </table>
        <?php
        }
        else{
            echo "No result found";
            }
        ?>
          
        
      
    </div>
  </div>
</div>
<!-- Editable table -->






   </div>
                      </div>
                  </div>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->

    <div id="footer-sec">
        &copy; 2020 Company | Design By : <a href="" target="_blank">Blush Boutique.lk</a>
    </div>
    <!-- /. FOOTER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/bootstrap.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="js/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="js/custom.js"></script>
    <script src="js/editable.js"></script>
    
    <script src="../js/jquery/jquery-2.2.4.min.js"></script>
    <script src="js/functions.js"></script>
    <script src= "">


</body>
</html>







<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Two Page</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />

    <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>


</head>
<body>
@include('admin.navigation')
<div>


</div>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                   
                        <h2>Admin Dashboard(Welcome to admin page) : </h2>
					
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <h5>Total Users</h5>
                        <div class="panel panel-primary text-center no-boder bg-color-blue">
                            <div class="panel-body">
                                <i class="fa fa-user fa-5x"></i>
                                <h3><?php 
                                function total_num_users(){
                                    $db = mysqli_connect('localhost', 'root', '', 'multi_login');

                                    $sql = "SELECT * FROM users";
                                    $result = mysqli_query($db,$sql);
                                    $count = mysqli_num_rows($result);
                                    return $count; 
                                  }
                                  echo "Total User"."<br>";
                                  echo total_num_users();
                                
                                ?> </h3>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <h5>Total Orders(In Kg)</h5>
                        <div class="alert alert-info text-center back-footer-blue1">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                            <h4><br><?php 
                                
                                    $db = mysqli_connect('localhost', 'root', '', 'multi_login');

                                    $sql = 'SELECT SUM(laun_weight) FROM laundry';
                                    $result = mysqli_query($db,$sql);
                                    while($row = mysqli_fetch_array($result)){
                                   
                                   
                                  echo "Total ORDERS(in Kg)"."<br><br>";
                                  echo $row[0];
                                    }
                                ?>  </h4>
                            
                        </div>
                    </div>







                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <h5>Total Customers</h5>
                        <div class="panel panel-primary text-center no-boder bg-color-blue1">
                            <div class="panel-body">
                                <i class="fa fa-group fa-5x"></i>
                                <h3><?php 
                                function total_num_customer(){
                                    $db = mysqli_connect('localhost', 'root', '', 'multi_login');

                                    $sql = "SELECT * FROM laundry";
                                    $result = mysqli_query($db,$sql);
                                    $count = mysqli_num_rows($result);
                                    return $count; 
                                  }
                                  echo "Total Customer"."<br>";
                                  echo total_num_customer();
                                
                                ?></h3>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6">
                        <h5>Total laundry claimed</h5>
                        <div class="alert alert-info text-center">
                            <i class="fa fa-calendar fa-5x"></i>
                            <h4><?php 
                                 $db = mysqli_connect('localhost', 'root', '', 'multi_login');

                                 $sql = 'SELECT SUM(laun_claimed) FROM laundry';
                                 $result = mysqli_query($db,$sql);
                                 while($row = mysqli_fetch_array($result)){
                                
                                
                               echo "<br>"."Total Laundry Claimed"."<br><br>";
                               echo $row[0];
                                 }
                                
                                ?>  </h4>
                            
                        </div>
                    </div>
                    

                </div>
                <!-- /. ROW  -->
                <hr />
                <div style="text-align:center; padding-left:0px;padding-top:0px;">
                
                <a href="google_pie_chart">Types of Cloth Pie chart</a>
  
                 </div>
                 <hr />
                 
                 <hr />
    


    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="../assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="../assets/js/jquery.metisMenu.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="../assets/js/custom.js"></script>


</body>
</html>

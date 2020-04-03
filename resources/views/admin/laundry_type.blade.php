
<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin-Laundry Type</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="../assets/css/bootstrap.css" rel="stylesheet" />

    <!-- FONTAWESOME STYLES-->
    <link href="../assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="../assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <style>
.btn-circle{
        border-radius: 25px;
    }
        </style>
</head>
<body>
<div>


@include('admin.navigation')</div>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Admin Dashboard(Welcome Admin page)</h2>
                    
                    </div>
                </div>
                <!-- /. ROW  -->
                
                
                <hr />



    
                <div class="row">
                   
                    <div class="col-md-12">
                        <h4>Home</h4>
                        <div class="col-md-9">
                        <form method="POST" action="delete_type">
                        @csrf
                        <a href="#" class="btn btn-success btn-circle" data-toggle="modal" data-target="#modalNewLaundry"><i class="fa fa-edit ">&nbsp</i>New LAundry Type</a>
                        
                        
                        <!-- <input type="submit" class="btn btn-warning btn-circle" name="edit_type" value="Edit"> -->
  </div>
                        <div class="col-md-3">
                        <input type="submit" class="btn btn-danger btn-circle" name="delete_type" value="Delete Laundry Type">
                            

  </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr  class='info'>
                                        <th>#</th>
                                        <th>Laundry Type Description</th>
                                        <th>Price/Kg</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                               @foreach($users as $user)
          <tr><td>{{$user->laun_type_id}}</td><td>{{$user->laun_type_desc}}</td><td>{{$user->laun_type_price}}</td>
          <td><input type="checkbox" id="checkItem1" name="check[]" value="{{$user->laun_type_id}}"></td>
          


    </tr>@endforeach
                                </tbody>
                            </table>
                            </form>
                        <script>
$("#checkItem1").click(function () {
$('input:checkbox').not(this).prop('checked', this.checked);
});
</script>             
                            
                        </div>
                    </div>
                </div>
                <!-- /. ROW  -->
                <hr />



    <form method="post" action="laundry_type">
    <div class="modal fade" id="modalNewLaundry" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">New Laundry Type</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      @csrf
        

        <div class="md-form mb-4">
          <i class="fa fa-edit fa-1x prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Laundry Type Description</label>
          <input type="text" id="defaultForm-pass" class="form-control validate" name="laundry_desc" required>
          
        </div>
        <div class="md-form mb-4">
          <i class="fa fa-money fa-1x prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Price Per Kg</label>
          <input type="text" id="defaultForm-pass" class="form-control validate" name="laundry_price" required>
          
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-success btn-circle" name="new_laundry">Update new record</button>
      </div>
    </div>

                        </form>
    

















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

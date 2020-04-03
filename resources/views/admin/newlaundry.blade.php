


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


 @include('admin.navigation')
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Admin Dashboard Home(Welcome to Admin Page)</h2>
                    
                    </div>
                </div>
                <!-- /. ROW  -->
                
                
                <hr />
                



    <form method="post" action="newlaundry">
                <div class="row">
                   @csrf
                    <div class="col-md-12">
                        <h4>Laundry Type</h4>
                        <div class="col-md-9">
                        <a href="#" class="btn btn-success btn-circle" data-toggle="modal" data-target="#modalLaundry"><i class="fa fa-edit ">&nbsp</i>New LAundry</a>
                        <input type="submit"  class="btn btn-danger btn-circle"  name="claim_laundry" value="Claim Laundry">
                        <input type="submit" class="btn btn-danger btn-circle" name="delete_customer" value="Delete">
                    </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr  class='info'>
                                        <th>#</th>
                                        <th>Customer Name</th>
                                        <th>Priority#</th>
                                        <th>Weight</th>
                                        <th>Type</th>
                                        <th>Date Received</th>
                                        <th>Amount</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                @foreach($users as $user)                       
<tr><td><input type="checkbox" id="checkItem" name="check[]" value="{{$user->laun_id}}"></td>


          <td>{{$user->customer_name}}</td>
          <td>{{$user->laun_priority}}</td>
          <td>{{$user->laun_weight}}</td>
          <td>{{$user->laun_type_desc}}</td>
          <td>{{$user->laun_date_received}}</td>
         
         
          <td>{{$user->laun_type_price * $user->laun_weight}}</td>
          
          
    
    </tr>@endforeach
                                </tbody>
                            </table>
                            
                        </div>
                    </div>

                </div>
                </form>
                <!-- /. ROW  -->
                <hr />



    <form method="post" action="newlaundryupdate">
    @csrf
    {{ csrf_field() }}
    <div class="modal fade" id="modalLaundry" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">New Laundry</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      
        

        <div class="md-form mb-4">
          <i class="fa fa-edit fa-1x prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Customer Name</label>
          <input type="text" id="defaultForm-pass" class="form-control validate" name="customer" required>
          
        </div>
        <div class="md-form mb-4">
          <i class="fa fa-flag fa-1x prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Priority</label>
          <input type="Number" id="defaultForm-pass" class="form-control validate" name="priority" required>
          
        </div>
        <div class="md-form mb-4">
          <i class="fas fa-weight fa-1x prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Weight</label>
          <input type="Number" id="defaultForm-pass" class="form-control validate" name="weight" required>
          
        </div>
        
        <div class="md-form mb-4">
          <i class="fa  fa-file fa-1x prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Type</label>
          
          <select name="type_id" class="form-control">
          
          @foreach($users as $user)
        <option value='{{$user->laun_type_id}}'>{{$user->laun_type_desc}}</option>
        @endforeach
           </select>
           
        </div>
        
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-success btn-circle" name="new_customer">Submit New customer Detail</button>
      </div>
    </div>
    
                        </form>
    
















                      

<script>
$("#checkItem").click(function () {
$('input:checkbox').not(this).prop('checked', this.checked);
});
</script>
     

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

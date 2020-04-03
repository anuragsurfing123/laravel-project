
<section>

<div id="wrapper">
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;Laundry</a>
                </div>
                

            </div>
        </div>
    
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center user-image-back">
                        


                    
                        <div style="float:left">
                            <img class="ext-icon" src="../assets/img/find_user.png">
                        </div>
                        <div style="float:right;padding-top:40px;">
                        <div>
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>

					<small>
						<i  style="color: white;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i> 
						<br>
						<a href="home.php?logout='1'" style="color: red;">logout</a>
                       &nbsp; <a href="create_user.php" style="color: green;"> + add user</a>
					</small>

				<?php endif ?>
			</div>
                        </div>
                        <br clear="both"/>
                   
                     



                    </li>


                    <li>
                        <a href="home1"><i class="fa fa-dashboard "></i>Dashboard</a>
                    </li>
                    <li>
                        <a href="newlaundry"><i class="fa fa-home "></i>Home</a>
                    </li>
                    

                    <li>
                        <a href="laundry_type"><i class="fa fa-desktop "></i>Laundry Type</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit "></i>Report </a>
                    </li>
                </ul>
                <h4 style="color:#004B8B">Settings</h4>
    <ul class="nav" id="main-menu">

                    
                    <li>
                        <a href="#" data-toggle="modal" data-target="#modalLoginForm"><i class="fa fa-lock "  ></i>Change Password</a>
                    </li>
                    <li>
                        <a href="/"><i class="fa fa-sign-out"></i>Logout</a>
                    </li>

                    
                </ul>

            </div>

        </nav>




<form method="post" action="changepassword">
    <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Change Password</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
      
        

        <div class="md-form mb-4">
          <i class="fa fa-lock fa-2x prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-pass">New password</label>
          <input type="password" id="defaultForm-pass" class="form-control validate" name="npwd" required>
          
        </div>
        <div class="md-form mb-4">
          <i class="fa fa-lock fa-2x prefix grey-text"></i>
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Confirm New Password</label>
          <input type="password" id="defaultForm-pass" class="form-control validate" name="cpwd" required>
          
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-success" name="change_pass">Change password</button>
      </div>
    </div>

                        </form>

                </section>
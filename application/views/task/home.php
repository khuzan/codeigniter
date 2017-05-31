<!DOCTYPE html>

<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
   
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">NextBPO Solutions</a>
    </div>

   
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
   <form id="signin" class="navbar-form navbar-right" role="form" action="<?php echo base_url('hello/login_process');?>" method="POST">

       <div class="input-group">
         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
         <input id="username" type="text" class="form-control" name="uname"  placeholder="Enter Username">
         
       </div>
       <div class="input-group">
         <span class="text-danger"><?php echo form_error('uname');?></span>
       </div>

        <div class="input-group">
         <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
         <input id="password" type="password" class="form-control" name="pwd" placeholder="Enter Password">
         
        </div>
        <div class="input-group">
          <span class="text-danger"><?php echo form_error('pwd');?></span>
        </div>
         <button type="submit" class="btn btn-primary">Login</button>
      <?php echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';?>
     </form>
     
    </div>
  </div>
</nav>



<div class="container">
 


        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4" align="center" id="form">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title" id="font">Registration Form </h3>
            </div>
            <div class="panel-body">
              <form method="POST" action="<?php echo base_url()?>hello/process">
                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="first_name" class="form-control input-sm" placeholder="First Name">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="last_name" class="form-control input-sm" placeholder="Last Name">
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <input type="email" name="email"  class="form-control input-sm" placeholder="Email Address">
                </div>

                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="username"  class="form-control input-sm" placeholder="Username">
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="password" name="password"  class="form-control input-sm" placeholder="Password">
                    </div>
                  </div>
                </div>

                <input type="submit" value="Register" class="btn btn-info btn-block" id="input-submit">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>
</html>

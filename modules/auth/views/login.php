<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>KPDP  | Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo base_url();?>assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?php echo base_url();?>assets/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/entol.png">
  </head>


    <div class="login-box">
      <div class="login-logo">
     
  <body class="login-page 	 ">


        <!--a href="<?php// echo base_url();?>"><b>Quality Management</b></a-->
	    <?php $attrib = array('class' => 'login-page'); echo form_open("auth/login",$attrib);?>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <br><span align="center"><h4>Sign in to start your session</h2></span></br>
		<?php if($message) { echo "<div class=\"alert alert-info alert-error\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>" . $message .  "</div>"; } ?>
        <form action="../../index2.html" method="post">
          <div class="form-group has-feedback">
            <?php echo form_input($identity, '', 'class="form-control" placeholder="'.$this->lang->line("email_address").'" autofocus="autofocus"');?>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">

           <?php echo form_input($password,  '', 'class="form-control" placeholder="'.$this->lang->line("pw").'"');?>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>
<!-- /.social-auth-links -->
        <!--a href="#">I forgot my password</a><br>
        <a href="#" class="text-center">Register a new membership</a-->

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
  <div region="south" split="true" style=" padding-top: 180px;">

</font></div>
    <!-- jQuery 2.1.3 -->
    <script src="<?php echo base_url();?>assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?php echo base_url();?>assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>

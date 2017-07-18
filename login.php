
<header class="head">
    <div class="main-bar row">
        <div class="col-sm-5 col-lg-6">
            <h4 class="nav_top_align">
                <i class="fa fa-pencil"></i>
                    Login
            </h4>
        </div>
        
    </div>
</header>
<div class="outer">
    <div class="inner bg-container">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                   <!--  <div class="card-header bg-white">
                        <i class="fa fa-file-text-o"></i>
                        Basic Validation
                    </div> -->
                    <div class="card-block m-t-35">
                       
                        <form action="#" data-id="loginForm" class="form-horizontal" id="form_block_validator">
                            <div class="form-group row">
                                <div class="col-lg-3  text-lg-right">
                                    <label for="required2" class="form-control-label">Email *</label>
                                </div>
                                <div class="col-lg-5">
                                    <div class="input-group">
                                        <span class="input-group-addon input_email"><i
                                                class="fa fa-envelope text-primary"></i></span>
                                        <input type="text" class="form-control  form-control-md" id="email" name="email" placeholder="E-mail">
                                         <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-3 text-lg-right">
                                    <label for="email2" class="form-control-label">Password *</label>
                                </div>
                                <div class="col-lg-5">
                                    <div class="input-group">
                                        <span class="input-group-addon addon_password"><i
                                                class="fa fa-lock text-primary"></i></span>
                                        <input type="password" class="form-control form-control-md" id="password"   name="password" placeholder="Password">
                                         <span class="help-block"></span>
                                    </div>
                                </div>
                            </div>


                           
                            <div class="form-actions form-group row">
                                <div class="col-lg-5 push-lg-3">
                                     <input type="submit" value="Log In" class="btn btn-primary btn-block login_button">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-5 push-lg-4">
                                    <label class="form-control-label">Don't you have an Account? </label>
                                    <a href='<?php echo base_url();?>register' class="text-primary"><b>Sign Up</b></a>
                                </div>
                               
                            </div>
                        </form>

                        
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
       
        <!-- /.row -->
    </div>
    <!-- /.inner -->
</div>
<!-- /.outer -->
<!-- Modal -->

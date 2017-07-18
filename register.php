
<header class="head">
    <div class="main-bar row">
        <div class="col-sm-5 col-lg-6">
            <h4 class="nav_top_align">
                <i class="fa fa-pencil"></i>
                    User Registration
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
                       
                        <form action="#"  data-id="registerForm" class="form-horizontal" id="registerForm" >
                            <div class="form-group row">
                                <div class="col-lg-4  text-lg-right">
                                    <label for="required2" class="form-control-label">Username*</label>
                                </div>
                                <div class="col-lg-5">
                                    <div class="input-group">
                                        <span class="input-group-addon"> <i class="fa fa-user text-primary"></i>
                                        </span>
                                        <input type="text" class="form-control" name="username" id="chamaName" placeholder="Username">
                                    </div>
                                     <span class="help-block"></span>
                                </div>
                            </div> 
                            <div class="form-group row">
                                <div class="col-lg-4  text-lg-right">
                                    <label for="required2" class="form-control-label">Phone Number *</label>
                                </div>
                                <div class="col-lg-5">
                                   <div class="input-group">
                                    <span class="input-group-addon">
                                        <i class="fa fa-phone text-primary"></i>
                                    </span>
                                        <input type="text" id="phone" placeholder="Phone Number" name="phone_number" class="form-control"/>
                                    </div>
                                     <span class="help-block"></span>
                                </div>
                            </div> 
                         
                            <div class="form-group row">
                                <div class="col-lg-4  text-lg-right">
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


                            <hr>
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="email2" class="form-control-label">Password *</label>
                                </div>
                                <div class="col-lg-5">
                                    <div class="input-group">
                                        <span class="input-group-addon addon_password"><i
                                                class="fa fa-lock text-primary"></i></span>
                                        <input type="password" class="form-control form-control-md" id="password"   name="password" placeholder="Password">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label for="email2" class="form-control-label">Confirm Password *</label>
                                </div>
                                <div class="col-lg-5">
                                    <div class="input-group">
                                        <span class="input-group-addon addon_password"><i
                                                class="fa fa-lock text-primary"></i></span>
                                        <input type="password" class="form-control form-control-md" id="password"   name="passwordConf" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <div class="col-lg-4 text-lg-right">
                                    <label class="form-control-label check_form_val">Aggrement to policy</label>
                                </div>
                                <div class="col-lg-4 error_color1">
                                    <label class="custom-control custom-checkbox error_color">
                                        <input type="checkbox" class="custom-control-input" name="activate">
                                        <span class="custom-control-indicator"></span>
                                        <span class="custom-control-description">I agree to the terms and conditions.</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-actions form-group row">
                                <div class="col-lg-12 push-lg-4">
                                     <input type="submit" value="Submit" class="btn btn-primary"/>
                                    <button type="reset" class="btn btn-danger">Reset</button>
                                    
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-lg-4 push-lg-4">
                                    <label class="form-control-label">Already have an account?</label> 
                                <a href="<?php echo base_url();?>login" class="text-primary login_hover"><b>Log In</b></a>
                                </div>
                               
                            </div>
                        </form>

                        
                    </div>
                </div>
            </div>
            <!-- /.col-lg-12 -->
        </div>

        <!--  <div class="row">
                        <div class="col-lg-12">
                            <div class="card file_input m-t-35">
                                <div class="card-header bg-white">
                                    Advanced File Upload
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <div class="col-lg-12 m-t-35">
                                            <h5>File Upload</h5>
                                            <input id="input-fa" name="inputfa[]" type="file" multiple class="file-loading">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 m-t-35 button_file">
                                            <h5>Select File</h5>
                                            <input id="input-4" name="input4[]" type="file" multiple class="file-loading d-block">
                                        </div>
                                        <div class="col-sm-6 m-t-35">
                                            <h5>Image Upload</h5>
                                            <input id="input-21" type="file" accept="image/*" class="file-loading">

                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 m-t-35">
                                            <h5>Select Only File</h5>
                                            <input id="input-22" name="input22[]" type="file" class="file-loading" accept="text/plain" multiple>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
        <!-- /.row -->
       
        <!-- /.row -->
    </div>
    <!-- /.inner -->
</div>
<!-- /.outer -->
<!-- Modal -->
         
<div id="content" class="bg-container">
  <header class="head">
      <div class="main-bar">
         <div class="row no-gutters">
             <div class="col-lg-6 col-sm-4">
                 <h4 class="nav_top_align">
                     <i class="fa fa-user"></i>
                     Members
                 </h4>
             </div>
             <div class="col-lg-6 col-sm-8 col-12">
                 <ol class="breadcrumb float-right  nav_breadcrumb_top_align">
                     <li class="breadcrumb-item">
                         <a href="index1.html">
                             <i class="fa fa-home" data-pack="default" data-tags=""></i> Dashboard
                         </a>

                     </li>
                     <li class="breadcrumb-item">
                         <a href="#">Users</a>
                     </li>
                     <li class="active breadcrumb-item">User Grid</li>
                 </ol>
             </div>
         </div>
      </div>
  </header>
  <div class="outer">
      <div class="inner bg-container">
          <div class="card">
              <div class="card-header bg-white">
                   <div class="btn-group">
                    <button class="btn btn-raised btn-primary adv_cust_mod_btn fadeindown" data-id="btnMembers">
                      <i class="fa fa-plus"></i> Add New
                    </button>
                  </div>
              </div>
              <div class="card-block m-t-35" id="user_body">
                  <div class="table-toolbar">
                     
                      <div class="btn-group float-right users_grid_tools">
                          <div class="tools"></div>
                      </div>
                  </div>
                  <div>
                      <div>
                          <table class="table  table-striped table-bordered table-hover dataTable no-footer" data-id="members_table" role="grid">
                              <thead>
                              <tr role="row">
                                  <th class="sorting_asc wid-30" tabindex="0" rowspan="1" colspan="1">Member Name</th>
                                  <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">E-Mail</th>
                                  <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Id Number</th>
                                  <th class="sorting wid-20" tabindex="0" rowspan="1" colspan="1">Phone Number</th>
                                  <th class="sorting wid-15" tabindex="0" rowspan="1" colspan="1">Date Of Birth</th>
                                  <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Actions</th>
                              </tr>
                              </thead>
                              <tbody>
                              <tr role="row" class="even">
                                  <td class="sorting_1">Breanna15</td><td>Breanna.Ratke@hotmail.com</td>
                                  <td>Male</td><td class="center">North Jadaton</td><td class="center">Approved</td>
                                  <td>
                                    <a href="view_user.html" data-toggle="tooltip" data-placement="top" title="View User"><i class="fa fa-eye text-success"></i></a>&nbsp; &nbsp;
                                    <a class="edit" data-toggle="tooltip" data-placement="top" title="Edit" href="edit_user.html"><i class="fa fa-pencil text-warning"></i></a>&nbsp; &nbsp;
                                    <a class="delete hidden-xs hidden-sm" data-toggle="tooltip" data-placement="top" title="Delete" href="delete_user.html"><i class="fa fa-trash text-danger"></i></a>
                                  </td>
                              </tr>
                             </tbody>
                          </table>
                      </div>
                  </div>
                  <!-- END EXAMPLE TABLE PORTLET-->
              </div>
          </div>
      </div>
      <!-- /.inner -->
  </div>
    <!-- /.outer -->
    <!-- Modal -->
  <div class="modal fade" id="search_modal" tabindex="-1" role="dialog"
       aria-hidden="true">
      <form>
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span class="float-right" aria-hidden="true">&times;</span>
                  </button>
                  <div class="input-group search_bar_small">
                      <input type="text" class="form-control" placeholder="Search..." name="search">
                      <span class="input-group-btn">
                  <button class="btn btn-secondary" type="submit"><i class="fa fa-search"></i></button>
                </span>
                  </div>
              </div>
          </div>
      </form>
  </div>
    
  <div class="modal" id="modal-fadeindown" role="dialog" aria-labelledby="modalLabelfade3" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header bg-success">
                  <h3 class="modal-title text-white" id="modalLabelfade3">Create a Member</h3>
              </div>
              <form action="#sds" data-id="membersForm" class="form-horizontal" id="form_block_validator">
                <div class="modal-body">
                  <div class="row">
                      <div class="col-4">
                        <div class="form-group row m-t-25">
                            <!-- <div class="col-lg-3 text-center text-lg-right">
                                <label class="col-form-label">Profile Pic</label>
                            </div> -->
                            <div class="col-lg-6 text-center text-lg-left">
                                <div class="fileinput fileinput-new" data-provides="fileinput">
                                    <div class="fileinput-new img-thumbnail text-center">
                                        <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyMzAiIGhlaWdodD0iMTcwIj48cmVjdCB3aWR0aD0iMjMwIiBoZWlnaHQ9IjE3MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjExNSIgeT0iODUiIHN0eWxlPSJmaWxsOiNhYWE7Zm9udC13ZWlnaHQ6Ym9sZDtmb250LXNpemU6MTRweDtmb250LWZhbWlseTpBcmlhbCxIZWx2ZXRpY2Esc2Fucy1zZXJpZjtkb21pbmFudC1iYXNlbGluZTpjZW50cmFsIj4yMzB4MTcwPC90ZXh0Pjwvc3ZnPg==" data-src="holder.js/100%x100%"  alt="not found"></div>
                                    <div class="fileinput-preview fileinput-exists img-thumbnail"></div>
                                    <div class="m-t-20 text-center">
                                        <span class="btn btn-primary btn-file">
                                            <span class="fileinput-new">Select image</span>
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="member_photo"></span>
                                        <a href="#" class="btn btn-warning fileinput-exists"
                                           data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                      <div class="col-8">
                        <div class="form-group row">
                              <input type="hidden" value="" name="Id"/> 
                              <div class="col-lg-3  text-lg-right">
                                <label for="required2" class="form-control-label">First Name *</label>
                              </div>
                              <div class="col-lg-9">
                                  <div class="input-group">
                                      <span class="input-group-addon input_email"><i
                                              class="fa fa-user text-primary"></i></span>
                                      <input type="text" class="form-control  form-control-md" id="first_name" name="first_name" placeholder="enter your firstname">
                                       <span class="help-block"></span>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group row">
                              <div class="col-lg-3  text-lg-right">
                                  <label for="required2" class="form-control-label">Surname *</label>
                              </div>
                              <div class="col-lg-9">
                                  <div class="input-group">
                                      <span class="input-group-addon input_email"><i
                                              class="fa fa-user text-primary"></i></span>
                                      <input type="text" class="form-control  form-control-md" id="surname" name="surname" placeholder="enter your surname">
                                       <span class="help-block"></span>
                                  </div>
                              </div>
                          </div>
                          <div class="form-group row">
                              <div class="col-lg-3  text-lg-right">
                                  <label for="required2" class="form-control-label">Email *</label>
                              </div>
                              <div class="col-lg-9">
                                  <div class="input-group">
                                      <span class="input-group-addon input_email"><i
                                              class="fa fa-envelope text-primary"></i></span>
                                      <input type="email" class="form-control  form-control-md" id="email" name="email" placeholder="E-mail">
                                       <span class="help-block"></span>
                                  </div>
                              </div>
                          </div>

                          <div class="form-group row">
                              <div class="col-lg-3  text-lg-right">
                                  <label for="required2" class="form-control-label">Id Number *</label>
                              </div>
                              <div class="col-lg-9">
                                  <div class="input-group">
                                      <span class="input-group-addon input_email"><i
                                              class="fa fa-credit-card-alt text-primary"></i></span>
                                      <input type="number" class="form-control  form-control-md" id="nationalNumber" name="id_number" 
                                      placeholder="enter your national number">
                                       <span class="help-block"></span>
                                  </div>
                              </div>
                          </div>

                          <div class="form-group row">
                              <div class="col-lg-3  text-lg-right">
                                  <label for="required2" class="form-control-label">Phone Number *</label>
                              </div>
                              <div class="col-lg-9">
                                  <div class="input-group">
                                      <span class="input-group-addon input_email"><i
                                              class="fa fa-phone text-primary"></i></span>
                                      <input type="number" class="form-control  form-control-md" id="phoneNumber" name="phone_number"
                                           placeholder="enter your phone number">
                                       <span class="help-block"></span>
                                  </div>
                              </div>
                          </div>

                          <div class="form-group row">
                              <div class="col-lg-3  text-lg-right">
                                  <label for="required2" class="form-control-label">Date of Birth *</label>
                              </div>
                              <div class="col-lg-9">
                                   <input type="date" class="form-control  form-control-md" id="dob" name="dob" placeholder="date of birth">
                                  <!-- <div class="input-group">
                                      <span class="input-group-addon input_email"><i
                                              class="fa fa-envelope text-primary"></i></span>
                                     
                                       <span class="help-block"></span>
                                  </div> -->
                              </div>
                          </div>
                         <!--  <div class="form-group row">
                              <div class="col-lg-3 text-lg-right">
                                  <label for="email2" class="form-control-label">Password *</label>
                              </div>
                              <div class="col-lg-9">
                                  <div class="input-group">
                                      <span class="input-group-addon addon_password"><i
                                              class="fa fa-lock text-primary"></i></span>
                                      <input type="password" class="form-control form-control-md" id="password"   name="password" placeholder="Password">
                                       <span class="help-block"></span>
                                  </div>
                              </div>
                          </div> -->
                      </div>
                  </div>
                    
                </div>
                <div class="modal-footer">  
                  <div class="form-actions form-group row">
                    <div class="col-lg-12">
                         <!-- <input type="submit" value="Log In" id="btnUserSave" class="btn btn-primary btn-block login_button"> -->
                        <button  type="submit" class="btn btn-primary" id="btnUserSave">Close me!</button>
                        <button  type="submit" class="btn btn-warning"  data-dismiss="modal">Cancel</button>
                    </div>
                  </div>
         
                </div>
            </form>
          </div>
      </div>
  </div>

</div>
<div id="content" class="bg-container">
  <header class="head">
      <div class="main-bar">
         <div class="row no-gutters">
             <div class="col-lg-6 col-sm-4">
                 <h4 class="nav_top_align">
                     <i class="fa fa-user"></i>
                     Transactions
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
                         <a href="#">Transactions</a>
                     </li>
                     <li class="active breadcrumb-item">Details</li>
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
                    <button class="btn btn-raised btn-primary adv_cust_mod_btn fadeindown" data-id="btnTransType">
                      <i class="fa fa-plus"></i> Add Transaction
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
                          <table class="table  table-striped table-bordered table-hover dataTable no-footer" data-id="trans_type_table" role="grid">
                              <thead>
                              <tr role="row">
                                  <th class="sorting_asc wid-30" tabindex="0" rowspan="1" colspan="1">Description</th>
                                  <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">Sign</th>
                                  <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Actions</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                              <tr role="row" class="even">
                                  <!-- <td class="sorting_1">Breanna15</td>
                                  <td>Male</td> -->
                                
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
   <div class="modal" id="modal-transType" role="dialog" aria-labelledby="modalLabelfade3" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header bg-success">
                  <h3 class="modal-title text-white" id="modalLabelfade3"><i class="fa fa-plus"></i> Create Transaction Type</h3>
              </div>
              <form action="#" data-id="transType_form" class="form-horizontal" id="form_block_validator">
                <div class="modal-body">
                  <div class="row">
                      
                      <div class="col-12">
                        <div class="form-group row">
                              <input type="hidden" value="" name="trans_type_id"/> 
                              <!-- <div class="col-lg-4  text-lg-right">
                                <label for="required2" class="form-control-label">Account Ref*</label>
                              </div> -->
                              <div class="col-lg-12">
                                  <div class="input-group">
                                      <span class="input-group-addon input_email">
                                      <i class="fa fa-user text-primary"></i></span>
                                      <input type="text" class="form-control  form-control-md" id="trans_desc" name="type_desc" 
                                      placeholder="enter a transaction type">
                                       <span class="help-block"></span>
                                  </div>

                                  <!-- <div class="input-group">
                                      <span class="input-group-addon input_email">
                                      <i class="fa fa-user text-primary"></i></span>
                                      <input type="text" class="form-control  form-control-md" id="type_sign" name="type_sign" 
                                      placeholder="enter a type sign">
                                       <span class="help-block"></span>
                                  </div> -->
                              </div>
                          </div>
                          
                         
                      </div>
                  </div>
                    
                </div>
                <div class="modal-footer">  
                  <div class="form-actions form-group row">
                    <div class="col-lg-12">
                      
                        <button  type="submit" class="btn btn-primary" id="btnTransSave">Close me!</button>
                        <button  type="submit" class="btn btn-warning"  data-dismiss="modal">Cancel</button>
                    </div>
                  </div>
         
                </div>
            </form>
          </div>
      </div>
  </div>


</div>
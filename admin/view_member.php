 <div id="content" class="bg-container">
    <header class="head">
        <div class="main-bar">
           <div class="row no-gutters">
               <div class="col-lg-6">
                   <h4 class="nav_top_align skin_txt">
                       <i class="fa fa-user"></i>
                        <?php echo $member['member_f_name']. " ".$member['member_o_name']; ?>
                   </h4>
                   <ul class="nav nav_top_align skin_txt nav-pills nav_profile_color m-t-35">
                         <li class="nav-item card_nav_hover">
                            <a class="nav-link active" href="#user" id="home-tab"
                               data-toggle="tab" aria-expanded="true">User
                                Details</a>
                        </li>
                        <li class="nav-item card_nav_hover">
                            <a class="nav-link" href="#tab2" id="hats-tab" data-toggle="tab">Account(s)</a>
                        </li>
                        <li class="nav-item card_nav_hover">
                            <a class="nav-link" href="#loan" id="hats-tab" data-toggle="tab">Loan(s)</a>
                        </li>

                        <li class="nav-item card_nav_hover">
                            <a class="nav-link" href="#trans" id="hats-tab" data-toggle="tab">Transaction</a>
                        </li>
                        <li class="nav-item card_nav_hover">
                            <a class="nav-link" href="#loan_trans" id="hats-tab" data-toggle="tab">Loan Payment</a>
                        </li>
                        
                    </ul>
               </div>
               <div class="col-lg-6">
                   <ol class="breadcrumb float-right nav_breadcrumb_top_align">
                       <li class="breadcrumb-item">
                           <a href="index1.html">
                               <i class="fa fa-home" data-pack="default" data-tags=""></i>
                              <?php echo $member['member_f_name']. " ".$member['member_o_name']; ?>
                           </a>
                       </li>
                       <!-- <li class="breadcrumb-item">
                           <a href="#"></a>
                       </li>
                       <li class="active breadcrumb-item">User Profile</li> -->
                   </ol>
               </div>
           </div>
        </div>
    </header>
     <div class="outer">
        <div class="inner bg-container">
            <div class="card">
                
                    <div id="clothing-nav-content" class="tab-content m-t-10 " >
                      <!-- user profile tab panel-->
                        <div role="tabpanel" class="tab-pane fade show active" id="user">
                            <div class="row">
                                
                                <div class="col-lg-6 m-t-25">
                                   <!--  <ul class="nav nav-inline view_user_nav_padding">
                                    </ul> -->
                                    <table class="table" id="users">
                                        <tr>
                                            <td><strong>Name</strong></td>
                                            <td class="inline_edit">
                                            <span class="editable"
                                                  data-title="Edit User Name">
                                                  <?php echo $member['member_f_name']. " ".$member['member_o_name']; ?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>E-mail</strong></td>
                                            <td>
                                                <span class="editable" data-title="Edit E-mail">
                                                <?php echo $member['member_email'];?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Phone Number</strong></td>
                                            <td>
                                                <span class="editable" data-title="Edit Phone Number"> 
                                                <?php echo $member['member_phone_number'];?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Id Number</strong></td>
                                            <td>
                                                <span class="editable" data-title="Edit Address">
                                                     <?php echo $member['member_id_number'];?>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Date of Birth</strong></td>
                                            <td>
                                                <span class="editable" data-title="Edit Address">
                                                     <?php echo $member['member_dob'];?>
                                                </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><strong>Created At</strong></td>
                                            <td> <?php echo $member['created_on'];?></td>
                                        </tr>
                                        
                                    </table>
                                </div>
                                       
                                        
                            </div>
                        </div>
                      <!-- member's account tab panel -->
                        <div role="tabpanel" class="tab-pane fade" id="tab2">
                            
                                <div class="card-header bg-white">
                                   <div class="btn-group">
                                      <button class="btn btn-default" id="editable_table_new" data-id="btnAccounts">
                                        <i class="fa fa-plus"></i> Add an Account
                                      </button>
                                    </div>
                                </div>
                                    
                          <div class="card-block">
                                <div class="row">
                                  <div class="col-lg-12 m-t-25">
                           
                                      <div id="users_body">
                                        <table class="table  table-striped table-bordered table-hover dataTable no-footer" data-id="accounts_table">
                                              <thead>
                                                  <tr role="row">
                                                      <th class="sorting_asc wid-30" tabindex="0" rowspan="1" colspan="1">Account Ref</th>
                                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">Monthly Contribution</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Account Balance</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Loan Balance</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Total Credit</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Total Debit</th>
                                                     <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Actions</th>
                                                      
                                                  </tr>
                                              </thead>
                                              <tbody>
                                             
                                             </tbody>
                                          </table>
                                      </div>
                                
                                  </div>
                                </div>
                            
                          </div>
                      </div>
                      <!-- member's loans -->
                      <div role="tabpanel" class="tab-pane fade" id="loan">
                            
                          <div class="card-header bg-white">
                             <div class="btn-group">
                                <button class="btn btn-default" id="editable_table_new" data-id="btnLoans">
                                  <i class="fa fa-plus"></i> Add Loan
                                </button>
                              </div>
                          </div>
                                    
                          <div class="card-block">
                                <div class="row">
                                  <div class="col-lg-12 m-t-25">
                           
                                      <div id="users_body">
                                        <table class="table  table-striped table-bordered table-hover dataTable no-footer" data-id="loans_table">
                                              <thead>
                                                  <tr role="row">
                                                    <th class="sorting_asc wid-30" tabindex="0" rowspan="1" colspan="1">Ref</th>
                                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">Loan Date</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Amount</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Balance</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Installment</th>
                                                    <!-- <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Installment No.</th> -->
                                                   <!--  <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Interest.</th> -->
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Due Date</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Account Ref</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Full Paid</th>
                                                    <!-- <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Payment Status</th> -->
                                                     <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Actions</th>
                                                      
                                                  </tr>
                                              </thead>
                                              <tbody>
                                             
                                             </tbody>
                                          </table>
                                      </div>
                                
                                  </div>
                                </div>
                            
                          </div>
                      </div>

  <!-- member's transactions tab panel -->
                      <div role="tabpanel" class="tab-pane fade" id="trans">
                            
                          <div class="card-header bg-white">
                             <div class="btn-group">
                                <button class="btn btn-default" id="editable_table_new" data-id="btnTrans">
                                  <i class="fa fa-plus"></i> Add Transaction
                                </button>
                              </div>
                          </div>
                                    
                          <div class="card-block">
                                <div class="row">
                                  <div class="col-lg-12 m-t-25">
                           
                                      <div id="users_body">
                                        <table class="table  table-striped table-bordered table-hover dataTable no-footer" data-id="trans_table">
                                              <thead>
                                                  <tr role="row">
                                                    <th class="sorting_asc wid-30" tabindex="0" rowspan="1" colspan="1">Date</th>
                                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">Trans ref</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Trans type</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Account Ref</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Amount</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Mode</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Account_run_bal</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Actions</th>
                                                      
                                                  </tr>
                                              </thead>
                                              <tbody>
                                             
                                             </tbody>
                                          </table>
                                      </div>
                                
                                  </div>
                                </div>
                            
                          </div>
                      </div>
    <!-- memeber's loans payment -->
                      <div role="tabpanel" class="tab-pane fade" id="loan_trans">
                            
                          <div class="card-header bg-white">
                             <div class="btn-group">
                                <button class="btn btn-default" id="editable_table_new" data-id="btnLoanPay">
                                  <i class="fa fa-plus"></i> Add Loan Transaction
                                </button>
                              </div>
                          </div>
                                    
                          <div class="card-block">
                                <div class="row">
                                  <div class="col-lg-12 m-t-25">
                           
                                      <div id="users_body">
                                        <table class="table  table-striped table-bordered table-hover dataTable no-footer" data-id="loan_trans_table">
                                              <thead>
                                                  <tr role="row">
                                                    <th class="sorting_asc wid-30" tabindex="0" rowspan="1" colspan="1">Date</th>
                                                    <th class="sorting wid-25" tabindex="0" rowspan="1" colspan="1">Loan Trans ref</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Loan Ref</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Amount</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Trans Mode</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Loan_run_bal</th>
                                                    <th class="sorting wid-10" tabindex="0" rowspan="1" colspan="1">Actions</th>
                                                      
                                                  </tr>
                                              </thead>
                                              <tbody>
                                             
                                             </tbody>
                                          </table>
                                      </div>
                                
                                  </div>
                                </div>
                            
                          </div>
                      </div>
                  </div>
                        
              </div>
          </div>
        </div>
<!-- member account modal -->
         <div class="modal" id="modal-account" role="dialog" aria-labelledby="modalLabelfade3" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h3 class="modal-title text-white" id="modalLabelfade3">Create an account</h3>
                    </div>
                    <form action="#" data-id="accounts_form" class="form-horizontal" id="form_block_validator">
                      <div class="modal-body">
                        <div class="row">
                            
                            <div class="col-12">
                              <div class="form-group row">
                                    <input type="hidden" value="" name="account_id"/> 
                                    <input type="hidden" value="<?php echo $member['member_id'];?>" name="member_id"/> 
                                    
                                    <!-- <div class="col-lg-4  text-lg-right">
                                      <label for="required2" class="form-control-label">Account Ref*</label>
                                    </div> -->
                                    <div class="col-lg-12">
                                        <div class="input-group">
                                            <span class="input-group-addon input_email"><i
                                                    class="fa fa-credit-card-alt text-primary"> acc</i></span>
                                            <input type="text" class="form-control  form-control-md" id="account_ref" name="account_ref" 
                                            placeholder="enter an account name">
                                             <span class="help-block"></span>
                                        </div>
                                    </div>
                                </div>
                                
                               
                            </div>
                        </div>
                          
                      </div>
                      <div class="modal-footer">  
                        <div class="form-actions form-group row">
                          <div class="col-lg-12">
                            
                              <button  type="submit" class="btn btn-primary" id="btnAccountSave">Close me!</button>
                              <button  type="submit" class="btn btn-warning"  data-dismiss="modal">Cancel</button>
                          </div>
                        </div>
               
                      </div>
                  </form>
                </div>
            </div>
        </div>
<!-- member's loans modal -->
        <div class="modal" id="modal-loans" role="dialog" aria-labelledby="modalLabelfade3" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h3 class="modal-title text-white" id="modalLabelfade3">Loan Details</h3>
                    </div>
                    <form action="#" data-id="loans_form" class="form-horizontal" id="form_block_validator">
                      <div class="modal-body">
                        <div class="row">
                            
                            <div class="col-12">
                              <div class="form-group row">
                                    <input type="hidden" value="" name="loan_id"/> 
                                    <input type="hidden" value="<?php echo $member['member_id'];?>" name="memberl_id"/> 
                                    
                                    <div class="col-12">
                                      <div class="form-group row">
                                          <input type="hidden" value="" name="Id"/> 
                                          <div class="col-lg-3  text-lg-right">
                                            <label for="required2" class="form-control-label">Account*</label>
                                          </div>
                                          <div class="col-lg-9">
                                              <div class="input-group">
                                                  <span class="input-group-addon input_email"><i
                                                    class="fa fa-credit-card-alt text-primary"> acc</i></span>
                                                   <select class="select2 form-control" name="account" id="account">
                              
                                                    <?php if(isset($accounts)){ foreach ($accounts as $ac): 
                                                      $id=$ac['account_id'];
                                                      $ref=$ac['account_ref'];
                                                      
                                                     ?> 
                                                      <option value="<?php echo $id; ?>"<?php echo set_select('account',$id);?> >
                                                      <?php echo $ref; ?>
                                                        
                                                      </option>
                                                      
                                                    <?php endforeach; } ?>
                                                    
                                                    </select>
                                                   <span class="help-block"></span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <div class="col-lg-3  text-lg-right">
                                              <label for="required2" class="form-control-label">Loan Ref *</label>
                                          </div>
                                          <div class="col-lg-9">
                                              <div class="input-group">
                                                <span class="input-group-addon input_email"><i
                                                    class="fa fa-credit-card-alt text-primary"> loan</i></span>
                                                  <input type="text" class="form-control  form-control-md" id="loan_ref" name="loan_ref" placeholder="enter loan reference">
                                                   <span class="help-block"></span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <div class="col-lg-3  text-lg-right">
                                              <label for="required2" class="form-control-label">Loan Date *</label>
                                          </div>
                                          <div class="col-lg-9">
                                               <input type="date" class="form-control  form-control-md" id="loan_date" name="loan_date" placeholder="enter loan date">
                                             
                                          </div>
                                      </div>
                                  
                                      <div class="form-group row">
                                          <div class="col-lg-3  text-lg-right">
                                              <label for="required2" class="form-control-label">Loan Amount *</label>
                                          </div>
                                          <div class="col-lg-9">
                                              <div class="input-group">
                                                  <span class="input-group-addon input_email"><i
                                                          class="fa fa-phone text-primary"></i></span>
                                                  <input type="number" class="form-control  form-control-md" id="loanAmount" name="loan_amount"
                                                       placeholder="enter loan amount">
                                                   <span class="help-block"></span>
                                              </div>
                                          </div>
                                      </div>

                                      
                                   
                                  </div>
                                    
                                </div>
                                

                               
                               
                            </div>
                        </div>
                          
                      </div>
                      <div class="modal-footer">  
                        <div class="form-actions form-group row">
                          <div class="col-lg-12">
                            
                              <button  type="submit" class="btn btn-primary" id="btnLoanSave">Close me!</button>
                              <button  type="submit" class="btn btn-warning"  data-dismiss="modal">Cancel</button>
                          </div>
                        </div>
               
                      </div>
                  </form>
                </div>
            </div>
        </div>

<!-- member's transactions modal -->
        <div class="modal" id="modal-transactions" role="dialog" aria-labelledby="modalLabelfade3" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h3 class="modal-title text-white" id="modalLabelfade3">Transaction Details</h3>
                    </div>
                    <form action="#" data-id="trans_form" class="form-horizontal" id="form_block_validator">
                      <div class="modal-body">
                        <div class="row">
                            
                            <div class="col-12">
                              <div class="form-group row">
                                    <input type="hidden" value="" name="trans_id"/> 
                                    <input type="hidden" value="<?php echo $member['member_id'];?>" name="tr_member_id"/> 
                                    
                                    <div class="col-12">
                                      <div class="form-group row">
                                        <div class="col-lg-3  text-lg-right">
                                            <label for="required2" class="form-control-label">Date *</label>
                                        </div>
                                        <div class="col-lg-9">
                                             <input type="date" class="form-control  form-control-md" id="trans_date" name="trans_date" placeholder="enter transaction date">
                                           
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                          <input type="hidden" value="" name="Id"/> 
                                          <div class="col-lg-3  text-lg-right">
                                            <label for="required2" class="form-control-label">Trans Type*</label>
                                          </div>
                                          <div class="col-lg-9">
                                              <div class="input-group">
                                                  <span class="input-group-addon input_email"><i
                                                    class="fa fa-credit-card-alt text-primary"></i></span>
                                                   <select class="select2 form-control" name="trans_type" id="trans_type">
                                                    
                                                     <option value=""> select a value</option>
                                                    <?php if(isset($transType)){ foreach ($transType as $ts): 
                                                      $id=$ts['trans_type_id'];
                                                      $ref=$ts['trans_type_desc'];
                                                      
                                                     ?> 
                                                      <option value="<?php echo $id; ?>"<?php echo set_select('trans_type',$id);?> >
                                                      <?php echo $ref; ?>
                                                        
                                                      </option>
                                                      
                                                    <?php endforeach; } ?>
                                                    
                                                    </select>
                                                   <span class="help-block"></span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <input type="hidden" value="" name="Id"/> 
                                          <div class="col-lg-3  text-lg-right">
                                            <label for="required2" class="form-control-label">Account Ref*</label>
                                          </div>
                                          <div class="col-lg-9">
                                              <div class="input-group">
                                                  <span class="input-group-addon input_email"><i
                                                    class="fa fa-credit-card-alt text-primary"></i></span>
                                                   <select class="select2 form-control" name="account_ref" id="account">
                                                    <option value=""> select a value</option>
                                                    <?php if(isset($accounts)){ foreach ($accounts as $ac): 
                                                      $id=$ac['account_id'];
                                                      $ref=$ac['account_ref'];
                                                      
                                                     ?> 
                                                      <option value="<?php echo $id; ?>"<?php echo set_select('account_ref',$id);?> >
                                                      <?php echo $ref; ?>
                                                        
                                                      </option>
                                                      
                                                    <?php endforeach; } ?>
                                                    
                                                    </select>
                                                   <span class="help-block"></span>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="form-group row">
                                          <div class="col-lg-3  text-lg-right">
                                              <label for="required2" class="form-control-label">Trans Ref</label>
                                          </div>
                                          <div class="col-lg-9">
                                              <div class="input-group">
                                                <span class="input-group-addon input_email"><i
                                                    class="fa fa-user text-primary"></i></span>
                                                  <input type="text" class="form-control  form-control-md" id="trans_ref" name="trans_ref" 
                                                    placeholder="enter transaction reference">
                                                   <span class="help-block"></span>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                          <div class="col-lg-3  text-lg-right">
                                              <label for="required2" class="form-control-label">Trans Amount*</label>
                                          </div>
                                          <div class="col-lg-9">
                                              <div class="input-group">
                                                  <span class="input-group-addon input_email"><i
                                                          class="fa fa-phone text-primary"></i></span>
                                                  <input type="number" class="form-control  form-control-md" id="transAmount" name="trans_amount"
                                                       placeholder="enter transaction amount">
                                                   <span class="help-block"></span>
                                              </div>
                                          </div>
                                      </div>
                                      <!-- transaction mode -->
                                      <div class="form-group row">
                                          <input type="hidden" value="" name="Id"/> 
                                          <div class="col-lg-3  text-lg-right">
                                            <label for="required2" class="form-control-label">Trans Mode*</label>
                                          </div>
                                          <div class="col-lg-9">
                                              <div class="input-group">
                                                  <span class="input-group-addon input_email"><i
                                                    class="fa fa-credit-card-alt text-primary"></i></span>
                                                   <select class="select2 form-control" name="mode" id="mode">
                                                      <option value=""> select a value</option>
                                                      <option value="cash">Cash</option>
                                                      <option value="mpesa">Mpesa</option>
                                                      <option value="bank_transfer">Bank transfer</option>
                                                    </select>
                                                   <span class="help-block"></span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <div class="col-lg-3  text-lg-right">
                                              <label for="required2" class="form-control-label">Comment</label>
                                          </div>
                                          <div class="col-lg-9">
                                              <textarea class="form-control" name="trans_comment" cols="50" rows="5">
                                                


                                              </textarea>
                                          </div>
                                      </div>

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

<!-- member's loan payments -->
         <div class="modal " id="modal-loan_trans" role="dialog" aria-labelledby="modalLabelfade3" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h3 class="modal-title text-white" id="modalLabelfade3">Loan Payment Details</h3>
                    </div>
                    <form action="#" data-id="loan_trans_form" class="form-horizontal" id="form_block_validator">
                      <div class="modal-body">
                        <div class="row">
                            
                            <div class="col-12">
                              <div class="form-group row">
                                    <input type="hidden" value="" name="loan_trans_id"/> 
                                    <input type="hidden" value="<?php echo $member['member_id'];?>" name="lt_member_id"/> 
                                    
                                    <div class="col-12">
                                     
                                      <div class="form-group row">
                                        <div class="col-lg-3  text-lg-right">
                                            <label for="required2" class="form-control-label">Date *</label>
                                        </div>
                                        <div class="col-lg-9">
                                             <input type="date" class="form-control  form-control-md" id="loan_trans_date" name="loan_trans_date" placeholder="enter transaction date">
                                           
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                          <input type="hidden" value="" name="Id"/> 
                                          <div class="col-lg-3  text-lg-right">
                                            <label for="required2" class="form-control-label">Loan Ref*</label>
                                          </div>
                                          <div class="col-lg-9">
                                              <div class="input-group">
                                                  <span class="input-group-addon input_email"><i
                                                    class="fa fa-user text-primary"></i></span>
                                                   <select class="select2 form-control" name="loan_ref" id="loan_ref">
                                                    
                                                    <option value=""> select a value</option>
                                                    <?php if(isset($loanRef)){ foreach ($loanRef as $lf): 
                                                      $id=$lf['loan_id'];
                                                      $ref=$lf['loan_ref'];
                                                      
                                                     ?> 
                                                      <option value="<?php echo $id; ?>"<?php echo set_select('laond_ref',$id);?> >
                                                      <?php echo $ref; ?>
                                                        
                                                      </option>
                                                      
                                                    <?php endforeach; } ?>
                                                    
                                                    </select>
                                                   <span class="help-block"></span>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="form-group row">
                                          <div class="col-lg-3  text-lg-right">
                                              <label for="required2" class="form-control-label">Loan Trans Ref *</label>
                                          </div>
                                          <div class="col-lg-9">
                                              <div class="input-group">
                                                <span class="input-group-addon input_email"><i
                                                    class="fa fa-user text-primary"></i></span>
                                                  <input type="text" class="form-control  form-control-md" id="loan_trans_ref" name="loan_trans_ref" 
                                                    placeholder="enter transaction reference">
                                                   <span class="help-block"></span>
                                              </div>
                                          </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                          <div class="col-lg-3  text-lg-right">
                                              <label for="required2" class="form-control-label">Amount *</label>
                                          </div>
                                          <div class="col-lg-9">
                                              <div class="input-group">
                                                  <span class="input-group-addon input_email"><i
                                                          class="fa fa-phone text-primary"></i></span>
                                                  <input type="number" class="form-control  form-control-md" id="loan_trans_amount" 
                                                    name="loan_trans_amount" placeholder="enter transaction amount">
                                                   <span class="help-block"></span>
                                              </div>
                                          </div>
                                      </div>

                                       <!-- transaction mode -->
                                      <div class="form-group row">
                                          <input type="hidden" value="" name="Id"/> 
                                          <div class="col-lg-3  text-lg-right">
                                            <label for="required2" class="form-control-label">Trans Mode*</label>
                                          </div>
                                          <div class="col-lg-9">
                                              <div class="input-group">
                                                  <span class="input-group-addon input_email"><i
                                                    class="fa fa-credit-card-alt text-primary"></i></span>
                                                   <select class="select2 form-control" name="mode" id="loan_trans_mode">
                                                      <option value=""> select a value</option>
                                                      <option value="cash">Cash</option>
                                                      <option value="mpesa">Mpesa</option>
                                                      <option value="bank_transfer">Bank transfer</option>
                                                    </select>
                                                   <span class="help-block"></span>
                                              </div>
                                          </div>
                                      </div>

                                      <div class="form-group row">
                                          <div class="col-lg-3  text-lg-right">
                                              <label for="required2" class="form-control-label">Comment *</label>
                                          </div>
                                          <div class="col-lg-9">
                                              <textarea id="autosize" class="form-control" name="loan_trans_comment" cols="50" rows="5">
                                              </textarea>
                                          </div>
                                      </div>

                                  </div>
                                    
                                </div>
                           </div>
                        </div>
                          
                      </div>
                      <div class="modal-footer">  
                        <div class="form-actions form-group row">
                          <div class="col-lg-12">
                            
                              <button  type="submit" class="btn btn-primary" id="btnLTransSave">Close me!</button>
                              <button  type="" class="btn btn-warning"  data-dismiss="modal">Cancel</button>
                          </div>
                        </div>
               
                      </div>
                  </form>
                </div>
            </div>
        </div>
</div>
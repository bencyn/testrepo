<?php if(isset($_SESSION['username'])){?>
   
    <header class="head">
        <div class="main-bar">
           <div class="row no-gutters">
               <div class="col-6">
                   <h4 class="m-t-5">
                       <i class="fa fa-home"></i>
                       Dashboard
                   </h4>
               </div>
           </div>
        </div>
    </header>
    <div class="outer">
        <div class="inner bg-container">
            
            <!-- /.inner -->
        </div>
        <!-- /.outer -->
    </div>
    <!-- /#content -->

<?php }else{?>
    

     <header class="head">
        <div class="main-bar">
           <div class="row no-gutters">
               <div class="col-6">
                   <h4 class="m-t-5">
                       <i class="fa fa-home"></i>
                       Welcome to Ematatu Booking Services
                   </h4>
               </div>
           </div>
        </div>
    </header>
<?php }?>
            
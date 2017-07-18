<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="UTF-8">
    <title>E-Matatu</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url();?>img/logo1.ico"/>

    <!--global styles-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/components.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/custom.css" />
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/skins/blue_skin.css" />
    <!-- <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/skins/mint_black_skin.css" /> -->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/style1.css" />
    <!-- end of global styles-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>vendors/c3/css/c3.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>vendors/toastr/css/toastr.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>vendors/switchery/css/switchery.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/pages/new_dashboard.css"/>

     <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>vendors/izitoast/css/iziToast.min.css" />

     <link type="text/css" rel="stylesheet" href="<?php echo base_url('vendors/select2/css/select2.min.css');?>" />
      <link type="text/css" rel="stylesheet" href="<?php echo base_url('css/pages/tables.css');?>" />

    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>vendors/modal/css/component.css"/>
     <link type="text/css" rel="stylesheet" href="<?php echo base_url('css/pages/dataTables.bootstrap.css');?>" />
    

    <!-- users plugin -->
     <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>vendors/jasny-bootstrap/css/jasny-bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>vendors/fullcalendar/css/fullcalendar.min.css"/>
    <!--End off plugin css-->
    <!--Page level css-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/pages/timeline2.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/pages/calendar_custom.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/pages/profile.css"/>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/pages/gallery.css"/>
     <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/pages/general_components.css"/>

    <!-- new styles -->

</head>
<body class="body">
    <div class="preloader" style=" position: fixed;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      z-index: 100000;
      backface-visibility: hidden;
      background: #ffffff;">
        <div class="preloader_img" style="width: 200px;
              height: 200px;
              position: absolute;
              left: 48%;
              top: 48%;
              background-position: center;
            z-index: 999999">
            <img src="img/loader.gif" style=" width: 50px;" alt="loading...">
        </div>
    </div>
<div id="wrap">
    <div id="top">
        <!-- .navbar -->
        <nav class="navbar navbar-static-top">
            <div class="container-fluid m-0">
                <a class="navbar-brand float-left" href="<?php echo base_url();?>">
                    <h4><img src="<?php echo base_url();?>img/logo1.ico" class="admin_img" alt="logo">Ematatu</h4>
                </a>
                <div class="menu">
                    <span class="toggle-left" id="menu-toggle">
                        <i class="fa fa-bars"></i>
                    </span>
                </div>
                <div class="topnav dropdown-menu-right float-right">
                    <div class="btn-group hidden-md-up small_device_search" data-toggle="modal"
                         data-target="#search_modal">
                        <i class="fa fa-search text-primary"></i>
                    </div>
                
                    <div class="btn-group">
                         <?php if(isset($_SESSION['username'])) {  ?>
                             <div class="user-settings no-bg">
                                <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                    <img src="<?php echo base_url();?>img/admin.jpg" class="admin_img2 img-thumbnail rounded-circle avatar-img"
                                         alt="avatar"> <strong><?php echo $_SESSION['username'];?></strong>
                                    <span class="fa fa-sort-down white_bg"></span>
                                </button>
                                 <div class="dropdown-menu admire_admin">
                                    <a class="dropdown-item title" href="#">
                                        Profile</a>
                                    <a class="dropdown-item" href="edit_user.html"><i class="fa fa-cogs"></i>
                                        Account Settings</a>
                                    <a class="dropdown-item" href="<?php echo site_url('Users/logout')?>" onclick="return confirm('Are you sure?');">
                                        <i class="fa fa-sign-out"></i>
                                        Log Out</a>
                                </div>
                                
                            </div>
                         <?php }else{ ?>
                            <div class="user-settings no-bg">
                                <button type="button" class="btn btn-default no-bg micheal_btn" data-toggle="dropdown">
                                    <img src="<?php echo base_url();?>img/admin.jpg" class="admin_img2 img-thumbnail rounded-circle avatar-img"
                                         alt="avatar"> <strong>Guest</strong>
                                    <span class="fa fa-sort-down white_bg"></span>
                                </button>
                                <div class="dropdown-menu admire_admin">
                                    <a class="dropdown-item" href="<?php echo site_url();?>/login">
                                        <i class="fa fa-sign-in" aria-hidden="true"></i>
                                        Login</a>
                                    <a class="dropdown-item" href="<?php echo site_url()?>/register">
                                        <i class="fa fa-user-plus"></i>
                                        Register</a>
                                </div>
                                
                            </div>
                         <?php } ?>
                        
                    </div>

                </div>
                <div class="top_search_box float-right hidden-sm-down">
                    <form class="header_input_search float-right">
                        <input type="text" placeholder="Search" name="search">
                        <button type="submit">
                            <span class="font-icon-search"></span>
                        </button>
                        <div class="overlay"></div>
                    </form>
                </div>
            </div>
            <!-- /.container-fluid -->
        </nav>
        <!-- /.navbar -->
        <!-- /.head -->
    </div>
    <!-- /#top -->
     <div class="wrapper">
        <div id="left">
            <div class="menu_scroll">
            <?php if(isset($_SESSION['username'])) {  ?>

                     <div class="left_media">
                        <div class="media user-media">
                            <div class="user-media-toggleHover">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="user-wrapper">
                                <a class="user-link" href="#">
                                    <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
                                         src="<?php echo base_url();?>img/admin.jpg">
                                    <p class="user-info menu_hide"><?php echo $_SESSION['username'];?></p>
                                </a>
                            </div>
                        </div>
                        <hr/>
                    </div>
                    <ul id="menu">
                        <li  class="<?php if($title="main"){ echo "active";} ?>">
                            <a href="<?php echo base_url();?>">
                                <i class="fa fa-home"></i>
                                <span class="link-title menu_hide">&nbsp;Dashboard</span>
                            </a>
                        </li>

                       

                        <li class="dropdown_menu">
                            <a href="#">
                                <i class="fa fa-user"></i>
                                <span class="link-title menu_hide">&nbsp; Members</span>
                                <span class="fa arrow menu_hide"></span>
                            </a>
                            <ul>
                                <li class="">
                                    <a href="<?php echo site_url('admin/members');?>">
                                        <i class="fa fa-angle-right"></i>
                                        &nbsp; Members Grid
                                    </a>
                                </li>
                               
                            </ul>
                        </li>
                        
                    </ul>
                 <?php }else{ ?>
                       <div class="left_media">
                        <div class="media user-media">
                            <div class="user-media-toggleHover">
                                <span class="fa fa-user"></span>
                            </div>
                            <div class="user-wrapper">
                                <a class="user-link" href="#">
                                    <img class="media-object img-thumbnail user-img rounded-circle admin_img3" alt="User Picture"
                                         src="<?php echo base_url();?>img/admin.jpg">
                                    <p class="user-info menu_hide">Guest</p>
                                </a>
                            </div>
                        </div>
                        <hr/>
                    </div>
                    <ul id="menu">
                    
                        <li>  
                            <a href="<?php echo site_url();?>/login">
                                <i class="fa fa-sign-in"></i>
                                &nbsp; Login
                            </a>
                        </li>
                        <li>
                            
                            <a class="dropdown-item" href="<?php echo site_url()?>/register">
                                <i class="fa fa-user-plus"></i>
                             Register</a>
                        </li>
                </ul>

                 <?php } ?>
               
               
                <!-- /#menu -->
            </div>
        </div>

<div id="content" class="bg-container">
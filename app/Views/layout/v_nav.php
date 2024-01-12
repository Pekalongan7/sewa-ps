 <!-- Left side column. contains the sidebar -->
 <aside class="main-sidebar">
   <!-- sidebar: style can be found in sidebar.less -->
   <section class="sidebar">
     <!-- Sidebar user panel -->
     <div class="user-panel">
       <div class="pull-left image">
         <img src="<?= base_url('fotouser/' . session()->get('foto_user')) ?>" class="img-circle" alt="User Image">
       </div>
       <div class="pull-left info">
         <p><?= session()->get('fullname') ?></p>
         <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
       </div>
     </div>

     <!-- sidebar menu: : style can be found in sidebar.less -->
     <ul class="sidebar-menu" data-widget="tree">
       <li class="header">MAIN NAVIGATION</li>
       <li>
         <a href="<?= base_url('home/index') ?>">
           <i class="fa fa-dashboard"></i> <span>Dashboard</span>
         </a>

       </li>

       <li class="header">PRODUCT NAVIGATION</li>

       <li>
         <a href="<?= base_url('sewa_ps/index') ?>">
           <i class="fa fa-th"></i> <span>Daftar Data Sewa PS</span>

         </a>
       </li>

      

       <li class="header">USERS NAVIGATION</li>

       <li>
         <a href="<?= base_url('user/index') ?>">
           <i class="fa fa-th"></i> <span>Daftar Pengguna</span>

         </a>
       </li>

     </ul>
   </section>
   <!-- /.sidebar -->
 </aside>

 <!-- =============================================== -->

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       <?= $title2 ?>
       <small></small>
     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> <?= $title2 ?></a></li>
       <li class="active"><a href="#"><?= $title ?></a></li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">
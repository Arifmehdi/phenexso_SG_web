<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 19 Dec 2022 15:56:43 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $__env->yieldContent('title'); ?></title>

    <!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo e(route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()])); ?>" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?php echo e(route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()])); ?>">
    <link rel="icon" href="<?php echo e(route('imagecache', ['template' => 'original', 'filename' => $ws->favicon()])); ?>" type="image/x-icon">


    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

    <link rel="stylesheet" href="<?php echo e(asset('https://www.w3schools.com/w3css/4/w3.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>admin/plugins/fontawesome-free/css/all.min.css">


    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>admin/plugins/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>admin/plugins/summernote/summernote-bs4.min.css">

    
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">


     <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo e(asset('/')); ?>admin/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo e(asset('/')); ?>admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">


    
    <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>admin/dist/css/adminlte.min2167.css?v=3.2.0">

    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>admin/plugins/daterangepicker/daterangepicker.css">

    
    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>admin/toastifyNotification/toastify.min.css">
    

    <!-- ===== BOX ICONS ===== -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="<?php echo e(asset('/')); ?>admin/plugins/summernote/summernote-bs4.min.css">
        
    </head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <nav class="main-header navbar navbar-expand navbar-white navbar-light">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>

            <li class="nav-item">
               <a class="nav-link" target="_blank"  href="<?php echo e(url('/')); ?>" style="color:rgb(119, 154, 250)">
                  <i class="fas fa-globe"></i>
                </a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">

            <li class="nav-item dropdown">
                <?php
                    $name=explode(' ',\Illuminate\Support\Facades\Auth::user()->name);
                    $user=\Illuminate\Support\Facades\Auth::user();
                ?>
                <a class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" role="button">
                    <i class="fas fa-user-alt mr-1"></i><?php echo e($name[0]); ?>

                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- item-->
                    <?php $__currentLoopData = $user->roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($role->role_name == 'admin'): ?>
                            <a class="dropdown-item" href="<?php echo e(route('admin.dashboard')); ?>"><i class="bx bx-user font-size-16 align-middle mr-1"></i>Admin DashBoard</a>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     

                    <a class="dropdown-item text-danger" href="#" onclick="event.preventDefault(); document.getElementById('logoutForm').submit();">
                        <i class="bx bx-power-off font-size-16 align-middle mr-1 text-danger"></i> Logout
                    </a>
                    <form action="<?php echo e(route('logout')); ?>" method="get" id="logoutForm">
                        <?php echo csrf_field(); ?>
                    </form>
                </div>

            </li>
        </ul>
    </nav>


    <aside class="main-sidebar sidebar-dark-primary elevation-4">

        <div class="sidebar">

            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="<?php echo e(asset('/')); ?>admin/images/avatar.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="<?php echo e(route('admin.dashboard')); ?>" class="d-block"><?php echo e($name[0]); ?></a>
                </div>
            </div>

            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column pb-5" data-widget="treeview" role="menu" data-accordion="false">


                    <li class="nav-item <?php echo e(session('lsbm') == 'dashboardM'? ' menu-open ' : ''); ?>">
                        <a href="Javascript:void()" class="nav-link <?php echo e(session('lsbm') == 'dashboardM'? ' active ' : ''); ?>">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                DashBoard
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.dashboard')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'dashboardSM'? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Admin DashBoard</p>
                                </a>
                            </li>
                           
                        </ul>
                    </li>



                    <li class="nav-item <?php echo e(session('lsbm') == 'users'? ' menu-open ' : ''); ?>">
                        <a href="#" class="nav-link <?php echo e(session('lsbm') == 'users'? ' active ' : ''); ?>">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                Users
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.user')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'allUsers'? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All User</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.create-user')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'createUser'? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create User</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item <?php echo e(session('lsbm') == 'roles'? ' menu-open ' : ''); ?>">
                        <a href="#" class="nav-link <?php echo e(session('lsbm') == 'roles'? ' active ' : ''); ?>">
                            <i class="nav-icon fas fa-diagnoses"></i>
                            <p>
                               Role Management
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.manage-role')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'allRoles'? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Manage User Role</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.assign-role')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'assignRole'? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Assign User Role</p>
                                </a>
                            </li>
                        </ul>
                    </li>


                    <li class="nav-item <?php echo e(session('lsbm') == 'slider'? ' menu-open ' : ''); ?>">
                        <a href="#" class="nav-link <?php echo e(session('lsbm') == 'slider'? ' active ' : ''); ?>">
                            <i class="nav-icon fas fa-search-location"></i>
                            <p>
                                Sliders
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo e(route('sliders.index')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'allFrontSlider' ? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Sliders</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                   

                    <li class="nav-item <?php echo e(session('lsbm') == 'menupage' ? ' menu-open ' : ''); ?>">
                        <a href="#" class="nav-link <?php echo e(session('lsbm') == 'menupage' ? ' active ' : ''); ?>">
                            <i class="nav-icon fas fa-bezier-curve"></i>
                            <p>
                                Menus & Pages
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.menusAll')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'menusAll' ? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Menus</p>
                                </a>
                            </li>


                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.pagesAll')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'pagesAll' ? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All pages</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    

                    

                    <li class="nav-item <?php echo e(session('lsbm') == 'departments'? ' menu-open ' : ''); ?>">
                        <a href="#" class="nav-link <?php echo e(session('lsbm') == 'departments'? ' active ' : ''); ?>">
                            <i class="nav-icon fas fa-passport"></i>
                            <p>
                                How Works
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo e(route('departments.index')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'alldepartments' ? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All How Works</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('departments.create')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'createdepartments' ? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create How Works</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    


                    <li class="nav-item <?php echo e(session('lsbm') == 'mediaM'? ' menu-open ' : ''); ?>">
                        <a href="#" class="nav-link <?php echo e(session('lsbm') == 'mediaM'? ' active ' : ''); ?>">
                            <i class="nav-icon fas fa-pager"></i>
                            <p>
                                Media
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo e(route('medias.index')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'mediaSM'? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Media</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item <?php echo e(session('lsbm') == 'posts'? ' menu-open ' : ''); ?>">
                        <a href="#" class="nav-link <?php echo e(session('lsbm') == 'posts'? ' active ' : ''); ?>">
                            <i class="nav-icon far fa-share-square"></i>
                            <p>
                                News
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                            <li class="nav-item">
                                <a href="<?php echo e(route('categories.index')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'allCategories' ? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All  Category</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo e(route('categories.create')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'createCategory' ? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create  Category</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="<?php echo e(route('news.index')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'allPosts' ? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All News</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('news.create')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'storePost' ? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create News</p>
                                </a>
                            </li>

                        </ul>
                    </li>


                   


                    <li class="nav-item <?php echo e(session('lsbm') == 'galleries' ? ' menu-open ' : ''); ?>">
                        <a href="#" class="nav-link <?php echo e(session('lsbm') == 'galleries' ? ' active ' : ''); ?>">
                            <i class="nav-icon fas fas fa-bell"></i>
                            <p>
                                Galleries
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo e(route('galleries.index')); ?>"
                                    class="nav-link <?php echo e(session('lsbsm') == 'all_gallery' ? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Galleries</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('galleries.create')); ?>"
                                    class="nav-link <?php echo e(session('lsbsm') == 'create_gallery' ? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create Gallery</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                    <li class="nav-item <?php echo e(session('lsbm') == 'testimonials' ? ' menu-open ' : ''); ?>">
                        <a href="#" class="nav-link <?php echo e(session('lsbm') == 'testimonials' ? ' active ' : ''); ?>">
                            <i class="nav-icon fas fa-quote-right"></i>
                            <p>
                                Testimonials
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo e(route('testimonials.index')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'testimonialsAll' ? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Testimonials</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('testimonials.create')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'createTestimonial' ? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create Testimonial</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    


                    
                    <li class="nav-item <?php echo e(session('lsbm') == 'product'? ' menu-open ' : ''); ?>">
                        <a href="#" class="nav-link <?php echo e(session('lsbm') == 'product'? ' active ' : ''); ?>">
                            <i class="nav-icon fas fa-shopping-cart"></i>
                            <p>
                                Products
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.productCategoriesAll')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'productCategoriesAll' ? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Categories All</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.unitsAll')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'unitsAll' ? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Units All</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.productsAll')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'productsAll' ? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Products All</p>
                                </a>
                            </li>

                        </ul>
                    </li>

                                            
                        
                    <li class="nav-item <?php echo e(session('lsbm') == 'vehicles'? ' menu-open ' : ''); ?>">
                        <a href="#" class="nav-link <?php echo e(session('lsbm') == 'vehicles'? ' active ' : ''); ?>">
                            <i class="nav-icon fas fa-truck"></i> 
                            <p>
                                Vehicles
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.vehicles.index')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'allVehicles' ? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Vehicles</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.vehicles.create')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'createVehicle' ? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Vehicle</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    
                    <li class="nav-item <?php echo e(session('lsbm') == 'drivers'? ' menu-open ' : ''); ?>">
                        <a href="#" class="nav-link <?php echo e(session('lsbm') == 'drivers'? ' active ' : ''); ?>">
                            <i class="nav-icon fas fa-user-friends"></i> 
                            <p>
                                Drivers
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.drivers.index')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'allDrivers' ? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Drivers</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.drivers.create')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'createDriver' ? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Add Driver</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    
                    <li class="nav-item <?php echo e(session('lsbm') == 'vehicle_assignments'? ' menu-open ' : ''); ?>">
                        <a href="#" class="nav-link <?php echo e(session('lsbm') == 'vehicle_assignments'? ' active ' : ''); ?>">
                            <i class="nav-icon fas fa-clipboard-list"></i>
                            <p>
                                Vehicle Assignments
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.vehicle_assignments.index')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'allVehicleAssignments' ? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>All Assignments</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="<?php echo e(route('admin.vehicle_assignments.create')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'createVehicleAssignment' ? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>New Assignment</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    
                    <li class="nav-item <?php echo e(session('lsbm') == 'stock_requests' ? 'menu-open' : ''); ?>">
                        <a href="#" class="nav-link <?php echo e(session('lsbm') == 'stock_requests' ? 'active' : ''); ?>">
                            <i class="nav-icon fas fa-boxes"></i>
                            <p>
                            Stock Requests
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                            <a href="<?php echo e(route('admin.stock_requests.index')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'allStockRequests' ? 'active' : ''); ?>">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>All Stock Requests</p>
                            </a>
                            </li>
                        </ul>
                    </li>

                    
                    <li class="nav-item <?php echo e(session('lsbm') == 'order' ? 'menu-open' : ''); ?>">
                        <a href="#" class="nav-link <?php echo e(session('lsbm') == 'order' ? 'active' : ''); ?>">
                            <i class="nav-icon fas fa-shopping-bag"></i>
                            <p>
                            Orders
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                            <a href="<?php echo e(route('admin.orderList')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'orderList' ? 'active' : ''); ?>">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Order List</p>
                            </a>
                            </li>
                        </ul>
                    </li>

                    
                    <li class="nav-item <?php echo e(session('lsbm') == 'contacts' ? 'menu-open' : ''); ?>">
                        <a href="#" class="nav-link <?php echo e(session('lsbm') == 'contacts' ? 'active' : ''); ?>">
                            <i class="nav-icon fas fa-shopping-bag"></i>
                            <p>
                            Contact
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                            <a href="<?php echo e(route('admin.contacts.index')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'contactListAll' ? 'active' : ''); ?>">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Contact Message</p>
                            </a>
                            </li>
                        </ul>
                    </li>

                   <li class="nav-item <?php echo e(session('lsbm') == 'shipping' ? 'menu-open' : ''); ?>">
                        <a href="#" class="nav-link <?php echo e(session('lsbm') == 'shipping' ? 'active' : ''); ?>">
                            <i class="nav-icon fas fa-shopping-bag"></i>
                            <p>
                            Shipping Method
                            <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                            <a href="<?php echo e(route('shipping.index')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'shippingMethod' ? 'active' : ''); ?>">
                                <i class="far fa-dot-circle nav-icon"></i>
                                <p>Method List</p>
                            </a>
                            </li>
                        </ul>
                    </li>
                   
                   

                    <li class="nav-item <?php echo e(session('lsbm') == 'websiteparam'? ' menu-open ' : ''); ?>">
                        <a href="#" class="nav-link <?php echo e(session('lsbm') == 'websiteparam'? ' active ' : ''); ?>">
                            <i class="nav-icon fas fa-desktop"></i>
                            <p>
                                 Website Settings
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="<?php echo e(route('websiteparam')); ?>" class="nav-link <?php echo e(session('lsbsm') == 'websiteparamSM'? ' active ' : ''); ?>">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Website Settings</p>
                                </a>
                            </li>

                        </ul>
                    </li>
              
              
                </ul>
            </nav>

        </div>

    </aside>

    <div class="content-wrapper">

        <section class="content">
            <div class="container-fluid">

                <?php echo $__env->yieldContent('body'); ?>

            </div>
        </section>

    </div>

    <footer class="main-footer">
        <strong>Copyright &copy; <?php echo e(date('Y')); ?> <a href="javascript:void(0)">Phenex Soft.</a></strong>
        All rights reserved.
    </footer>

    <aside class="control-sidebar control-sidebar-dark">

    </aside>

</div>


<script src="<?php echo e(asset('/')); ?>admin/plugins/jquery/jquery.min.js"></script>

<script src="<?php echo e(asset('/')); ?>admin/plugins/jquery-ui/jquery-ui.min.js"></script>


<script src="<?php echo e(asset('/')); ?>admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="<?php echo e(asset('/')); ?>admin/plugins/chart.js/Chart.min.js"></script>

<script src="<?php echo e(asset('/')); ?>admin/plugins/sparklines/sparkline.js"></script>


<script src="<?php echo e(asset('/')); ?>admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo e(asset('/')); ?>admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

<script src="<?php echo e(asset('/')); ?>admin/plugins/jquery-knob/jquery.knob.min.js"></script>

<script src="<?php echo e(asset('/')); ?>admin/plugins/moment/moment.min.js"></script>
<script src="<?php echo e(asset('/')); ?>admin/plugins/daterangepicker/daterangepicker.js"></script>

<script src="<?php echo e(asset('/')); ?>admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

<script src="<?php echo e(asset('/')); ?>admin/plugins/summernote/summernote-bs4.min.js"></script>

<script src="<?php echo e(asset('/')); ?>admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

<script src="<?php echo e(asset('/')); ?>admin/plugins/summernote/summernote-bs4.min.js"></script>

<!-- include codemirror (codemirror.css, codemirror.js, xml.js, formatting.js)-->
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/codemirror.min.css" />
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/theme/blackboard.min.css">
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/theme/monokai.min.css">
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/codemirror.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/codemirror/5.41.0/mode/xml/xml.min.js"></script>



<script src="<?php echo e(asset('/')); ?>admin/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo e(asset('/')); ?>admin/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo e(asset('/')); ?>admin/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Select2 -->
<script src="<?php echo e(asset('/')); ?>admin/plugins/select2/js/select2.full.min.js"></script>


<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

<script src="<?php echo e(asset('/')); ?>admin/dist/js/adminlte2167.js?v=3.2.0"></script>




<script src="<?php echo e(asset('/')); ?>admin/toastifyNotification/toastify.js"></script>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>



<!--===== SORTABLE JS =====-->
<script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>


<script>
    $(function () {
        // Summernote
        $('#summernote').summernote({
            height: 200,
            tabsize: 2,
            codemirror: {
            mode: 'text/html',
            htmlMode: true,
            lineNumbers: true,
            theme: 'monokai'
            }
        });


        $('#summernote1').summernote({
            height: 200,
            tabsize: 2,
            codemirror: {
            mode: 'text/html',
            htmlMode: true,
            lineNumbers: true,
            theme: 'monokai'
            }
        });


        // $('.select2bs4').select2({
        //     theme: 'bootstrap4'
        // })


        // CodeMirror
        CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
            mode: "htmlmixed",
            theme: "monokai"
        });
    })
</script>
<script>
    <?php if(Session::has('success')): ?>
    Toastify({ text: "<?php echo e(Session::get('success')); ?>", duration: 3000,
        style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
    }).showToast();

    <?php elseif(Session::has('warning')): ?>
    Toastify({ text: "<?php echo e(Session::get('warning')); ?>", duration: 3000,
        style: { background: "linear-gradient(to right, #00b09b, #96c93d)" }
    }).showToast();

    <?php elseif(Session::has('error')): ?>
    Toastify({ text: "<?php echo e(Session::get('error')); ?>", duration: 3000,
        style: { background: "linear-gradient(to right, #00b09b, #96c93d)",
            color:'#f51804'
        }
    }).showToast();

    <?php endif; ?>
</script>

<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>

<script>
    /*===== DRAG and DROP =====*/
    const dropItems = document.getElementById('drop-items')

    new Sortable(dropItems, {
        animation: 350,
        chosenClass: "sortable-chosen",
        dragClass: "sortable-drag",
        store: {
            // We keep the order of the list
            set: (sortable) =>{
                const order = sortable.toArray()
                localStorage.setItem(sortable.options.group.name, order.join('|'))
            },

            // We get the order of the list
            get: (sortable) =>{
                const order = localStorage.getItem(sortable.options.group.name)
                return order ? order.split('|') : []
            }
        }
    });
</script>

<?php echo $__env->yieldPushContent('js'); ?>
</body>

</html>

<?php /**PATH D:\laragon\laragon\www\sungoods\resources\views/admin/master.blade.php ENDPATH**/ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ADMIN DASHBOARD | Market Rakhees</title>
        <link rel="stylesheet" type="text/css" href="{{url('css/admin_css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/admin_css/font-awesome.min.css')}}">
        {{-- <link rel="stylesheet" type="text/css" href="{{url('css/admin_css/ionicons.min.css')}}"> --}}
        <link rel="stylesheet" type="text/css" href="{{url('css/admin_css/menu.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/admin_css/style.css')}}">	
    </head>
    <body >
        <!------------------------------------------------>
        <!--------------- The left SideBar  -------------->
        <!------------------------------------------------>

        <div class="sidebar" >
            <ul class="sidebar-menu">
                <!---------------- The Dashboard  ---------------->
                <!------------------------------------------------>
                <li>
                    <a href="index.php" class="dashboard"><i class="fa fa-tachometer">
                        </i> <span>لوحة التحكم</span></a>
                </li>

                <!------------------ The Users  ------------------>
                <!------------------------------------------------>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-users"></i> <span>المستخدمين</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="users"><i class="fa fa-eye"></i>عرض المستخدمين</a></li>
                        <li><a href="add_user"><i class="fa fa-plus-circle"></i>إضافة مستخدم</a></li>
                    </ul>
                </li>

                <!----------------- The Products  ---------------->
                <!------------------------------------------------>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-shopping-cart"></i> <span>المنتجات</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="products"><i class="fa fa-eye"></i>عرض المنتجات</a></li>
                        <li><a href="add_product"><i class="fa fa-plus-circle"></i>إضافة منتج</a></li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-th-large" aria-hidden="true"></i> <span>تصنيفات المنتجات</span>
                                <span class="pull-right-container" style="padding-right:5px ; padding-left:5px">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li>
                                    <a href="categories"><i class="fa fa-eye"></i>عرض التصنيفات</a>
                                </li>
                                <li>
                                    <a href="addCategory"><i class="fa fa-plus-circle"> </i>إضافة تصنيف</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <!----------------- The Auctions  ---------------->
                <!------------------------------------------------>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-gavel" aria-hidden="true"></i> <span>المزادات</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="auctions"><i class="fa fa-eye"></i>عرض المزادات</a></li>
                    </ul>
                </li>

                <!--------------- The Active User  --------------->
                <!------------------------------------------------>
                <li class="treeview">
                    <a href="#">
                        <i class="fa fa-address-book"></i> <span>مستخدم نشط</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <!-- <li><a href="#"><i class="fa fa-edit"></i>Edit Profile</a></li> -->
                        <li><a href="login"><i class="fa fa-power-off"></i>تسجيل الخروج</a></li>
                    </ul>
                </li>
            </ul>
        </div>

            <!------------------------------------------------>
            <!-------------- The Main Content  --------------->
            <!------------------------------------------------>

                {{$slot}}

            <!------------------------------------------------>
            <!----------------- The Footer  ------------------>
            <!------------------------------------------------>




            <footer>
                <div class="col-sm-6">
                    Copyright &copy; 2018 <a href="http://www.webtrickshome.com">Webtrickshome.com</a> All rights reserved. 
                </div>
                <div class="col-sm-6">
                    <span class="pull-right">Version 1.1</span>
                </div>
            </footer>

            <script type="text/javascript" src="{{url('js/admin_js/jquery.min.js')}}"></script>
            <!-- <script type="text/javascript" src="{{url('js/admin_js/bootstrap.min.js')}}"></script> -->
            <script type="text/javascript" src="{{url('js/admin_js/app.min.js')}}"></script>
            <!-- <script type="text/javascript" src="{{url('js/admin_js/script.js')}}"></script> -->
    </body>
</html>
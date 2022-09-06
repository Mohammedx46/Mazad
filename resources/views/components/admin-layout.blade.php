<!DOCTYPE html>
<html lang="ar">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>لوحة تحكم | منصة مزاد</title>
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
                    <a href="/admin" class="dashboard"><i class="fa fa-tachometer">
                        </i> <span>لوحة التحكم</span></a>
                </li>

                <!------------------ The Users  ------------------>
                <!------------------------------------------------>
                @can('Users')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-users"></i> <span>المستخدمين</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="/usersShow"><i class="fa fa-eye"></i>عرض المستخدمين</a></li>
                            @can('Admin')
                                <li><a href="/users/create"><i class="fa fa-plus-circle"></i>إضافة مستخدم</a></li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                

                <!----------------- The Products  ---------------->
                <!------------------------------------------------>
                @can('Products')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i> <span>المنتجات</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="/products/productsShow"><i class="fa fa-eye"></i>عرض المنتجات</a></li>
                            @can('Admin')
                                <li><a href="/products/create"><i class="fa fa-plus-circle"></i>إضافة منتج</a></li>
                            @endcan
                        </ul>
                    </li>    
                @endcan
                
                <!----------------- The Categories  -------------->
                <!------------------------------------------------>
                @can('Categories')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-th-large" aria-hidden="true"></i> <span>تصنيفات</span>
                            <span class="pull-right-container" style="padding-right:5px ; padding-left:5px">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="/categories/categoriesShow"><i class="fa fa-eye"></i>عرض التصنيفات</a>
                            </li>
                            @can('Admin')
                                <li><a href="/categories/create"><i class="fa fa-plus-circle"> </i>إضافة تصنيف</a></li>
                            @endcan
                        </ul>
                    </li>    
                @endcan
                

                <!----------------- The Roles  ------------------->
                <!------------------------------------------------>
                @can('Roles')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-check-circle-o" aria-hidden="true"></i> <span>الصلاحيات</span>
                            <span class="pull-right-container" style="padding-right:5px ; padding-left:5px">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li>
                                <a href="/roles"><i class="fa fa-eye"></i>عرض الصلاحيات</a>
                            </li>
                            @can('Admin')
                                <li><a href="/roles/create"><i class="fa fa-plus-circle"> </i>إضافة صلاحية</a></li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                
                <!----------------- The Auctions  ---------------->
                <!------------------------------------------------>
                {{-- @can('Auctions')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-gavel" aria-hidden="true"></i> <span>المزادات</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="/auctionsShow"><i class="fa fa-eye"></i>عرض المزادات</a></li>
                        </ul>
                    </li>
                @endcan --}}

                <!----------------- The Bills  ------------------->
                <!------------------------------------------------>
                @can('Bills')
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-list" aria-hidden="true"></i> <span>الفواتير</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="/bill/billsShow"><i class="fa fa-eye"></i> عرض الفواتير</a></li>
                        </ul>
                    </li>
                @endcan
                
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
                        <li style="text-align:center;color:white;font-size:1.2em;">{{auth()->user()->name}}</li>
                        <li><a href="/logout"><i class="fa fa-power-off"></i>تسجيل الخروج</a></li>
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
        <x-flash-message/>
        
        <footer>
            <div class="col-sm-6">
             &copy; 2022 <a href="http://www.webtrickshome.com">mazad.com</a> كل الحقوق محفوظة. 
            </div>
            <div class="col-sm-6">
                <span class="pull-right">Version 0.1</span>
            </div>
        </footer>

        <script type="text/javascript" src="{{url('js/admin_js/jquery.min.js')}}"></script>
        <!-- <script type="text/javascript" src="{{url('js/admin_js/bootstrap.min.js')}}"></script> -->
        <script type="text/javascript" src="{{url('js/admin_js/app.min.js')}}"></script>
        <!-- <script type="text/javascript" src="{{url('js/admin_js/script.js')}}"></script> -->
    </body>
</html>
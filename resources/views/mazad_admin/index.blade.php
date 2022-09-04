<x-admin-layout>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 title">
                <h1><i class="fa fa-bars" ></i> لوحة التحكم</h1>
            </div>
    
            <!------------ Welcome to Dashboard -------------->
            <!------------------------------------------------>
            <div class="col-sm-12">
    
                <!------------ Background conetent -------------->
                <div class="content">
                    <h2> مرحباً في    <span style="color: #ae6615; font-size: larger; margin: 0 .5%;">منصة مزاد</span></h2>
                    <p class="welcome-text"></p>
    
                    <!------------ Dividing into three Columns -------------->
                    <div class="row">

                        <!------------ First Column -------------->
                        <div class="col-sm-4"> </div>
            
                        <!------------ Second Column ------------->
                        <div class="col-sm-4 quick-links">
                            <h4>عرض السجلات</h4>
                            @can('Users')
                                <p><a href="/usersShow"><i class="fa fa-users"></i> عرض المستخدمين</a></p>                                
                            @endcan
                            @can('Products')
                                <p><a href="/products/productsShow"><i class="fa fa-shopping-cart"></i> عرض المنتجات</a></p>
                            @endcan
                            @can('Categories')
                                <p><a href="/categories/categoriesShow"><i class="fa fa-th-large"></i> عرض تصنيفات المنتجات</a></p>
                            @endcan
                            @can('Roles')
                                <p><a href="/roles"><i class="fa fa-check-circle-o"></i> عرض الصلاحيات</a></p>
                            @endcan
                            @can('Auctions')
                                <p><a href="/auctoinsShow"><i class="fa fa-gavel"></i> عرض المزادات</a></p>
                            @endcan
                            @can('Bills')
                                <p><a href="/billsShow"><i class="fa fa-list"></i> عرض الفواتير</a></p>
                            @endcan
                        </div>
        
                        <!------------ Third Column -------------->
                        <div class="col-sm-4 quick-links">
                            <h4>إضافة سجلات</h4>
                            @can('Admin')
                                <p><a href="/users/create"><i class="fa fa-plus-square"></i> إضافة مستخدم</a></p>                                
                                <p><a href="/products/create"><i class="fa fa-plus-square"></i> إضافة منتج</a></p>
                                <p><a href="/categories/create"><i class="fa fa-plus-square"></i> إضافة تصنيف </a></p>
                                <p><a href="/roles/create"><i class="fa fa-plus-square"></i> إضافة صلاحية </a></p>
                            @endcan
                        </div>
                    </div>
                </div>
                <!----------- End Background conetent ------------>
            </div>
            <!--------- The Second Part of Content  ---------->
            <!------------------------------------------------>
        </div>
    </div>
    
</x-admin-layout>
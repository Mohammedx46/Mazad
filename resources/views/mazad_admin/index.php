<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ADMIN DASHBOARD | Market Rakhees</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
	<link rel="stylesheet" type="text/css" href="css/menu.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">	
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
                <i class="fa fa fa-users"></i> <span>المستخدمين</span>
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

<div class="container-fluid">
  
	<div class="row">
		<div class="col-sm-10 title">
			<h1><i class="fa fa-bars"></i> لوحة التحكم</h1>
		</div>

    <!------------ Welcome to Dashboard -------------->
    <!------------------------------------------------>
		<div class="col-sm-12">

      <!------------ Background conetent -------------->
			<div class="content">
				<h2> مرحباً في لوحة تحكم <span style="color: #05a4bf; font-size: larger; margin: 0 .5%;">تهامة فلافور</span></h2>
        <p class="welcome-text"></p>
        

        <!------------ Dividing into three Columns -------------->
				<div class="row">
          <!------------ First Column -------------->
					<div class="col-sm-4"> </div>
          
          <!------------ Second Column ------------->
					<div class="col-sm-4 quick-links">
						<h4>عرض السجلات</h4>
						<p><a href="screens/entities/allentities.php"><i class="fa fa-tablet"></i> عرض كل الأجهزة</a></p>
            <p><a href="screens/entities/entitycategory/allcategories.php"><i class="fa fa-object-ungroup"></i> عرض كل التصانيف</a></p>
          </div>
          
          <!------------ Third Column -------------->
					<div class="col-sm-4 quick-links">
						<h4>إضافة سجلات</h4>
            <p><a href="screens/entities/addentity.php"><i class="fa fa-plus-square"></i> إضافة جهاز</a></p>
            <p><a href="screens/entities/entitycategory/addcategory.php"><i class="fa fa-plus-square"></i> إضافة تصنيف</a></p>
          </div>
          
				</div>
      </div>
      <!----------- End Background conetent ------------>

    </div>
    <!--------- The Second Part of Content  ---------->
    <!------------------------------------------------>
	</div>
</div>

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

<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- <script type="text/javascript" src="js/bootstrap.min.js"></script> -->
<script type="text/javascript" src="js/app.min.js"></script>
<!-- <script type="text/javascript" src="js/script.js"></script> -->
</body>
</html>
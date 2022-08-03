<?php require("../../sidebar.php"); ?>
<!DOCTYPE html lan="ar">
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN DASHBOARD | Tehama Flavor</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
    <style>
    body {
        font-size: 1.8em;
    }
    </style>
</head>

<body>

    <!------------------------------------------------>
    <!--------------- The left SideBar  -------------->
    <!------------------------------------------------>
    <?php 
        $links = array(
            "index"=> "../../index.php",
            "allentities"=>"#",
            "addentity"=>"addentity.php",
            // --------------------
            // Entity Category
            // --------------------
            "allcategories"=>"entitycategory/allcategories.php",
            "addcategory"=>"entitycategory/addcategory.php"
        );
        sideBar($links);
    ?>

    <!------------------------------------------------>
    <!--------------- End left SideBar  -------------->
    <!------------------------------------------------>


    <!------------------------------------------------>
    <!----------------- Main Content ----------------->
    <!------------------------------------------------>

    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-12 title">
                <h1><i class="fa fa-bars"></i> عرض بيانات المنتجات </h1>
            </div>

            <div class="col-sm-12">
                <div class="col-sm-9 search-div">
                    الكل( 5 )</a>
                </div>

                <div class="col-sm-3">
                    <input type="text" id="search" name="search" class="form-control" placeholder="ابحث عن المنتج بالاسم">
                </div>
            </div>
            
            <!------------------ End Header ------------------>
            <!------------------------------------------------>


            <div class="clearfix"></div>

            <div class="col-sm-12">
                <div class="content">
                    <table class="table table-striped" id="myTable">
                        <thead>
                            <tr>

                                <th width="3%"><input type="checkbox" id="select-all"> </th>
                                <th width="8%">اسم المنتج </th>
                                <th width="10%">وصف مختصر</th>
                                <th width="15%"> وصف مفصل </th>
                                <th width="7%">السعر الإبتدائي للمزاد</th>
                                <th width="10%">البيع الفوري</th>
                                <th width="5%">الكمية</th>
                                <th width="7%">تاريخ البداية</th>
                                <th width="7%">تاريخ النهاية </th>
                                <th width="12%">الصورة الأساسية</th>
                                <th width="5%">هل بيع</th>
                                <th width="15%">العملية</th>
                            </tr>
                        </thead>

                        <!----------------- Body of Table ----------------->
                        <tbody>

                            <tr>

                                <td><input type="checkbox" name="select-cat"> </td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <a href="editentity.php?action=edit&id=<?php echo $row['Id']; ?>"
                                        class='btn btn-success'>تعديل</a>
                                    <a href="?action=delete&id=<?php echo $row['Id']; ?>" class='btn btn-danger'
                                        id="delet">حذف</a>
                                </td>
                            </tr>
                        </tbody>
                        <!--------------- End Body of Table --------------->
                    </table>
                </div>
            </div>

            <div class="clearfix"></div>

            <!------------------------------------------------>
            <!---------------- bottom Content ---------------->
            <!------------------------------------------------>
        </div>
    </div>
    </div>


    <!------------------------------------------------>
    <!----------------- The Footer  ------------------>
    <!------------------------------------------------>

    <?php require("../../footer.php"); ?>

    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/app.min.js"></script>
    <script type="text/javascript" src="../../js/script.js"></script>


</body>

</html>
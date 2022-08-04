<?php require("../../../sidebar.php"); ?>
<!DOCTYPE html lan="ar">
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN DASHBOARD | Tehama Flavor</title>
    <link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../../css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="../../../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../../../css/style.css">
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
            "index"=> "../../../index.php",
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
                    <h1><i class="fa fa-bars"></i> عرض بيانات التصنيفات </h1>
                </div>

                <div class="col-sm-12">
                    <div class="col-sm-9 search-div">
                        الكل( 5 )</a>
                    </div>

                    <div class="col-sm-3">
                    <input type="text" id="search" name="search" class="form-control" placeholder="ابحث عن التصنيف بالاسم">
                    </div>
                </div>
               
                 
            

            <!--------------- Header Content ----------------->
            <!------------------------------------------------>

            
            

            <!------------- Right Side Content -------------->

            <div class="col-sm-12 cat-view">

                <!----------- Table of Categories Content ------------>
                <div class="content">
                    <table class="table table-striped">
                        <!------------- Head of Table -------------->
                        <thead>
                            <tr>
                                <th width="5%"><input type="checkbox" id="select-all"></th>
                                <th width="20%">اسم التصنيف</th>
                                <th width="55%">وصف التصنيف</th>
                                <td width="20%">العملية</td>
                            </tr>
                        </thead>
                        <!------------- Body of Table -------------->
                        <tbody>
                            
                            <tr>
                                <td>
                                    <input type="checkbox" name="select-cat"> 
                                </td>
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

                    </table>
                </div> 						
            </div>
        </div>
    


    <!------------------------------------------------>
    <!----------------- The Footer  ------------------>
    <!------------------------------------------------>

    <?php require("../../../footer.php"); ?>

    <script type="text/javascript" src="../../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../../js/app.min.js"></script>
    <script type="text/javascript" src="../../../js/script.js"></script>


</body>

</html>
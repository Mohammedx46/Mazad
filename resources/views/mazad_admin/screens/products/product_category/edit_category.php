<?php 
    // require("../../../dbconnect.php"); 
    require("../../../sidebar.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN DASHBOARD | تهامة فلافور</title>
    <link rel="stylesheet" type="text/css" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../../css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="../../../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../../../css/style.css">
</head>

<body>

    <!------------------------------------------------>
    <!--------------- The left SideBar  -------------->
    <!------------------------------------------------>
    <?php 
        $links = array(
            "index"=> "../../../index.php",
            "allentities"=>"allentities.php",
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
    <!-------------- The Main Content  --------------->
    <!------------------------------------------------>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 title">
                <h1><i class="fa fa-bars"></i> تعديل بيانات التصنيف</h1>
            </div>

            <div class="col-sm-12">
                <div class="row">
                    <!-------------- Middel of content --------------->
                    <!------------------------------------------------>
                    <div class="col-sm-11">
                        <!-- Form Elements -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-edit"></i> تعديل التصنيف
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form method="post">
                                            <div class="form-group">
                                                <label>اسم التصنيف</label>
                                                <input type="text" name="category_name" class="form-control" required 
                                                    value=""/>
                                            </div>				

                                            <div class="form-group">
                                                <label>وصف التصنيف</label>
                                                <textarea class="form-control" name="category_يescription" rows="5" required></textarea>
                                            </div>

                                            <!----------- Category Image Field ------------>
                                            <div class="col-md-12 form-group">
                                                <label class="col-md-6">صورة التصنيف
                                                    <input type="file" class="form-control"
                                                        name="category_image_location" />
                                                </label>

                                                <div class="col-md-6 form-group"><img src="h.png" alt="" /></div>
                                            </div>
                                            <div class="form-group">
                                                <button class="btn btn-primary" name="submit_category">إضافة التصنيف</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script type="text/javascript">
    $(document).ready(function() {
        $('.fa-bars').click(function() {
            $('.sidebar').toggle();
        })
    });
    </script>

    <script src="../ckeditor/ckeditor.js"></script>
    <script>
    CKEDITOR.replace('description', {
        "filebrowserBrowseUrl": "..\/editor\/ckfinder\/ckfinder.html",
        "filebrowserImageBrowseUrl": "..\/editor\/ckfinder\/ckfinder.html?type=Images",
        "filebrowserFlashBrowseUrl": "..\/editor\/ckfinder\/ckfinder.html?type=Flash",
        "filebrowserUploadUrl": "..\/editor\/ckfinder\/core\/connector\/php\/connector.php?command=QuickUpload&type=Files",
        "filebrowserImageUploadUrl": "..\/editor\/ckfinder\/core\/connector\/php\/connector.php?command=QuickUpload&type=Images",
        "filebrowserFlashUploadUrl": "..\/editor\/ckfinder\/core\/connector\/php\/connector.php?command=QuickUpload&type=Flash"
    });
    </script>
</body>

</html>
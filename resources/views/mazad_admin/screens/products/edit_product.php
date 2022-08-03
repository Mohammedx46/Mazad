<?php 
    require("../../dbconnect.php"); 
    require("../../sidebar.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN DASHBOARD | تهامة فلافور</title>
    <link rel="stylesheet" type="text/css" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="../../css/menu.css">
    <link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>

<body>

    <!------------------------------------------------>
    <!--------------- The left SideBar  -------------->
    <!------------------------------------------------>
    <?php 
        $links = array(
            "index"=> "../../index.php",
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
                <h1><i class="fa fa-bars"></i> تعديل بيانات المكون</h1>
            </div>

            <div class="col-sm-12">
                <div class="row">
                    <!-------------- Middel of content --------------->
                    <!------------------------------------------------>
                    <div class="col-sm-11">
                        <!-- Form Elements -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-plus-circle"></i> تعديل
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <form role="form" method="post" action="process/addentityprocess.php"
                                            enctype="multipart/form-data">

                                            <div class="col-md-12 form-group">
                                                <!-------------- Product Name Field --------------->
                                                <label class="labelAdd  col-md-6">اسم المنتج
                                                    <input type="text" placeholder="اسم المنتج أو الخدمة المقدمة"
                                                        class="form-control" name="product_name" required 
                                                        value=""/>
                                                </label>
                                              
                                                <!------------ Product Short Description Field -------------->
                                                <label class="labelAdd col-md-6"> وصف مختصر
                                                    <input type="text" class="form-control"
                                                        placeholder="" name="وصف مختصر عن المنتج أو الخدمة" required 
                                                        value=""/>
                                                </label>
                                            </div>

                                            <div class=" col-md-12 form-group">
                                                <!------------ Product Description Field -------------->
                                                <label class="labelAdd col-md-12"> وصف مفصل
                                                    <textarea type="text" class="form-control"
                                                        placeholder="وصف مفصل عن المنتج أو الخدمة" name="product_description" required ></textarea>
                                                </label>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <!------------ Product Price Field -------------->
                                                <label  class="labelAdd col-md-4">سعر بداية المزاد
                                                <input type="text" class="form-control"
                                                    placeholder="مبلغ بداية المزاد" name="product_start_price" required
                                                    value=""/> 
                                                </label>

                                                <!------------ Product Sell Now Price Field -------------->
                                                <label  class="labelAdd col-md-4">سعر البيع الفوري
                                                <input type="text" class="form-control"
                                                    placeholder="سعر المنتج أو الخدمة للبيع الفوري" name="product_sell_now_price" required
                                                    value=""/> 
                                                </label>
                                                
                                                <!------- Product Quantity Field -------->
                                                <label class="labelAdd col-md-4">الكمية
                                                    <input type="number" class="form-control"
                                                        placeholder="الكمية المتوفرة بالحبة"
                                                        name="product_ضuantity" min="1" required
                                                        value=""/>
                                                </label>
                                            </div>

                                            <div class="col-md-12 form-group">
                                                <!------------ Product Start Date Field -------------->
                                                <label  class="labelAdd col-md-6">تاريخ بدء المزاد
                                                <input type="datetime-local" class="form-control"
                                                    placeholder="تاريخ بدء العد التنازلي لإنتهاء المزاد" name="product_start_date" required
                                                    value=""/> 
                                                </label>
                                                

                                                <!------------ Product End Date Field -------------->
                                                
                                                <label  class="labelAdd col-md-6">تاريخ نهاية المزاد
                                                <input type="datetime-local" class="form-control"
                                                    placeholder="تاريخ ناية المزاد" name="product_end_date" required
                                                    value="" /> 
                                                </label>
                                            </div>

                                            
                                            <div class="col-md-12 form-group">
                                                <!------- Product Main Image Location Field --------------->
                                                <label class="labelAdd col-md-3">الصورة الرئسية للمنتج
                                                    <input type="file" class="form-control"
                                                        name="product_main_image_location" required
                                                        value=""/>
                                                </label>
                                                
                                                <!----------- Product Category Field ------------>
                                                <label class="labelAdd col-md-6">تصنيف المنتج
                                                    <select class="form-control" name="category_id" required>
                                                        <option value="">سيارات</option>
                                                        <option value="">سيارات</option>
                                                        <option value="">سيارات</option>
                                                    </select>
                                                </label>
                                            
                                                <!-------------- Is Product Sold Field ---------->
                                                <label class="labelAdd col-md-3">هل تم بيع المنتج
                                                    <select class="form-control" name="is_product_sold" required>
                                                        <optgroup>معروض</optgroup>
                                                        <option value = "1">معروض     </option>
                                                        <option value = "0">مباع    </option>
                                                    </select>                                            
                                                </label>  
                                            </div>

                                            <div class="form-group col-md-12"></div>
                                            <div style="float:right;">
                                                <button type="submit" name="submit" class="btn btn-primary"
                                                    style="font-size:1em; width:6em">إضافة</button>
                                                <button type="reset" name="reset" class="btn btn-danger"
                                                    style="font-size:1em; width:6em">إلغاء</button>
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

    <?php require("../../footer.php"); ?>

    <script type="text/javascript" src="../../js/jquery.min.js"></script>
    <script type="text/javascript" src="../../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../../js/app.min.js"></script>
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
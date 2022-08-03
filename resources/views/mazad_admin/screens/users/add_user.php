<?php require("../../dbconnect.php"); ?>
<?php require("../../sidebar.php");?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN DASHBOARD | Rakhees</title>
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
            "allentities"=>"allentities.php",
            "addentity"=>"#",
            // --------------------
            // Entity Category
            // --------------------
            "allcategories"=>"entitycategory/allcategories.php",
            "addcategory"=>"entitycategory/addcategory.php",
        );
        
        sideBar($links);
    ?>
    <!------------------------------------------------>
    <!-------------- The Main Content  --------------->
    <!------------------------------------------------>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-10 title">
                <h1><i class="fa fa-bars"></i> إضافة بيانات مستخدم جديد</h1>
            </div>

            <div class="col-sm-12">
                <div class="row">
                    <!-------------- Middel of content --------------->
                    <!------------------------------------------------>
                    <div class="col-sm-11">
                        <!-- Form Elements -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-plus-circle"></i> إضافة بيان جديد
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">

                                        <form role="form" method="post" action="../../API/insert.php" >
                                            <!-------------- Left Side --------------->
                                            <div class="col-md-6 form-group">

                                                <!-------------- First Name Field --------------->                                    
                                                <label class="labelAdd col-md-12" id="m">الاسم الأول
                                                    <input type="text" placeholder="أكتب اسمك الأول"
                                                        class="form-control" name="first_name" required/>   
                                                </label> 
                                                
                                                <!-------------- Privilege Field ---------------> 
                                                <label class="labelAdd col-md-4"> نوع الإشتراك
                                                    <select class="form-control" name="subscription_type" required> 
                                                    <option value="0">زائر</option>
                                                    <option value="0">أساسي</option>
                                                    <option value="0">زائر</option>
                                                    </select>   
                                                </label> 
                                                <!-------------- Password Field --------------->  
                                                <label class="labelAdd col-md-8">كلمة المرور
                                                    <input type="password" class="form-control"
                                                        placeholder="أدخل كلمة السر" name="password" required/>                                        
                                                </label>
                                                <!-------------- Phone Number Field ----------->
                                                <label  class="labelAdd col-md-12">رقم الهاتف
                                                    <input type="text" class="form-control"
                                                        placeholder="أكتب رقم الهاتف 77 , 73 , 71 , 71" name="phone_number" required/>
                                                </label>
                                            </div>
                                        
                                            <!----------------------------------------->
                                            <!-------------- Right Side --------------->
                                            <!----------------------------------------->

                                            <div class="col-md-6 form-group">
                                                <!------------ Last Name Field ------------->                                   
                                                <label class="labelAdd col-md-12" id="m">اللقب
                                                    <input type="text" placeholder="أكتب اسمك الأخير"
                                                        class="form-control" name="last_name" required/>   
                                                </label> 

                                                <!------------- Confirm Password Field -----> 
                                                <label class="labelAdd col-md-12">تأكيد كلمة المرور
                                                    <input type="password" class="form-control"
                                                        placeholder="أكتب لكمة المرور مرة أخرى" 
                                                        name="confirmation_password" required/>
                                                </label>

                                                <!-------------- Email Field --------------->                                                                         
                                                <label  class="labelAdd col-md-12">البريد الإلكتروني
                                                    <input type="email" class="form-control"
                                                        placeholder="أكتب بريدك الإلكتروني" name="email" required/>
                                                </label>                   
                                            </div>

                                            <div class="form-group col-md-12">
                                                
                                                <!-------------- Activation Field ---------->
                                                <label class="labelAdd col-md-2">حالة المستخدم
                                                    <select class="form-control" name="active" required>
                                                        <optgroup>نشط</optgroup>
                                                        <option value = "1">نشط     </option>
                                                        <option value = "0">معطل    </option>
                                                    </select>                                            
                                                </label>  

                                                <label class='col-md-12'></label>
                                                    <!-------------- Buttons Field ------------>
                                                    <div style="float:right;">
                                                        <button type="submit" name ="submit" class="btn btn-primary">إضافة المستخدم</button>
                                                        <button type="reset" class="btn btn-danger">إلغاء</button>
                                                    </div>
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
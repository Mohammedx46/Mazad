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
                                        <?php 
                                    if ( isset($_GET['action'] , $_GET['id']) && $_GET['action'] == 'edit')
                                    {
                                        $id = $_GET['id'];
                                        $stm=$connect->prepare("select * from entityips where Id =:catid");
                                        $stm->execute(array("catid"=>$id));
                                        if($stm->rowCount()==1)
                                        {
                                            foreach($stm->fetchAll() as $row)
                                            {
                                                    $EntityName        = $row['EntityName'      ];         
                                                    $IP                = $row['IP'              ];         
                                                    $UserName          = $row['UserName'        ];   
                                                    $Password          = $row['Password'        ];         
                                                    $Category          = $row['Category'        ]; 
                                                    $Description       = $row['Description'     ]; 
                                                    if(isset($_POST['submit']))
                                                    {
                                                        $EntityName = $_POST['EntityName' ];
                                                        $IP         = $_POST['IP' ];
                                                        $UserName = $_POST['UserName' ];
                                                        $Password = $_POST['Password' ];
                                                        $Category = $_POST['Category' ];
                                                        $Description = $_POST['Description' ];
                                                    
                                                        $errors=array();
                                                        // E for is empty, T for type //
                                                        //----------- Validation ----------//
                                                        //---------------------------------//
                                                        if(!empty($EntityName ) && !empty($IP) && !empty($UserName)
                                                        && !empty($Password) && !empty($Category) && !empty($Description) )
                                                        {
                                                            //----------- Entity Name --------//
                                                            //---------------------------------//
                                                            if (!preg_match("/^[a-zA-Z-'0-9 ]*$/",$EntityName))
                                                            {
                                                                $errors['TproductName']="<div style='color:red'>اسم الجهاز الذي أدخلته غير صحيح!</div>";
                                                            }
                                                            //----------- Product Category ----//
                                                            //---------------------------------//
                                                            // if(preg_match("/^[a-zA-Z-' ]*$/",$IP))
                                                            // {
                                                            // $errors['TproductCategory']="<div style='color:red'>Choose one of the category</div>";
                                                            // }
                                                            //----------- Inserting -----------//
                                                            //---------------------------------//
                                                            if (empty($errors))
                                                            {
                                                            $stm= $connect->prepare("UPDATE `entityips` SET `EntityName` = ? , `IP` = ? , `UserName` = ? ,
                                                            `Password` = ? , `Category` = ? , `Description` = ? WHERE `entityips`.`Id` = ? ");
                                                            $stm->execute(array($EntityName, $IP , $UserName , $Password , $Category , $Description , $id));
                                                                if($stm->rowCount()>=1)
                                                                {
                                                                    echo "<script>
                                                                    alert('تم التعديل');
                                                                    window.open('allentities.php', '_self');
                                                                    </script>";
                                                                }
                                                                else
                                                                {
                                                                    echo "<div class='alert alert-danger'> لم يتم التعديل </div>";
                                                                }
                                                            }
                                                        }
                                                        else
                                                        {
                                                            //----------- Field/s Empty -------//
                                                            //---------------------------------//
                                                            $errors['empty'] = "<div class='alert-danger btn col-md-12'>يوجد حقل فارغ</div>";
                                                            echo $errors['empty'];
                                                        }
                                                    
                                                    
                                                    
                                                    }
                                        ?>

                                        <form role="form" method="post" action="#" enctype="multipart/form-data">
                                            <!-------------- Product Entity Name Field --------------->
                                            <div class="form-group">
                                                <label class="labelAdd  col-md-12">اسم الجهاز
                                                    <input type="text" placeholder="لو سمحت أكتب اسم الجهاز هنا "
                                                        class="form-control" name="EntityName"
                                                        value="<?php echo $EntityName; ?>" required />
                                                </label>
                                            </div>
                                            <!------------ Product IP Field -------------->
                                            <div class="form-group">
                                                <label class="labelAdd col-md-4">رقم الجهاز (IP)
                                                    <input type="text" class="form-control"
                                                        placeholder="لوسمحت أكتب رقم الجهاز هنا (IP)" name="IP"
                                                        value="<?php echo $IP; ?>" required />
                                                </label>
                                            </div>
                                            <!----------- Product Category ID Field ------------>
                                            <div class="form-group">
                                                <label class="labelAdd col-md-4">تصنيف الجهاز
                                                    <select class="form-control" name="Category" required>
                                                        <?php 
                                          $stmCat = $connect->prepare("select * from categoryips") ;
                                          $stmCat->execute();
                                          if ($stmCat->rowCount())
                                          {
                                              foreach($stmCat as $row)
                                              {     
                                          ?>
                                                        <option value="<?php echo $row['Id'];?>">
                                                            <?php echo $row['CategoryName'];?></option>
                                                        <?php 
                                          } }
                                          ?>
                                                    </select>
                                                </label>
                                            </div>
                                            <!------- Prodcuct User Name Field -------->
                                            <div class="form-group">
                                                <label class="labelAdd col-md-4">اسم المستخدم
                                                    <input type="text" class="form-control"
                                                        placeholder="لوسمحت أكتب اسم المستخدم هنا" name="UserName"
                                                        value="<?php echo $UserName; ?>" required />
                                                </label>
                                            </div>
                                            <!------- Prodcuct Password Field --------------->
                                            <div class="form-group">
                                                <label class="labelAdd col-md-4">كلمة المرور
                                                    <input type="password" placeholder="لوسمحت أكتب كلمة المرور هنا"
                                                        class="form-control" name="Password"
                                                        value="<?php echo $Password; ?>" />
                                                </label>
                                            </div>
                                            <!------------ Product Description Field ------->
                                            <div class="form-group">
                                                <label class="labelAdd col-md-4">ملاحظات
                                                    <input type="text" class="form-control"
                                                        placeholder="لوسمحت أكتب ملاحظاتك هنا" name="Description"
                                                        value="<?php echo $Description; ?>" />
                                                </label>
                                            </div>

                                            <div class="form-group col-md-12"></div>
                                            <div style="float:right;">
                                                <button type="submit" name="submit" class="btn btn-primary">Edit
                                                    Product</button>
                                                <button type="reset" name="reset" class="btn btn-danger">Cancel</button>
                                            </div>
                                        </form>
                                        <?php 
                              } } } 
                              ?>
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
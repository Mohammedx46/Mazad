<?php require("../../../sidebar.php");?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ADMIN DASHBOARD | Rakhees</title>
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
            
            <div class="panel-heading">
                    <i class="fa fa-plus-circle"></i>  إضافة تصنيف جديد
            </div>
            <div class="search-div">الكل ( 5 ) </div>  
        </div>

		<!--------------- Header Content ----------------->
		<!------------------------------------------------>

		<!-------------- Left Side Content --------------->
        <div class="col-sm-4 cat-form">
            <!-- Form Elements -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <i class="fa fa-plus-circle"></i> إضافة تصنيف
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
                                <div class="form-group">
                                    <label class="">صورة التصنيف
                                        <input type="file" class="form-control"
                                            name="category_image_location" />
                                    </label>
                                    <div class="col-md-6 form-group"><img src="h.png" alt="" /></div>
                                </div>

                                <div class="col-md-12 form-group">
                                    <button class="btn btn-primary" name="submit_category">إضافة التصنيف</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		

		<!------------- Right Side Content -------------->

		<div class="col-sm-8 cat-view">
			<div class="row">
				<div class="col-sm-3">
				</div>
				<div class="col-sm-2">
				</div>
                <div class="col-sm-3  col-sm-offset-4">
                    <input type="text" id="search" name="search" class="form-control" placeholder="ابحث عن التصنيف بالاسم">
                </div>
			</div>

			<!----------- Table of Categories Content ------------>
			
			<div class="content">
				<table class="table table-striped">
					<!------------- Head of Table -------------->
					<thead>

						<tr>
							<th width="5%"><input type="checkbox" id="select-all"></th>
							<th width="15%">اسم التصنيف</th>
							<th width="60%">وصف التصنيف</th>
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

    <script src="../../../ckeditor/ckeditor.js"></script>
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
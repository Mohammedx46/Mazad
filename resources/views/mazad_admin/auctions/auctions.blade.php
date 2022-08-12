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
                <h1><i class="fa fa-bars"></i> عرض بيانات الأجهزة </h1>
            </div>
            <div class="search-div">
                <?php 
          $stm = $connect->prepare("select * from entityips") ;
          $stm->execute();
          $count = 0; 
          if ( $stm->rowCount())
          {
              $count = $stm->rowCount();
          }
      ?>
                <div class="col-sm-9">
                    <a href="#"> All( <?php 
        echo $count ; 
        ?> )</a>
                </div>

                <div class="col-sm-3">
                    <input type="text" id="search" name="search" class="form-control" placeholder="Search product name">
                </div>
            </div>
            <!------------------ End Header ------------------>
            <!------------------------------------------------>


            <div class="clearfix"></div>

            <div class="col-sm-12">
                <div class="content">
                    <table class="table table-striped" id="myTable">
                        <?php 
              if ( isset($_GET['action'], $_GET['id']))
              {
                  $id= $_GET['id'] ;
                  switch($_GET['action'])
                  {           
                      case "delete":          
                                    
                          $sql = "delete from entityips
                                  where Id = :catid" ;
                          $stm = $connect->prepare($sql) ;
                          $stm->execute(array("catid"=>$id));
                          if ($stm->rowCount() == 1)
                              echo "<div class='alert-danger alert'> Deleted </div>" ;                     
                          break;
                          default:
                          echo "ERROR";
                  }
              }
          ?>
                        <thead>
                            <tr>
                                <th width="3%"><input type="checkbox" id="select-all"> </th>
                                <th width="5%">الرقم </th>
                                <th width="10%">اسم الجهاز </th>
                                <th width="10%"> (IP) </th>
                                <th width="10%">اسم المستخدم </th>
                                <th width="15%">كلمة المرور </th>
                                <th width="10%">تصنيف الجهاز </th>
                                <th width="20%">ملاحظات </th>
                                <th width="15%">عملية </th>
                            </tr>
                        </thead>

                        <!----------------- Body of Table ----------------->
                        <tbody>
                            <?php 
                $stm = $connect->prepare("select * from entityips") ; 
                $stm->execute();
                if ( $stm->rowCount())
                {
                    foreach( $stm as $row)
                    {     
                      $Id                = $row['Id'              ];
                      $EntityName        = $row['EntityName'      ];         
                      $IP                = $row['IP'              ];         
                      $UserName          = $row['UserName'        ];   
                      $Password          = $row['Password'        ];         
                      $Category          = $row['Category'        ]; 
                      $Description       = $row['Description'     ]; 
            ?>

                            <tr>
                                <td><input type="checkbox" name="select-cat"> </td>
                                <td><?php echo $Id;                ?></td>
                                <td><?php echo $EntityName;        ?></td>
                                <td><?php echo $IP;                ?></td>
                                <td><?php echo $UserName;          ?></td>
                                <td><?php echo $Password;          ?></td>
                                <td>
                                    <?php 
                      $stmCa = "select CategoryName from categoryips where Id = :catid" ; 
                      $stmCat = $connect->prepare($stmCa) ;
                          $stmCat->execute(array("catid"=>$Category));
                      if ( $stmCat->rowCount())
                      {
                          foreach($stmCat as $cat)
                          {
                            echo $cat['CategoryName'];
                          }    
                      }      
                  ?>
                                </td>
                                <td><?php echo $Description;       ?></td>
                                <td>
                                    <a href="editentity.php?action=edit&id=<?php echo $row['Id']; ?>"
                                        class='btn btn-success'>تعديل</a>
                                    <a href="?action=delete&id=<?php echo $row['Id']; ?>" class='btn btn-danger'
                                        id="delet">حذف</a>
                                </td>
                            </tr>
                            <?php }}  ?>
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
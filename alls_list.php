<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="wIDth=device-wIDth, initial-scale=1">
        <title>Project 6015261011</title>
        <!-- Bootstrap -->
        <link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="bootstrap/css/bootstrap-theme.css" rel="stylesheet" type="text/css">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="bootstrap/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include indivIDual files as needed -->
        <script src="bootstrap/js/bootstrap.min.js"></script>        
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="bootstrap/js/html5shiv.min.js"></script>
            <script src="bootstrap/js/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>        
        <div class="container">
            <div class="row"> 
                <div class="jumbotron" style="background-color: cornflowerblue;">
                    <?php include 'topbanner.php';?>
                </div>
            </div>
            <div class="row">
                <?php include 'menu.php';?>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <p>Login Area</p>
                </div>  
                <div class="col-sm-12 col-md-9 col-lg-9">
                    <h4>แสดงสเปคเครื่อง</h4>
                    <a href="alls_add.php" class="btn btn-link">เพิ่มข้อมูลสเปคเครื่อง</a>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>รหัส</th>
                                    <th>เลขเครื่อง</th>
                                    
                                    <th>ชื่อเครื่อง</th>
                                    <th>รุ่นที่</th>
                                    <th>ผลิตวันที่</th>
                                    <th>ราคา</th>
                                    <th>ระบบป้องกัน</th>
                                    <th>Ram</th>
                                    <th>HDD</th>
                                    <th>สีตัวเครื่อง</th>
                                    <th>อุปกรณ์ที่แถม</th>
                                    <th>ตัวเลือกเพิ่มเติม</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                    <?php
                        include 'connectdb.php';                        
                        $sql =  'SELECT * FROM view_detail_11 order by a_id';
                        $result = mysqli_query($conn,$sql);
                        while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                            echo '<tr>';
                            echo '<td>' . $row['a_id'] . '</td>';
                            echo '<td>' . $row['a_ids'] . '</td>';
                            echo '<td>' . $row['a_name'] . '</td>';
                            echo '<td>' . $row['a_gt'] . '</td>';
                            echo '<td>' . $row['a_date'] . '</td>';
                            echo '<td>' . $row['a_pirce'] . '</td>';
                            echo '<td>' . $row['a_secure'] . '</td>';
                            echo '<td>' . $row['a_ram'] . '</td>';
                            echo '<td>' . $row['a_hdd'] . '</td>';
                            echo '<td>' . $row['a_color'] . '</td>';
                            echo '<td>' . $row['gc_name'] . '</td>';
                            echo '<td>';
                            ?>
                                <a href="alls_edit.php?a_id=<?php echo $row['a_id'];?>" class="btn btn-warning">แก้ไข</a>
                                <a href="JavaScript:if(confirm('ยืนยันการลบ')==true)
                                   {window.location='alls_delete.php?a_id=<?php echo $row["a_id"];?>'}" class="btn btn-danger">ลบ</a>
                            <?php
                                    echo '</td>';                            
                            echo '</tr>';
                        }
                        mysqli_free_result($result);
                        echo '</table>';
                        mysqli_close($conn);
                    ?>
                            </tbody>
                        </table>    
                </div>    
            </div>
            <div class="row">
                <address>คณะคอมพิวเตอร์ศึกษาปี 2 </address>
            </div>
        </div>    
    </body>
</html>
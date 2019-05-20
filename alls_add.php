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
                    <h4>เพิ่มข้อมูลสเปคเครื่อง</h4>
                    <?php
                        if(isset($_GET['submit'])){
                            $a_gc_id = $_GET['a_gc_id'];
                            $a_id = $_GET['a_id'];
                            $a_sid = $_GET['a_sid'];
                            $a_name = $_GET['a_name'];
                            $a_gt = $_GET['a_gt'];
                            $a_date = $_GET['a_date'];
                            $a_pirce = $_GET['a_pirce'];
                            $a_secure = $_GET['a_secure'];
                            $a_ram = $_GET['a_ram'];
                            $a_hdd = $_GET['a_hdd'];
                            $a_color = $_GET['a_color'];
                            $sql = "insert into alls";
                            $sql .= " values (null ,'$a_id','$a_sid','$a_name','$a_gc_id','$a_gt','$a_date','$a_pirce','$a_secure','$a_ram','$a_hdd','$a_color',)";
                            include 'connectdb.php';
                            mysqli_query($conn,$sql);
                            mysqli_close($conn);
                            echo "เพิ่มสเปคเครื่อง  $a_id $a_sid $a_name $a_gc_id $a_gt $a_date $a_pirce $a_secure $a_ram $a_hdd $a_color เรียบร้อยแล้ว<br>";
                            echo '<a href="alls_list.php">แสดงรายชื่อสเปคเครื่องทั้งหมด</a>';
                        }else{
                    ?>
                    <form class="form-horizontal" role="form" name="alls_add" action="<?php echo $_SERVER['PHP_SELF'];?>">
                        <div class="form-group">
                            <label for="a_id" class="col-md-2 col-lg-2 control-label">รหัส</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="a_id" ID="a_id" class="form-control">
                            </div>    
                        </div>    
                        <div class="form-group">
                            <label for="a_sid" class="col-md-2 col-lg-2 control-label">เลขเครื่อง</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="a_sid" ID="a_sid" class="form-control">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="a_name" class="col-md-2 col-lg-2 control-label">ชื่อเครื่อง</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="a_name" ID="a_name" class="form-control">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="a_gt" class="col-md-2 col-lg-2 control-label">รุ่นที่</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="a_gt" ID="a_gt" class="form-control">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="a_date" class="col-md-2 col-lg-2 control-label">วันที่ผลิต</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="a_date" ID="a_date" class="form-control">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="a_pirce" class="col-md-2 col-lg-2 control-label">ราคา</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="a_pirce" ID="a_pirce" class="form-control">
                            </div>    
                        </div> 
                        <div class="form-group">
                            <label for="a_secure" class="col-md-2 col-lg-2 control-label">ระบบป้องกัน</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="a_secure" ID="a_secure" class="form-control">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="a_ram" class="col-md-2 col-lg-2 control-label">RAM</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="a_ram" ID="a_ram" class="form-control">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="a_hdd" class="col-md-2 col-lg-2 control-label">HDD</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="a_hdd" ID="a_hdd" class="form-control">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="a_color" class="col-md-2 col-lg-2 control-label">สีตัวเครื่อง</label>
                            <div class="col-md-10 col-lg-10">
                                <input type="text" name="a_color" ID="a_color" class="form-control">
                            </div>    
                        </div>
                        <div class="form-group">
                            <label for="a_gc_id" class="col-md-2 col-lg-2 control-label">อุปกรณ์เสริม</label>
                            <div class="col-md-10 col-lg-10">
                                <select name="a_gc_id" ID="a_gc_id" class="form-control">
                                <?php
                                    include 'connectdb.php';
                                    $sql =  'SELECT * FROM game order by gc_id';
                                    $result = mysqli_query($conn,$sql);
                                    while (($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) != NULL) {
                                        echo '<option value=';
                                        echo '"' . $row['gc_id'] . '">';
                                        echo $row['gc_name'];
                                        echo '</option>';
                                    }
                                    mysqli_free_result($result);
                                    echo '</table>';
                                    mysqli_close($conn);
                                ?>
                                </select>
                           </div>    
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-lg-10">
                                <input type="submit" name="submit" value="ตกลง" class="btn btn-default">
                            </div>    
                        </div> 
                    </form>
                    <?php
                        }
                    ?>
                </div>    
            </div>
            <div class="row">
                <address>คณะคอมพิวเตอร์ศึกษาปี 2 </address>
            </div>
        </div>    
    </body>
</html>
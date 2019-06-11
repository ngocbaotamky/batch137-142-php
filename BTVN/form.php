<!DOCTYPE html>
<html>
    <head>
        <title>Form Register</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <style>
            body {  
                     padding-top: 0px;
                 }
            .form-control { 
                     margin-bottom: 10px;
                 }
            .login-screen-bg {  
                     background-color: #EFEFEF;
                 }
        </style>
    </head>
    <body>
    <?php
    $hostName = 'localhost';
    $userName = 'root';
    $passWord = '';
    $databaseName = 'session3';
    $connect = mysqli_connect($hostName, $userName, $passWord, $databaseName);
    if (!$connect) {
    exit('Kết nối không thành công!');
    }
    echo 'Kết nối thành công!';
    ?>
    
    <div class="container"> 
 <h1 class="text-center">REGISTER</h1> 
 <div class="row"> 
  <div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-offset-4"> 
   <legend><a href=""><i class="glyphicon glyphicon-globe"></i></a> Đăng ký thành viên!
   </legend> 
   <form action="" method="post" class="form" role="form"> 
    <div class="row"> 
     <div class="col-xs-6 col-md-6"> <input class="form-control" name="firstname" placeholder="Họ" required="" autofocus="" type="text"> 
     </div> 
     <div class="col-xs-6 col-md-6"> <input class="form-control" name="lastname" placeholder="Tên" required="" type="text"> 
     </div> 
    </div> <input class="form-control" name="youremail" placeholder="Email" type="email"> <input class="form-control" name="password" placeholder="Mật khẩu" type="password"> <input class="form-control" name="retypepassword" placeholder="Nhập lại mật khẩu" type="password"> <label for=""> Ngày sinh</label> 
    <div class="row"> 
     <div class="col-xs-4 col-md-4"> <select class="form-control">              <option value="Day">Ngày</option>            </select> 
     </div> 
     <div class="col-xs-4 col-md-4"> <select class="form-control">              <option value="Month">Tháng</option>            </select> 
     </div> 
     <div class="col-xs-4 col-md-4"> <select class="form-control">              <option value="Year">Năm</option>            </select> 
     </div> 
    </div> <label class="radio-inline">          <input name="sex" id="inlineCheckbox1" value="male" type="radio">          Nam </label> <label class="radio-inline">          <input name="sex" id="inlineCheckbox2" value="female" type="radio">          Nữ </label> 
    <br> 
    <br> 
    <button class="btn btn-lg btn-primary btn-block" type="submit"> Đăng ký</button> 
   </form> 
  </div> 
 </div>
</div>
    </body>
</html>

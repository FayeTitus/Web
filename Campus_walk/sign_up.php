<?php
$status = $_GET['status'];
?>

<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>SUMSC-编程之美校园行报名</title>

<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="./css/theme.css">
<link rel="stylesheet" href="./css/style.css">
<link rel="stylesheet" href="./css/font-awesome.css">

</head>

<body>

<div id="head">
    <div class="container" >
        <div class="row" style="margin-top:20px;">
            <div class="col-sm-3" >
                <img src="./img/LOGO.png" style="width:90px;float:right;margin-top:20px;">
            </div>
            <div class="col-sm-7" style="color:white;">
                <h1>苏州大学微软学生俱乐部</h1>
                <h2> Soochow University Microsoft Students Club</h2>
            </div>
        </div>
    </div>
</div>
<?php if($status == "") { ?>
<div class="container"  style="margin-top:50px">
<div class="row">
	<div class="col-sm-2"></div>
	<div class="col-sm-8">
		<div class="panel panel-default">
            <div class="panel-heading">
                <img src="./img/BOP_logo.png" width="200px;"/> <h1 style="display:inline;float:right;margin-top:30px;">拥抱智能 | 对话未来</h1></div>
			<div class="panel-body"> 暨 微软编程之美2017启动仪式报名表
				<form role="form" method="POST" action="sign_submit.php">
					<div class="form-group">
						<label>姓名</label>
						<input type="name" placeholder="" class="form-control" name="name">
					</div>
					<div class="form-group">
						<label>院系</label>
						<input type="" placeholder="" class="form-control" name="college">
					</div>
					<div class="form-group">
						<label>年级</label>
						<input type="" placeholder="" class="form-control" name="grade">
					</div>
					<div class="form-group">
						<label>电话</label>
						<input type="TEL" placeholder="" class="form-control" name="telphone">
					</div>
					<div class="form-group">
						<label>邮箱</label>
						<input type="email" placeholder="" class="form-control" name="email">
					</div>
					<button type="submit" class="btn btn-sm btn-default">Submit</button>
				</form>
			</div>
		</div>
	</div>
	<div class="col-sm-2"></div>
</div>
</div>
<?php } 
else {
?>
<div class="container" style="margin-top:40px;">
    <div class="smart-body">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">
                <button class="btn btn-block btn-lg btn-success btn-icon"><h2>Success<i class="fa fa-check-square-o"></i></h2></button>
            </div>
            <div class="col-sm-4"></div>
        </div>  
    </div>
</div>
<div class="container" style="margin-top:20px;">
    <div class="row">
            <img src="./img/background_SUDA.png" style="width:100%">
    </div>
</div>

<?php } ?>


</body>



</html>

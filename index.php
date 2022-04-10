<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
	<script type="text/javascript">
	$(document).ready(function(){
	$("#course").change(function(){
		var course_id=$(this).val();
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{course_ID:course_id},
			success:function(data){
				$("#language").html(data);
			}
		});
		
	});	
	});
	
	</script>
</head>
<body class="bg-info">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-lg-6 bg-light mt-5 p-4 rounded">
            <h5 class="text-center text-info pb-3">القوائم المضمنة </h5>
            <form action="" method="POST">
            <div class="form-group">
         <select name="course" class="form-control form-control-lg" id="course">
         <option value="" disabled selected>select course</option>
           <?php
           require_once 'config.php';
           $sql="SELECT * FROM course ORDER BY c_name";
           $result=mysqli_query($conn,$sql);
           while($row=mysqli_fetch_array($result)){
          ?>
          <option value="<?= $row['id']; ?>"><?= $row['c_name']; ?></option>
          <?php } ?>
    </select>
</div>
<div class="form-group">
    <select name="language" class="form-control form-control-lg" id="language">
        <option value="" disabled selected>-select language</option>
        
    </select>
</div>
<div class="form-group">
    <input type="submit" name="submit" value="SUBMIT" class="btn btn-danger btn-block btn-lg">
</div>
            </form>
        </div>
    </div>
</div>
</div>
    
</body>
</html>
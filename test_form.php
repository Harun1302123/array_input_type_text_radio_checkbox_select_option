<?php //php syntax here
    require_once 'admin-panel/src/model.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<style type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></style>
</head>
<body>
	<div class="col-md-6" style="display: block; margin: 0 auto;">
		<h1 class="text-center">Input Your Survey Data</h1>
		<form method="post">
			<div class="form-group">
				<label>Your Name</label>
				<input type="text" name="text_value[your_name]" class="form-control">
			</div>
			<div class="form-group">
				<label>Your Gender</label>
				<div class="radio">
					<label><input type="radio" name="radio_value[your_gender]" checked value="male"> Male</label>
				</div>
				<div class="radio">
					<label><input type="radio" name="radio_value[your_gender]" value="female"> Female</label>
				</div>
				<div class="radio">
					<label><input type="radio" name="radio_value[your_gender]" value="others"> Others</label>
				</div>
			</div>
			<div class="form-group">
				<label>Corona Identity</label>
				<select name="select_value[corona_identity]" class="form-control">
				    <option value="positive"> Positive</option>
				    <option value="negative"> Negative</option>
		  		</select>
			</div>
			<div class="form-group">
				<label>Hobies</label>
				<div class="checkbox">
				  <label><input type="checkbox" name="checkbox_value[checkbox_question][]" value="Option1"> Option 1</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" name="checkbox_value[checkbox_question][]" value="Option2"> Option 2</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" name="checkbox_value[checkbox_question][]" value="Option3"> Option 3</label>
				</div>
			</div>
			<div class="form-group">
				<input type="submit" name="save" class="btn btn-primary form-control" value="Save" />
			</div>
		</form>
	</div>
	
</body>
</html>


<?php 
	$info = '';
  if(isset($_POST['save'])) {
     $text_value = $_POST['text_value'];
     $radio_value = $_POST['radio_value'];
     $select_value = $_POST['select_value'];
     $checkbox_value = $_POST['checkbox_value'];

     $array = array($text_value, $radio_value, $select_value, $checkbox_value);
     $info = serialize($array);

     echo $info;
     //$checkbox_value = implode(", ", $_POST['checkbox_value']);
  	 //$info = "asdfas";
     $insert = $Test->insert_survey_info($info);
	 //print_r( "<h3 class='col-md-6' style='display: block; margin: 0, auto;'>".$text_value."<br/>".$radio_value."<br/>".$select_value."<br/>".$checkbox_value."</h3>" );     
     //echo "<script>alert('Success');</script>";
     //header("Location: index.php?page=Cash_adjust");
     //echo "<script>window.location.href = window.location.href;</script>";
     //$session->set_message("data inserted successfully.");
  }
?>

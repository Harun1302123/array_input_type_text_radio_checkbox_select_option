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
	<table class="table table-bordered">
		<thead>
			<tr>
				<td>ID</td>
				<td>Survay</td>
			</tr>
		</thead>
		<tbody>
			<?php $records = $Test->fetch_all_survey_info(); foreach($records as $record){ $data = $record->info; $unserialized_data = unserialize($data);  ?>
			<tr>
				<td><?php echo $record->id; ?></td>
				<td>
					<?php $sl=0; foreach ($unserialized_data as $obset => $question) {$sl++;
						
						foreach ($question as $key => $value) {
			
						if (is_array($value)) {
							echo $sl.". ".$key."<br/>";
							for ($int=0; $int < count($value); $int++) { 
								echo "&nbsp; &nbsp;&nbsp; &nbsp;".$value[$int].",";
							}
							//echo "this is array";
						}else{
							echo $sl.". ".$key."<br/> &nbsp; &nbsp;&nbsp; &nbsp;".$value."<br/>";
						}
					}} ?>
				</td>
			</tr>
			<?php } ?>
		</tbody>
		

	</table>
</body>
</html>


<?php
include('dbconnection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Add dynamic</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h1 class="text-primary text-center">Add Your Skills</h1>
		<hr>
		<form name="add_name" id="add_name" method="post">
            <table class="table table-bordered table-hover" id="dynamic_field">
              <tr>
                <td><input type="text" name="skills[]" placeholder="Add Your Skills" class="form-control" /></td>
                <td><button type="button" name="add" id="add" class="btn btn-primary">Add More</button></td>  
              </tr>
            </table>
            <input type="submit" class="btn btn-success" name="submit" id="submit" value="Submit">
          </form>
	</div>
<script>
$(document).ready(function()
{
	var i = 1;

    $("#add").click(function(){
      i++;
      $('#dynamic_field').append('<tr id="row'+i+'"><td><input type="text" name="skills[]" placeholder="Add Your Skills" class="form-control"/></td>');  
    });
});

</script>

</body>
</html>

<?php
if(isset($_POST['submit']))
{
	$skills_count = count($_POST['skills']);

	if($skills_count > 0)
	{
		for($i=0;$i<$skills_count;$i++)
		{
			$skills[$i] = $_POST['skills'][$i];

					
		}
		$data = serialize($skills);
			$query = mysqli_query($con,"INSERT INTO `dynamic_skills`(`Skills`) VALUES ('$data')");
		echo "<script>alert('Data Insert Successfully');</script>";
		?>
		<div class="container">
			<table class="table table-striped">
				<thead>
					<th>Your Skills</th>
				</thead>
				<tbody>
					
					<?php
						$result = mysqli_query($con,'SELECT * FROM `dynamic_skills` ');
						
						while($row = mysqli_fetch_array($result))
						{
							$skills = $row['Skills'];
							$data = unserialize($skills);
							$fetch_data = implode(',', $data);

					?>
					<tr>
						<td><?php echo $fetch_data;?></td>
					</tr>
					<?php
					}
					?>

				</tbody>
			</table>
		</div>
		<?php	
	}

	else
	{
		echo "<script>alert('Something Went Wrong');</script>";
	}



}
?>
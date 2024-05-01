<?php
require_once 'dbh.inc.php';


$id = $_GET['id'];

$query = "DELETE FROM contestant WHERE id='$id'";
$data=mysqli_query($conn,$query);
if($data){

	?>
	
   <script type="text/javascript">
	alert("Date Deleted Successfully");
	
	</script>

	<?php
	header("Location: ../allContestants.php?error=none");
}
else{
	?>
	<script type = "text/javascript">
		alert("Please try again");
		</script>
		<?php
}
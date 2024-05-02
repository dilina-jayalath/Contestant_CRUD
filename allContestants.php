


<link rel="stylesheet" href="style/AllContest.css">
<title>CONTESTANTS DETAILS</title>
</head>
<body>
<?php



  require_once 'includes/dbh.inc.php';
  
  if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM contestant  ";
  $result = $conn->query($sql);

 


?>

  <h1>CONTESTANTS  Details</h1>
  
  <a href='addContestants.php'><button class='approve-btn'  > Add New Contestants</button></a>
	  
  <a href='contestantsTable.php'><button class='approve-btn'  > EDIT Contestants</button></a>
	
  <div class = frames >
      <?php 
           if ($result->num_rows > 0) 
           { 
            while ($data = $result->fetch_assoc()) {
              echo "<div class = l1 >";
              echo "<div class = text>";
              echo "<p> Week No: ". $data['week'] ." </p>";
              echo "</div>";
              echo "<img src ='uploads/". $data['image'] ."'  width ='400px' hight = '800px'>";
                  echo "<div class='intro'> ";
                  echo "<span>See more details</span>";
                  echo "<p> Age:  ". $data['age'] ." </p>";
                  echo "<p> Song Name:  ". $data['sName'] ." </p>";
                  echo "<p> Description:  ". $data['sDescription'] ." </p>";
                  echo "<p> Song By:  ". $data['songBy'] ." </p>";
                  echo "<p> Genres:  ". $data['genres'] ." </p>";
                  echo "<p> Released:  ". $data['released'] ." </p>";
                  echo "<a href='#'><button class='reject-btn' >Watch Live</button></a>&nbsp;&nbsp;<a href='#'><button class='approve-btn' '>Vote</button></a>";
                  echo "</div>";
              echo "<div class = data>";
              echo "<span > Name: ". $data['name'] ."</span>";
              echo "<p> Age:  ". $data['age'] ." </p>";
              echo "<p> Region:  ". $data['region'] ." </p>";
              echo "</div>";
           echo "</div>";
            }
           }
      

?>
</div>
   








<link rel="stylesheet" href="style/contestantsTable.css">
<title>LAND DETAILS</title>
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

  <h1>CONTESTANTS  DETAILS</h1>
  
  <table class="table">
    <thead>
      <tr>
        <th>Week No</th>
        <th>name</th>
        <th>Age</th>
        <th>Region</th>
        <th>image</th>
        <th>Song Name</th>
        <th>Song By</th>
        <th>Description</th>
        <th>Genres</th>
        <th>Released</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php 
           if ($result->num_rows > 0) 
           {

           while ($data = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td><center>" . $data['week'] . "</center></td>";
            echo "<td><center>" . $data["name"] . "</center></td>";
            echo "<td><center>" . $data["age"] . "</center></td>";
            echo "<td><center>" . $data["region"] . "</center></td>";
            echo "<td><center><img src ='uploads/". $data['image'] ."'  width ='100px' hight = '100px'></center></td>";
            echo "<td><center>" . $data["sName"] . "</center></td>";
            echo "<td><center>" . $data["songBy"] . "</center></td>";
            echo "<td><center>" . $data["sDescription"] . "</center></td>";
            echo "<td><center>" . $data["genres"] . "</center></td>";
            echo "<td><center>" . $data["released"] . "</center></td>";
            echo "<td><center><a href='editContestants.php?id=".$data["id"]."'><button class='reject-btn' >Update</button></a>&nbsp;&nbsp;<a href='includes/deleteContestantsinc.inc.php?id=".$data["id"]."'><button class='approve-btn' onclick='confirmDelete()'>Delete</button></a></center></td>";
            echo "</tr>";
            }
           }
           $data = $result->fetch_assoc();

          
           
           ?>
      
    </tbody>
  </table>
  </form>
  <script>
  function confirmDelete() {
    if (confirm("Do you want to delete?")) {

      document.forms[0].submit();
    } else {
      document.forms[1].submit();
    }
  }
</script>




<link rel="stylesheet" href="style\addContestants.css">

<title>Edit Contestants</title>

</head>
<body>

<?php

// Check if the seller details are available in the session

  
    require_once 'includes/dbh.inc.php';

    $id = $_GET["id"];
    $sql = "SELECT * FROM contestant  WHERE id = $id ";
    $result = $conn->query($sql);

    $data = $result->fetch_assoc();





?>

<div class="container">
      <h1>UPDATE CONTESTANTS DETAILS</h1>

      <form action="includes/editContestantsinc.inc.php?id=<?=$data["id"]?>" method="POST" enctype="multipart/form-data">
       <div class="form first">
          <div class="details personal">
            <span class="title"><b>Contact Information</b></span>
           
            <div class="fields">
              <div class="input-field">
                <label>Full Name</label>
                <input type="text" name="name" value="<?php echo $data["name"]  ?>" required>
              </div>

              <div class="input-field">
                <label>Age</label>
                <input type="Number" name="age" value="<?php echo $data["age"]  ?>" required>
              </div>

              <div class="input-field">
                <label>Region</label>
                <input type="text" name="region" value="<?php echo $data["region"]  ?>" required>
              </div>    
              <div class="input-field">
    <label>Current Image</label><br>
    <?php 
    if (!empty($data["image"])) {
        echo '<img src=" uploads/'.$data["image"] . '" alt="Current Image" style="max-width: 100px;">';
    } else {
        echo 'No image available';
    }
    ?>
</div>

<div class="input-field">
    <label>Upload New Image</label>
    <input type="file" name="image">
</div>
       
            
            </div>
          </div>
          <br>
          <br>
          <br>
          <div class="details personal">
            <span class="title"><b>Song Information</b></span>

            <div class="fields">

            <div class="input-field "style ="width:100%;">

            <label>Week No</label>
            <input type="number" name="week" value="<?php echo $data["week"]  ?>" required>
            </div>

              <div class="input-field "style ="width:100%;">

                <label>Song Name</label>
                <input type="text" name="sName" value="<?php echo $data["sName"]  ?>" required>
              </div>

              <div class="input-field"style ="width:100%;">
                <label>Song Description</label>
                <textarea id="address"  name="sDescription" rows="4"   required><?php echo $data["sDescription"]  ?></textarea>
              </div>

              <div class="input-field">
                <label>Song by</label>
                <input type="text" name="songBy" value="<?php echo $data["songBy"]  ?>" required>
              </div>

              <div class="input-field">
                <label>Genres</label>
                <input type="text" name="genres" value="<?php echo $data["genres"]  ?>" required>
              </div>

              <div class="input-field">
                <label>Released</label>
                <input type="date" name="released" value="<?php echo $data["released"]  ?>" required>
              </div>    

            </div>
          </div>

        </div>
        <div class="submit">
        <button name="update" type="submit">Update now</button>
      </div>
      </form>
    </div>




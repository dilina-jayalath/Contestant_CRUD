


<link rel="stylesheet" href="style\addContestants.css">

<title>Add Contestants</title>

</head>
<body>


  <div class="container">
      <h1 >ADD CONTESTANTS</h1>

      <form action="includes/addContestantsinc.inc.php?" method="POST" enctype="multipart/form-data">
        <div class="form first">
          <div class="details personal">
            <span class="title"><b>Contact Information</b></span>

            <div class="fields">
              <div class="input-field">
                <label>Full Name</label>
                <input type="text" name="name" placeholder="Enter Full name" required>
              </div>

              <div class="input-field">
                <label>Age</label>
                <input type="Number" name="age" placeholder="Enter Age" required>
              </div>

              <div class="input-field">
                <label>Region</label>
                <input type="text" name="region" placeholder="Enter Region" required>
              </div>    
              <div class="input-field" >
                <label>Add images</label>
                <input type="file" name="image"  required>
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
            <input type="number" name="week" placeholder="Enter Week Number" required>
            </div>

              <div class="input-field "style ="width:100%;">

                <label>Song Name</label>
                <input type="text" name="sName" placeholder="Song Name" required>
              </div>

              <div class="input-field"style ="width:100%;">
                <label>Song Description</label>
                <textarea id="address" placeholder="Description" name="sDescription" rows="4" required></textarea>
              </div>

              <div class="input-field">
                <label>Song by</label>
                <input type="text" name="songBy" placeholder="Song by..." required>
              </div>

              <div class="input-field">
                <label>Genres</label>
                <input type="text" name="genres" placeholder="Genres" required>
              </div>

              <div class="input-field">
                <label>Released</label>
                <input type="date" name="released" placeholder="Released" required>
              </div>    

            </div>
          </div>

        </div>
        <div class="submit">
        <button name="submit" type="submit">Sumbit now</button>
      </div>
      </form>
    </div>

    
       


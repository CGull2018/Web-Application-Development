<!DOCTYPE html>
<html lang="en">
<head>
  <title>My List Filter 3 </title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<!--Wireframe outline-->
<body>
  <style>
  .container {
    width: auto;
    height: auto;
    padding: 20px;
    border: 2px solid orange;
    text-align: center;
  }
  </style>

<!--Header-->
<div class="container">
<div class="row">
<div class="col-lg-8 col-sm-6">
  <h1> Page Header "My List" website </h1>
  <h2> Where Organization Meets Technology! </h2>

</div>
<!-- Insert Logo-->
  <div class="col-lg-4 col-sm-6">
    <img src="logo-placeholder.png">
  </div>

</div>
</div>


<!--Navigation Bar-->
<nav class="container">
<div class="row">
<div class="col-lg-8 col-sm-8">
<h1> Navigation <h1>
</div>
<nav class="btn-toolbar" role="toolbar">
<a href="index.html" class="col-lg-1 col-sm-1 btn btn-primary" role = "button">Home</a>
<a href="mod4_AboutUs.HTML" class="col-lg-1 col-sm-1 btn btn-primary" role = "button">About Us</a>
<a href="mod4_Help.HTML" class="col-lg-1 col-sm-1 btn btn-primary" role = "button">Help</a>
</nav>
</div>

<!--navigation buttons-->
<div class="container">
<div class="NavButtons">
<div class="row">

  <nav class="btn-toolbar" role="toolbar">
    <a href="mod4_Ref1.php" class="col-lg-2 col-sm-1 btn btn-primary" role = "button">Department 1</a>
    <a href="mod4_Ref2.PHP" class="col-lg-2 col-sm-1 btn btn-primary" role = "button">Department 2</a>
    <a href="mod4_Ref3.PHP" class="col-lg-2 col-sm-1 btn btn-primary" role = "button">Department 3</a>
    <a href="mod4_Ref4.PHP" class="col-lg-2 col-sm-1 btn btn-primary" role = "button">Department 4</a>
  </nav>
</div>
</div>
</div>
</nav>


<!--Website data content update-->
<div class="container">
  <div class="row">
    <div class="DataInput col-lg-8 col-sm-8">
      <p> This section returns data from the myList table of the inventory database.</p>

      <?php
      include 'mod3_config.php';
      include 'mod3_opendb.php';

      $sql= "SELECT ItemName, ItemCost FROM mylist";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "ItemName: " . $row["ItemName"]. "<br>";
            echo "ItemCost:" . $row["ItemCost"]. "<br>";
        }
      } else {
        echo "0 results";
      }

      mysqli_close($conn);

      ?>
    </div>
    <div class="col-lg-4 col-sm-4" >
      <h1> List Filters </h1>
      <p style="border ">After completing the new filter, a new Nav button will return back to the original MYList page. <br>
                         Or other Navigation is possible to other pages. </p>
      <!--Filter buttons-->
      <div class="container">
      <div class="FilterButtons">
      <div class="row">

        <nav class="Filter-toolbar" role="toolbar">
          <a href="mod3_CourseProject.PHP" class="col-lg-2 col-sm-1 btn btn-primary" role = "button">My List</a>
        </nav>
      </div>
      </div>
      </div>
      </div>


     <!--Image-->
     <div class="container">
       <div class="row">
         <div class="BlankSpace col-lg-8 col-sm-6"></div>
           <div class="col-lg-4 col-sm-6" >
           <img src="logo-placeholder.png">
          </div>
       </div>
     </div>

  </div>
</div>


<!--Footer-->
<div class="container">
  <div class="row">
    <div class="Footer col-lg-6 col-sm-6 ">
      <h1>Filter by ItemName and ItemCost</h1>
    </div>
      <div class="col-lg-6 col-sm-6" >
         <h1>Filter Page 3</h1>
       </div>
  </div>
</div>

</body>
</html>

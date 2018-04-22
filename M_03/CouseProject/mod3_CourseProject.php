<!DOCTYPE html>
<html lang="en">
<head>
  <title>My List </title>
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
</div>

<!--navigation buttons-->
<div class="container">
<div class="NavButtons">
<div class="row">

  <nav class="btn-toolbar" role="toolbar" aria-label="Basic example">
    <button type="button" class="col-lg-2 col-sm-1 nav-linkbtn btn-secondary">Link 1</button>
    <button type="button" class="col-lg-2 col-sm-1 nav-linkbtn btn-secondary">link 2</button>
    <button type="button" class="col-lg-2 col-sm-1 nav-linkbtn btn-secondary">Link 3</button>
    <button type="button" class="col-lg-2 col-sm-1 nav-linkbtn btn-secondary">Link 4</button>

  <div class="HelpButtons">

      <a class="col-lg-1 col-sm-1 nav-link" href="index.html">Home </a>
      <a class="col-lg-1 col-sm-1 nav-link" href="#">About </a>
      <a class="col-lg-1 col-sm-1 nav-link" href="#">Help </a>
    </nav>
</div>

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

      $sql= "SELECT ItemName , ItemBrand, ItemExperation FROM mylist LIMIT 15";
      $result = mysqli_query($conn, $sql);

      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "ItemName: " . $row["ItemName"]. "<br>";
            echo "ItemBrand: " . $row["ItemBrand"]. "<br>";
            echo "ItemExperation: " . $row["ItemExperation"]. "<br><hr>";
        }
      } else {
        echo "0 results";
      }

      mysqli_close($conn);

      ?>
    </div>
    <div class="col-lg-4 col-sm-4" >
      <h1> List Filters </h1>
      <p style="border ">Using the Bootstrap grid style for future filter links. <br>
                         Each link will direct to a new PHP page running a different MySQL Query. </p>
      <!--Filter buttons-->
      <div class="container">
      <div class="FilterButtons">
      <div class="row">

        <nav class="btn-toolbar" role="toolbar" aria-label="Basic example">
          <button type="button" class="col-lg-2 col-sm-1 nav-linkbtn btn-secondary">Filter 1</button>
          <button type="button" class="col-lg-2 col-sm-1 nav-linkbtn btn-secondary">Filter 2</button>
          <button type="button" class="col-lg-2 col-sm-1 nav-linkbtn btn-secondary">Filter 3</button>
          <button type="button" class="col-lg-2 col-sm-1 nav-linkbtn btn-secondary">Filter 4</button>
          <button type="button" class="col-lg-2 col-sm-1 nav-linkbtn btn-secondary">Filter 5</button>
          <button type="button" class="col-lg-2 col-sm-1 nav-linkbtn btn-secondary">Filter 6</button>
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
      <h1>Page Footer</h1>
    </div>
      <div class="col-lg-6 col-sm-6" >
         <h1>Home Page</h1>
       </div>
  </div>
</div>

</body>
</html>

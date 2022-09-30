<?php
include 'connection.php';
$ob = new sample();
if (isset($_POST['save'])) {
  $search = trim($_POST['search']);
  $rows = $ob->search($search);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Search Bar</title>
  <link href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body style="background-color: black;color: white">
  <nav>
    <div class="logo-area">
      <div class="tooltip">
      </div>

      <img src="img/google.png" style="width: 100px; height: 30px;" />
    </div>
    <form method="post" action="search.php">
      <div class="search-area">
        <div class="tooltip">
          <span class="material-icons-outlined hover">search</span>
          <span class="tooltip-text">search</span>
        </div>
        <input type="text" name="search" />
        <input type="submit" name="save" value="Search" class="hovers" style="width: 100px;">
      </div>
    </form>
    <div class="profile-actions-area">
      <div class="tooltip">
        <span class="material-icons-outlined hover">settings</span>
        <span class="tooltip-text">Settings</span>
      </div>
      <div class="tooltip">
        <span class="material-icons-outlined hover">apps</span>
        <span class="tooltip-text">Apps</span>
      </div>
      <div class="tooltip">
        <span class="material-icons-outlined hover">account_circle</span>
        <span class="tooltip-text">Account</span>
      </div>
    </div>
  </nav>
  <div>
    <div>
      <?php
      if (is_array($rows) || is_object($rows)) {
        foreach ($rows as $row) {

      ?>
          <div style="border:none">
            <div>
              <h6 style="color:blue;color: olive;
                  font-family: verdana;
                  font-size: 250%;
"><?php echo $row['title']; ?></h5>
                <p style="font-family: courier;
  font-size: 160%;"><?php echo $row['text']; ?></p>
                <br />
                <br />
                <br />
                <br />
            </div>
          </div>
      <?php
        }
      }
      ?>
    </div>

  </div>
  <!-- <button onclick="myFunction()">Dark Mode</button>

              <script>
                function myFunction() {
                 var element = document.body;
                 element.classList.toggle("dark-mode");
               }
             </script> -->
</body>

</html>
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="a5css.css"> 
</head>

<body>
  <header>
    <p>
    <a href= "">
    <img src="google-images.png"  style="width:250;height:100px;">
    </a>
</p>

      <input type="search" id="search" style="width:400px; height:20px"> 
      <button type="button" >Search </button>
    <pre>All  <strong>Images</strong>   Videos   Maps   News   More              <a href="">Advanced Search</a></pre>
      <hr>


     

    </header>  

    <?php
   require_once('./db_connection.php'); 
   $stmt= "SELECT pic FROM cats";
   $z = $GLOBALS['dbconn']->query($stmt);
   if($z && $z->num_rows>0){
     
   
   
    echo "<ul>";
    while ($row = $z ->fetch_array()) {
      echo '<li><img src="data:image/jpeg;base64,'.base64_encode($row['pic'] ).'" height="300" width="300" class="img-thumnail" /></li>';
     
    }
    echo "</ul>";
    }
 ?>

</body>

</html>
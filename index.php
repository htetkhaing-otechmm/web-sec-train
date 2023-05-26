<?php
  if (!isset($_GET["name"])) {
    header("Location: /?name=hacker");
    die();
  }
  require "header.php";
?>

<div class="row">
  <div class="col-lg-12">
    <h1>C1</h1>
  <h1>
<?php 

//  $str="echo \"Hello ".$_GET['name']."!!!\";";

//   eval($str);

  $str="Hello ".htmlspecialchars($_GET['name'])."!!!";

  echo $str;
?>
</h1>
      <p>The objective of this exercise is improve your code. </p>
  </div>
</div>



<?php


  require "footer.php";
?>
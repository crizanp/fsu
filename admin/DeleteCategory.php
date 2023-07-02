<? ob_start(); ?>
<?php
require_once("includes/Db.php");
require_once("includes/Functions.php");
require_once("includes/Sessions.php");
require_once("includes/DateTime.php");
if (isset($_GET["id"])) {
  $SearchQueryParameter = $_GET["id"];
  global $ConnectingDb;
  $sql = "DELETE FROM category WHERE id='$SearchQueryParameter'";
  $Execute = $ConnectingDb->query($sql);
  if ($Execute) {
    $_SESSION["SuccessMessage"] = "Category Deleted Successfully";
    Redirect_to("categories.php");
  } else {
    $_SESSION["ErrorMessage"] = "Oops cant delete category";
    Redirect_to("categories.php");
  }
}
?>
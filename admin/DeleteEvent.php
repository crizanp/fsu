<? ob_start(); ?>
<?php
require_once("includes/Db.php");
require_once("includes/Functions.php");
require_once("includes/Sessions.php");
require_once("includes/DateTime.php");
ConfirmLogin();
$PostIdFromURL = $_GET["id"];
if (!isset($PostIdFromURL)) {
  $_SESSION["ErrorMessage"] = "Bad Request!!";
  Redirect_to("dashboard.php");

}
$SearchQueryParameter = $_GET['id'];
global $ConnectingDb;
$sql = "SELECT * FROM event_post WHERE id=$SearchQueryParameter";
$stmt = $ConnectingDb->query($sql);
while ($DataRows = $stmt->fetch()) {
  $TitleToBeUpdated = $DataRows['title'];
  $PostToBeUpdated = $DataRows['description'];
  $Location = $DataRows['location'];
  $Time = $DataRows['time'];
  $Date = $DataRows['date'];

}
if (isset($_POST["submit"])) {
  // delete query
  global $ConnectingDb;
  $sql = "DELETE FROM event_post WHERE id ='$SearchQueryParameter'";
  $Execute = $ConnectingDb->query($sql);
  if ($Execute) {
    $_SESSION["SuccessMessage"] = "Event-Post Deleted Successfully ";
    Redirect_to("dashboard.php?id=$SearchQueryParameter");
  } else {
    $_SESSION["ErrorMessage"] = "Something Went Wrong";
    Redirect_to("dashboard.php?id=$SearchQueryParameter");

  }

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <!-- Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Local CSS -->
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css"
    integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous" />
  <title>Admin Panel</title>
</head>

<body>
  <!-- NAVBAR -->
  <!-- NAVBAR -->
  <?php
  require_once("includes/Admin/navbar.php"); ?>
  <div class="p-1 bg-primary"></div>


  <!-- HEADER -->
  <header id="main-header" class="p-3 bg-dark text-light">
    <div class="container">
      <div class="row">
        <div class="col align-self-center" id="header-div">
          <h3 class="text-light"><i class="fas fa-trash"></i> Are You Sure Want To Delete The Post ?</h3>
        </div>
      </div>
    </div>
  </header>
  <!-- HEADER END -->




  <!-- main section of adding post -->
  <section class="container p-2">

    <div class="">
      <form class="p-2" action="DeleteEvent.php?id=<?php echo $SearchQueryParameter; ?>" method="post"
        enctype="multipart/form-data">
        <div class="form-row">
          <div class="col-lg">
            <div class="category-section-text bg-primary text-light p-3"><i class="fas fa-plus"></i> Delete
              Your Existing Event that will be deleted</div>
            <div class="p-2">
              <div class="form-group">
                <label for="title" class="font-weight-bold">
                  <h4>Title:</h4>
                </label>
                <input disabled value="<?php echo $TitleToBeUpdated; ?>" type="text" class="form-control"
                  name="PostTitle">
              </div>

              <div class="form-group">
                
                <div class="form-group">
                  <label for="body">
                    <h4>Event Body:</h4>
                  </label>
                  <textarea disabled name="text" class="form-control"
                    id="postBody"><?php echo $PostToBeUpdated; ?></textarea>
                </div>
              </div>
              <div class="form-group">
                <label for="title" class="font-weight-bold">
                  <h4>Location:</h4>
                </label>
                <input disabled value="<?php echo $Location; ?>" type="text" class="form-control"
                  name="PostTitle">
              </div>
              <div class="form-group">
                <label for="title" class="font-weight-bold">
                  <h4>Date | Time:</h4>
                </label>
                <input disabled value="<?php echo $Date . ' | time: '. $Time; ?>" type="text" class="form-control"
                  name="PostTitle">
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-danger font-weight-bold" type="submit" name="submit"><i class="fas fa-trash"></i> Delete
          Post</button>
      </form>
    </div>
  </section>

  <!-- FOOTER -->
  <footer id="main-footer" class="bg-dark p-2 text-light">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead text-center">
            Copyright &copy; <span id="year"></span>
            Srijan Pokharel
          </p>
        </div>
      </div>
    </div>
  </footer>
  <!-- END FOOTER -->


  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
  <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    CKEDITOR.replace('editor1');
  </script>
  </script>
  <script src="./js/app.js"></script>
</body>

</html>
<? ob_flush(); ?>
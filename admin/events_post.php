<? ob_start(); ?>
<?php
require_once("includes/Db.php");
require_once("includes/Functions.php");
require_once("includes/Sessions.php");
require_once("includes/DateTime.php"); ?>
<?php ConfirmLogin(); ?>
<?php
if (isset($_POST["submit"])) {
  $PostTitle = $_POST["PostTitle"];
  $Date = $_POST["Date"];
  $Time = $_POST["Time"];
  $Location = $_POST["Location"];
  $PostText = $_POST["editor1"];
  $Admin = $_SESSION["UserName"];
  $Type = $_POST["type"];
  if (empty($PostTitle)) {
    $_SESSION["ErrorMessage"] = "You can't make your post title blank";
    Redirect_to("events_post.php");

  } elseif (strlen($PostTitle) < 2) {

    $_SESSION["ErrorMessage"] = "Title should be at least 2 characters";
    Redirect_to("events_post.php");


  } elseif (strlen($PostText) > 99999) {

    $_SESSION["ErrorMessage"] = "Post description shouldn't be more then 100000 characters";
    Redirect_to("events_post.php");


  } else {

    global $ConnectingDb;
    $sql = "INSERT INTO event_post(datetime,title,admin,date,time,location,description,type)";
    $sql .= "VALUES(:dateTime,:postTitle,:adminName,:eventDate,:eventTime,:eventLocation,:eventDescription,:eventType)";
    $stmt = $ConnectingDb->prepare($sql);
    $stmt->bindValue(':dateTime', $DateTime);
    $stmt->bindValue(':postTitle', $PostTitle);
    $stmt->bindValue(':adminName', $Admin);
    $stmt->bindValue(':eventDate', $Date);
    $stmt->bindValue(':eventTime', $Time);
    $stmt->bindValue(':eventLocation', $Location);
    $stmt->bindValue(':eventDescription', $PostText);
    $stmt->bindValue(':eventType', $Type);


    $Execute = $stmt->execute();
    if ($Execute) {
      $_SESSION["SuccessMessage"] = $ConnectingDb->lastInsertId() . " id's " . "Event Added Successfully ";
      Redirect_to("events_post.php");

    } else {
      $_SESSION["ErrorMessage"] = "Something Went Wrong";
      Redirect_to("events_post.php");

    }
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
  <link rel="shortcut icon" type="images/png" href="img/logo/ol.png">
  <!-- Local CSS -->
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css"
    integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous" />
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"
    integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg=="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-angular.min.js"
    integrity="sha512-KT0oYlhnDf0XQfjuCS/QIw4sjTHdkefv8rOJY5HHdNEZ6AmOh1DW/ZdSqpipe+2AEXym5D0khNu95Mtmw9VNKg=="
    crossorigin="anonymous"></script>
  <style type="text/css">
    .bootstrap-tagsinput {
      background-color: white;
      border: 1px solid #ccc;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
      display: inline-block;
      padding: 4px 6px;
      color: black;
      vertical-align: middle;
      border-radius: 4px;
      max-width: 100%;
      line-height: 22px;
      cursor: text;
    }

    .bootstrap-tagsinput input {
      border: none;
      box-shadow: none;
      outline: none;
      background-color: transparent;
      padding: 0 6px;
      margin: 0;
      width: auto;
      max-width: inherit;
    }

    .bootstrap-tagsinput.form-control input::-moz-placeholder {
      color: black;
      opacity: 1;
    }

    .bootstrap-tagsinput.form-control input:-ms-input-placeholder {
      color: black;
    }

    .bootstrap-tagsinput.form-control input::-webkit-input-placeholder {
      color: black;
    }

    .bootstrap-tagsinput input:focus {
      border: none;
      box-shadow: none;
    }

    .bootstrap-tagsinput .tag {
      margin-right: 2px;
      color: black;
    }

    .bootstrap-tagsinput .tag [data-role="remove"] {
      margin-left: 8px;
      cursor: pointer;
    }

    .bootstrap-tagsinput .tag [data-role="remove"]:after {
      content: "x";
      padding: 0px 2px;
    }

    .bootstrap-tagsinput .tag [data-role="remove"]:hover {
      box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.2), 0 1px 2px rgba(0, 0, 0, 0.05);
    }

    .bootstrap-tagsinput .tag [data-role="remove"]:hover:active {
      box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
    }
  </style>

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
          <h3><i class="fas fa-pencil-alt"></i> Posts</h3>
        </div>
      </div>
    </div>
  </header>

  <!-- main section of adding post -->
  <section class="container p-2">
    <?php
    echo SuccessMessage();
    echo ErrorMessage();
    ?>
    <div class="">
      <form class="p-2" method="post" enctype="multipart/form-data">
        <div class="form-row">
          <div class="col-lg">
            <div class="category-section-text bg-primary p-3"><i class="fas fa-plus"></i> Add New Event</div>
            <div class="p-2">
              <div class="form-group">
                <label for="title" class="font-weight-bold">Title</label>
                <input type="text" class="form-control" name="PostTitle">
              </div>


              <div class="form-group">
                <label for="body">Body</label>
                <textarea name="editor1" class="form-control" id="postBody"></textarea>
              </div>
              <div class="form-group">
                <label for="title" class="font-weight-bold">Date</label>
                <input type="text" class="form-control" name="Date">
              </div>
              <div class="form-group">
                <label for="title" class="font-weight-bold">Time</label>
                <input type="text" class="form-control" name="Time">
              </div>
              <div class="form-group">
                <label for="title" class="font-weight-bold">Location</label>
                <input type="text" class="form-control" name="Location">
              </div>
              <div class="form-group">
                <label for="title" class="font-weight-bold">Event Type</label>

                <div class="form-check mx-3">
                  <input class="form-check-input" value="Upcoming" type="radio" id="flexRadioDefault1" name="type">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Upcoming
                  </label>
                </div>
                <div class="form-check mx-3">
                  <input class="form-check-input" value="Running" type="radio" id="flexRadioDefault1" name="type">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Running
                  </label>
                </div>
                <div class="form-check mx-3">
                  <input class="form-check-input" value="Closed" type="radio" id="flexRadioDefault1" name="type">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Closed
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button class="btn btn-primary font-weight-bold" type="submit" name="submit">Publish</button>
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
            FSU Admin Panel | <small>
              Designed by Crizan Pokhrel
            </small>
          </p>

        </div>
      </div>
    </div>
  </footer>
  <!-- END FOOTER -->


  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());

    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');

  </script>
  </script>
  <script src="./js/app.js"></script>
</body>

</html>
<? ob_flush(); ?>
<? ob_start(); ?>
<?php
require_once("includes/Db.php");
require_once("includes/Functions.php");
require_once("includes/Sessions.php");
require_once("includes/DateTime.php");
ConfirmLogin();
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
  <link rel="shortcut icon" type="images/png" href="img/logo/ol.png">
  <title>DashBoard</title>
</head>

<body>

  <!-- NAVBAR -->
  <?php
  require_once("includes/Admin/navbar.php"); ?>
  <div class="p-1 bg-primary"></div>
  <!-- NAVBAR END -->



  <!-- HEADER -->
  <header id="main-header" class="py-2 bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="col align-self-center" id="header-div">
          <h3><i class="fas fa-cog"></i> Dashboard</h3>
        </div>
      </div>
    </div>
  </header>
  <!-- HEADER END -->



  <!-- UPPER CONTENT -->
  <div class="container">
    <section id="search" class="py-4">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search Posts...">
              <div class="input-group-append">
                <button class="btn bg-primary" id="searchPostBtn">Search</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="row">
      <div class="card text-center bg-primary m-3 col-sm">
        <div class="card-body">
          <h3>News</h3>
          <h4 class="display-4">
            <i class="fas fa-pencil-alt"></i>
            <span id="postCount">
              <?php
              global $ConnectingDb;
              $sql = "SELECT COUNT(*) FROM news_post";
              $stmt = $ConnectingDb->query($sql);
              $TotalRows = $stmt->fetch();
              $TotalPosts = array_shift($TotalRows);
              echo $TotalPosts;

              ?>
          </h4>
          <a href="posts.php" class="btn btn-outline-light btn-sm">Add / Edit</a>
        </div>

      </div>
      <div class="card text-center bg-primary m-3 col-sm">
        <div class="card-body">
          <h3>Category</h3>
          <h4 class="display-4">
            <i class="fas fa-search"></i> <span id="categoryCount">
              <?php
              global $ConnectingDb;
              $sql = "SELECT COUNT(*) FROM category";
              $stmt = $ConnectingDb->query($sql);
              $TotalRows = $stmt->fetch();
              $TotalCategory = array_shift($TotalRows);
              echo $TotalCategory;

              ?>
            </span>
          </h4>
          <a href="categories.php" class="btn btn-outline-light btn-sm">Add / Edit</a>
        </div>

      </div>


    </div>
    <div class="row">
      <div class="card text-center bg-primary m-3 col-sm">
        <div class="card-body">
          <h3>Users</h3>
          <h4 class="display-4">
            <i class="fas fa-users"></i>
            <span id="adminCount">
              <?php
              global $ConnectingDb;
              $sql = "SELECT COUNT(*) FROM admins";
              $stmt = $ConnectingDb->query($sql);
              $TotalRows = $stmt->fetch();
              $TotalAdmin = array_shift($TotalRows);
              echo $TotalAdmin;

              ?>
            </span>
          </h4>
          <span class="font-weight-bold text-light">Recent login: <?php echo $_SESSION["AdminName"] ?> </span>
        </div>

      </div>

      <div class="card text-center bg-primary m-3 col-sm">
        <div class="card-body">
          <h3>Total Complain</h3>
          <h4 class="display-4">
            <i class="fas fa-envelope"></i>
            <span id="adminCount">
              <?php
              global $ConnectingDb;
              $sql = "SELECT COUNT(*) FROM complain";
              $stmt = $ConnectingDb->query($sql);
              $TotalRows = $stmt->fetch();
              $TotalComplain = array_shift($TotalRows);
              echo $TotalComplain;

              ?>
            </span>
          </h4>
          <a href="complain.php" class="btn btn-outline-light btn-sm">See Here</a>
        </div>

      </div>
      <div class="card text-center bg-primary m-3 col-sm">
        <div class="card-body">
          <h3>Total Events</h3>
          <h4 class="display-4">
            <i class="fas fa-calendar"></i>
            <span id="adminCount">
              <?php
              global $ConnectingDb;
              $sql = "SELECT COUNT(*) FROM event_post";
              $stmt = $ConnectingDb->query($sql);
              $TotalRows = $stmt->fetch();
              $TotalEvent = array_shift($TotalRows);
              echo $TotalEvent;

              ?>
            </span>
          </h4>
          <a href="events_post.php" class="btn btn-outline-light btn-sm">Add Event</a>
        </div>
      </div>

    </div>
    <div class="card text-center bg-primary m-3 col-sm">
      <div class="card-body">
        <h3>Total Medicine</h3>
        <h4 class="display-4">
          <i class="fas fa-plus-square"></i>
          <span id="adminCount">
            <?php
            global $ConnectingDb;
            $sql = "SELECT COUNT(*) FROM medication";
            $stmt = $ConnectingDb->query($sql);
            $TotalRows = $stmt->fetch();
            $Total_medicine = array_shift($TotalRows);
            echo $Total_medicine;

            ?>
          </span>
        </h4>
        <a href="medicinepost.php" class="btn btn-outline-light btn-sm">Add Medicine</a>
      </div>
    </div>
    <?php
    echo SuccessMessage();
    echo ErrorMessage();
    ?>
  </div>
  <!-- POSTS -->
  <section id="posts" class="p-3">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header text-center">
            <h4 class="display-5 mb-0">Latest News</h4>
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead class="bg-dark text-center text-light">
                <tr>
                  <th>SN.</th>
                  <th>Title</th>
                  <th>Category</th>
                  <th>Date</th>
                  <th>Author</th>
                  <th>Banner</th>
                  <th>Action</th>
                  <th>Live</th>

                </tr>
              </thead>
              <?php
              global $ConnectingDb;
              $Sr = 0;
              $sql = "SELECT * FROM news_post ORDER BY id desc";
              $stmt = $ConnectingDb->query($sql);
              while ($DataRows = $stmt->fetch()) {
                # code...
                $Id = $DataRows["id"];
                $DateTime = $DataRows["datetime"];
                $PostTitle = $DataRows["title"];
                $Category = $DataRows["category"];
                $Admin = $DataRows["admin"];
                $Image = $DataRows["image"];
                $PostText = $DataRows["post"];
                $Sr++;

                ?>
                <tbody class="text-center">
                  <tr>
                    <td>
                      <?php echo $Sr; ?>
                    </td>
                    <td>
                      <?php
                      if (strlen($PostTitle) > 25) {
                        # code...
                        $PostTitle = substr($PostTitle, 0, 23) . '....';
                      }
                      echo $PostTitle; ?>
                    </td>
                    <td>
                      <?php
                      if (strlen($Category) > 8) {
                        # code...
                        $Category = substr($Category, 0, 7) . '....';
                      }
                      echo $Category; ?>
                    </td>
                    <td>
                      <?php
                      if (strlen($DateTime) > 10) {
                        # code...
                        $DateTime = substr($DateTime, 0, 10) . '....';
                      }
                      echo $DateTime; ?>
                    </td>
                    <td>
                      <?php
                      if (strlen($Admin) > 5) {
                        # code...
                        $Admin = substr($Admin, 0, 5) . '....';
                      }
                      echo $Admin; ?>
                    </td>
                    <td><img src="uploads/<?php echo $Image; ?>" width="100px;" </td>
                    <td><a href="EditNews.php?id=<?php echo $Id; ?>"><span class="btn btn-warning">Edit</span></a>
                      <a href="DeleteNews.php?id=<?php echo $Id; ?>"><span class="btn btn-danger">Delete</span></a>
                    </td>
                    <td><a href="../news-post.php?id=<?php echo $Id; ?>" target="blank"><span
                          class="btn btn-success">Click to see
                        </span></a></td>

                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </section>
  <section id="posts" class="p-3">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header text-center">
            <h4 class="display-5 mb-0">Latest Events</h4>
          </div>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead class="bg-dark text-center text-light">
                <tr>
                  <th>SN.</th>
                  <th>Title</th>
                  <th>Date</th>
                  <th>Author</th>
                  <th>Event Date</th>
                  <th>Event Time</th>
                  <th>Event Location</th>
                  <th>Edit/DEL</th>
                  <th>Live</th>

                </tr>
              </thead>
              <?php
              global $ConnectingDb;
              $Sr = 0;
              $sql = "SELECT * FROM event_post ORDER BY id desc";
              $stmt = $ConnectingDb->query($sql);
              while ($DataRows = $stmt->fetch()) {
                # code...
                $Id = $DataRows["id"];
                $DateTime = $DataRows["datetime"];
                $PostTitle = $DataRows["title"];
                $Date = $DataRows["date"];
                $Admin = $DataRows["admin"];
                $Time = $DataRows["time"];
                $Location = $DataRows["location"];
                $PostText = $DataRows["description"];
                $Type = $DataRows["type"];
                $Sr++;

                ?>
                <tbody class="text-center">
                  <tr>
                    <td>
                      <?php echo $Sr; ?>
                    </td>
                    <td>
                      <?php
                      if (strlen($PostTitle) > 25) {
                        # code...
                        $PostTitle = substr($PostTitle, 0, 23) . '....';
                      }
                      echo $PostTitle; ?>
                    </td>
                    <td>
                      <?php
                      if (strlen($DateTime) > 25) {
                        # code...
                        $DateTime = substr($DateTime, 0, 21) . '....';
                      }
                      echo $DateTime; ?>
                    </td>
                    <td>
                      <?php
                      if (strlen($Admin) > 25) {
                        # code...
                        $Admin = substr($Admin, 0, 21) . '....';
                      }
                      echo $Admin; ?>
                    </td>
                    <td>
                      <?php
                      if (strlen($Date) > 25) {
                        # code...
                        $Date = substr($Date, 0, 21) . '....';
                      }
                      echo $Date; ?>
                    </td>
                    <td>
                      <?php
                      if (strlen($Time) > 25) {
                        # code...
                        $Time = substr($Time, 0, 21) . '....';
                      }
                      echo $Time; ?>
                    </td>
                    <td>
                      <?php
                      if (strlen($Location) > 25) {
                        # code...
                        $Location = substr($Location, 0, 21) . '....';
                      }
                      echo $Location; ?>
                    </td>
                    <td><a href="EditEvent.php?id=<?php echo $Id; ?>"><span class="btn btn-warning">Edit</span></a>
                      <a href="DeleteEvent.php?id=<?php echo $Id; ?>"><span class="btn btn-danger">Delete</span></a>
                    </td>
                    <td><a href="../events.php" target="blank"><span class="btn btn-success">
                          <?php
                          if ($Type != null) {
                            echo $Type;
                          } else {
                            echo 'Click to see';
                          } ?>
                        </span></a></td>

                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- FOOTER -->
  <footer id="main-footer" class="bg-dark p-2">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead text-center text-light">
            Copyright &copy; <span id="year"></span>
            FSU Admin Panel | <small>
              Designed by Crizan Pokhrel
            </small>
          </p>

        </div>
      </div>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <!-- WYSWYG Editor -->
  <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
  <script>
    // Get the current year for the copyright
    $('#year').text(new Date().getFullYear());
    // Modal Editor
    CKEDITOR.replace('editor1');
  </script>
  <script src="./js/app.js"></script>
</body>

</html>
<? ob_flush(); ?>
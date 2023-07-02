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
if (isset($_POST["submit"])) {
    $PostTitle = $_POST["PostTitle"];
    $PostText = $_POST["editor1"];
    $PostDate = $_POST["date"];
    $PostTime = $_POST["time"];
    $PostLocation = $_POST["location"];
    $Type=$_POST["type"];
    if (empty($PostTitle)) {
        $_SESSION["ErrorMessage"] = "You can't make your post title blank";
        Redirect_to("EditEvent.php?id=$SearchQueryParameter");

    } elseif (strlen($PostTitle) < 2) {

        $_SESSION["ErrorMessage"] = "Title should be at least 2 characters";
        Redirect_to("EditEvent.php?id=$SearchQueryParameter");


    } elseif (strlen($PostText) > 9999) {

        $_SESSION["ErrorMessage"] = "Event description shouldn't be more then 1000 characters";
        Redirect_to("EditEvent.php?id=$SearchQueryParameter");


    } else {
        global $ConnectingDb;
        $sql = "UPDATE event_post 
      SET title='$PostTitle',description='$PostText',date='$PostDate',time='$PostTime',location='$PostLocation',type='$Type'
      WHERE id='$SearchQueryParameter'";
        $Execute = $ConnectingDb->query($sql);
        if ($Execute) {
            $_SESSION["SuccessMessage"] = "Event Updated Successfully ";
            Redirect_to("EditEvent.php?id=$SearchQueryParameter");

        } else {
            $_SESSION["ErrorMessage"] = "Something Went Wrong";
            Redirect_to("EditEvent.php?id=$SearchQueryParameter");
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
    <!-- Local CSS -->
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css"
        integrity="sha384-rtJEYb85SiYWgfpCr0jn174XgJTn4rptSOQsMroFBPQSGLdOC5IbubP6lJ35qoM9" crossorigin="anonymous" />
    <title>Admin penal</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"
        integrity="sha512-VvWznBcyBJK71YKEKDMpZ0pCVxjNuKwApp4zLF3ul+CiflQi6aIJR+aZCP/qWsoFBA28avL5T5HA+RE+zrGQYg=="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput-angular.min.js"
        integrity="sha512-KT0oYlhnDf0XQfjuCS/QIw4sjTHdkefv8rOJY5HHdNEZ6AmOh1DW/ZdSqpipe+2AEXym5D0khNu95Mtmw9VNKg=="
        crossorigin="anonymous"></script>
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
                    <h3 class="text-light"><i class="fas fa-edit"></i> Edit Post</h3>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END -->


    <!-- SEARCH -->
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
    <!-- SEARCH END -->


    <!-- main section of adding post -->
    <section class="container p-2">
        <?php
        echo SuccessMessage();
        echo ErrorMessage();
        global $ConnectingDb;
        $sql = "SELECT * FROM event_post WHERE id=$SearchQueryParameter";
        $stmt = $ConnectingDb->query($sql);
        while ($DataRows = $stmt->fetch()) {
            # code...
            $TitleToBeUpdated = $DataRows['title'];
            $date = $DataRows['date'];
            $time = $DataRows['time'];
            $PostToBeUpdated = $DataRows['description'];
            $location = $DataRows['location'];

        }
        ?>
        <div class="">
            <form class="p-2" action="EditEvent.php?id=<?php echo $SearchQueryParameter; ?>" method="post"
                enctype="multipart/form-data">
                <div class="form-row">
                    <div class="col-lg">
                        <div class="category-section-text bg-primary text-light p-3"><i class="fas fa-plus"></i> Edit
                            Your Existing Event</div>
                        <div class="p-2">
                            <div class="form-group">
                                <label for="title" class="font-weight-bold">
                                    <h4>Update Title</h4>
                                </label>
                                <input value="<?php echo $TitleToBeUpdated; ?>" type="text" class="form-control"
                                    name="PostTitle">
                            </div>

                            <div class="form-group">
                                <label for="body">
                                    <h4>Update description</h4>
                                </label>
                                <textarea name="editor1" class="form-control"
                                    id="postBody"><?php echo $PostToBeUpdated; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="body">
                                    <h4>Update time</h4>
                                </label>
                                <textarea name="time" class="form-control" id="postBody"><?php echo $time; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="title" class="font-weight-bold">
                                    <h4>Update Date</h4>
                                </label>
                                <input value="<?php echo $date; ?>" type="text" class="form-control" name="date">
                            </div>
                            <div class="form-group">
                                <label for="title" class="font-weight-bold">
                                    <h4>Update Location</h4>
                                </label>
                                <input value="<?php echo $location; ?>" type="text" class="form-control"
                                    name="location">
                            </div>
                            <div class="form-group">
                <label for="title" class="font-weight-bold">Event Type</label>

                <div class="form-check mx-3">
                  <input class="form-check-input"value="Upcoming" type="radio" id="flexRadioDefault1"name="type">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Upcoming
                  </label>
                </div>
                <div class="form-check mx-3">
                  <input class="form-check-input"value="Running" type="radio" id="flexRadioDefault1"name="type">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Running
                  </label>
                </div>
                <div class="form-check mx-3">
                  <input class="form-check-input"value="Closed" type="radio" id="flexRadioDefault1"name="type">
                  <label class="form-check-label" for="flexRadioDefault1">
                    Closed
                  </label>
                </div>
              </div>
            </div>

                        </div>
                    </div>
                </div>
                <button class="btn btn-primary font-weight-bold" type="submit" name="submit">Publish</button>
            </form>
        </div>
    </section>

    <!-- POSTS -->
    <section id="posts" class="p-3">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header text-center">
                        <h4 class="display-5 mb-0">Latest Posts</h4>
                    </div>
                    <table class="table table-striped">
                        <thead class="bg-dark text-center text-light">
                            <tr>
                                <th>SN.</th>
                                <th>Title</th>
                                <th>Description</th>

                                <th>Live</th>

                            </tr>
                        </thead>
                        <?php
                        global $ConnectingDb;
                        $Sr = 0;
                        $sql = "SELECT * FROM event_post";
                        $stmt = $ConnectingDb->query($sql);
                        while ($DataRows = $stmt->fetch()) {
                            # code...
                            $Id = $DataRows["id"];
                            $PostTitle = $DataRows["title"];
                            $PostText = $DataRows["description"];
                            $Sr++;

                            ?>
                            <tbody class="text-center">
                                <tr>
                                    <td>
                                        <?php echo $Sr; ?>
                                    </td>
                                    <td>
                                        <?php
                                        echo $PostTitle; ?>
                                    </td>
                                    <td>
                                        <?php
                                        echo $PostText; ?>
                                    </td>


                                    <td><a href="../events.php" target="blank"><span class="btn btn-success">See
                                                Live</span></a></td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        </div>
    </section>


    <!-- END POST -->


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
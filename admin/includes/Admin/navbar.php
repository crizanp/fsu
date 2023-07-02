<nav class="navbar navbar-expand-sm navbar-dark bg-dark p-3">
    <div class="container">
      <a href="../" class="navbar-brand"><i class="fas fa-user"></i> Welcome <?php echo $_SESSION["UserName"];?>
</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse"><span
          class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav">
          <li class="nav-item px-2">
            <a href="dashboard.php" class="nav-link ">Dashboard</a>
          </li>
          <li class="nav-item px-2">
            <a href="posts.php" class="nav-link">Posts</a>
          </li>
           <li class="nav-item px-2">
            <a href="categories.php" class="nav-link">Category</a>
          </li>
      
          <li class="nav-item px-2">
            <a href="events_post.php" class="nav-link">Events</a>
          </li>
          <li class="nav-item px-2">
            <a href="complain.php" class="nav-link">Complain</a>
          </li>
          <li class="nav-item px-2">
            <a href="medicinepost.php" class="nav-link">Medication</a>
          </li>
          
          <li class="nav-item">
            <a href="logout.php" class="nav-link text-danger">
              <i class="fas fa-user-times"></i> Logout
            </a>
          </li>
          
        </ul>

        <!--<ul class="navbar-nav ml-auto">-->
          
        <!--</ul>-->
      </div>
    </div>
  </nav>
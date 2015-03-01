<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Alumni</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="<?php echo $home; ?>"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li class="<?php echo $about;?>"><a href="#">About</a></li>
        <li class="<?php echo $student;?>"><a href="#">Student</a></li>
        <li class="<?php echo $tutorials;?>"><a href="tutorials.php">Tutorials</a></li>
        <li class="<?php echo $contact;?>"><a href="#">Contact us</a></li>
      </ul>

      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Username">
          <input type="password" class="form-control" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-default">Login</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
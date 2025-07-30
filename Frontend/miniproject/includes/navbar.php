<nav class="navbar navbar-expand-lg navbar-success bg-light">
    <a class="navbar-brand" href="index.php">
      <img src="image/logo2.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
      Healthify
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>
        <?php
        if ($login) {
        ?>

          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        <?php
        } else {
        ?>

          <li class="nav-item">
            <a class="nav-link" href="login.php">Login</a>
          </li>

        <?php
        }

        ?>
      </ul>
    </div>
  </nav>
<!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary navbar-absolute fixed-top ">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <a class="navbar-brand" href="#"><b><?php echo strtoupper($thisPage); ?></b></a>
                
            </div>
            
            <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="sr-only text-danger">Toggle navigation</span>
                <span class="navbar-toggler-icon icon-bar text-danger"></span>
                <span class="navbar-toggler-icon icon-bar text-danger"></span>
                <span class="navbar-toggler-icon icon-bar text-danger"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end">
              
              <form class="navbar-form" style="">
              <!--<div class="input-group no-border">-->
                <!--<input type="text" value="" class="form-control" placeholder="Search...">-->
                <!--<button type="submit" class="btn btn-white btn-round btn-just-icon">-->
                <!--  <i class="material-icons">search</i>-->
                <!--  <div class="ripple-container"></div>-->
                <!--</button>-->
              <!--</div>-->
            </form>
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link act1" href="#pablo" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                    <b>Account</b>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                    <a class="dropdown-item act1 <?php if ($thisPage=="update Password"){ echo "act"; }?>" href="changepass" onclick="return confirm('Do you want to Change this Password ?');">Change Password</a>
                    <a class="dropdown-item act1" href="logout" onclick="return confirm('Do you want to Logout ?');">Log out</a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<!-- Navbar -->
        
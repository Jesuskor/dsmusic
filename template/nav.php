<div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <a href="index.php" class="navbar-brand sidebar-gone-hide">DM Store</a>
        <div class="navbar-nav">
          <a href="#" class="nav-link sidebar-gone-show" data-toggle="sidebar"><i class="fas fa-bars"></i></a>
        </div>
        <form class="form-inline m-auto" action="search.php">
          <ul class="navbar-nav">
            <li><a href="search.php" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="500" value="Ed Sheeran">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="./assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hola, Jesús.</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>

      <nav class="navbar navbar-secondary navbar-expand-lg">
        <div class="container">
          <ul class="navbar-nav m-auto">
            <li class="nav-item <?php echo ($active == 'index' ? 'active' : ''); ?>">
              <a href="index.php" class="nav-link"><i class="fas fa-home"></i><span>Inicio</span></a>
            </li>
            <li class="nav-item <?php echo ($active == 'search' ? 'active' : ''); ?>">
                <a href="search.php" class="nav-link"><i class="fas fa-search"></i><span>Buscar</span></a>
              </li>
              <li class="nav-item <?php echo ($active == 'contact' ? 'active' : ''); ?>">
                <a href="contact.php" class="nav-link"><i class="far fa-envelope"></i><span>Contacto</span></a>
              </li>
              <li class="nav-item <?php echo ($active == 'login' ? 'active' : ''); ?>">
                <a href="login.php" class="nav-link"><i class="far fa-user"></i><span>Login</span></a>
              </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
<?php require './template/head.php'; ?>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      
    <?php require './template/nav.php'; ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="mb-5">
            <div class="hero text-white hero-bg-image hero-bg-parallax" data-background="https://www.xtrafondos.com/wallpapers/groot-bebe-escuchando-musica-6450.jpg">
              <div class="hero-inner">
                <h2>Únete</h2>
                <p class="lead">Resgistrate y disfruta de la música con nosotros.</p>
                <div class="mt-4">
                  <a href="register.php" class="btn btn-outline-white btn-lg btn-icon icon-left"><i class="far fa-user"></i> Crear cuenta</a>
                </div>
              </div>
            </div>
          </div>

          <div class="mt-4">
          <div class="card card-primary">
              <div class="row m-0">
                <div class="col-12 col-md-12 col-lg-6 p-0">
                  <div class="card-header text-center"><h4>Contactanos</h4></div>
                  <div class="card-body">
                    <form method="POST">
                      <div class="form-group floating-addon">
                        <label>Nombre</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="far fa-user"></i>
                            </div>
                          </div>
                          <input id="name" type="text" class="form-control" name="name" autofocus placeholder="Name">
                        </div>
                      </div>

                      <div class="form-group floating-addon">
                        <label>Correo electronico</label>
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <i class="fas fa-envelope"></i>
                            </div>
                          </div>
                          <input id="email" type="email" class="form-control" name="email" placeholder="Email">
                        </div>
                      </div>

                      <div class="form-group">
                        <label>Mensaje</label>
                        <textarea class="form-control" placeholder="Type your message" data-height="150"></textarea>
                      </div>

                      <div class="form-group text-right">
                        <button type="submit" class="btn btn-round btn-lg btn-primary">
                          Enviar mensaje
                        </button>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6 p-5">
                <div class="alert alert-primary alert-has-icon mt-4">
                      <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                      <div class="alert-body">
                        <div class="alert-title">Información de contacto</div>
                        <strong>Digital Music Store.</strong> <br>
                        1355 Market St, Suite 900 <br>
                        San Francisco, CA 94103 <br>
                        P: (123) 456-7890 <br>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
          </div>
        </section>
      </div>

<?php require './template/footer.php'; ?>
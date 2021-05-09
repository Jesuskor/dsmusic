<?php require './template/head.php'; ?>

<body class="layout-3">
  <div id="app">
    <div class="main-wrapper container">
      <div class="navbar-bg"></div>
      
      <?php require './template/nav.php'; ?>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
              <h1>Buscando: Ed Sheeran</h1>
            </div>
          <div class="mt-4">
            <div class="card">
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-striped table-md">
                      <br>
                    <tr>
                      <th>#</th>
                      <th>Portada</th>
                      <th>Canción</th>
                      <th colspan="2">Opciones</th>
                    </tr>
                    <?php for ($i=1; $i <= 10; $i++) { ?>
                    <tr>
                      <td width="10px"><?php echo $i; ?></td>
                      <td>
                        <div class="gallery gallery-fw" data-item-height="100">
                            <div class="gallery-item" data-image="https://i.scdn.co/image/ab67616d0000b273ba5db46f4b838ef6027e6f96" data-title="Image 1"></div>
                        </div>
                      </td>
                      <td><strong>Perfect</strong><br>- Ed Sheeran</td>
                      <td width="10px"><a href="#" class="btn btn-warning">Reproducir</a></td>
                      <td width="10px"><a href="#" class="btn btn-primary">Comprar</a></td>
                    </tr>
                    <?php } ?>
                  </table>
                </div>
              </div>
              <div class="card-footer text-right">
                <nav class="d-inline-block">
                  <ul class="pagination mb-0">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </section>
      </div>

      <?php require './template/footer.php'; ?>
<div class="col-auto px-0  show collapse collapse-horizontal navbar-collapse" id="navbarVerticalCollapse">




  <nav  class="tgw-nav-bar navbar navbar-vertical navbar-expand-lg">

 

      <!-- class="navbar-vertical-collapsed multi-collapse collapse navbar-collapse" id="navbarVerticalCollapse  multiCollapseExample1 collapseWidthExample"> -->

      <div class="navbar-vertical-content">
        <ul class="navbar-nav flex-column" id="navbarVerticalNav">

          <p class="navbar-vertical-label">General</p>

          

          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
              <a href="{{ route('home') }}" class="nav-link active" aria-current="page">
                <i class="dropdown-indicator-icon fa fa-home pe-1" aria-hidden="true"></i>

                Home
              </a>
            </li>

            <li class="nav-item">
              <a href="{{ route('profile') }}" class="nav-link" aria-current="page">
                <i class="dropdown-indicator-icon fa fa-user pe-1" aria-hidden="true"></i>
                Perfil
              </a>
            </li>




            <li>
              <a href="{{ route('settings') }}" class="nav-link ">
                <i class="dropdown-indicator-icon fa fa-calendar-o" aria-hidden="true"></i>
                Calendario
              </a>
            </li>

            <li>
              <a href="#" class="nav-link">
                <i class="dropdown-indicator-icon fa fa-envelope" aria-hidden="true"></i>
                Email
              </a>
            </li>
            <li>
              <a href="{{ route('notes.index') }}" class="nav-link">
                <i class=" dropdown-indicator-icon fa fa-sticky-note" aria-hidden="true"></i>
                Notas
              </a>
            </li>
            <li>
              <a href="#" class="nav-link">
                <i class="dropdown-indicator-icon fa fa-globe" aria-hidden="true"></i>
                Herramientas
              </a>
            </li>
            <li>
              <a href="{{ route('goyplayer.index') }}" class="nav-link">
                <i class="dropdown-indicator-icon fa fa-music" aria-hidden="true"></i>
                Musica
              </a>
            </li>
          </ul>


          <p class="navbar-vertical-label">Tienda</p>
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">

              <div class="nav-item-wrapper"><a class="nav-link  dropdown-indicator label-1" href="#nv-e-commerce" role="button" data-bs-toggle="collapse" aria-expanded="false" aria-controls="nv-e-commerce">
                  <div class="d-flex align-items-center">
                    <div class="dropdown-indicator-icon">
                      <svg class="svg-inline--fa fa-caret-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                        <path fill="currentColor" d="M118.6 105.4l128 127.1C252.9 239.6 256 247.8 256 255.1s-3.125 16.38-9.375 22.63l-128 127.1c-9.156 9.156-22.91 11.9-34.88 6.943S64 396.9 64 383.1V128c0-12.94 7.781-24.62 19.75-29.58S109.5 96.23 118.6 105.4z"></path>
                      </svg>
                    </div>
                    <span class="nav-link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart">
                        <circle cx="9" cy="21" r="1"></circle>
                        <circle cx="20" cy="21" r="1"></circle>
                        <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                      </svg></span>
                    <span class="nav-link-text">E commerce</span>
                  </div>
                </a>
                <div class="parent-wrapper label-1">
                  <ul class="nav parent collapse" data-bs-parent="#navbarVerticalCollapse" id="nv-e-commerce" style="">
                    <li class="collapsed-nav-item-title d-none">E commerce</li>
                    <li class="nav-item"><a class="nav-link" href="../../apps/e-commerce/admin/add-product.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Add product</span></div>
                      </a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../../apps/e-commerce/admin/products.html" data-bs-toggle="" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-text">Products</span></div>
                      </a>
                    </li>



                  </ul>
                </div>
              </div>


            </li>
          </ul>
          <p class="navbar-vertical-label">Sistema</p>
          <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
              <a href="{{ route('settings') }}" class="nav-link" aria-current="page">
                <i class="dropdown-indicator-icon fa fa-users pe-1" aria-hidden="true"></i>
                Usuarios
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('settings') }}" class="nav-link" aria-current="page">
                <i class="dropdown-indicator-icon fa fa-cogs pe-1" aria-hidden="true"></i>
                Configuración
              </a>
            </li>
          </ul>

        </ul>
      </div>

      <div class="navbar-vertical-footer">
        <button id="bottom-bar" class="btn navbar-vertical-toggle border-0 fw-semi-bold w-100 white-space-nowrap d-flex align-items-center" data-bs-target="#navbarVerticalCollapse" data-bs-toggle="collapse">
          <span class="uil uil-left-arrow-to-left fs-0"></span>
          <span class="uil uil-arrow-from-right fs-0"></span>
          <span class="navbar-vertical-footer-text ms-2">Collapsed View</span>
        </button>
      </div>
  </nav>



</div>



<script>

 

</script>


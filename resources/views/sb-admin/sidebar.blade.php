<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
      <img src="/vendoradmin/sb-admin/dist/img/AdminLTELogo.png"
           alt="AdminLTE Logo"
           class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/vendoradmin/sb-admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-folder"></i>
              <p>
                Ajouter un Admin
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="ajout_admin.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajout Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="voir_admin.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>voir Admin</p>
                </a>
              </li>
            </ul>
          </li>
               <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-folder"></i>

                  <p>
                     Categorie Produits
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{route ('categories.create') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Ajout categorie Produits</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route ('categories.index') }}" class="nav-link ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>voir categorie Produits</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                <i class="nav-icon fas fa-folder"></i>

                  <p>
                    Produits
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item ">
                    <a href="ajout_formation.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Ajout Produits</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="voir_formation.html" class="nav-link ">
                      <i class="far fa-circle nav-icon"></i>
                      <p>voir produits</p>
                    </a>
                  </li>
                </ul>
              </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-folder"></i>

              <p>
                Parametre du site
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="ajout_param_site.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajout Parametre du site</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="voir_parametre_site.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>voir parametre site</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-folder"></i>

              <p>
                Sliders
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajout slider</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="voir_slider.html" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>voir slider</p>
                </a>
              </li>
            </ul>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
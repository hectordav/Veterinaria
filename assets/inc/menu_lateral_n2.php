<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
          <div class="navbar nav_title" style="border: 0;" align="center">
            <a href="<?=$this->config->base_url()?>principal" class="site_title"><span>Trade SRL</span></a>
          </div>
          <div class="clearfix"></div>
          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="<?= $this->config->base_url();?>/assets/img/user.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Bienvenido</span>
            </div>
          </div>
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
              
                <li><a><i class="fa fa-money"></i>Pagos<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?= $this->config->base_url();?>asignacion_pago/grilla">Asignar dinero a taxista</a>
                    </li>
                  </ul>
                </li>
               
               <ul class="nav side-menu">
              
                <li><a><i class="fa fa-comments"></i>Notificaciones<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?= $this->config->base_url();?>push_conductor/notificacion_conductor">Conductores</a>
                    </li>
                  </ul>
                </li>
              </ul>
              </ul>
              <ul class="nav side-menu">
              
                <li><a><i class="fa fa-user"></i>Usuarios<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                     <li><a href="<?= $this->config->base_url();?>usuario/grilla_conductor">Conductores</a>
                    </li>
                  </ul>
                </li>
              </ul>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-car"></i>Vehiculos<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?= $this->config->base_url();?>vehiculo/grilla">Vehiculos Registrados</a>
               
                  </ul>
                </li>
              </ul>
            
            </div>
           
          
          </div>
          <!-- /sidebar menu -->
        </div>
      </div>
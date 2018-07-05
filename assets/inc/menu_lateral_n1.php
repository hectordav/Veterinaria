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
          <br/>
          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-address-card"></i>Usuarios<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?= $this->config->base_url();?>usuario/grilla_admin">Administradores</a>
                    </li>
                     <li><a href="<?= $this->config->base_url();?>usuario/grilla_dueno">Dueño de empresa</a>
                    </li>
                     <li><a href="<?= $this->config->base_url();?>usuario/grilla_operario">Centralista Operario</a>
                    </li>
                    <li><a href="<?= $this->config->base_url();?>usuario/grilla_conductor">Conductores</a>
                    </li>
                    <li><a href="<?= $this->config->base_url();?>usuario/grilla_cliente">Clientes</a>
                    </li>
                  </ul>
                </li>
              </ul>
               <ul class="nav side-menu">
              
                <li><a><i class="fa fa-comments"></i>Notificaciones<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?= $this->config->base_url();?>push_cliente/notificacion_cliente">Clientes</a>
                    </li>
                    <li><a href="<?= $this->config->base_url();?>push_conductor/notificacion_conductor">Conductores</a>
                    </li>
                  </ul>
                </li>
              </ul>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-money"></i>Pagos<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?= $this->config->base_url();?>pago_empresa/grilla">Pagos de Empresa</a>
                    <li><a href="<?= $this->config->base_url();?>asignacion_pago/grilla">Asignar dinero a Taxista</a>
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
            <div class="menu_section">
              <h3>Configuracion</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-cogs"></i>Tipo-Marca-Modelo<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?= $this->config->base_url();?>tipo/grilla">Tipo</a>
                    </li>
                    <li><a href="<?= $this->config->base_url();?>marca/grilla">Marca</a>
                    </li>
                    <li><a href="<?= $this->config->base_url();?>modelo/grilla">Modelo</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-star"></i>Tarifas<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?= $this->config->base_url();?>tipo_tarifa/grilla">Tipo de Tarifas</a>
                    </li>
                    <li><a href="<?= $this->config->base_url();?>tarifa/grilla">Tarifas</a>
                    </li>

                     <li><a href="<?= $this->config->base_url();?>modo_tarifa/grilla">Horarios</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-map"></i>Ciudades<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?= $this->config->base_url();?>ciudad/Grilla">Ciudades Registradas</a>
                    </li>
                  </ul>
                </li>
                  <li><a><i class="fa fa-tags"></i>Montos<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?= $this->config->base_url();?>banderazo/grilla">Monto Banderazo</a>
                    </li>
                  </ul>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?= $this->config->base_url();?>monto_establecido_taxi/grilla">Monto Establecido a Taxis</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-tags"></i>Distancia<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?= $this->config->base_url();?>distancia_taxi_disponible/grilla">Distancia entre clientes y taxis</a>
                    </li>
                  </ul>
                </li>
              
                <li><a><i class="fa fa-check-circle"></i>Codigos Promocion<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?= $this->config->base_url();?>codigo_promo/grilla">Codigos Promocion</a>
                    </li>
                  </ul>
                </li>
                 <li><a><i class="fa fa-building"></i>Empresa<span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?= $this->config->base_url();?>empresa/grilla">Empresa</a>
                    </li>
                  </ul>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?= $this->config->base_url();?>paypal/grilla">Paypal</a>
                    </li>
                  </ul>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="<?= $this->config->base_url();?>historial_pago/grilla">Pagos de empresa</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!-- /sidebar menu -->
        </div>
      </div>
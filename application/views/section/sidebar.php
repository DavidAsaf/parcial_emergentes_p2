<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
          
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">Navegación</li>
            <li class="active">
              <a href="<?php echo base_url('/marcas/maestroDetalle') ?>">
                <i class="fa fa-table"></i> <span>Maestro Detalle</span> 
              </a>
            </li>
            <li class="active">
              <a href="<?php echo base_url('/marcas/') ?>">
                <i class="fa fa-plus-square"></i> <span>Insertar Marca</span> 
              </a>
            </li>
            <li class="active">
              <a href="<?php echo base_url('/marcas/') ?>">
                <i class="fa fa-plus-square"></i> <span>Insertar Estilo</span> 
              </a>
            </li>
            
            
          </ul>
        </section>
        <!-- /.sidebar -->
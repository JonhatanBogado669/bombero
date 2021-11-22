    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">ADMINISTRACION</div>
      </a>

      <!-- Divider 
      <hr class="sidebar-divider my-0">

       Nav Item - Dashboard 
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

       Divider 
      <hr class="sidebar-divider">

       Heading 
      <div class="sidebar-heading">
        Interface
      </div>

       Nav Item - Pages Collapse Menu 
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li>

       Nav Item - Utilities Collapse Menu 
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>-->

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        CRUD
      </div>

      <!-- Nav Item - Charts BOCA DE AGUA -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('bocaagua.index') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Boca de Agua</span></a>
      </li>
       <!-- Nav Item - Charts HERRAMIENTA -->
       <li class="nav-item">
        <a class="nav-link" href="{{ route('herramienta.index') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Herramientas</span></a>
      </li>
       <!-- Nav Item - Charts INSUMO -->
       <li class="nav-item">
        <a class="nav-link" href="{{ route('insumo.index') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Insumos</span></a>
      <!-- Nav Item - Charts PERSONAL -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('personal.index') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Personal</span></a>
      </li>
      <!-- Nav Item - Charts SINIESTRO -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('siniestro.index') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Siniestros</span></a>
      </li>
     
          <!-- Nav Item - Charts VEHICULO -->
      <li class="nav-item">
        <a class="nav-link" href="{{ route('vehiculo.index') }}">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Vehiculos</span></a>
      
      

      

      <!-- Divider 
      <hr class="sidebar-divider d-none d-md-block">

       Sidebar Toggler (Sidebar) 
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>-->

    </ul>
    <!-- End of Sidebar -->
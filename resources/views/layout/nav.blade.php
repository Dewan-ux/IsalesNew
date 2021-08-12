      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

        <li class="treeview">
          <a href="/haji">
            <i class="fa fa-book"></i> <span>Haji</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Data Haji</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Paket Haji</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Umroh</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i>Data Umroh</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Paket Umroh</a></li>
          </ul>
        </li>

        <li class="{{ request()->is('tour') ? 'active' : '' }}"><a href=""><i class="fa fa-book"></i> <span>Tour</span></a></li>
        <li class="{{ request()->is('la') ? 'active' : '' }}"><a href=""><i class="fa fa-book"></i> <span>LA</span></a></li>
        <li class="{{ request()->is('hotel') ? 'active' : '' }}"><a href=""><i class="fa fa-book"></i> <span>Hotel</span></a></li>
        <li class="{{ request()->is('visa') ? 'active' : '' }}"><a href="/visa"><i class="fa fa-book"></i> <span>Visa</span></a></li>
        <li class="{{ request()->is('tiket pesawat') ? 'active' : '' }}"><a href=""><i class="fa fa-book"></i> <span>Tiket Pesawat</span></a></li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Level One</a></li>
          </ul>
        </li>
      </ul>
  
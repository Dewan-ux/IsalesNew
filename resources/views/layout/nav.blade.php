      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>

        <li class="treeview">
          <a href="">
            <i class="fa fa-book"></i> <span>Haji</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/pakethaji"><i class="fa fa-circle-o"></i>Paket Haji</a></li>
            <li><a href="/kelashaji"><i class="fa fa-circle-o"></i>Kelas Haji</a></li>
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
            <li><a href="/kelasumroh"><i class="fa fa-circle-o"></i>Kelas Umroh</a></li>
            <li><a href="/umroh"><i class="fa fa-circle-o"></i>Paket Umroh</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="">
            <i class="fa fa-book"></i> <span>Tour</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/tour"><i class="fa fa-circle-o"></i>List Tour</a></li>
            <li><a href="/tourtype"><i class="fa fa-circle-o"></i>Tour Type</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="">
            <i class="fa fa-book"></i> <span>LA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/listla"><i class="fa fa-circle-o"></i>List LA</a></li>
            <li><a href="/latype"><i class="fa fa-circle-o"></i>LA Type</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Hotel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/hotel"><i class="fa fa-circle-o"></i>List Hotel</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Hotel Room Facility</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i>Hotel Room Type</a></li>
          </ul>
        </li>
        
        <li class="{{ request()->is('visa') ? 'active' : '' }}"><a href="/visa"><i class="fa fa-book"></i> <span>Visa</span></a></li>
        <li class="{{ request()->is('tiket pesawat') ? 'active' : '' }}"><a href=""><i class="fa fa-book"></i> <span>Tiket Pesawat</span></a></li>
        <li class="{{ request()->is('tiket pesawat') ? 'active' : '' }}"><a href=""><i class="fa fa-book"></i> <span>Payment</span></a></li>
        <li class="{{ request()->is('tiket pesawat') ? 'active' : '' }}"><a href=""><i class="fa fa-book"></i> <span>Transaksi</span></a></li>
        <li class="{{ request()->is('tiket pesawat') ? 'active' : '' }}"><a href=""><i class="fa fa-book"></i> <span>Rekening</span></a></li>
      </ul>
  
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MENU</li>
        <li class="{{ request()->is('/') ? 'active' : '' }}"><a href="/"><i class="fas fa-house-user"></i>&ensp; <span>Dashboard</span></a></li>

        <li class="treeview">
          <a href="">
            <i class="fas fa-address-book"></i>&ensp; <span>Haji</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/pakethaji"><i class="fas fa-chevron-circle-right"></i>&ensp; Paket Haji</a></li>
            <li><a href="/kelashaji"><i class="fas fa-chevron-circle-right"></i>&ensp; Kelas Haji</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fas fa-address-book"></i>&ensp; <span>Umroh</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/umroh"><i class="fas fa-chevron-circle-right"></i>&ensp; Paket Umroh</a></li>
            <li><a href="/kelasumroh"><i class="fas fa-chevron-circle-right"></i>&ensp; Kelas Umroh</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="">
            <i class="fas fa-plane-departure"></i>&nbsp; <span>Tour</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/tour"><i class="fas fa-chevron-circle-right"></i>&ensp; List Tour</a></li>
            <li><a href="/tourtype"><i class="fas fa-chevron-circle-right"></i>&ensp; Tour Type</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="">
            <i class="fas fa-plane-departure"></i>&nbsp; <span>LA</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/listla"><i class="fas fa-chevron-circle-right"></i>&ensp; List LA</a></li>
            <li><a href="/latype"><i class="fas fa-chevron-circle-right"></i>&ensp; LA Type</a></li>
          </ul>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fas fa-hotel"></i>&ensp; <span>Hotel</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/hotel"><i class="fas fa-chevron-circle-right"></i>&ensp; List Hotel</a></li>
            <li><a href="#"><i class="fas fa-chevron-circle-right"></i>&ensp; Hotel Room Facility</a></li>
            <li><a href="/roomtype"><i class="fas fa-chevron-circle-right"></i>&ensp; Hotel Room Type</a></li>
          </ul>
        </li>
        
        <li class="{{ request()->is('visa') ? 'active' : '' }}"><a href="/visa"><i class="fab fa-vimeo-v"></i> &ensp; <span>Visa</span></a></li>
        <li class="{{ request()->is('tiket pesawat') ? 'active' : '' }}"><a href=""><i class="fas fa-ticket-alt"></i>&ensp; <span>Tiket Pesawat</span></a></li>
        <li class="{{ request()->is('promo') ? 'active' : '' }}"><a href="/listpromo"><i class="fa fa-edit"></i> <span>List Promo</span></a></li>
        <li class="{{ request()->is('list bank') ? 'active' : '' }}"><a href="/listbank"><i class="fa fa-edit"></i> <span>List Bank</span></a></li>
        <li class="{{ request()->is('payment') ? 'active' : '' }}"><a href="/typepayment"><i class="fa fa-book"></i> <span>Payment</span></a></li>
        <li class="{{ request()->is('list travel') ? 'active' : '' }}"><a href="/registravel"><i class="fa fa-edit"></i> <span>List Travel </span></a></li>
        <li class="{{ request()->is('komisi') ? 'active' : '' }}"><a href="/komisi"><i class="fa fa-edit"></i> <span>Komisi </span></a></li>
        <li class="{{ request()->is('transaksi') ? 'active' : '' }}"><a href="/detailtransaksi"><i class="fa fa-edit"></i> <span>Transaksi </span></a></li>
        

        {{-- <li class="header">TRANSAKSI</li> --}}
        <li class="treeview">
          <a href="">
            <i class="fa fa-book"></i> <span>User Management</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="/transaksihaji"><i class="fas fa-chevron-circle-right"></i>&ensp; Haji </a></li>
            <li><a href="/transaksiumroh"><i class="fas fa-chevron-circle-right"></i>&ensp; Umroh </a></li>
            <li><a href=""><i class="fas fa-chevron-circle-right"></i>&ensp; Tour </a></li>
            <li><a href=""><i class="fas fa-chevron-circle-right"></i>&ensp; LA </a></li>
            <li><a href=""><i class="fas fa-chevron-circle-right"></i>&ensp; Hotel </a></li>
            <li><a href=""><i class="fas fa-chevron-circle-right"></i>&ensp; Visa </a></li>
            <li><a href=""><i class="fas fa-chevron-circle-right"></i>&ensp; Tiket Pesawat </a></li>
			<li><a href="/customer"><i class="fas fa-chevron-circle-right"></i>&ensp; Customer List </a></li>
			<li><a href="/userlist"><i class="fas fa-chevron-circle-right"></i>&ensp; User Login </a></li>
          </ul>
        </li>
        
      </ul>
  
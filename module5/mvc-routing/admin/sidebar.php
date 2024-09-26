<div id="layoutSidenav">
<div id="layoutSidenav_nav">
<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
<div class="sb-sidenav-menu">
<div class="nav">
<div class="sb-sidenav-menu-heading">Burger Kings Admin</div>
<a class="nav-link" href="<?php echo $mainurl;?>Dashboard">
<div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
Burger Dashboard
</a>
<div class="sb-sidenav-menu-heading">BurgerKing Sidebar</div>
<a class="nav-link" href="charts.html">
<div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
Manage Customers
</a>

<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
<div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
Burger Category
<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
<nav class="sb-sidenav-menu-nested nav">
<a class="nav-link" href="<?php echo $mainurl;?>addburger-category">Add Burger</a>
<a class="nav-link" href="<?php echo $mainurl;?>manageburger-category">Manage Burger</a>
</nav>
</div>


<a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts1" aria-expanded="false" aria-controls="collapseLayouts">
<div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
Burger Food
<div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
</a>
<div class="collapse" id="collapseLayouts1" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
<nav class="sb-sidenav-menu-nested nav">
<a class="nav-link" href="<?php echo $mainurl;?>addburger-food">Ad BurgerFood</a>
<a class="nav-link" href="<?php echo $mainurl;?>manageburger-food">Manage BurgerFood</a>
</nav>
</div>


<div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
</div>

<a class="nav-link" href="charts.html">
<div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
Manage Orders
</a>
<a class="nav-link" href="tables.html">
<div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
Manage Contacts
</a>
</div>
</div>
<div class="sb-sidenav-footer">
<div class="small">Logout here <span class="fa fa-power-off"></span></div>
</div>
</nav>
</div>

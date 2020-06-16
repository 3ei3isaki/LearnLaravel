<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
     <a class="navbar-brand" href="index.html">Mei News Admin</a>
     <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
               <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="/LearnLaravel/public/admin">
                         <i class="fa fa-fw fa-tachometer-alt"></i>
                         <span class="nav-link-text">Dashboard</span>
                    </a>
               </li>
               <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="/LearnLaravel/public/admin/news">
                         <i class="fa fa-fw fa-newspaper"></i>
                         <span class="nav-link-text">News</span>
                    </a>
               </li>
               <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                    <a class="nav-link" href="/LearnLaravel/public/admin/categorys">
                         <i class="fa fa-fw fa-sitemap"></i>
                         <span class="nav-link-text">Category</span>
                    </a>
               </li>
          </ul>
          <ul class="navbar-nav sidenav-toggler">
               <li class="nav-item">
                    <a class="nav-link text-center" id="sidenavToggler">
                         <i class="fa fa-fw fa-angle-left"></i>
                    </a>
               </li>
          </ul>
          <ul class="navbar-nav ml-auto">
               <li class="nav-item">
                    <a class="nav-link" href="/LearnLaravel/public/auth/logout">Hi! <span class="text-success">{{ Auth::user()['name'] }}</span> | Đăng xuất</a>
               </li>
          </ul>
     </div>
</nav>
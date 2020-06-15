<!-- Breadcrumbs-->
<ol class="breadcrumb">
     <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
     </li>
</ol>
<!-- Icon Cards-->
<div class="row">
     <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-100">
               <div class="card-body">
                    <div class="card-body-icon">
                         <i class="fa fa-fw fa-comments"></i>
                    </div>
                    <div class="mr-5">{{ $data['news_count'] }} Tin tức</div>
               </div>
               <a class="card-footer text-white clearfix small z-1" href="admin/news">
                    <span class="float-left">Chi tiết</span>
                    <span class="float-right">
                         <i class="fa fa-angle-right"></i>
                    </span>
               </a>
          </div>
     </div>
     <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-100">
               <div class="card-body">
                    <div class="card-body-icon">
                         <i class="fa fa-fw fa-list"></i>
                    </div>
                    <div class="mr-5">{{ $data['categorys_count'] }} Danh mục</div>
               </div>
               <a class="card-footer text-white clearfix small z-1" href="admin/categorys">
                    <span class="float-left">Chi tiết</span>
                    <span class="float-right">
                         <i class="fa fa-angle-right"></i>
                    </span>
               </a>
          </div>
     </div>
</div>
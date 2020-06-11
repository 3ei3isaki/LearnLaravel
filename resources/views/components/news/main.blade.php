<div class="container">
     <div class="row bg-light py-3 rounded my-3">
          <div class="col-12">
               <h3 class="text-primary text-center text-lg-left pl-4"><i class="fa fa-newspaper" aria-hidden="true"></i>
                    Tin tức mới: danh mục {{ $cate_name }}</h3>
               <hr>
          </div>

          <div class="col-lg-12 my-1 mx-auto pb-4">
               @include('components.home.medium-item')
          </div>
     </div>
</div>
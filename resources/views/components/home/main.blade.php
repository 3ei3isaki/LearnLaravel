@include('components.home.category')
<div class="container">
     <div class="row bg-light py-3 rounded my-3">
          <div class="col-12">
               <h3 class="text-primary text-center text-lg-left pl-4"><i class="fa fa-newspaper" aria-hidden="true"></i>
                    Tin mới</h3>
               <hr>
          </div>
          <div class="col-lg-9 my-1 mx-auto">
               @include('components.home.large-item')
          </div>
          <div class="col-lg-3 my-1 mx-auto" style="border-left: #ddd solid 1px;">
               @include('components.home.small-item')
          </div>
     </div>
</div>
<div class="container">
     <div class="row bg-light py-3 rounded my-3">
          <div class="col-lg-12 my-1 mx-auto pb-4">
               @include('components.home.medium-item')
          </div>
     </div>
</div>
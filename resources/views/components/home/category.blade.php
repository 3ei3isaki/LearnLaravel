<div class="container">
     <div class="row bg-light py-3 rounded my-3">
          <div class="col-12">
               <h3 class="text-primary text-center text-lg-left pl-4"><i class="fa fa-stream" aria-hidden="true"></i>
                    Danh mục</h3>
               <hr>
          </div>
          @foreach ($categorys_data as $item)
          <div class="col-lg-3 col-sm-6 my-1">
               <a href="news/category/{{ $item['id'] }}" class="btn btn-light w-100">
                    <h5 class="ms-white-space-nowrap d-inline">{{ $item['name'] }}</h5>
               </a>
          </div>
          @endforeach
     </div>
</div>
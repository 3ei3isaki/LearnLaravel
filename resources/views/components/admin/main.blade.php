<!-- Navigation-->
<div class="content-wrapper">
     <div class="container-fluid">
          <div class="card mb-3">
               <div class="card-header">
                    <i class="fa fa-table"></i> {{ $page }}
               </div>
               <div class="card-body">
                    <div class="table-responsive">
                         @switch ($page)
                         @case ('home')
                         @include('components.admin.dashboard')
                         @break
                         @case ('news')
                         @include('components.admin.table-news')
                         @break
                         @case ('add_news')
                         @include('components.admin.add-news')
                         @break
                         @case ('edit_news')
                         @include('components.admin.edit-news')
                         @break
                         @case ('categorys')
                         @include('components.admin.table-categorys')
                         @break
                         @case ('add_categorys')
                         @include('components.admin.add-categorys')
                         @break
                         @case ('edit_categorys')
                         @include('components.admin.edit-categorys')
                         @break
                         @endswitch
                    </div>
               </div>
          </div>
          <!-- /.content-wrapper-->
          <footer class="sticky-footer">
               <div class="container">
                    <div class="text-center">
                         <small>Mei News @ Đức Thọ</small>
                    </div>
               </div>
          </footer>
          <!-- Scroll to Top Button-->
          <a class="scroll-to-top rounded" href="#page-top">
               <i class="fa fa-angle-up"></i>
          </a>
          <!-- Logout Modal-->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                    <div class="modal-content">
                         <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                   <span aria-hidden="true">×</span>
                              </button>
                         </div>
                         <div class="modal-footer">
                              <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                              <a class="btn btn-primary" href="login.html">Logout</a>
                         </div>
                    </div>
               </div>
          </div>
     </div>
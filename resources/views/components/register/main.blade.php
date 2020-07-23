<div class="main container my-4">
     <div class="row justify-content-center p-4">
          <div class="col-lg-6">
               <div class="display-4 text-center">Đăng Ký</div>
               <form action="/register" class="bg-light rounded p-4 mt-4" method="post" style="box-shadow: 0 5px 15px -10px;">
                    @csrf
                    @if ($errors->any())
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">
                         {{ $error }}
                    </div>
                    @endforeach
                    @endif
                    <div class="form-group">
                         <label for="name">Name</label>
                         <input type="text" class="form-control" id="name" name="name" placeholder="Nhập Tên" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                         <label for="email">Email</label>
                         <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                         <label for="password">Password</label>
                         <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Submit</button>
               </form>
          </div>
     </div>
</div>

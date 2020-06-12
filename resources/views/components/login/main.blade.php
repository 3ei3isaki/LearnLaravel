<div class="main container my-4">
     <div class="row justify-content-center p-4">
          <div class="col-lg-6">
               <div class="display-4 text-center">Đăng Nhập</div>
               <form action="authenticate" class="bg-light rounded p-4 mt-4" method="post" style="box-shadow: 0 5px 15px -10px;">
                    @csrf
                    <div class="form-group">
                         <label for="email">Email</label>
                         <input type="email" class="form-control" id="email" name="email" placeholder="Nhập email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                         <label for="password">Password</label>
                         <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
               </form>
          </div>
     </div>
</div>
<h1 class="display-4 text-center text-primary">Thêm danh mục</h1>

<form action="add" method="post" class="w-100 py-4">
     @csrf
     <div class="form-group">
          <label for="name">Tên danh mục</label>
          @if ($err != null)
          <div class="alert alert-danger" role="alert">
               {{ $err }}
          </div>
          @endif
          <input name="name" type="text" class="form-control" id="name" placeholder="Nhập tên danh mục" value="{{ old('name') }}">
     </div>
     <button name="submit" type="submit" class=" w-100 btn btn-primary">Thêm</button>
</form>
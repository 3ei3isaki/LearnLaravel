<h1 class="display-4 text-center text-primary">Sửa danh mục</h1>

<form action="{{ $categorys_item['id'] }}" method="post" class="w-100 py-4">
     @csrf
     @method ('PUT')
     <div class="form-group">
          <label for="name">Tên danh mục</label>
          @if ($err != null)
          <div class="alert alert-danger" role="alert">
               {{ $err }}
          </div>
          @endif
          <input name="name" type="text" class="form-control" id="name" placeholder="Nhập tên danh mục" value="{{ $categorys_item['name'] }}">
     </div>

     <button name="submit" type="submit" class=" w-100 btn btn-primary">Sửa</button>
</form>
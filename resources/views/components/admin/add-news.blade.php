<h1 class="display-4 text-center text-primary">Thêm sản phẩm</h1>

<form action="add" method="post" class="w-100 py-4">
     @csrf
     <div class="form-group">
          <label for="title">Tiêu đề</label>
          <input name="title" type="text" class="form-control" id="title" placeholder="Nhập tiêu đề tin tức" value="{{ old('title') }}">
     </div>
     <div class="form-group">
          <label for="cateId">Danh mục</label>
          <select name="cate_id" class="form-control" id="cateId">
               <option value="1" selected>Chọn danh mục</option>
               <?php foreach ($category_data as $item) { ?>
                    <option value="<?php echo $item["id"] ?>" <?php if (old('cate_id') == $item["id"]) echo "selected" ?>><?php echo $item["name"] ?></option>
               <?php } ?>
          </select>
     </div>
     <div class="form-group">
          <label for="info">Thông tin</label>
          <input name="info" type="text" class="form-control" id="info" placeholder="Nhập thông tin" value="{{ old('info') }}">
     </div>
     <div class="form-group">
          <label for="description">Mô tả</label>
          <input type="text" class="form-control" id="description" name="description" placeholder="Nhập mô tả tin tức" value="{{ old('description') }}">
     </div>
     <div class="form-group">
          <label for="url">URL</label>
          <input name="url" class="form-control" id="url" placeholder="Nhập URL tới trang tin tức" value="{{ old('url') }}"></input>
     </div>
     <div class="form-group">
          <label for="image">Ảnh minh họa</label>
          <input name="image_url" class="form-control" id="image" placeholder="Nhập URL ảnh minh họa" value="{{ old('image_url') }}"></input>
     </div>
     <button name="submit" type="submit" class=" w-100 btn btn-primary">Thêm</button>
</form>
<h1 class="display-4 text-center text-primary">Sửa sản phẩm</h1>
@if ($err != null)
<div class="alert alert-danger" role="alert">
     {{ $err }}
</div>
@endif
<form action="{{ $news_item['id'] }}" method="post" class="w-100 py-4">
     @csrf
     @method ('PUT')
     <div class="form-group">
          <label for="title">Tiêu đề</label>
          <input name="title" type="text" class="form-control" id="title" placeholder="Nhập tiêu đề tin tức" value="{{ $news_item['title'] }}">
     </div>
     <div class="form-group">
          <label for="cateId">Danh mục</label>
          <select name="cate_id" class="form-control" id="cateId">
               <option value="1" selected>Chọn danh mục</option>
               <?php foreach ($category_data as $item) { ?>
                    <option value="<?php echo $item["id"] ?>" <?php if ($news_item['cate_id'] == $item["id"]) echo "selected" ?>><?php echo $item["name"] ?></option>
               <?php } ?>
          </select>
     </div>
     <div class="form-group">
          <label for="info">Thông tin</label>
          <input name="info" type="text" class="form-control" id="info" placeholder="Nhập thông tin" value="{{ $news_item['info'] }}">
     </div>
     <div class="form-group">
          <label for="description">Mô tả</label>
          <input type="text" class="form-control" id="description" name="description" placeholder="Nhập mô tả tin tức" value="{{ $news_item['description'] }}">
     </div>
     <div class="form-group">
          <label for="url">URL</label>
          <input name="url" class="form-control" id="url" placeholder="Nhập URL tới trang tin tức" value="{{ $news_item['url'] }}"></input>
     </div>
     <div class="form-group">
          <label for="image">Ảnh minh họa</label>
          <input name="image_url" class="form-control" id="image" placeholder="Nhập URL ảnh minh họa" value="{{ $news_item['image_url'] }}"></input>
     </div>
     <button name="submit" type="submit" class=" w-100 btn btn-primary">Sửa</button>
</form>
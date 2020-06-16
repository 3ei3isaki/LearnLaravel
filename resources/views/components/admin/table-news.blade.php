<a href="news/add" class="btn btn-primary w-100 mb-4">Thêm</a>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="table-layout: fixed;">
     <thead>
          <tr>
               <th class="text-center" width="50px">ID</th>
               <th style="width: 150px">Tiêu đề</th>
               <th style="width: 300px">Mô tả</th>
               <th style="width: 150px">Thông tin</th>
               <th style="width: 130px">ID Danh mục</th>
               <th style="width: 90px">URL</th>
               <th style="width: 95px">URL Ảnh</th>
               <th>Thao tác</th>
          </tr>
     </thead>
     <tbody>
          @foreach ($data as $item)
          <tr>
               <td style="vertical-align: middle;" class="text-center">{{ $item['id'] }}</td>
               <td style="vertical-align: middle; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">{{ $item['title'] }}</td>
               <td style="vertical-align: middle; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">{{ $item['description'] }}</td>
               <td style="vertical-align: middle; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">{{ $item['info'] }}</td>
               <td style="vertical-align: middle;" class="text-center">{{ $item['cate_id'] }}</td>
               <td style="vertical-align: middle; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">{{ $item['url'] }}</td>
               <td style="vertical-align: middle; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">{{ $item['image_url'] }}</td>
               <td>
                    <a href=" news/edit/{{ $item['id'] }}" class="btn btn-success">Sửa</a>
                    <button onclick="deleteNewsItem(`{{ $item['id'] }}`)" class="btn btn-danger">Xóa</button>
               </td>
          </tr>
          @endforeach
     </tbody>
</table>
{{ $data->links() }}
<a href="categorys/add" class="btn btn-primary w-100 mb-4">Thêm</a>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" style="table-layout: fixed;">
     <thead>
          <tr>
               <th class="text-center" width="50px">ID</th>
               <th>Tên danh mục</th>
               <th>Thao tác</th>
          </tr>
     </thead>
     <tbody>
          @foreach ($data as $item)
          <tr>
               <td style="vertical-align: middle;" class="text-center">{{ $item['id'] }}</td>
               <td style="vertical-align: middle; white-space: nowrap; text-overflow: ellipsis; overflow: hidden;">{{ $item['name'] }}</td>
               <td>
                    <a href="categorys/delete/{{ $item['id'] }}" id="btnEditItem" class="btn btn-success">Sửa</a>
                    <a href="categorys/edit/{{ $item['id'] }}" id="btnDeleteItem" class="btn btn-danger">Xóa</a>
               </td>
          </tr>
          @endforeach
     </tbody>
</table>
{{ $data->links() }}
# Website tin tức xây dựng bằng Laravel Framework

## MeiNews

> ### Sử dụng
>
> -   Yêu cầu
>     -   Xampp v3.2.2 trở lên
>     -   Composer
>     -   Thêm php của Xammp vào PATH
> -   Clone repo này về bỏ vào thư mục htdocs rồi làm theo các bước sau!
>
> 1. Tạo 1 database mới
> 2. Chạy CMD tại thư mục gốc của project
> 3. cp .env.example .env
> 4. Mở file .env và cầu hình DB_DATABASE= theo tên database vừa tạo
> 5. composer install
> 6. php artisan migrate
> 7. Cấu hình vHost cùa apache trong Xampp
>     - File `xampp\apache\conf\extra\httpd-vhosts`

```
<VirtualHost *:80>
    DocumentRoot "D:/xampp/htdocs/LearnLaravel/public"
    ServerName meinews.test
    <Directory "D:/xampp/htdocs/LearnLaravel/public">
    </Directory>
</VirtualHost>
```

> 8. Thêm dòng sau vào file host `C:\Windows\System32\drivers\etc\hosts`
>     - `127.0.0.1 meinews.test`
> 9. Vào trình duyệt nhập URL `meinews.test` chạy thử
>     - Nếu báo lỗi thiều key thì chạy lệnh `php artisan key:generate`
> 10. Đăng ký tài khoản
> 11. Để vào được `/admin` cần đăng ký 1 tài khoản rồi vào `database` bảng `users` sửa trường `access` thành `1`
> 12. Tạo 1 category mới tên là "Không xác định"
> 13. Chạy lệnh `php artisan crawler:news` để lấy tin mới về Database từ API

```
Route List

+--------+----------+-----------------------------+-----------------------+-------------------------------------------------------+-------------+
| Domain | Method   | URI                         | Name                  | Action                                                | Middleware  |
+--------+----------+-----------------------------+-----------------------+-------------------------------------------------------+-------------+
|        | GET|HEAD | /                           | home                  | App\Http\Controllers\HomeController@index             | web         |
|        | GET|HEAD | admin                       | admin                 | App\Http\Controllers\AdminController@index            | web         |
|        |          |                             |                       |                                                       | authRequire |
|        | GET|HEAD | admin/categorys             | adminCategorys        | App\Http\Controllers\AdminCategorysController@index   | web         |
|        |          |                             |                       |                                                       | authRequire |
|        | POST     | admin/categorys/add         | adminCategorysPostAdd | App\Http\Controllers\AdminCategorysController@postAdd | web         |
|        |          |                             |                       |                                                       | authRequire |
|        | GET|HEAD | admin/categorys/add         | adminCategorysGetAdd  | App\Http\Controllers\AdminCategorysController@getAdd  | web         |
|        |          |                             |                       |                                                       | authRequire |
|        | DELETE   | admin/categorys/delete/{id} | adminCategorysDelete  | App\Http\Controllers\AdminCategorysController@delete  | web         |
|        |          |                             |                       |                                                       | authRequire |
|        | PUT      | admin/categorys/edit/{id}   | adminNewsPutEdit      | App\Http\Controllers\AdminCategorysController@putEdit | web         |
|        |          |                             |                       |                                                       | authRequire |
|        | GET|HEAD | admin/categorys/edit/{id}   | adminCategorysGetEdit | App\Http\Controllers\AdminCategorysController@getEdit | web         |
|        |          |                             |                       |                                                       | authRequire |
|        | GET|HEAD | admin/news                  | adminNews             | App\Http\Controllers\AdminNewsController@index        | web         |
|        |          |                             |                       |                                                       | authRequire |
|        | GET|HEAD | admin/news/add              | adminNewsGetAdd       | App\Http\Controllers\AdminNewsController@getAdd       | web         |
|        |          |                             |                       |                                                       | authRequire |
|        | POST     | admin/news/add              | adminNewsPostAdd      | App\Http\Controllers\AdminNewsController@postAdd      | web         |
|        |          |                             |                       |                                                       | authRequire |
|        | DELETE   | admin/news/delete/{id}      | adminNewsDelete       | App\Http\Controllers\AdminNewsController@delete       | web         |
|        |          |                             |                       |                                                       | authRequire |
|        | GET|HEAD | admin/news/edit/{id}        | adminNewsGetEdit      | App\Http\Controllers\AdminNewsController@getEdit      | web         |
|        |          |                             |                       |                                                       | authRequire |
|        | PUT      | admin/news/edit/{id}        | adminNewsPutEdit      | App\Http\Controllers\AdminNewsController@putEdit      | web         |
|        |          |                             |                       |                                                       | authRequire |
|        | GET|HEAD | api/user                    |                       | Closure                                               | api         |
|        |          |                             |                       |                                                       | auth:api    |
|        | POST     | auth/authenticate           | auth                  | App\Http\Controllers\AuthController@authenticate      | web         |
|        | GET|HEAD | auth/login                  | login                 | App\Http\Controllers\AuthController@login             | web         |
|        | GET|HEAD | auth/logout                 | logout                | App\Http\Controllers\AuthController@logout            | web         |
|        | GET|HEAD | news/category/{categoryId?} | categoryNews          | App\Http\Controllers\NewsController@category          | web         |
|        | GET|HEAD | news/{page?}                | news                  | App\Http\Controllers\NewsController@index             | web         |
|        | GET|HEAD | register                    | registerView          | App\Http\Controllers\RegisterController@index         | web         |
|        | POST     | register                    | register              | App\Http\Controllers\RegisterController@register      | web         |
+--------+----------+-----------------------------+-----------------------+-------------------------------------------------------+-------------+
```

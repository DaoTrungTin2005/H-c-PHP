<?php
//➡ Nếu ai cố gắng truy cập appload.php trực tiếp qua URL, file sẽ tự thoát ra.
defined('APPPATH') or exit('Không được quyền truy cập phần này');

// Include file config/database
require CONFIGPATH . DIRECTORY_SEPARATOR . 'database.php';

// Include file config/config
require CONFIGPATH . DIRECTORY_SEPARATOR . 'config.php';

// Include file config/email
require CONFIGPATH . DIRECTORY_SEPARATOR . 'email.php';

// Include file config/autoload
require CONFIGPATH . DIRECTORY_SEPARATOR . 'autoload.php';

// Include core database (require file database ở đây mà ko ở autoload vì đậy là file cốt lõi)
// require database.php trong appload	=> Là file quan trọng nhất → cần load thủ công để kết nối DB
// autoload['lib'] = ['validation']	=> Là file phụ thêm → bạn muốn dùng mới khai báo
require LIBPATH . DIRECTORY_SEPARATOR . 'database.php';

// Include core base

require COREPATH . DIRECTORY_SEPARATOR . 'base.php';


//===============================================================================================

// 🔸 Tự động nạp các file helper và lib mà bạn đã khai báo trong autoload.php
// 🔸 Không cần require() thủ công nữa — hệ thống tự duyệt và nạp file


// Ví dụ trong config/autoload.php bạn viết:

// $autoload['helper'] = ['url', 'data'];
// $autoload['lib'] = ['validation', 'pagging'];

// 📌 $autoload là 1 mảng 2 cấp:
// $autoload = [
//   'helper' => ['url', 'data'],
//   'lib' => ['validation', 'pagging']
// ];

// ☑ Kiểm tra chắc chắn $autoload là một mảng.
if (is_array($autoload)) {

    //   ➡ Duyệt từng nhóm:
    // $type = 'helper', $list_auto = ['url', 'data']
    // $type = 'lib', $list_auto = ['validation', 'pagging']
    foreach ($autoload as $type => $list_auto) {

        // ☑ Chỉ tiếp tục nếu danh sách không rỗng.
        if (!empty($list_auto)) {

            // ➡ Duyệt từng tên cụ thể trong danh sách đó
            // ➡ Gọi hàm load('helper', 'url') → PHP sẽ tự động require file helper/url.php
            foreach ($list_auto as $name) {
                load($type, $name);
            }
        }
    }
}


// ✅ Hàm load() hoạt động thế nào?
// Trong core/base.php, có thể bạn đã có hàm như vầy:

// function load($type, $name) {
//     if ($type == 'lib')
//         $path = LIBPATH . DIRECTORY_SEPARATOR . "{$name}.php";
//     if ($type == 'helper')
//         $path = HELPERPATH . DIRECTORY_SEPARATOR . "{$name}.php";
//     if (file_exists($path)) {
//         require "$path";
//     } else {
//         echo "{$type}:{$name} không tồn tại";
//     }
// } 
// }
// 🟢 Hàm load() sẽ xác định đường dẫn file helper/lib và tự require.


//
//connect db
// ✅ Câu hỏi: "Sao nó lại viết ở đây?"
// 👉 Vì sau khi đã require file database.php (nằm trong libraries/)
// → Trong đó có hàm db_connect()
// → Giờ gọi hàm này để kết nối đến MySQL ngay khi hệ thống khởi động
// ➡ Viết ở đây = tự động kết nối database ngay khi chạy website, khỏi cần controller gọi lại nữa.

db_connect($db);

require COREPATH . DIRECTORY_SEPARATOR . 'router.php';

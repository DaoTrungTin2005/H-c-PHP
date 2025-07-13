<?php
// File này nằm trong thư mục config/
// Nó có nhiệm vụ khai báo các thư viện (libraries) và các hàm phụ trợ (helpers) mà bạn muốn tự động load khi app khởi động, khỏi phải require thủ công từng file một

// 🔸 Dòng này để bảo vệ file, nếu ai đó cố gắng truy cập file autoload.php trực tiếp trên trình duyệt (ví dụ: http://localhost/project/config/autoload.php) → sẽ thoát luôn và hiện: “Không được quyền truy cập phần này”
defined('APPPATH') or exit('Không được quyền truy cập phần này');

/*
| -------------------------------------------------------------------
| AUTO-LOADER
| -------------------------------------------------------------------
| Đây là những phần được load tự động khi ứng dụng khởi động
|
| 1. Libraries
| 2. Helper file
|
*/

/*
 * ------------------------------------------------------------------
 * Autoload Libraries (CẦN DÙNG THÌ MỚI KHAI BÁO, CÒN NHỮNG CÁI KHAI BÁO CỐT LÕI THÌ Ở Core/appload)
 * ------------------------------------------------------------------
 * Ví dụ: 
 * $autoload['lib'] = array('validation', 'pagging');
 */

//  🔸 Ví dụ:
// $autoload['lib'] = array('database', 'validation');
// → Thì PHP sẽ tự động gọi:

// require LIBPATH . '/database.php';
// require LIBPATH . '/validation.php';

$autoload['lib'] = array();

/*
 * ------------------------------------------------------------------
 * Autoload Helper
 * ------------------------------------------------------------------
 * Ví dụ:
 * $autoload['helper'] = array('data','string');
 */

//  🔸 Ví dụ:

// $autoload['lib'] = array('database', 'validation');
// → Thì PHP sẽ tự động gọi:

// require LIBPATH . '/database.php';
// require LIBPATH . '/validation.php';

// Trong appload.php, bạn có đoạn:
// if (is_array($autoload)) {
//     foreach ($autoload as $type => $list_auto) {
//         if (!empty($list_auto)) {
//             foreach ($list_auto as $name) {
//                 load($type, $name);
//             }
//         }
//     }
// }
// ➡ Đoạn này đọc cái mảng $autoload ở trên, rồi gọi hàm load() để require đúng file bạn cần.


$autoload['helper'] = array('data', 'url');
<?php
//Triệu gọi đến file xử lý thông qua request


// 🔍 Mục đích: Xác định đường dẫn đến file controller cần load

// 🧠 Ví dụ:
// Bạn vào đường dẫn:
// http://localhost/?mod=page&controller=index&action=detail
// → get_module() = 'page'
// → get_controller() = 'index'

// Kết quả:
// $request_path = 'modules/page/controllers/indexController.php';

$request_path = MODULESPATH . DIRECTORY_SEPARATOR . get_module() . DIRECTORY_SEPARATOR . 'controllers' . DIRECTORY_SEPARATOR . get_controller().'Controller.php';


// 📌 Nếu controller tồn tại thì require vào để dùng.
// ❌ Nếu không → in lỗi: "Không tìm thấy: đường dẫn..."
if (file_exists($request_path)) {
    require $request_path;
} else {
    echo "Không tìm thấy:$request_path ";
}

// 📌 Gộp tên hành động với hậu tố Action
// → Tạo ra tên hàm cụ thể cần gọi trong controller.
$action_name = get_action().'Action';




// ✅ 1. Trước hết: $action_name là gì?
// Ngay trên dòng trước, bạn có:
// $action_name = get_action().'Action';
// 👉 Nếu bạn có URL là:
// ?mod=page&controller=index&action=detail

// Thì:
// get_action() → "detail"
// $action_name → "detailAction"

// ✅ 2. Tiếp theo: call_function(...) là gì?
// Bạn đã định nghĩa nó trong base.php như sau:

// function call_function($list_function = array()) {
//     if (is_array($list_function)) {
//         foreach ($list_function as $f) {
//             if (function_exists($f)) {
//                 $f();
//             }
//         }
//     }
// }
// 📌 Ý nghĩa: Hàm này duyệt qua danh sách tên hàm rồi gọi từng cái nếu nó có tồn tại.

// ✅3.  Vậy call_function(array('construct', $action_name)); làm gì?
// Giả sử:
// $action_name = 'detailAction'

// → Khi gọi:
// call_function(['construct', 'detailAction']);
// 👉 Thì nó sẽ:
// Gọi hàm construct()
// Gọi hàm detailAction()

// ➡ Đây là 2 hàm nằm trong controller, ví dụ indexController.php.

// ✅ 4. Nhưng tại sao phải gọi 2 hàm?
// Hàm	Mục đích
// construct()	Được gọi trước, để chuẩn bị: load model, khởi tạo biến,...
// detailAction()	Là hành động chính được xử lý theo yêu cầu URL

call_function(array('construct', $action_name));
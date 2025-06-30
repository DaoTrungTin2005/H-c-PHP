<?php
// . Ngoặc Kép (" ") - "Interpolation" (Nội suy/Phân tích biến)
// Đặc điểm: Khi bạn sử dụng ngoặc kép, 
// PHP sẽ tìm kiếm các biến (bắt đầu bằng $) và các ký tự thoát đặc biệt bên trong chuỗi 
// và thay thế chúng bằng giá trị tương ứng. Quá trình này còn được gọi là "parsing" hoặc "interpolation".

// Ví dụ về ký tự thoát:
// Ngoặc kép hỗ trợ các ký tự thoát đặc biệt như:
// \n: Xuống dòng mới (newline)
// \t: Dấu tab
// \\: Dấu gạch ngược (backslash)
// \": Dấu ngoặc kép
// \$: Dấu đô la (nếu bạn muốn hiển thị $ chứ không phải là biến)

$myWeb = "Ronaldoooo";
$Name = 'Phan hahah ';

echo "Tên tôi là : {$myWeb}";
echo "Tên tôi là : {$Name}"



//  Ngoặc Đơn (' ') - "Literal" (Chuỗi ký tự nguyên thủy)
// Đặc điểm: Khi bạn sử dụng ngoặc đơn, PHP sẽ coi tất cả mọi thứ bên trong chuỗi là các ký tự nguyên thủy (literal characters). 
// Nó sẽ không phân tích các biến hay hầu hết các ký tự thoát. ?>
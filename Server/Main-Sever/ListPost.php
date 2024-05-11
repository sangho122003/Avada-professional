<?php
require_once 'ConnectSQL.php'; // Kết nối tới cơ sở dữ liệu

// Truy vấn để lấy dữ liệu từ bảng 'post_avada'
$lietke_post = "SELECT `HoTen`, `CapTion`, `Image`, `Email` FROM `post_avada`";

// Thực thi truy vấn
$result = mysqli_query($con, $lietke_post);

// Kiểm tra xem truy vấn có thành công không
if ($result) {
    // Sử dụng hàm while để lặp qua tập kết quả
    while ($r = mysqli_fetch_assoc($result)) {
        // Hiển thị thông tin từ mỗi hàng
        echo '<tr>
                <td>' . $r['HoTen'] . '</td>
                <td>' . $r['CapTion'] . '</td>
                <td>' . $r['Image'] . '</td>
                <td>' . $r['Email'] . '</td>
              </tr>';
    }
} else {
    // Truy vấn thất bại
    echo "Lỗi: " . mysqli_error($con);
}
?>

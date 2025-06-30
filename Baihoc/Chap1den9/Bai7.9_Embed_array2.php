<?php
$listUser = array(
    1 => array('id' => 1, 'fullName' => 'Tín', 'age' => 30),
    2 => array('id' => 2, 'fullName' => 'Thuận', 'age' => 35),
);

function showArray($data)
{
    if (is_array($data)) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}


?>

<html>

<head>
    <title>Nhúng data mảng lên html</title>
</head>

<body>
    <h1>Danh sách users </h1>
    <?php if (!empty($listUser)) { ?>
    <table border="1">
        <thead>
            <tr>
                <td width="20">STT</td>
                <td width="20">Id</td>
                <td width="200">Ho va Ten</td>
                <td width="200">age</td>
            </tr>
        </thead>
        <tbody>
            <?php

                $temp = 0;
                foreach ($listUser as $user) {
                    $temp++;
                    // echo $user;
                    showArray($user);
                ?>

            <tr>
                <td>
                    <?php echo $temp ?>
                </td>
                <td>
                    <?php echo $user['id'] ?>
                </td>
                <td>
                    <?php echo $user['fullName'] ?>
                </td>
                <td>
                    <?php echo $user['age'] ?>
                </td>
            </tr>

            <?php
                }

            ?>

        </tbody>
    </table>

    <?php } else { ?>
    <p>Không tồn tại dữ liệu</p>
    <?php } ?>
</body>

</html>
<?php
$list_prime = array(2,3,5,7);



?><html>

<head>
    <title>Nhúng data mảng lên html</title>
</head>

<body>
    <h1>Danh sách số ng tố</h1>
    <table border="1">
        <thead>
            <tr>
                <td width="20">STT</td>
                <td width="200">So NGuyen To</td>
            </tr>
        </thead>
        <tbody>
            <?php
            $temp = 0 ;
            foreach ($list_prime as $item){
            $temp ++ ;
            echo $item;
                ?>

            <tr>
                <td>
                    <?php echo $temp?>
                </td>
                <td>
                    <?php echo $item?>
                </td>
            </tr>

            <?php } ?>

        </tbody>
    </table>

</body>

</html>
<?php 
if(isset($_POST['btn_reg'])){
    if(empty($_POST['rules'])){
        echo "Bạn cần xác nhận điều khoản";
    }
    else{
        $rule = $_POST['rules'];
        echo $rule;
    }
}
?>

<html>

<head>
    <title>Lấy dữ liệu từ check box</title>
</head>

<body>
    <h1>Đăng ký</h1>
    <form action="" method="POST">
        <p style="width: 400px; height: 100px; overflow-y: scroll;">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique, assumenda corrupti. Perferendis, numquam
            non sed dolor dolorem modi nisi consequatur, ex ratione sit veniam iste illo. Perspiciatis obcaecati porro
            repudiandae deleniti asperiores quas, vitae repellendus, debitis voluptate iure est temporibus eaque,
            possimus velit. Dolor nesciunt quibusdam itaque sequi quia est maxime aliquid corrupti voluptatum sint.
            Aliquid eum quisquam aperiam officiis tenetur dignissimos sit quasi laborum iure odio nesciunt aliquam
            eveniet a recusandae, ex in distinctio? Necessitatibus dolor eligendi et delectus tempora distinctio,
            provident fugit minima, non dolorum vero esse alias dignissimos nulla debitis! Deserunt qui dolores ad
            velit? Rem, repellendus.
        </p>
        <input type="checkbox" name="rules" value="yes" id="rules" />
        <label for="rules">Đồng ý</label> <br><br><br>
        <input type="submit" name='btn_reg' value='Register'>
    </form>
</body>

</html>
<?php
    session_start();
    include 'connect.php';
	if($_POST['email'] != '' && $_POST['password'] != '')
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
		$old = mysqli_query($conn,$sql);
		if( mysqli_num_rows($old) > 0 ){
            $_SESSION['user_email'] = $email;
            echo "<script>
                alert('Đăng nhập thành công!');
                window.location.href = 'index.php?action=main';
            </script>";
		} else{
            echo "<script>
                alert('Đăng nhập thất bại, vui lòng đăng nhập lại!');
                window.location.href = 'index.php';
            </script>";
        }
	}
?>

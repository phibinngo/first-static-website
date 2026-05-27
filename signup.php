<?php
    session_start();
    include 'connect.php';
	if($_POST['email'] != '' && $_POST['password'] != '')
	{
        $email = $_POST['email'];
		$password = $_POST['password'];
		$sql = "SELECT * FROM user WHERE email = '$email' ";
		$old = mysqli_query($conn,$sql);
		if( mysqli_num_rows($old) > 0 ){
			echo "<script>
                alert('Email này đã được sử dụng!');
                window.location.href = 'index.php';
            </script>";
		}
		$sql = "INSERT INTO user (email,password) VALUES ('$email','$password') ";
		mysqli_query($conn,$sql);
		//echo "Đã đăng ký thành công";
		echo "<script>
            alert('Đăng ký tài khoản thành công. Hãy đăng nhập lại!');
            window.location.href = 'index.php';
        </script>";                
	}
?>

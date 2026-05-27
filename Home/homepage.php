<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Việt Nam</title>
    <!--  Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--  Font Awesome chèn icon mxh -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!--  Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <link rel="stylesheet" href="./Home/homepage.css">
    <link rel="stylesheet" href="./Home/signup.css">
    <link rel="stylesheet" href="./Home/main_content.css">
    <link rel="stylesheet" href="./Home/signin.css">
    <link rel="stylesheet" href="./Home/member.css">
    <link rel="stylesheet" href="./Home/tour.css">
</head>

<body> 
    <div class="main-container">
        <!-- div chứa video -->
            <div class="video-wrapper">
                <div class="video-container">
                    <video autoplay muted loop playsinline>
                    <source src="./Home/vietnamtravel.mp4" type="video/mp4">
                    <source src="./Home/vietnamtravel.ogg" type="video/ogg">
                    Trình duyệt của bạn không hỗ trợ thẻ video.
                </video>
            </div>

            <nav class="navbar navbar-expand-sm bgheader " style="position: fixed; top: 0; left: 0; right: 0; z-index: 1; height: 65px;">
                <div class="container-fluid ">
                    <a href="https://vku.udn.vn/" class="navbar-brand">
                        <img src="./Home/LOGOVKU.png" alt="Logo VKU" width="120px" height="120px">
                    </a>

                    <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                        <ul class="navbar-nav bg-primary" style="font-weight: 500; font-size: 20px;">
                            <li class="nav-item"><a href="./" class="nav-link menu">Trang Chủ</a></li>
                            <li class="nav-item">
                                <button type="button" class="btn btn-link nav-link menu" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                                    Giới Thiệu
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="btn btn-link nav-link menu" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                                    Liên hệ
                                </button>
                            </li>
                            
                            <?php if (isset($_SESSION['user_email'])) { ?>
                                <?php echo "<li class='nav-item'><span class='btn btn-link nav-link'> Xin chào " . $_SESSION['user_email'] . "</span></li>"; ?>
                                <?php echo "<li class='nav-item'><a class='btn btn-link nav-link' href='index.php?action=main'>" . "Main" . "</a></li>"; ?>
                                <?php echo "<li class='nav-item'><a class='btn btn-link nav-link' href='logout.php'>" . "Đăng xuất" . "</a></li>"; ?>
                            <?php } else { ?>
                                <button type="button" class="btn btn:hover menu" data-bs-toggle="modal" data-bs-target="#loginModal">
                                    Đăng Nhập 
                                </button>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <!-- Main content -->
    <main class="container-fluid my-5">

        <!--Giới thiệu Việt Nam -->
        <section class="text-center mb-5" id="khamphavietnam">
            <h2 class="mb-3">Khám Phá Việt Nam - Đất Nước Hình Chữ S</h2>
            <p class="lead">
                Việt Nam là quốc gia nằm ở khu vực Đông Nam Á, sở hữu đường bờ biển dài hơn 3.200km, những cảnh quan thiên nhiên hùng vĩ, nền văn hóa lâu đời và con người thân thiện. Từ miền núi phía Bắc cho đến đồng bằng sông Cửu Long, mỗi vùng miền đều có nét đẹp riêng biệt khiến du khách say mê.
            </p>
            <img style="width: 80%; height: 50%;" src="./Home/images/newmapVN.jpg" class="img-fluid rounded mt-3" alt="Khám phá Việt Nam" style="max-height: 400px;">
        </section>

            <!-- Các địa danh -->
        <section class="my-5 text-center" id="diadanh">
            <h2 class="mb-4">Top Địa Danh Không Thể Bỏ Lỡ</h2>
            <div id="destination-container" class="row justify-content-center"></div>
        </section>

        <!-- Lễ hội, văn hóa -->
        <section class="my-5 text-center" id="lehoivanhoa">
        <h2 class="mb-4">Văn Hóa – Lễ Hội Đặc Sắc</h2>
        <div id="culture-container" class="row justify-content-center"></div>
        </section>

        <!--Đặc sản-->
        <section class="my-5 text-center" id="amthuc">
        <h2 class="mb-4">Ẩm Thực Việt Nam</h2>
        <div id="food-container" class="row justify-content-center"></div>
        </section>


        <!-- Các gói tour -->
        <section class="tour my-5">
            <h2 class="text-center mb-4">Các gói tour du lịch</h2>
            <div class="row g-4">
                <div class="col-md-4 d-flex">
                    <div class="tour-card p-3 border rounded bg-light position-relative w-100">
                        <div class="tour-image">
                            <img src="./Map/images/hanoi.jpg" class="rounded" alt="Tour Hà Nội">
                        </div>
                        <h4 class="mt-2">Tour khám phá Hà Nội</h4>
                        <p>Tham quan Hồ Gươm, Văn Miếu - Quốc Tử Giám và thưởng thức ẩm thực phố cổ.</p>
                        <br>
                        <h5 class="text-primary position-absolute bottom-0 start-1 p-2">3,500,000 VNĐ</h5>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="tour-card p-3 border rounded bg-light position-relative w-100">
                        <div class="tour-image">
                            <img src="./Map/images/laocai(sapa).jpg" class="rounded" alt="Tour Sapa">
                        </div>
                        <h4 class="mt-2">Tour Sapa - Fansipan</h4>
                        <p>Khám phá núi Fansipan, bản làng dân tộc và cảnh quan thiên nhiên tuyệt đẹp.</p>
                        <br>
                        <h5 class="text-primary position-absolute bottom-0 start-1 p-2">4,200,000 VNĐ</h5>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="tour-card p-3 border rounded bg-light position-relative w-100">
                        <div class="tour-image">
                            <img src="./Map/images/quangninh(vinhhalong).jpg" class="rounded" alt="Tour Hạ Long">
                        </div>
                        <h4 class="mt-2">Tour Hạ Long vịnh xanh</h4>
                        <p>Du ngoạn vịnh Hạ Long trên du thuyền, thăm hang động tuyệt đẹp.</p>
                        <br>
                        <h5 class="text-primary position-absolute bottom-0 start-1 p-2">2,800,000 VNĐ</h5>
                    </div>
                </div>
                <div class="col-md-4 d-flex">
                    <div class="tour-card p-3 border rounded bg-light position-relative w-100">
                        <div class="tour-image">
                            <img src="./Map/images/danang.jpg" class="rounded" alt="Tour Đà Nẵng">
                        </div>
                        <h4 class="mt-2">Tour Đà Nẵng</h4>
                        <p>Khám phá phố cổ Hội An, Cầu Vàng Bà Nà Hills và bãi biển Mỹ Khê.</p>
                        <br>
                        <h5 class="text-primary position-absolute bottom-0 start-1 p-2">4,500,000 VNĐ</h5>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="tour-card p-3 border rounded bg-light position-relative w-100">
                        <div class="tour-image">
                            <img src="./Map/images/buondon.jpg" class="rounded" alt="Tour Tây Nguyên">
                        </div>
                        <h4 class="mt-2">Tour Tây Nguyên huyền bí</h4>
                        <p>Thăm Buôn Đôn, Hồ Lắk và trải nghiệm văn hóa bản địa.</p>
                        <br>
                        <h5 class="text-primary position-absolute bottom-0 start-1 p-2">4,500,000 VNĐ</h5>
                    </div>
                </div>

                <div class="col-md-4 d-flex">
                    <div class="tour-card p-3 border rounded bg-light position-relative w-100">
                        <div class="tour-image">
                            <img src="./Map/images/vinhnhatrang.jpg" class="rounded" alt="Tour Nha Trang">
                        </div>
                        <h4 class="mt-2">Tour Nha Trang - biển xanh</h4>
                        <p>Tận hưởng vẻ đẹp của biển Nha Trang, lặn san hô và đảo Hòn Mun.</p>
                        <br>
                        <h5 class="text-primary position-absolute bottom-0 start-1 p-2">3,700,000 VNĐ</h5>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <script src="maincontent.js"></script>
    </div>

    <!-- Modal đăng nhập -->
    <div class="modal" id="loginModal">
        <div class="modal-dialog">
            <form method="post" action="./login.php">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">ĐĂNG NHẬP</h4>                            
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                            <label for="email">Email</label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
                            <label for="password">Password</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" id="checkpass"  onchange="checkpass()">
                            <label class="form-check-label" for="checkpass" onclick="checkpass()">Xem Mật Khẩu</label>
                        </div>
                    </div>
                        
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-danger" style="margin-left:50%;">Đăng Nhập</button>
                    </div>
                    <p style="text-align: center;">Nếu chưa có tài khoản, hãy 
                        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#myModal1">
                            Đăng Ký
                        </button>
                    tại đây </p>
                </div>
            </form>
        </div>
    </div>
    
    <!-- Modal Đăng Ký -->
    <div class="modal" id="myModal1">
            <div class="modal-dialog">
                <form method="post" action="./signup.php">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">Đăng Ký</h4>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <!-- <div class="mb-3">
                                <label for="fullname" class="form-label">Full Name:</label>
                                <input type="text" class="custom-input" id="fullname" placeholder="Enter your full name" required onchange="checkFullname()">
                                <p id="demo"></p>
                            </div> -->

                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="custom-input" id="email" name="email" placeholder="Enter your email" required >
                                <p id="demoEmail"></p>
                            </div>

                            <!-- <div class="mb-3">
                                <label for="age" class="form-label">Age:</label>
                                <input type="text" class="custom-input" id="age" placeholder="Enter your Age" required onchange="checkAge()">
                                <p id="demo1"></p>
                            </div> -->

                            <!-- <div class="mb-3">
                                <label for="username" class="form-label">Username:</label>
                                <input type="text" class="custom-input" id="username" placeholder="Enter your username" required onchange="checkUsername()">
                                <p id="demo2"></p>
                            </div> -->

                            <div class="mb-3">
                                <label for="password" class="form-label">Password:</label>
                                <input type="password" class="custom-input" id="password" name="password" placeholder="Enter your password" required >
                                <p id="demo3"></p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger">Đăng Ký</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    <!-- Modal giới thiệu -->

    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true"> 
        <div class="modal-dialog modal-xl" role="document"> 
            <div class="modal-content" style="background: linear-gradient(135deg, #d4e9ff, #f0f8ff); border-radius: 20px; box-shadow: 0 8px 24px rgba(0,0,0,0.15);">
                <!-- Bố cục nội dung -->
                <div class="modal-body" style="padding: 40px 30px;">
                    <div class="container">
                        <div class="row justify-content-center text-center"> <!-- Đưa nội dung ra giữa -->
                            <div class="col-lg-8">
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0 tieudegioithieu text-center" 
                                    style="color: #214E8C; font-weight: 700; letter-spacing: 3px; text-shadow: 1px 1px 2px #aac4ff;">
                                    Du Lịch Việt Nam
                                </h2>
                                <br>
                                <div class="divider-custom text-center" style="display: flex; align-items: center; justify-content: center; margin: 20px 0;">
                                    <div class="divider-custom-line" style="width: 40%; height: 2px; background-color: #2673e6; margin-right: 15px;"></div>
                                    <div class="divider-custom-icon">
                                        <img style="height: 200px; width: 250px; border-radius: 60px; box-shadow: 0 4px 15px rgba(38, 115, 230, 0.6);" src="./Home/quocki.png" alt="Hình ảnh du lịch Việt Nam">
                                    </div>
                                    <div class="divider-custom-line" style="width: 40%; height: 2px; background-color: #2673e6; margin-left: 15px;"></div>
                                </div>
                                <br>
                            </div>
                        </div>

                        <!-- Nội dung -->
                        <hr class="my-2" style="border-color: #a8c1ff;">
                        <p class="justify-content-center tieudenoidunggtweb text-center" 
                        style="color:#b12727; font-weight: 700; font-size: 28px; text-shadow: 1px 1px 1px #f9dede;">
                            Khám Phá Vẻ Đẹp Việt Nam
                        </p>
                        <hr class="my-2" style="border-color: #a8c1ff;">

                        <div class="container-sm" style="margin-top: 20px;">
                            <div class="noidunggtweb" style="color: #2c3e50; font-size: 20px; line-height: 1.7; font-weight: 500;">
                                <ol style="padding-left: 20px;">
                                    <li style="margin-bottom: 20px; font-weight: 600; font-size: 22px; color: #214E8C;">Thông tin chung</li>
                                    <div class="text-center" style="margin-bottom: 30px; font-style: italic;">
                                        Việt Nam, với bờ biển dài và cảnh quan thiên nhiên tuyệt đẹp, là một trong những điểm đến du lịch hấp dẫn nhất Đông Nam Á. Từ những bãi biển tuyệt đẹp ở Đà Nẵng, Nha Trang đến những di sản văn hóa thế giới như Hội An và Huế, Việt Nam mang đến cho du khách những trải nghiệm không thể quên.
                                        <br><br>
                                        Du lịch Việt Nam không chỉ là khám phá cảnh đẹp mà còn là tìm hiểu văn hóa phong phú và ẩm thực đa dạng. Mỗi vùng miền đều có những nét đặc trưng riêng, từ món phở nổi tiếng đến các món hải sản tươi ngon.
                                    </div>

                                    <li style="margin-bottom: 20px; font-weight: 600; font-size: 22px; color: #214E8C;">Về trang web</li>
                                    <div class="text-center" style="margin-bottom: 30px; font-style: italic; color: #4a4a4a;">
                                        <b>Mục tiêu mong muốn:</b> Cung cấp thông tin đầy đủ và chính xác về các điểm đến nổi bật, văn hóa và ẩm thực Việt Nam; giúp du khách dễ dàng lên kế hoạch cho chuyến đi của mình.
                                        <br><br>
                                        <b>Tầm nhìn tương lai:</b> Trở thành một trong những trang web hàng đầu về du lịch Việt Nam, nơi du khách có thể tìm thấy mọi thông tin cần thiết để có một chuyến đi tuyệt vời.
                                    </div>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- MODAL creator -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2label" aria-hidden="true"> 
        <div class="modal-dialog modal-xl" role="document"> 
            <div class="modal-content" style="background: linear-gradient(135deg, #d4e9ff, #f0f8ff); border-radius: 20px; box-shadow: 0 8px 24px rgba(0,0,0,0.15);">

                <div class="modal-body" style="padding: 40px 30px;">
                    <div class="container">
                        <!-- creator-->
                        <hr class="my-2" style="border-color: #a8c1ff;">
                        <p class="justify-content-center tieudenoidunggtweb text-center" 
                        style="color:#b12727; font-weight: 700; font-size: 28px; text-shadow: 1px 1px 1px #f9dede;">
                            Người Sáng Lập
                        </p>
                        <hr class="my-2" style="border-color: #a8c1ff;">

                        
                            <div class="noidunggtweb" style="color: #2c3e50; font-size: 20px; line-height: 1.7; font-weight: 500;">
                            
                                <div class="container mt-5">
                                    <div class="row justify-content-center">
                                        <div class="col-md-3 col-sm-6">
                                        <div class="member-card">
                                            <img src="./Home/LOGOVKU.png" alt="Ảnh nhân viên" class="member-img">
                                            <div class="member-name">Ngô Phi Bin</div>
                                            <div class="member-in4">ID: 24AI006</div>
                                        </div>
                                        </div>

                                        <div class="col-md-3 col-sm-6">
                                        <div class="member-card">
                                            <img src="./Home/LOGOVKU.png" alt="Ảnh nhân viên" class="member-img">
                                            <div class="member-name">Đào Việt Duy</div>
                                            <div class="member-in4">ID: 24AI016</div>                                        
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




<!--footer -->
<div class="container-fluid">
    <footer style="background-color: #e3f2fd; padding: 20px;">
        <div style="display: flex; justify-content: space-between; flex-wrap: wrap; gap: 20px;">
            <div>
                <h2>Nội Dung</h2>
                <ul>
                    <li><a href="#khamphavietnam">Khám phá việt nam</a></li>
                    <li><a href="#diadanh">Địa danh không thể bỏ lỡ</a></li>
                    <li><a href="#lehoivanhoa">Lễ hội văn hóa</a></li>
                    <li><a href="#amthuc">Ẩm thực</a></li>
                </ul>
            </div>
            <div>
                <h2>Các Nội Dung Chính</h2>
                <ul>
                    <li><a href="homepage.html">Trang Chủ</a></li>
                    <li><a href="#">Tiêu đề</a></li>
                    <li><a href="#">Liên Hệ</a></li>
                </ul>
            </div>

            <div>
                <h2>Đăng Ký Nhận Bản Tin</h2>
                <form onsubmit="thongbao_dangky()" method="POST">
                    <input type="email" placeholder="Nhập email của bạn" required 
                        style="padding: 10px; width: 200px; border: 1px solid #ccc;">
                    <button type="submit" style="padding: 10px; background-color: #007bff; color: white; border: none;">
                        Đăng ký
                    </button>
                </form>
                <p>Nhận tin tức và ưu đãi mới nhất từ chúng tôi!</p>
            </div>


            <div>
                <h2>Liên Hệ</h2>
                <p>Địa chỉ: Hòa Hải, Ngũ Hành Sơn, Đà Nẵng</p>
                <p>Email: contact@dulichVietNam.com</p>
                <p>Điện thoại: 0123456789</p>
                <p>Hotline: 1900 1234</p>
            </div>

        </div>
        
        <hr style="margin: 20px 0; height: 2px; background-color: #ccc;">
        
        <div style="display: flex; justify-content: center ;flex-wrap: wrap; gap: 50px;">
            <div>
                <img src="./Home/LOGOVKU.png" alt="">
                <p>Đơn vị tài trợ và đối tác chính</p>
            </div>
            <div style="margin-top: 45px;">
                <h2>Kết Nối Với Chúng Tôi</h2>
                <div style="display: flex; gap: 20px;">
                    <a href="https://www.facebook.com/PhiBin.Ngo"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.instagram.com/phibinngo/"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://www.youtube.com/@phibinngo"><i class="fa-brands fa-youtube"></i></a>
                    <a href="https://www.pinterest.com/"><i class="fa-brands fa-pinterest"></i></a>
                    <a href="https://www.tiktok.com/@phibin.ngo"><i class="fa-brands fa-tiktok"></i></a>
                </div>
                <p style="margin-top:20px">Welcome to the official website of Viet Nam.</p>
            </div>
        </div>

        <p style="text-align: center;">© 2025 Official Website Du Lịch Việt Nam</p>
    </footer>
</div>      
</div>
    <script src="./Home/signin.js"></script>
    <script src="./Home/signup.js"></script>
    <script src="./Home/maincontent.js"></script>
</body>
</html>

const foods = [
    { name: "Phở Hà Nội", img: "./Home/images/pho.png", desc: "Món ăn quốc hồn quốc túy với nước dùng trong, đậm đà." },
    { name: "Bún bò Huế", img: "./Home/images/bunbohue.png", desc: "Hương vị cay nồng, đậm chất miền Trung." },
    { name: "Cao lầu", img: "./Home/images/caolau.jpg", desc: "Đặc sản Hội An với sợi mì trộn thịt xá xíu và rau sống." },
    { name: "Bánh xèo", img: "./Home/images/banhxeo.jpg", desc: "Bánh giòn rụm, nhân tôm thịt, ăn kèm rau sống và nước chấm." },
    { name: "Cơm tấm Sài Gòn", img: "./Home/images/comtam.jpg", desc: "Cơm gạo tấm ăn kèm sườn nướng, trứng, bì và đồ chua." },
    { name: "Chả cá Lã Vọng", img: "./Home/images/chaca.jpg", desc: "Cá lăng chiên ăn cùng bún, rau thơm và mắm tôm." },
    { name: "Nem rán", img: "./Home/images/nem.jpg", desc: "Món cuốn chiên giòn, thường có mặt trong dịp lễ, Tết." },
    { name: "Gỏi cuốn", img: "./Home/images/goicuon.jpg", desc: "Món ăn thanh mát, dễ làm, rất phổ biến ở miền Nam." },
    { name: "Bánh chưng", img: "./Home/images/banhchung.jpg", desc: "Biểu tượng ngày Tết, tượng trưng cho đất, nhân nghĩa." }
  ];

  let foodIndex = 0;
  const foodContainer = document.getElementById("food-container");

  function showFoods() {
    foodContainer.innerHTML = "";
    for (let i = 0; i < 3; i++) {
      const idx = (foodIndex + i) % foods.length;
      const { name, img, desc } = foods[idx];

      const col = document.createElement("div");
      col.className = "col-md-4 fade-slide";
      col.innerHTML = `
        <div class="card destination-card shadow-sm h-100">
          <img src="${img}" class="card-img-top" alt="${name}">
          <div class="card-body">
            <h5 class="card-title">${name}</h5>
            <p class="card-text">${desc}</p>
          </div>
        </div>
      `;
      foodContainer.appendChild(col);
      setTimeout(() => col.classList.add("show"), 100);
    }
    foodIndex = (foodIndex + 3) % foods.length;
  }

  showFoods();
  setInterval(showFoods, 3000);

    const cultures = [
    { name: "Lễ hội Chùa Hương", img: "./Home/images/chua_huong.jpg", desc: "Diễn ra đầu xuân, thu hút hàng triệu Phật tử đến trẩy hội." },
    { name: "Hội Gióng", img: "./Home/images/hoigiong.jpg", desc: "Tưởng nhớ Thánh Gióng, anh hùng dân tộc, tổ chức tại Sóc Sơn – Hà Nội." },
    { name: "Lễ hội Lim", img: "./Home/images/lim.jpg", desc: "Quê hương của dân ca quan họ Bắc Ninh, nổi tiếng với hát đối đáp." },
    { name: "Lễ hội Cà phê Buôn Ma Thuột", img: "./Home/images/caphe.jpg", desc: "Tôn vinh cà phê Tây Nguyên, với triển lãm và trình diễn nghệ thuật." },
    { name: "Lễ hội Huế", img: "./Home/images/huefestival.jpg", desc: "Sự kiện văn hóa lớn tổ chức 2 năm/lần, tôn vinh di sản cố đô." },
    { name: "Festival Biển Nha Trang", img: "./Home/images/festival_bien.jpg", desc: "Quảng bá du lịch biển đảo, diễn ra định kỳ 2 năm/lần." },
    { name: "Lễ hội Kate", img: "./Home/images/kate.jpg", desc: "Lễ hội lớn của người Chăm tại Ninh Thuận, diễn ra vào tháng 7 Chăm lịch." },
    { name: "Tết Nguyên Đán", img: "./Home/images/tet.jpg", desc: "Tết cổ truyền lớn nhất của người Việt, với nhiều phong tục đặc sắc." },
    { name: "Lễ hội Đua ghe ", img: "./Home/images/duaghe.jpg", desc: "Lễ hội đặc trưng của người Khmer Nam Bộ, tổ chức dịp lễ Ok Om Bok." }
  ];

  let cultureIndex = 0;
  const cultureContainer = document.getElementById("culture-container");

  function showCultures() {
    cultureContainer.innerHTML = "";
    for (let i = 0; i < 3; i++) {
      const idx = (cultureIndex + i) % cultures.length;
      const { name, img, desc } = cultures[idx];

      const col = document.createElement("div");
      col.className = "col-md-4 fade-slide";
      col.innerHTML = `
        <div class="card destination-card shadow-sm h-100">
          <img src="${img}" class="card-img-top" alt="${name}">
          <div class="card-body">
            <h5 class="card-title">${name}</h5>
            <p class="card-text">${desc}</p>
          </div>
        </div>
      `;
      cultureContainer.appendChild(col);
      setTimeout(() => col.classList.add("show"), 100);
    }
    cultureIndex = (cultureIndex + 3) % cultures.length;
  }

  showCultures();
  setInterval(showCultures, 3000);

      const destinations = [  
        { name: "Hà Nội", img: "./Home/images/hanoi.jpg", desc: "Thủ đô nghìn năm văn hiến với phố cổ, hồ Hoàn Kiếm và ẩm thực đặc sắc." },
        { name: "Hạ Long", img: "./Home/images/halong.png", desc: "Kỳ quan thiên nhiên thế giới với hàng nghìn hòn đảo lớn nhỏ trên biển xanh." },
        { name: "Sa Pa", img: "./Home/images/sapa.jpg", desc: "Vùng núi Tây Bắc với ruộng bậc thang, bản làng và khí hậu mát mẻ." },
        { name: "Ninh Bình", img: "./Home/images/ninhbinh.png", desc: "Vịnh Hạ Long trên cạn với Tràng An, Tam Cốc và hang động kỳ ảo." },
        { name: "Huế", img: "./Home/images/hue.jpg ", desc: "Cố đô của triều Nguyễn với cung đình, lăng tẩm và văn hóa truyền thống." },
        { name: "Đà Nẵng", img: "./Home/images/danang.png", desc: "Thành phố đáng sống với cầu Rồng, biển Mỹ Khê và Bà Nà Hills." },
        { name: "Hội An", img: "./Home/images/hoian.png", desc: "Phố cổ lung linh đèn lồng, di sản thế giới và ẩm thực đa dạng." },
        { name: "Quy Nhơn", img: "./Home/images/quynhon.png", desc: "Biển hoang sơ, bãi cát trắng, ghềnh đá và hải sản tươi sống." },
        { name: "Nha Trang", img: "./Home/images/nhatrang.png", desc: "Thiên đường nghỉ dưỡng với biển trong xanh và nhiều đảo đẹp." },
        { name: "Đà Lạt", img: "./Home/images/dalat.png", desc: "Thành phố sương mù, hoa và kiến trúc Pháp lãng mạn." },
        { name: "Buôn Ma Thuột", img: "./Home/images/bmt.png", desc: "Thủ phủ cà phê Việt, nơi trải nghiệm văn hóa Tây Nguyên." },
        { name: "TP.HCM", img: "./Home/images/hcm.png", desc: "Thành phố năng động với các khu chợ, nhà thờ Đức Bà và ẩm thực phong phú." },
        { name: "Cần Thơ", img: "./Home/images/cantho.png", desc: "Trung tâm miền Tây với chợ nổi Cái Răng và sông nước hữu tình." },
        { name: "An Giang", img: "./Home/images/angiang.png", desc: "Vùng Bảy Núi với núi Cấm, văn hóa Khmer và lễ hội lớn." },
        { name: "Phú Quốc", img: "./Home/images/phuquoc.png", desc: "Đảo ngọc với biển xanh, resort cao cấp và hoàng hôn lãng mạn." }
    ];

    let currentIndex = 0;
    const container = document.getElementById("destination-container");

    function showDestinations() {
        container.innerHTML = "";

        for (let i = 0; i < 3; i++) {
            const index = (currentIndex + i) % destinations.length;
            const { name, img, desc } = destinations[index];

            const col = document.createElement("div");
            col.className = "col-md-4 fade-slide";

            col.innerHTML = `
                <div class="card destination-card shadow-sm h-100">
                    <img src="${img}" class="card-img-top" alt="${name}">
                    <div class="card-body">
                        <h5 class="card-title">${name}</h5>
                        <p class="card-text">${desc}</p>
                    </div>
                </div>
            `;

            container.appendChild(col);

            setTimeout(() => col.classList.add("show"), 100);
        }

        currentIndex = (currentIndex + 3) % destinations.length;
    }

    showDestinations();
    setInterval(showDestinations, 3000);

    function thongbao_dangky() {
      alert("Đã đăng ký nhận thông tin thành công,cảm ơn quý khách đã quan tâm đến trang web, chúng tôi sẽ gửi cho quý khách thông tin ưu đai mới nhất");
    }
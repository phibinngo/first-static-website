function checkEmail() {
            let x = document.getElementById("email").value;
            let textElement = document.getElementById("demoEmail");
            if (x.includes("@") && x.includes(".")) {
                textElement.innerText = "Okie";
                textElement.className = "success";
            } else {
                textElement.innerText = "Email phải chứa '@' và '.'!";
                textElement.className = "error";
            }
        }

        function checkUsername() {
            let x = document.getElementById("username").value;
            let textElement = document.getElementById("demo2");
            if (x.length < 3 || x.length > 10) {
                textElement.innerText = "Username từ 3-10 ký tự";
                textElement.className = "error";
            } else {
                textElement.innerText = "Okie";
                textElement.className = "success";
            }
        }

        function checkAge() {
            let x = document.getElementById("age").value;
            let textElement = document.getElementById("demo1");
            if (x === "") {
                textElement.innerText = "Dữ liệu không được để trống!";
                textElement.className = "error";
            } else if (isNaN(x)) {
                textElement.innerText = "Vui lòng nhập số!";
                textElement.className = "error";
            } else if (x < 0 || x >= 100) {
                textElement.innerText = "Tuổi phải lớn hơn 0 và nhỏ hơn 100 !";
                textElement.className = "error";
            } else {
                textElement.innerText = "Okie";
                textElement.className = "success";
            }
        }

        function checkFullname() {
            let x = document.getElementById("fullname").value;
            let textElement = document.getElementById("demo");
            if (x === "") {
                textElement.innerText = "Dữ liệu không được để trống!";
                textElement.className = "error";
            } else {
                textElement.innerText = "Okie";
                textElement.className = "success";
            }
        }

        function checkPassword() {
            let x = document.getElementById("password").value;
            let textElement = document.getElementById("demo3");
            if (x === "") {
                textElement.innerText = "Dữ liệu không được để trống!";
                textElement.className = "error";
            } else {
                textElement.innerText = "Okie";
                textElement.className = "success";
            }
        }
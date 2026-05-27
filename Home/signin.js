function checkpass(){
    let password = document.getElementById('password');
    console.log('Password type trước:', password.type);  // dòng log
    if(password.type === 'text'){
        password.type = 'password';
    } else {
        password.type = 'text';
    }
    console.log('Password type sau:', password.type);    // dòng log
}
function register(){
    window.location.href = "homepage.php";
}
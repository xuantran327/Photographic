/* Thiết lập chiều dài Ô tìm kiếm sau khi load trang */
var x = window.innerWidth;
if($("#text").length) document.getElementById("text").style.width = (x-306)+"px";
if($("#text1").length) {
    if (x>576) {
        document.getElementById("text1").style.width = (x-476)+"px";
        if (!($('#input-group').hasClass('input-group'))) $('#input-group').addClass('input-group');
    }
    else {
        document.getElementById("text1").style.width = (x-306)+"px";
        if ($('#input-group').hasClass('input-group')) $('#input-group').removeClass('input-group');
    }
}
/* Hiển thị nút trở về đầu trang khi scroll xuống 20px */
window.onscroll = function() {
    scrollFunction();
};
/* Thay đổi chiều dài thành phần của Ô tìm kiếm*/
function resizeFunc() {
    let x = window.innerWidth;
    if($("#text").length) document.getElementById("text").style.width = (x-306)+"px";
    if($("#text1").length) {
        if (x>576) {
            document.getElementById("text1").style.width = (x-476)+"px";
            if (!($('#input-group').hasClass('input-group'))) $('#input-group').addClass('input-group');
        }
        else {
            document.getElementById("text1").style.width = (x-306)+"px";
            if ($('#input-group').hasClass('input-group')) $('#input-group').removeClass('input-group');
        }
    }
}
/* Chế độ hiển thị nút trở về đầu trang */
function scrollFunction() {
    let btn = document.getElementById("up-button");
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
}
/* Hàm trở về đầu trang */
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
/* Hàm check textbox tên bảng đã nhập vào chưa */
function checkTableName() {
    let input = document.getElementById("name");
    let text = input.value;
    if (text == "") {
        return false;
    }
    return true;
}
/* Thiết lập giao diện thông tin ảnh tùy kích thước browser */
if (x>=992) {
    if (!($('#info').hasClass('media'))) $('#info').addClass('media');
}
else {
    if ($('#info').hasClass('media')) $('#info').removeClass('media');
}
$(window).resize(function(){
    let x = window.innerWidth;
    if (x>=992) {
        if (!($('#info').hasClass('media'))) $('#info').addClass('media');
    }
    else {
        if ($('#info').hasClass('media')) $('#info').removeClass('media');
    }
});
/* Copy link ảnh */
function copyLink() {
    var copyText = location.href;
    navigator.clipboard.writeText(copyText);
}
/* Nút lưu ảnh */
function saveButton() {
    if ($('#save-button-1').hasClass('bg-dark')) {
        $('#save-button-1').removeClass('bg-dark');
        $('#save-button-1').html('<b>Lưu</b>');
    } else {
        $('#save-button-1').addClass('bg-dark');
        $('#save-button-1').html('<b>Đã lưu</b>');
    }
}
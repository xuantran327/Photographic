/* Hiển thị nút khi rê chuột vào ghim tương ứng trong grid */
$(document).ready(function () {
    var index = 0;
    var item;
    var btn = document.getElementsByClassName("btn-display");
    var g_item = document.getElementsByClassName("gallery-item");
    $('.gallery-item').hover(function () {
        index = $('.gallery-item').index(this);
        document.getElementsByClassName("bright-70")[index].style.filter = "brightness(70%)";
        item = document.getElementsByClassName("gallery-item")[index];
        let width = window.innerWidth;
        if (width>=602) {
            btn[index*4].style.display = "block";
            btn[index*4+1].style.display = "block";
            btn[index*4+2].style.display = "block";
            btn[index*4+3].style.display = "block";
            g_item[index].style.zIndex = "1";
        }
        console.log(index);
    }, function () { 
        document.getElementsByClassName("bright-70")[index].style.filter = "brightness(100%)";
        let width = window.innerWidth;
        if (width>=602) {
            btn[index*4].style.display = "none";
            btn[index*4+1].style.display = "none";
            btn[index*4+2].style.display = "none";
            btn[index*4+3].style.display = "none";
            g_item[index].style.zIndex = "0";
        }
    });
    /* Ẩn nút link và nút Tùy chọn khi mở dropdown của nút Gửi */
    $('.send-dropdown').on('show.bs.dropdown', function(){
        btn[index*4+1].style.display = "none";
        btn[index*4+3].style.display = "none";
    });
    $('.send-dropdown').on('shown.bs.dropdown', function(){
        btn[index*4+1].style.display = "none";
        btn[index*4+3].style.display = "none";
    });
    $('.send-dropdown').on('hide.bs.dropdown', function(e){
        btn[index*4+1].style.display = "block";
        btn[index*4+3].style.display = "block";
    });
    $('.send-dropdown').on('hidden.bs.dropdown', function(){
        btn[index*4+1].style.display = "block";
        btn[index*4+3].style.display = "block";
    });
    $('.save-button').on("click", function () {
        let index = $('.save-button').index(this);
        var button = document.querySelectorAll('.save-button');
        if (button[index].classList.contains('bg-dark')) {
            button[index].classList.remove('bg-dark');
            button[index].innerHTML = '<b>Lưu</b>';
        } else {
            button[index].classList.add('bg-dark');
            button[index].innerHTML = '<b>Đã lưu</b>';
        }
    });
});
/* Hiển thị nút khi rê chuột vào ảnh trong phần info */
var image_btn = document.getElementById("image-button");
$('#image-info').on('mouseover', function(){
    image_btn.style.display = "block";
});
$('#image-info').on('mouseout', function(e){
    image_btn.style.display = "none";
});
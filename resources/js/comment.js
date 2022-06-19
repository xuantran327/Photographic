/* Kích hoạt/Vô hiệu hóa nút submit bình luận trong khi nhập bình luận */
function submitButton() {
    let comment_text = document.getElementById('comment-text').value;
    if (comment_text.length == 0) {
        $('#comment-submit').prop('disabled', true);
    } else {
        $('#comment-submit').prop('disabled', false);
    }
}
/* Hủy bình luận */
function cancelComment() {
    document.getElementById('comment-text').value = '';
    if (!($('#comment-submit').hasClass('hidden'))) {
        $('#comment-submit').addClass('hidden');
    }
    if (!($('#comment-cancel').hasClass('hidden'))) {
        $('#comment-cancel').addClass('hidden');
    }
}
/* Hiển thị các nút Hủy và Đã xong khi click vào textbox bình luận */
function displayCommentBtn() {
    if ($('#comment-submit').hasClass('hidden')) {
        $('#comment-submit').removeClass('hidden');
    }
    if ($('#comment-cancel').hasClass('hidden')) {
        $('#comment-cancel').removeClass('hidden');
    }
}
$(document).ready(function () {
    var comment_text = document.querySelectorAll('.comment-text');
    var comment_submit = document.querySelectorAll('.comment-submit');
    var comment_cancel = document.querySelectorAll('.comment-cancel');
    var heart_button = document.querySelectorAll('.heart-button');
    var heart_count = document.querySelectorAll('.heart-count');
    $('.comment-text').on('input', function() {
        let index = $('.comment-text').index(this);
        let comment_text_length = comment_text[index].value.length;
        if (comment_text_length == 0) {
            comment_submit[index].disabled = true;
        } else {
            comment_submit[index].disabled = false;
        }
    });
    $('.comment-text').on('click', function() {
        let index = $('.comment-text').index(this);
        if (comment_submit[index].classList.contains('hidden')) {
            comment_submit[index].classList.remove('hidden');
        }
        if (comment_cancel[index].classList.contains('hidden')) {
            comment_cancel[index].classList.remove('hidden');
        }
    });
    $('.comment-cancel').on('click', function() {
        let index = $('.comment-cancel').index(this);
        comment_text[index].value = "";
        if (!(comment_submit[index].classList.contains('hidden'))) {
            comment_submit[index].classList.add('hidden');
        }
        if (!(comment_cancel[index].classList.contains('hidden'))) {
            comment_cancel[index].classList.add('hidden');
        }
    });
    $('.heart-button').on('click', function() {
        let index = $('.heart-button').index(this);
        let count = Number(heart_count[index].querySelector('b').innerHTML);
        if (heart_button[index].innerHTML.indexOf('fa fa-heart-o')!=-1) {
            heart_button[index].innerHTML = '<i class="fa fa-heart"></i> <span class="heart-count"><b>'+(count+1)+'</b></span>';
            heart_count[index].querySelector('b').innerHTML = count+1;
        } else {
            heart_button[index].innerHTML = '<i class="fa fa-heart-o"></i> <span class="heart-count"><b>'+(count-1)+'</b></span>';
            heart_count[index].querySelector('b').innerHTML = count-1;
        }
    });
});
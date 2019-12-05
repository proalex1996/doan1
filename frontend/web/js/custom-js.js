function postComment(idBaiViet) {
    var comment = {
        "fullName": $('#inp1').val(),
        "email": $('#inp2').val(),
        "content": $('#t1').val(),
        "idBaiViet": idBaiViet
    };
    if (comment.fullName !== "" && comment.email !== "" && comment.idBaiViet !== "") {
        $.ajax({
            type: "POST",
            url: "post-comment",
            data: comment,
            success: function (data) {
                if (data.data !== null) {
                    alert("Đăng Thành Công");
                    var listCmtAppendHtml = '<li class="comment parent">\n' +
                        '                                        <article class="comment-body">\n' +
                        '                                            <div class="comment-content">\n' +
                        '                                                <h4 class="author-name font-weight-normal"><a href="#">' + data.data.commenter + '</a></h4>\n' +
                        '                                                <time>'+ data.data.posttime_comment+'</time>\n' +
                        '                                                <p>' + data.data.content_comment +'</p>\n' +
                        '                                            </div>\n' +
                        '                                        </article>\n' +
                        '                                    </li>';
                    $('#list-comment').append(listCmtAppendHtml);
                }
            }
        });
    } else {
        alert("Vui Lòng Nhập Đầy Đủ Thông Tin");
    }

}
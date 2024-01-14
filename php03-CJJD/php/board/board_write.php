<?php
include "../connect/connect.php";
include "../connect/session.php";
include "../connect/sessionCheck.php";
?>
<!DOCTYPE html>
<html lang="ko">

<head>
    <?php include "../include/head.php" ?>
    <link href="../assets/css/board.css" rel="stylesheet">
    <script src="../assets/js/selectOption3.js"></script>


</head>

<body>
    <div id="wrapper">
        <?php include "../include/header.php" ?>
        <!-- header end -->

        <main id="contents_area">
            <section id="main_contents">
                <div class="best_list boxStyle roundCorner shaDow ">
                    <div class="board">
                        <div class="board_form">

                            <form action="board_writeSave.php" method="post" enctype="multipart/form-data">
                                <legend class="blind"></legend>
                                <div class="form_box">
                                    <div class="board_title">
                                        <h2>자유게시판</h2>
                                    </div>
                                    <div class="board_text">
                                        <div class="post">
                                            <div class="selectBox3"><i class="fa-solid fa-angle-down"></i>
                                                <input type="hidden" id="boardCategory" name="boardCategory"
                                                    value="자유게시판">
                                                <button class="label"
                                                    onclick="document.getElementById('boardCategory').value = this.textContent;">자유게시판</button>
                                                <ul class="optionList">
                                                    <li class="optionItem">자유게시판</li>
                                                    <li class="optionItem">일기장</li>
                                                    <li class="optionItem">술 신청하기</li>
                                                </ul>
                                            </div>
                                            <label for="boardFile" class="link">이미지를 업로드 해주세요.!!</label>
                                            <input type="file" id="boardFile" name="boardFile" style="display: none;"
                                                accept=".jpg, .jpeg, .png, .gif, .webp" class="link">

                                        </div>
                                        <div class="board_title ">
                                            <label for="boardTitle"></label>
                                            <input type="text" id="boardTitle" name="boardTitle" cols="50" rows="1"
                                                class="board_input_title inputStyle" placeholder="제목을 작성해주세요" required>
                                        </div>
                                        <div class="contents_wrap">
                                            <div class="board_contents">
                                                <label for="boardContents"></label>
                                                <textarea id="boardContents" name="boardContents" cols="50" rows="1"
                                                    class="board_input_contents inputStyle placeholder"
                                                    placeholder="원하는 술을 신청해주세요"></textarea>
                                            </div>
                                        </div>
                                        <div class="create">
                                            <button type="submit" class="sideBtn mt50 mr20"
                                                onclick="window.location.href='board.php'">
                                                <h2>취소</h2>
                                            </button>
                                            <button type="submit" class="sideBtn mt50 submit">
                                                <h2>작성 완료</h2>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>


            </section>
            <!-- main_contents end -->

            <?php include "../include/aside.php" ?>
        </main>
        <!-- contents_area end -->
    </div>
    <!-- wrapper end -->

    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/translations/ko.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#boardContents'), {
                language: 'ko'
            })
            .then(editor => {
                document.querySelector('form').addEventListener('submit', function (event) {
                    var editorContent = editor.getData();

                    if (editorContent == '') {
                        event.preventDefault();
                        alert('내용을 작성해주세요.');
                    }
                });
            })
            .catch(error => {
                console.error(error);
            });
    </script>

    <!-- write -->

</body>

</html>
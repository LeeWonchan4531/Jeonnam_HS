<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // POST 데이터를 받습니다.
        $data = $_POST['complain'];

        // 줄 바꿈을 추가합니다.
        $data .= "\n\n\n";

        // data.txt 파일에 데이터를 저장합니다.
        file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
        echo '<!DOCTYPE html>
        <html lang="ko">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>완료</title>
        </head>
        <body>
            <script>
                alert("의견 내어주셔서 감사합니다.");
                window.location.href = "/";
            </script>
        </body>
        </html>';
    } else {
        echo "머임? 님 여기 어떻게 들옴? 해킹 시도 ㄴㄴ";
    }
?>

<?php
header("Content-Type: text/html; charset=utf-8");
?>

<!-- Данные -->
<?php
$url = 'https://drupal.ru/frontpage';
$refererurl = 'https://drupal.ru/frontpage';
$useragent = 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36';
$headers = array
(
    'Accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8',
    'Accept-Language:ru,en-US;q=0.9,en;q=0.8,uk;q=0.7,tr;q=0.6',
    'Accept-Encoding: deflate',
    'Accept-Charset: windows-1251,utf-8;q=0.7,*;q=0.7'
);

$post_data = array (
    "name" => "azwebdds",
    "pass" => "berozyX1720",
    //"form_build_id" => "form-LAq297AiHhTWnuv5bm7C_6-IYI6cIHNhThlVqvW-Jy0",
		"form_id" => "user_login",
		"op" => "%D0%92%D1%85%D0%BE%D0%B4",
);

 ?>


<!-- Запрос cUrl -->
<?PHP
$ch = curl_init($url); // инициализация сессии cUrl и запрос по этому адресу

curl_setopt($ch, CURLOPT_HEADER, true); // подсматривать ответы сервера
curl_setopt($ch, CURLOPT_USERAGENT, $useragent); // отправить инфо о типе браузера
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); // отправить заголовки
curl_setopt($ch, CURLOPT_REFERER, $refererurl); // отправить адрес, откуда пришли
curl_setopt($ch, CURLOPT_POST, 1); // отправлять запрос типа POST
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data); // собственно данные для запроса POST
curl_setopt($ch, CURLOPT_COOKIEJAR, "my_cookies.txt"); // обработка файла cookie
curl_setopt($ch, CURLOPT_COOKIEFILE, "my_cookies.txt"); // файл cookie
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); // выводить данные в браузер (0) или возвращать в переменную (1)

$output = curl_exec($ch); // выполняем запрос curl

// Сообщение об ошибке запроса (если возникла)
if ($output === FALSE) { // тут надо использовать именно ===, а не ==
    echo "<div style='color:red; font-weight:bold;'><br>------------<br>cURL Error: " . curl_error($ch) . "</div>";
}
 ?>

<?php print $output; ?>


<!-- Информация о выполнении запроса -->
<?php
echo '<br><br>------------------------------------------------<br>';
print_r($_POST);
echo "<br><br>";
$info = curl_getinfo($ch);
echo "*** Запрос занял " . $info['total_time'] . "сек. для URL " . $info['url'];
echo "<br><br>Подробнее ...: <br><br>";
echo "URL запроса: " . $info['url'] . "<br>";
echo "Тип запроса: " . $info['content_type'] . "<br>";
echo "HTTP код запроса: " . $info['http_code'] . "<br>";
echo "Размер заголовка запроса: " . $info['header_size'] . "<br>";
echo "Размер тела запроса: " . $info['request_size'] . "<br>";
echo "Filetime запроса: " . $info['filetime'] . "<br>";
echo "SSL верификация запроса: " . $info['ssl_verify_result'] . "<br>";
echo "Redirect Count запроса: " . $info['redirect_count'] . "<br>";
echo "Полное время запроса: " . $info['total_time'] . "<br>";
echo "Namelookup Time запроса: " . $info['namelookup_time'] . "<br>";
echo "Connect Time запроса: " . $info['connect_time'] . "<br>";
echo "Рretransfer Time запроса: " . $info['pretransfer_time'] . "<br>";
echo "Размер загрузки запроса: " . $info['size_upload'] . "<br>";
echo "Скорость загрузки запроса: " . $info['speed_upload'] . "<br>";
echo "Длина контента загрузки запроса: " . $info['upload_content_length'] . "<br>";
echo "Размер закачки запроса: " . $info['size_download'] . "<br>";
echo "Скорость закачки запроса: " . $info['speed_download'] . "<br>";
echo "Длина контента закачки запроса: " . $info['download_content_length'] . "<br>";
echo "Время начала передачи запроса: " . $info['starttransfer_time'] . "<br>";
echo "Время редиректа запроса: " . $info['redirect_time'] . "<br>";
?>

<?php curl_close($ch); // закрыть сессию cUrl ?>

<?php print_r($_POST); ?>






<script src="http://localhost:35729/livereload.js" charset="utf-8"></script>

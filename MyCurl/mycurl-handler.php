<?php
// TODO: Передавать в этот файл переменные из файла index.php для использования их в запросе cURL

$url = $_GET['url'];

var_dump($url); // контроль переданных по GET переменных
echo "<br><br>";

// TODO: Построить запрос cURL из полученных переменных

// Добавляются переменные для имитации "правильного" запроса:
// $useragent - данные об браузере
// $headers - массив заголовков
// $cookiefile - путь к файлу хранения куков
$useragent = 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Safari/537.36';
$headers = array
(
    'Accept:text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8',
    'Accept-Language:ru,en-US;q=0.9,en;q=0.8,uk;q=0.7,tr;q=0.6',
    'Accept-Encoding: deflate',
    'Accept-Charset: windows-1251,utf-8;q=0.7,*;q=0.7'
);
$cookiefile = "my_cookies.txt";


// Собственно запрос cURL
$ch = curl_init($url); // инициализация сессии cUrl и запрос по этому адресу

curl_setopt($ch, CURLOPT_HEADER, true); // подсматривать ответы (заголовки) от сервера
curl_setopt($ch, CURLOPT_USERAGENT, $useragent); // отправить инфо о типе браузера
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); // отправить заголовки
curl_setopt($ch, CURLOPT_COOKIEFILE, $cookiefile); // файл cookie
curl_setopt($ch, CURLOPT_COOKIEJAR, $cookiefile); // файл cookie


curl_exec($ch); // Выполнить запрос cURL
curl_close($ch); // Закрыть запрос cURL

?>



<!-- LiveReload скрипт -->
<script src="http://localhost:35729/livereload.js" charset="utf-8"></script>

<?php
// نام صفحه را از URL دریافت کنید
$page_name = basename($_SERVER['REQUEST_URI']);
// حذف پسوند .php از نام صفحه
if (substr($page_name, -4) === '.php') {
  $page_name = substr($page_name, 0, -4);}
// آدرس IP بازدید کننده را دریافت کنید
$ip_address = $_SERVER['REMOTE_ADDR'];
// تاریخ و زمان فعلی را دریافت کنید
$date_time = date('Y-m-d H:i:s');
// تبدیل زمان UTC به زمان تهران (GMT+3:30)
$date_time_tehran = date('Y-m-d H:i:s', strtotime($date_time) + (3.5 * 3600));
// اتصال به پایگاه داده
$db_connection = mysqli_connect('fdb1031.runhosting.com', '4428161_db', 'mustafa1234', '4428161_db');
// بررسی وجود IP در پایگاه داده
$sql_query = "SELECT COUNT(*) FROM ip_addresses WHERE page_name = '$page_name' AND ip_address = '$ip_address'";
$result = mysqli_query($db_connection, $sql_query);
$row = mysqli_fetch_assoc($result);
$count = $row['COUNT(*)'];
// اگر IP موجود بود، اطلاعات آن را به روز رسانی کنید
if ($count > 0) {
  // تاریخ و زمان فعلی را دریافت کنید
 $date_time_tehran = date('Y-m-d H:i:s', strtotime($date_time) + (3.5 * 3600));
  // اطلاعات IP را به روز رسانی کنید
  $sql_query = "UPDATE ip_addresses SET date_time = '$date_time_tehran' WHERE page_name = '$page_name' AND ip_address = '$ip_address'";
  mysqli_query($db_connection, $sql_query);
} else {
  // ذخیره IP در پایگاه داده
  $sql_query = "INSERT INTO ip_addresses (page_name, ip_address, date_time) VALUES ('$page_name', '$ip_address', '$date_time_tehran')";
  mysqli_query($db_connection, $sql_query);}
// دریافت نوع وضعیت
$sql_query = "SELECT status FROM ip_addresses WHERE page_name = '$page_name'";
$result = mysqli_query($db_connection, $sql_query);
$row = mysqli_fetch_assoc($result);
$status = $row['status'];
// بررسی نوع وضعیت
if ($status === 'on') {
  // بررسی وجود IP در لیست مجاز
  $sql_query = "SELECT allow_ip FROM ip_addresses WHERE page_name = '$page_name'";
  $result = mysqli_query($db_connection, $sql_query);
  $row = mysqli_fetch_assoc($result);
  $allow_ip = $row['allow_ip'];
if ($ip_address === $allow_ip) {
        //بستن اتصال به پایگاه داده
  mysqli_close($db_connection);}
        else {
header('HTTP/1.0 404 Not Found');
  exit;                }
} ?>
















































vless://telegram-id-ArV2ray@speedtest.net:443?encryption=none&security=tls&sni=speedtest.net&alpn=h2%2Chttp%2F1.1&fp=chrome&type=ws&host=dwojwh8.ir&path=%2Ftelegram-ArV2ray%2Ctelegram-ArV2ray%2Ctelegram-ArV2ray%2Ctelegram-ArV2ray%2Ctelegram-ArV2ray%2Ctelegram-ArV2ray%2Ctelegram-ArV2ray%2Ctelegram-ArV2ray%2Ctelegram-ArV2ray%2Ctelegram-ArV2ray%3Fed%3D2048#%F0%9F%97%93%EF%B8%8F%2B%D9%BE%D9%86%D8%AC%2B%D8%B4%D9%86%D8%A8%D9%87%2B6%2B%D8%AF%DB%8C%2B1403%2B%F0%9F%97%93%EF%B8%8F























































vless://21c1c5e6-52fd-4e63-96d9-a7ec002f60aa@192.168.1.1:1111?mode=gun&security=tls&encryption=none&alpn=h2&fp=chrome&type=grpc&serviceName=#📊 زمان اتمام سرویس: ♾️ روز دیگر 📊






















































<?php
$user_name = basename($_SERVER['REQUEST_URI']);
if (substr($user_name, -4) === '.php') {
$user_name = substr($user_name, 0, -4);}
$connshowmessage = mysqli_connect('fdb1031.runhosting.com', '4428161_db', 'mustafa1234', '4428161_db');
$sqlshowmessage = "SELECT message1, message2, message3 FROM messages WHERE user_name = '$user_name'";
$resultshowmessage = mysqli_query($connshowmessage, $sqlshowmessage);
if (mysqli_num_rows($resultshowmessage) > 0) {
    $row = mysqli_fetch_assoc($resultshowmessage);
    echo $row['message1'];
} 
mysqli_close($connshowmessage);
?>
































































vmess://eyJhZGQiOiIxczEucm9taWwtbHRkLmNvLnVrIiwiYWlkIjoiMCIsImFscG4iOiIiLCJmcCI6IiIsImhvc3QiOiJmYXN0LmNvbSIsImlkIjoiOTlmYmU0N2ItOGU1Mi00MmYzLTgxNTUtNTQ3OTI3MTU2YmFhIiwibmV0IjoidGNwIiwicGF0aCI6Ii83TDFLOFp3YjJrZ1BweWI2QUt4SU14IiwicG9ydCI6IjgwIiwicHMiOiLwn5S1MSIsInNjeSI6ImF1dG8iLCJzbmkiOiIiLCJ0bHMiOiIiLCJ0eXBlIjoiaHR0cCIsInYiOiIyIn0=

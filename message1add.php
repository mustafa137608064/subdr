<?php
include 'config.php';
// دریافت اطلاعات از فرم
$user_name = $_POST['user_name'];
$message1 = $_POST['message1'];

// اتصال به پایگاه داده

$db_connection = new mysqli($servername, $username, $password, $dbname);

$check_query = "SELECT * FROM messages WHERE user_name = '$user_name'";
$result = mysqli_query($db_connection, $check_query);

if (mysqli_num_rows($result) > 0) {
    $sql_query = "UPDATE messages SET message1 = '$message1' WHERE user_name = '$user_name'";
} else {
    $sql_query = "INSERT INTO messages (user_name, message1) VALUES ('$user_name', '$message1')";
}
mysqli_query($db_connection, $sql_query);

// بستن اتصال به پایگاه داده
mysqli_close($db_connection);


// پیغام موفقیت آمیز
  echo "<script>";
  echo "alert('" . $message1 . " بعنوان پیغام شماره 1 برای " . $user_name . " ثبت شد');";
  echo "window.location.href = 'user.php?name=" . $user_name . "';";
  echo "</script>";
?>

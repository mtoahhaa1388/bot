<?php
$message = "Hi John";
$chatIds = array("6932747905"); // AND SOME MORE
foreach($chatIds as $chatId) {
    // Send Message To chat id
    file_get_contents("https://api.telegram.org/bot6862940508:AAFdMr40N4CcW8gYH4I3rMD6ka6_6-ADWxg/sendMessage?chat_id=$chatId&text=".$message);
}
?>
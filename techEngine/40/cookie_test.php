<?php
if(isset($_COOKIE['LANGUAGE']) && isset($_COOKIE['CITY'])) {
    echo 'Your city is : '.$_COOKIE['CITY'].'<br> And Your language preference is : '.$_COOKIE['LANGUAGE'];
} else {
    echo "Sorry Either cookie is not set or already expired";
}
?>
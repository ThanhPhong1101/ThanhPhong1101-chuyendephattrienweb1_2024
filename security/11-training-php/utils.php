<?php
// utils.php

// utils.php
function custom_encrypt($data) {
    return base64_encode($data); // Mã hóa ID với base64
}

function custom_decrypt($encodedId) {
    return base64_decode($encodedId);
}


?>
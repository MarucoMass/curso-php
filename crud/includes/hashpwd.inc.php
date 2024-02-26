<?php

$sensitiveData = "palangana";
$salt = bin2hex(random_bytes(16));
$pepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $salt . $pepper;
$hash = hash("sha256", $dataToHash);

// hash para password

$password = "blabla";

$options = [
    "cost" => 12
];

$hashedPwd = password_hash($password, PASSWORD_BCRYPT, $options);

$pwdLogin = "blabla";


if (password_verify($pwdLogin, $hashedPwd)) {
    echo "Son el mismo pwd";
}
else {
    echo "No son el mismo pwd";
}
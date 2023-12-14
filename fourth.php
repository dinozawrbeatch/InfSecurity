<?php

// Генерация ключей
function generateKeys($p, $q) {
    $n = $p * $q;
    $phi = ($p - 1) * ($q - 1);

    $e = 0;
    for ($i = 2; $i < $phi; $i++) {
        if (gcd($i, $phi) == 1) {
            $e = $i;
            break;
        }
    }

    $d = 0;
    for ($i = 2; $i < $phi; $i++) {
        if (($i * $e) % $phi == 1) {
            $d = $i;
            break;
        }
    }

    return array('public_key' => array('e' => $e, 'n' => $n), 'private_key' => array('d' => $d, 'n' => $n));
}

// Функция для нахождения наибольшего общего делителя
function gcd($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

// Шифрование
function encrypt($message, $public_key) {
    $e = $public_key['e'];
    $n = $public_key['n'];

    $encrypted_message = '';
    $message = str_split($message);
    foreach ($message as $char) {
        $char_ascii = ord($char);
        $encrypted_char = bcpowmod($char_ascii, $e, $n);
        $encrypted_message .= $encrypted_char . ' ';
    }

    return trim($encrypted_message);
}

// Расшифровка
function decrypt($encrypted_message, $private_key) {
    $d = $private_key['d'];
    $n = $private_key['n'];

    $decrypted_message = '';
    $encrypted_message = explode(' ', $encrypted_message);
    foreach ($encrypted_message as $char) {
        if (!empty($char)) {
            $decrypted_char = bcpowmod($char, $d, $n);
            $decrypted_message .= chr($decrypted_char);
        }
    }

    return $decrypted_message;
}

$p = gmp_nextprime(gmp_random(10));
$q = gmp_nextprime(gmp_random(10));

$keys = generateKeys($p, $q);
$public_key = $keys['public_key'];
$private_key = $keys['private_key'];

$message = 'Hello, world!';
$encrypted_message = encrypt($message, $public_key);
$decrypted_message = decrypt($encrypted_message, $private_key);

echo 'Исходное сообщение: ' . $message . '<br>';
echo 'Зашифрованное сообщение: ' . $encrypted_message . '<br>';
echo 'Расшифрованное сообщение: ' . $decrypted_message . '<br>';

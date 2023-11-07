<?php
$matrixPC1 = [
    [57, 49, 41, 33, 25, 17, 9],
    [1, 58, 50, 42, 34, 26, 18],
    [10, 2, 59, 51, 43, 35, 27],
    [19, 11, 3, 60, 52, 44, 36],
    [63, 55, 47, 39, 31, 23, 15],
    [7, 62, 54, 46, 38, 30, 22],
    [14, 6, 61, 53, 45, 37, 29],
    [21, 13, 5, 28, 20, 12, 4],
];

$matrixPC2 = [
    [14, 17, 11, 24, 1, 5],
    [3, 28, 15, 6, 21, 10],
    [23, 19, 12, 4, 26, 8],
    [16, 7, 27, 20, 13, 2],
    [41, 52, 31, 37, 47, 55],
    [30, 40, 51, 45, 33, 48],
    [44, 49, 39, 56, 34, 53],
    [46, 42, 50, 36, 29, 32],
];

$matrixPBox = [
    [16, 7, 20, 21, 29, 12, 28, 17],
    [1, 15, 23, 26, 5, 18, 31, 10],
    [2, 8, 24, 14, 32, 27, 3, 9],
    [19, 13, 30, 6, 22, 11, 4, 25],
];

$sBoxTable = [
    [
        [14, 4, 13, 1, 2, 15, 11, 8, 3, 10, 6, 12, 5, 9, 0, 7],
        [0, 15, 7, 4, 14, 2, 13, 1, 10, 6, 12, 11, 9, 5, 3, 8],
        [4, 1, 14, 8, 13, 6, 2, 11, 15, 12, 9, 7, 3, 10, 5, 0],
        [15, 12, 8, 2, 4, 9, 1, 7, 5, 11, 3, 14, 10, 0, 6, 13],
    ],
    [
        [15, 1, 8, 14, 6, 11, 3, 4, 9, 7, 2, 13, 12, 0, 5, 10],
        [3, 13, 4, 7, 15, 2, 8, 14, 12, 0, 1, 10, 6, 9, 11, 5],
        [0, 14, 7, 11, 10, 4, 13, 1, 5, 8, 12, 6, 9, 3, 2, 15],
        [13, 8, 10, 1, 3, 15, 4, 2, 11, 6, 7, 12, 0, 5, 14, 9],
    ],
    [
        [10, 0, 9, 14, 6, 3, 15, 5, 1, 13, 12, 7, 11, 4, 2, 8],
        [13, 7, 0, 9, 3, 4, 6, 10, 2, 8, 5, 14, 12, 11, 15, 1],
        [13, 6, 4, 9, 8, 15, 3, 0, 11, 1, 2, 12, 5, 10, 14, 7],
        [1, 10, 13, 0, 6, 9, 8, 7, 4, 15, 14, 3, 11, 5, 2, 12],
    ],
    [
        [7, 13, 14, 3, 0, 6, 9, 10, 1, 2, 8, 5, 11, 12, 4, 15],
        [13, 8, 11, 5, 6, 15, 0, 3, 4, 7, 2, 12, 1, 10, 14, 9],
        [10, 6, 9, 0, 12, 11, 7, 13, 15, 1, 3, 14, 5, 2, 8, 4],
        [3, 15, 0, 6, 10, 1, 13, 8, 9, 4, 5, 11, 12, 7, 2, 14],
    ],
    [
        [2, 12, 4, 1, 7, 10, 11, 6, 8, 5, 3, 15, 13, 0, 14, 9],
        [14, 11, 2, 12, 4, 7, 13, 1, 5, 0, 15, 10, 3, 9, 8, 16],
        [4, 2, 1, 11, 10, 13, 7, 8, 15, 9, 12, 5, 6, 3, 0, 14],
        [11, 8, 12, 7, 1, 14, 2, 13, 6, 15, 0, 9, 10, 4, 5, 3],
    ],
    [
        [12, 1, 10, 15, 9, 2, 6, 8, 0, 13, 3, 4, 14, 7, 5, 11],
        [10, 15, 4, 2, 7, 12, 9, 5, 6, 1, 13, 14, 0, 11, 3, 8],
        [9, 14, 15, 5, 2, 8, 12, 3, 7, 0, 4, 10, 1, 13, 11, 6],
        [4, 3, 2, 12, 9, 5, 15, 10, 11, 14, 1, 7, 6, 0, 8, 13],
    ],
    [
        [4, 11, 2, 14, 15, 0, 8, 13, 3, 12, 9, 7, 5, 10, 6, 1],
        [13, 0, 11, 7, 4, 9, 1, 10, 14, 3, 5, 12, 2, 15, 8, 6],
        [1, 4, 11, 13, 12, 3, 7, 14, 10, 15, 6, 8, 0, 5, 9, 2],
        [6, 11, 13, 8, 1, 4, 10, 7, 9, 5, 0, 15, 14, 2, 3, 12],
    ],
    [
        [13, 2, 8, 4, 6, 15, 11, 1, 10, 9, 3, 14, 5, 0, 12, 7],
        [1, 15, 13, 8, 10, 3, 7, 4, 12, 5, 6, 11, 0, 14, 9, 2],
        [7, 11, 4, 1, 9, 12, 14, 2, 0, 6, 10, 13, 15, 3, 5, 8],
        [2, 1, 14, 7, 4, 10, 8, 13, 15, 12, 9, 0, 3, 5, 6, 11],
    ],
];
$invertPermutateTable = [
    [40, 8, 48, 16, 56, 24, 64, 32],
    [39, 7, 47, 15, 55, 23, 63, 31],
    [38, 6, 46, 14, 54, 22, 62, 30],
    [37, 5, 45, 13, 53, 21, 61, 29],
    [36, 4, 44, 12, 52, 20, 60, 28],
    [35, 3, 43, 11, 51, 19, 59, 27],
    [34, 2, 42, 10, 50, 18, 58, 26],
    [33, 1, 41, 9, 49, 17, 57, 25],
];
function stringToBinary($str, $len = 8)
{
    $binary = [];
    foreach (str_split($str) as $char) {
        $binary[] = str_pad(decbin(ord($char)), $len, '0', STR_PAD_LEFT);
    }
    return $binary;
}

// Convert binary to string
function binaryToString($binary, $len = 8)
{
    $str = '';
    $chunks = str_split($binary, $len);
    foreach ($chunks as $chunk) {
        $str .= chr(bindec($chunk));
    }
    return $str;
}

// Convert hexadecimal to binary
function hexToBinary($hex)
{
    if (!is_array($hex)) {
        $hex = explode(' ', $hex);
    }
    $binary = [];
    foreach ($hex as $value) {
        $binary[] = str_pad(decbin(hexdec($value)), 8, '0', STR_PAD_LEFT);
    }
    return $binary;
}

function permutateTable($bit = 8)
{
    $init = array_map(function ($x) use ($bit) {
        return array_map(function ($i) use ($bit, $x) {
            return ($bit * $x) + $i + 1;
        }, range(0, $bit - 1));
    }, range(0, $bit - 1));

    $y = array_map(function ($i) use ($init) {
        $h = [];
        foreach ($init as $x) {
            $h[] = $x[$i];
        }
        return $h;
    }, range(0, $bit - 1));

    $arrToFilter = array_filter(
        $y,
        function ($x, $xi) {
            return $xi % 2 === 0;
        },
        ARRAY_FILTER_USE_BOTH
    );
    $odd = array_map(
        function ($x) {
            return array_reverse($x);
        },
        $arrToFilter
    );

    $even = array_map(function ($x) {
        return array_reverse($x);
    }, array_filter($y, function ($x, $xi) {
        return $xi % 2 === 1;
    }, ARRAY_FILTER_USE_BOTH));

    return array_merge($even, $odd);
}

function permutation($binary, $table)
{
    if (is_array($binary)) {
        $binary = implode('', $binary);
    }

    $binary = preg_replace('/ +/', '', $binary);
    $result = [];
    foreach ($table as $row) {
        foreach ($row as $col) {
            $result[] = $binary[$col - 1];
        }
    }
    return implode('', $result);
}

function keyWrapping($c0, $d0)
{
    $result = [];
    for ($i = 1; $i < 17; $i++) {
        if (count($result)) {
            $c0 = $result[count($result) - 1]["c{$i}"];
            $d0 = $result[count($result) - 1]["d{$i}"];
        }
        $r = [];
        if (in_array($i, [1, 2, 9, 16])) {
            $r["c{$i}"] = substr($c0, 1) . $c0[0];
            $r["d{$i}"] = substr($d0, 1) . $d0[0];
        } else {
            $r["c{$i}"] = substr($c0, 2) . substr($c0, 0, 2);
            $r["d{$i}"] = substr($d0, 2) . substr($d0, 0, 2);
        }
        $result[] = $r;
        $c = $r["c{$i}"];
        $d = $r["d{$i}"];
    }
    return $result;
}

function calculatePC2($c0, $d0)
{
    global $matrixPC2;
    $result = [];
    $keyWrappingResult = keyWrapping($c0, $d0);
    foreach ($keyWrappingResult as $xi => $x) {
        $c = $x["c" . ($xi + 1)];
        $d = $x["d" . ($xi + 1)];
        $result[] = permutation($c . $d, $matrixPC2);
    }
    return $result;
}

function E($R)
{
    $result = [];
    $result[] = $R[31] . substr($R, 0, 4) . $R[4];
    $result[] = $R[3] . substr($R, 4, 4) . $R[8];
    $result[] = $R[7] . substr($R, 8, 4) . $R[12];
    $result[] = $R[11] . substr($R, 12, 4) . $R[16];
    $result[] = $R[15] . substr($R, 16, 4) . $R[20];
    $result[] = $R[19] . substr($R, 20, 4) . $R[24];
    $result[] = $R[23] . substr($R, 24, 4) . $R[28];
    $result[] = $R[27] . substr($R, 28, 4) . $R[0];
    return implode("", $result);
}

function calculateSBox($binary)
{
    $result = '';
    global $sBoxTable;
    for ($ti = 0; $ti < count($sBoxTable); $ti++) {
        $block = substr($binary, $ti * 6, 6);
        $r = bindec($block[0] . $block[strlen($block) - 1]);
        $c = bindec(substr($block, 1, 4));

        $result .= decbin($sBoxTable[$ti][$r][$c]);
    }
    return $result;
}

function xorBinary($a, $b)
{
    if (strlen($a) !== strlen($b)) {
        $maxLength = max(strlen($a), strlen($b));
        $a = str_pad($a, $maxLength, "0");
        $b = str_pad($b, $maxLength, "0");
    }
    $result = '';
    for ($i = 0; $i < strlen($a); $i++) {
        $result .= $a[$i] ^ $b[$i];
    }
    return $result;
}

function Ciphering($l, $r, $K)
{
    global $matrixPBox;
    $L = '';
    $R = '';
    for ($ki = 0; $ki < count($K); $ki++) {
        if (strlen($R) && strlen($L)) {
            $l = $R;
            $r = $L;
        }
        $ER = E($r);
        $A = xorBinary($ER, $K[$ki]);
        $B = calculateSBox($A);
        $PB = permutation($B, $matrixPBox);
        $Ri = xorBinary($PB, $l);
        $R = $r;
        $L = $Ri;
    }
    return array($L, $R);
}

function DESEncrypt($plaintext, $key)
{
    global $matrixPC1;
    global $invertPermutateTable;
    // Начальная перестановка
    $initialPermutation = permutation(
        stringToBinary($plaintext), // перевод текста в биты
        permutateTable() // таблица перестановок
    );

    // Разбиение на 2 блока по 32 бита
    $L0 = substr($initialPermutation, 0, 32);
    $R0 = substr($initialPermutation, 32, 64);

    // Генерация ключа
    $K = hexToBinary($key); // конвертация 16-го ключа в 2-ый
    $Kplus = permutation($K, $matrixPC1);

    // Разбиение на 2 блока С0 и D0 по 28
    $C0 = substr($Kplus, 0, 28);
    $D0 = substr($Kplus, 28, 56);
    $Keys = calculatePC2($C0, $D0);

    // Шифрование
    $Encipher = Ciphering($L0, $R0, $Keys);

    // Обратная перестановка
    $Cipher = permutation(implode('', $Encipher), $invertPermutateTable);

    return $Cipher;
}

function DESDecrypt($ciphertext, $key)
{
    global $matrixPC1;
    global $invertPermutateTable;
    // Начальная перестановка
    $initialPermutation = permutation(
        $ciphertext,
        permutateTable()
    );
    // Разбиение на 2 блока по 32 бита
    $L0 = substr($initialPermutation, 0, 32);
    $R0 = substr($initialPermutation, 32, 64);

    // Генерация ключа
    $K = hexToBinary($key); // конвертация 16-го ключа в 2-ый
    $Kplus = permutation($K, $matrixPC1);
    // разбиение на 2 блока С0 и D0 по 28
    $C0 = substr($Kplus, 0, 28);
    $D0 = substr($Kplus, 28, 56);

    $Keys = array_reverse(calculatePC2($C0, $D0));

    // Дешифрование
    $Decipher = Ciphering($L0, $R0, $Keys);

    // Обратная перестановка
    $PlaintextBinary = permutation(implode('', $Decipher), $invertPermutateTable);

    // 5. перевод битов в текст
    $Plaintext = binaryToString($PlaintextBinary);

    return $Plaintext;
}

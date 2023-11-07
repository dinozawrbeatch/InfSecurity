<?php
function getAlphabet(bool $isUppercase = false)
{
    if ($isUppercase) {
        return str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
    }
    return str_split('abcdefghijklmnopqrstuvwxyz');
}

function start($text, $shift)
{
    // Encrypt the text
    $encrypted = '';
    if ($shift > count(getAlphabet())) {
        $shift = count(getAlphabet());
    }
    for ($i = 0; $i < strlen($text); $i++) {
        $letter = $text[$i];
        if (in_array($letter, getAlphabet()) || in_array($letter, getAlphabet(true))) {
            $encrypted .= shiftLetter($letter, $shift);
        } else {
            $encrypted .= $letter;
        }
    }

    // Decrypt the encrypted text
    $decrypted = '';
    for ($i = 0; $i < strlen($encrypted); $i++) {
        $letter = $encrypted[$i];
        if (in_array($letter, getAlphabet()) || in_array($letter, getAlphabet(true))) {
            $decrypted .= shiftLetter($letter, -$shift);
        } else {
            $decrypted .= $letter;
        }
    }

    // Break the encrypted text
    $popularSymbols = ['e', 't', 'a', 'o', 'i', 'n', 's'];
    $variants = [];
    foreach ($popularSymbols as $symbol) {
        $variants[] = chipherVariant($text, $symbol);
    }

    return ['encrypted' => $encrypted, 'decrypted' => $decrypted, 'variants' => $variants];
}

function chipherVariant($text, $symbol)
{
    $frequency = array_fill(0, 26, 0);

    for ($i = 0; $i < strlen($text); $i++) {
        $letter = strtolower($text[$i]);
        if (ctype_alpha($letter)) {
            $frequency[ord($letter) - ord('a')]++;
        }
    }

    $maxFrequency = 0;
    $maxIndex = 0;

    for ($i = 0; $i < count($frequency); $i++) {
        if ($frequency[$i] > $maxFrequency) {
            $maxFrequency = $frequency[$i];
            $maxIndex = $i;
        }
    }

    $key = $maxIndex - (ord($symbol) - ord('a'));

    $decryptedText = '';
    for ($i = 0; $i < strlen($text); $i++) {
        $letter = $text[$i];
        $isUpperCase = $letter === strtoupper($letter);
        $lowerLetter = strtolower($letter);
        if (ctype_alpha($lowerLetter)) {
            $decryptedLetter = ord($lowerLetter) - $key - ord('a');
            if ($decryptedLetter < 0) {
                $decryptedLetter += 26;
            }

            $decryptedLetter = ($decryptedLetter % 26) + ord('a');
            $decryptedLetter = chr($decryptedLetter);
            if ($isUpperCase) $decryptedLetter = strtoupper($decryptedLetter);

            $decryptedText .= $decryptedLetter;
        } else {
            $decryptedText .= $letter;
        }
    }

    return $decryptedText;
}

function shiftLetter($letter, $shiftAmount)
{
    $isUpperCase = $letter === strtoupper($letter);
    $alphabet = getAlphabet($isUpperCase);
    $letterIndex = array_search($letter, $alphabet);

    $shiftedIndex = ($letterIndex + $shiftAmount) % count($alphabet);
    if ($shiftedIndex < 0) $shiftedIndex = count($alphabet) + $shiftedIndex;
    $shiftedLetter = $alphabet[$shiftedIndex];

    if (!$isUpperCase) {
        $shiftedLetter = strtolower($shiftedLetter);
    }

    return $shiftedLetter;
}

$game = start('Some shit text', '8');
print_r($game);

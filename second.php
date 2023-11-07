<?php

function getAlphabet(bool $isUppercase = false)
{
    if ($isUppercase) {
        return str_split('ABCDEFGHIJKLMNOPQRSTUVWXYZ');
    }
    return str_split('abcdefghijklmnopqrstuvwxyz');
}

function generateDataForLabs()
{
    $result = array();
    $alphabet = range('A', 'Z');

    for ($i = 0; $i < count($alphabet); $i++) {
        $row = array_merge(array_slice($alphabet, $i), array_slice($alphabet, 0, $i));
        $result[] = $row;
    }

    return $result;
}

function start($text, $key)
{
    $text = strtolower($text);
    $key = strtolower($key);

    // encryption
    $halfEncripted = fillKey($text, $key);
    $encripted = changeLetters($halfEncripted, $text, false);
    print_r($encripted);
    // decryption
    $halfDecripted = fillKey($encripted, $key);
    $decripted = changeLetters($halfDecripted, $encripted, true);

    return array("encripted" => $encripted, "decripted" => $decripted);
}

function fillKey($text, $key)
{
    $letters = str_split($text);

    $halfEncripted = '';
    $currentKeyIndex = 0;
    $keyLength = strlen($key);
    foreach ($letters as $letter) {
        if (ctype_alpha($letter)) {
            if ($currentKeyIndex === $keyLength) $currentKeyIndex = 0;
            $halfEncripted .= $key[$currentKeyIndex];
            $currentKeyIndex++;
            continue;
        }
        $halfEncripted .= $letter;
    }
    return $halfEncripted;
}

function changeLetters($halfEncripted, $text, $reverse)
{
    $encripted = '';
    $alphabet = getAlphabet();
    $secondLabAlphabetMatrix = generateDataForLabs();
    for ($i = 0; $i < strlen($halfEncripted); $i++) {
        $halfEncriptedLetter = $halfEncripted[$i];
        if (!in_array($halfEncriptedLetter, $alphabet)) {
            $encripted .= $halfEncriptedLetter;
            continue;
        }
        foreach ($secondLabAlphabetMatrix as $encriptedAlphabet) {
            if (strtolower($encriptedAlphabet[0]) !== $halfEncriptedLetter) continue;
            $startLetter = $text[$i];
            $encriptedLetter = '';
            if ($reverse) {
                $startLetterEncriptedAlphaberIndex = array_search($startLetter, (array)$encriptedAlphabet);
                $encriptedLetter = $alphabet[$startLetterEncriptedAlphaberIndex];
            } else {
                $startLetterEncriptedAlphaberIndex = array_search($startLetter, $alphabet);
                $encriptedLetter = $encriptedAlphabet[$startLetterEncriptedAlphaberIndex];
            }
            $encripted .= $encriptedLetter;
        }
    }

    return $encripted;
}

$result = start('Some shit text', 'word');
print_r($result);

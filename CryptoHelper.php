<?php
class CryptoHelper {
    public function encryptText($text, $key) {
        if (!is_string($text) || !is_int($key)) {
            return "Invalid input";
        }

        $result = '';
        $length = strlen($text);
        $key = $key % 26; // Pastikan pergeseran tidak melebihi panjang alfabet

        for ($i = 0; $i < $length; $i++) {
            $char = $text[$i];
            if (ctype_alpha($char)) {
                $asciiOffset = ctype_upper($char) ? 65 : 97;
                $shiftedChar = chr(($asciiOffset + (ord($char) - $asciiOffset + $key + 26) % 26));
                $result .= $shiftedChar;
            } else {
                $result .= $char; // Karakter non-alfabet tidak berubah
            }
        }

        return $result;
    }
}
?>

<?php
class ArrayHelper {
    public function countUniqueElements($array) {
        if (!is_array($array)) {
            return "Invalid input";
        }
        return count(array_unique($array));
    }
}
?>

<?php
class Validator {
    public function isEmailValid($email) {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }
}
?>

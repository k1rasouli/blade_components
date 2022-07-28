<?php

namespace App\libs;

class UniversalMethods
{
    public static function userMessage($message, $type, $errors = [])
    {
        session()->forget('alert');
        session(['alert' => ['message' => $message, 'type' => $type, 'errors' => $errors]]);
    }
}

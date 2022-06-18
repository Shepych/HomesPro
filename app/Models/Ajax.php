<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ajax extends Model
{
    use HasFactory;

    public static function message($message) {
        return json_encode(['message' => $message], JSON_UNESCAPED_UNICODE);
    }

    public static function layout($layout) {
        return json_encode(['layout' => $layout], JSON_UNESCAPED_UNICODE);
    }

    public static function dd($debug) {
        return json_encode(['dd' => $debug], JSON_UNESCAPED_UNICODE);
    }
}

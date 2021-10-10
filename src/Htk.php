<?php declare(strict_types=1);

namespace Htk;

use Htk\Debuggers;

class Htk {

    public static function slack_debug($text) {
        Debuggers:slack_debug($text);
    }
}

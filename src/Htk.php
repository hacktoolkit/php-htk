<?php declare(strict_types=1);

namespace Htk;

use Htk\Config;
use Htk\Debugger;

class Htk {
    private static $wasInited = false;
    private static $config = null;
    private static $debugger = null;

    public static function init(array $configArray) {
        self::$config = new Config($configArray);
        self::$debugger = new Debugger(self::$config);

        self::$wasInited = true;
    }

    public static function slack_debug($text, $channel = null) {
        if (self::$wasInited) {
            self::$debugger->slack_debug($text, $channel);
        }
    }
}

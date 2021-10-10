<?php

namespace Htk;

use Htk\Slack;

class Debuggers {

    public static function slack_debug($text) {
        Slack::message($text);
    }

}

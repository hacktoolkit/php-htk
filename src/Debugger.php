<?php

namespace Htk;

use Htk\Slack;

class Debugger {
    private $config;

    public function __construct($config) {
        $this->config = $config;
    }

    public function slack_debug($text) {
        Slack::message($text, $this->config->slack_webhook_url());
    }
}

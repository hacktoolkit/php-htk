<?php declare(strict_types=1);

namespace Htk;

class Config {
    private string $slack_webhook_url;

    public function __construct(array $configArray) {
        if (isset($configArray['SLACK_WEBHOOK_URL'])) {
            $this->slack_webhook_url = $configArray['SLACK_WEBHOOK_URL'];
        }
    }

    public function slack_webhook_url() {
        return $this->slack_webhook_url;
    }
}

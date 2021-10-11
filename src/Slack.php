<?php

namespace Htk;

use Requests;

class Slack {
    public static function message(
        $text,
        $webhook_url,
        $channel = null,
        $username = null,
        $attachments = null,
        $icon_emoji = null,
        $unfurl_links = true,
        $unfurl_media = false,
        $error_response_handlers = null
    ) {
        /**Performs a webhook call to Slack

           https://api.slack.com/incoming-webhooks
           https://api.slack.com/docs/message-formatting

           `channel` override must be a public channel
        */
        $payload = array(
            'text' => $text,
            'unfurl_links' => $unfurl_links,
            'unfurl_media' => $unfurl_media,
        );

        if ($channel) {
            $payload['channel'] = $channel;
        }
        if ($username) {
            $payload['username'] = $username;
        }
        if ($icon_emoji) {
            $payload['icon_emoji'] = $icon_emoji;
        }
        if ($attachments) {
            $payload['attachments'] = $attachments;
        }

        $headers = array(
            'Content-Type' => 'application/json'
        );

        $response = Requests::post($webhook_url, $headers, json_encode($payload));
        if ($response->status_code == 200) {
            // success case, do nothing
        } else if ($response->status_code <= 399) {
            // 200-300, do nothing
        } else {
            echo('Slack webhook call error: ['. $response->status_code . '] ' . $response->body);
        }

        return $response;
    }
}

namespace Htk;

$SLACK_WEBHOOK_URL = getenv('SLACK_WEBHOOK_URL');


class Slack {
    function message(
        $webhook_url=$SLACK_WEBHOOK_URL,
        $channel=null,
        $username=null,
        $text='',
        $attachments=null,
        $icon_emoji=null,
        $unfurl_links=true,
        $unfurl_media=false,
        $error_response_handlers=null
    ) {
        /**Performs a webhook call to Slack

           https://api.slack.com/incoming-webhooks
           https://api.slack.com/docs/message-formatting

           `channel` override must be a public channel
        */
        if ($webhook_url == null) {
            throw new Exception('HTK_SLACK_WEBHOOK_URL or SLACK_WEBHOOK_URL not set in ENV');
        }

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

        $headers = array();

        $response = Requests::post($webhook_url, $headers, $payload);
        if ($response->status_code == 200) {
            # success case, do nothing
        } else if ($response->status_code <= 399) {
            # 200-300, do nothing
        } else {
            //print('Slack webhook call error: [{}] {}'.format(response.status_code, response.content))
        }

        return $response;
    }
}

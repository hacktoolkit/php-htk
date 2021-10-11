# php-htk

## Installation

```
composer require hacktoolkit/php-htk
```

## How To Use

```
\Htk\Htk::init([
    'SLACK_WEBHOOK_URL' => 'https://hooks.slack.com/services/your/slack/incoming-webhook-url'
]);
\Htk\Htk::slack_debug('hello world');
```

## License

MIT

## Releasing and Packaging

- Releasing is automatically done via GitHub Actions. See `.github/workflows/create-release.yml`
- Package information can be found at: https://packagist.org/packages/hacktoolkit/php-htk

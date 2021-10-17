# php-htk

## Installation

```
composer require hacktoolkit/php-htk
```

## How To Use

```
require 'vendor/autoload.php';

\Htk\Htk::init([
    'SLACK_WEBHOOK_URL' => 'https://hooks.slack.com/services/your/slack/incoming-webhook-url'
]);
\Htk\Htk::slack_debug('hello world');

// To send to a different channel
\Htk\Htk::slack_debug('hello world', '#test');
```

# See Also

- C# - https://github.com/hacktoolkit/csharp-htk
- PHP - https://github.com/hacktoolkit/php-htk
- Python (full) - https://github.com/hacktoolkit/python-htk
- Python (lite) - https://github.com/hacktoolkit/python-htk-lite
- Ruby - https://github.com/hacktoolkit/htk-rb

# Authors and Maintainers

- [Hacktoolkit](https://github.com/hacktoolkit)
- [Jonathan Tsai](https://github.com/jontsai)

## License

MIT

## Releasing and Packaging

- Releasing is automatically done via GitHub Actions. See `.github/workflows/create-release.yml`
- Package information can be found at: https://packagist.org/packages/hacktoolkit/php-htk

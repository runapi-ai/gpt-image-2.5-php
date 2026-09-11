# GPT Image 2.5 PHP SDK for RunAPI

[![Packagist](https://img.shields.io/packagist/v/runapi-ai/gpt-image-2.5)](https://packagist.org/packages/runapi-ai/gpt-image-2.5)

The GPT Image 2.5 PHP SDK provides text-to-image and image editing clients. Requests select `gpt-image-2.5-flare` or `gpt-image-2.5-sunburst`.

## Install

```bash
composer require runapi-ai/gpt-image-2.5
```

## Quick start

```php
<?php

require __DIR__ . "/vendor/autoload.php";

use RunApi\GptImage25\GptImage25Client;

$client = new GptImage25Client();
$task = $client->textToImage->create([
    'model' => 'gpt-image-2.5-flare',
    'prompt' => 'A precise product render on white marble',
    'aspect_ratio' => '1:1',
    'output_resolution' => '1k',
]);
$status = $client->textToImage->get($task->id);
```

Use `create()` to submit, `get()` to fetch task status, and `run()` to create and poll until completion. Keep `RUNAPI_API_KEY` in the environment or a secret manager.

RunAPI-generated file URLs are temporary. Store generated files in durable storage within 7 days.

## Links

- Model overview: https://runapi.ai/models/gpt-image-2.5
- Flare: https://runapi.ai/models/gpt-image-2.5/flare
- Sunburst: https://runapi.ai/models/gpt-image-2.5/sunburst
- API reference: https://runapi.ai/docs/api/gpt-image-2-5/text-to-image
- SDK docs: https://runapi.ai/docs/resources/sdks
- Repository: https://github.com/runapi-ai/gpt-image-2.5-php

## License

Licensed under the Apache License, Version 2.0.

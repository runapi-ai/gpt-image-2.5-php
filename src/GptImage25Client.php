<?php

declare(strict_types=1);

namespace RunApi\GptImage25;

use RunApi\Core\BaseClient;
use RunApi\Core\ClientOptions;
use RunApi\GptImage25\Resources\EditImage;
use RunApi\GptImage25\Resources\TextToImage;

/**
 * The GPT Image 2.5 image generation API client.
 *
 * Exposes typed model resources plus the universal files and account resources.
 */
final class GptImage25Client extends BaseClient
{
    /**
     * Provides text-to-image generation operations.
     */
    public readonly TextToImage $textToImage;
    /**
     * Provides image editing operations using source images as context.
     */
    public readonly EditImage $editImage;

    /**
     * Create a GPT Image 2.5 client with optional API key, base URL, and transport overrides.
     */
    public function __construct(ClientOptions $options = new ClientOptions())
    {
        parent::__construct($options);
        $this->textToImage = TextToImage::fromHttp($this->http);
        $this->editImage = EditImage::fromHttp($this->http);
    }
}

<?php

declare(strict_types=1);

namespace RunApi\GptImage25;

/**
 * Constants for model slugs supported by the GPT Image 2.5 PHP SDK.
 */
final class Types
{
    /** @var list<string> */
    public const TEXT_TO_IMAGE_MODELS = ['gpt-image-2.5-flare', 'gpt-image-2.5-sunburst'];

    /** @var list<string> */
    public const EDIT_IMAGE_MODELS = ['gpt-image-2.5-flare', 'gpt-image-2.5-sunburst'];

    private function __construct()
    {
    }
}

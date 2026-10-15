# Changelog

## [v0.3.0](https://github.com/runapi-ai/gpt-image-2.5-php/releases/tag/v0.3.0) - 2026-10-15

### Added
- Add an optional background field (transparent, opaque, or auto) to GPT Image 2.5 text-to-image and edit-image requests; omit it to let the model choose.


## [v0.2.0](https://github.com/runapi-ai/gpt-image-2.5-php/releases/tag/v0.2.0) - 2026-09-30

### Changed
- Send request parameters to the service without local validation. Model ids and parameter values the service supports work without an SDK upgrade; static types and enum constants remain for completion.
  Migration: Invalid parameters now throw `ValidationException` built from the service's 400 response, including its status and message, instead of a `ValidationException` thrown locally before the request.


## [v0.1.1](https://github.com/runapi-ai/gpt-image-2.5-php/releases/tag/v0.1.1) - 2026-09-11

### Added
- Add a typed PHP client for GPT Image 2.5 text-to-image and image editing endpoints.

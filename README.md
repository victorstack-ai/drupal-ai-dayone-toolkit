# AI Day One Toolkit

Practical, repeatable prompt utilities for day-one Drupal CMS 2.0 content workflows. This module ships framework-agnostic helpers that you can wire into Drupal AI providers, editorial tools, or custom services.

## What It Does

- Builds a prompt pack for summaries, meta descriptions, social posts, taxonomy suggestions, and content QA.
- Provides a checklist of day-one AI tasks to standardize editorial workflows.

## Usage

```php
use Drupal\drupal_ai_dayone_toolkit\PromptPack;
use Drupal\drupal_ai_dayone_toolkit\StarterChecklist;

$pack = PromptPack::build([
  'title' => 'Neighborhood Cleanup Day',
  'body' => 'Residents will gather at 9am to clean the riverfront.',
  'audience' => 'community volunteers',
  'tone' => 'warm and encouraging',
  'goal' => 'drive signups',
]);

$checklist = StarterChecklist::items();
```

## Development

```bash
composer install
vendor/bin/phpcs
vendor/bin/phpunit
```

## License

MIT

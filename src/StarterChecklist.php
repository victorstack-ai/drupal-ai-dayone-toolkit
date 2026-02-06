<?php

namespace Drupal\drupal_ai_dayone_toolkit;

/**
 * Provides a day-one checklist for AI-ready Drupal content workflows.
 */
final class StarterChecklist {

  /**
   * Returns recommended tasks to wire up on day one.
   *
   * @return array
   *   An array of checklist items with label and intent.
   */
  public static function items(): array {
    return [
      [
        'label' => 'Editorial brief',
        'intent' => 'Create a reusable brief template with audience, goal, and tone.',
      ],
      [
        'label' => 'Summary draft',
        'intent' => 'Generate a 2-3 sentence summary for homepage and listing cards.',
      ],
      [
        'label' => 'Meta description',
        'intent' => 'Ensure a consistent 155-character SEO description is available.',
      ],
      [
        'label' => 'Social post starter',
        'intent' => 'Draft a short shareable post aligned to brand tone.',
      ],
      [
        'label' => 'Taxonomy suggestions',
        'intent' => 'Recommend 5-7 tags or terms for navigation and search.',
      ],
      [
        'label' => 'Content QA',
        'intent' => 'Spot missing facts, risky claims, or unclear wording.',
      ],
    ];
  }

}

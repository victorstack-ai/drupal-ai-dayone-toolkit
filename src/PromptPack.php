<?php

namespace Drupal\drupal_ai_dayone_toolkit;

/**
 * Builds repeatable AI prompt packs for Drupal content workflows.
 */
final class PromptPack {

  /**
   * Build a prompt pack for a content item.
   *
   * @param array $context
   *   Context with keys: title, body, audience, tone, goal.
   *
   * @return array
   *   Prompt templates keyed by task name.
   */
  public static function build(array $context): array {
    $normalized = self::normalizeContext($context);

    $title = $normalized['title'];
    $body = $normalized['body'];
    $audience = $normalized['audience'];
    $tone = $normalized['tone'];
    $goal = $normalized['goal'];

    return [
      'summary' => "Summarize '{$title}' for {$audience} in a {$tone} tone. Goal: {$goal}. Body: {$body}",
      'meta_description' => "Write a meta description (155 chars) for '{$title}' targeting {$audience}. Goal: {$goal}.",
      'social_post' => "Draft a short social post about '{$title}' for {$audience}. Keep it {$tone} and action-oriented.",
      'taxonomy_suggestions' => "Suggest 5 Drupal taxonomy terms for '{$title}'. Base on: {$body}",
      'content_qa' => "List any missing facts, unclear claims, or potential risks in '{$title}'. Body: {$body}",
    ];
  }

  /**
   * Normalize context with defaults and guardrails.
   */
  private static function normalizeContext(array $context): array {
    if (empty($context['title']) || empty($context['body'])) {
      throw new \InvalidArgumentException('Context must include non-empty title and body.');
    }

    return [
      'title' => trim((string) $context['title']),
      'body' => trim((string) $context['body']),
      'audience' => isset($context['audience']) ? trim((string) $context['audience']) : 'busy stakeholders',
      'tone' => isset($context['tone']) ? trim((string) $context['tone']) : 'clear, confident, human',
      'goal' => isset($context['goal']) ? trim((string) $context['goal']) : 'help readers act quickly',
    ];
  }

}

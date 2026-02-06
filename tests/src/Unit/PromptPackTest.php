<?php

namespace Drupal\Tests\drupal_ai_dayone_toolkit\Unit;

use Drupal\drupal_ai_dayone_toolkit\PromptPack;
use PHPUnit\Framework\TestCase;

/**
 * Tests for prompt pack generation.
 *
 * @group drupal_ai_dayone_toolkit
 */
final class PromptPackTest extends TestCase {

  /**
   * Ensure defaults are applied and prompts include context.
   */
  public function testBuildPrompts(): void {
    $pack = PromptPack::build([
      'title' => 'Neighborhood Cleanup Day',
      'body' => 'Residents will gather at 9am to clean the riverfront.',
    ]);

    $this->assertArrayHasKey('summary', $pack);
    $this->assertStringContainsString('Neighborhood Cleanup Day', $pack['summary']);
    $this->assertStringContainsString('busy stakeholders', $pack['summary']);
    $this->assertStringContainsString('clear, confident, human', $pack['summary']);
  }

  /**
   * Ensure missing required fields throws.
   */
  public function testBuildRequiresTitleAndBody(): void {
    $this->expectException(\InvalidArgumentException::class);
    PromptPack::build(['title' => 'Missing body']);
  }

}

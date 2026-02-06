<?php

namespace Drupal\Tests\drupal_ai_dayone_toolkit\Unit;

use Drupal\drupal_ai_dayone_toolkit\StarterChecklist;
use PHPUnit\Framework\TestCase;

/**
 * Tests for the day-one checklist.
 *
 * @group drupal_ai_dayone_toolkit
 */
final class StarterChecklistTest extends TestCase {

  /**
   * Ensure checklist items are well-formed.
   */
  public function testChecklistItems(): void {
    $items = StarterChecklist::items();
    $this->assertNotEmpty($items);

    foreach ($items as $item) {
      $this->assertArrayHasKey('label', $item);
      $this->assertArrayHasKey('intent', $item);
      $this->assertNotSame('', $item['label']);
      $this->assertNotSame('', $item['intent']);
    }
  }

}

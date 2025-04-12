<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

/**
 * Tests for Fluent Forms constants stubs
 */
class ConstantsTest extends TestCase
{
    /**
     * Test that constants are defined
     */
    public function testConstantsAreDefined(): void
    {
        $this->assertTrue(defined('FLUENTFORM_DIR_URL'));
        $this->assertTrue(defined('FLUENTFORM_DIR_PATH'));
        $this->assertTrue(defined('FLUENTFORM_VERSION'));
        // Add more constant checks as needed
    }
} 
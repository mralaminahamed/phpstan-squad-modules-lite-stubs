<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

/**
 * Tests for Fluent Forms stubs
 */
class FluentFormTest extends TestCase
{
    /**
     * Test that Fluent Forms classes are defined
     */
    public function testFluentFormClassesExist(): void
    {
        $this->assertTrue(class_exists('FluentForm\App\Api\Form'));
        $this->assertTrue(class_exists('FluentForm\App\Modules\Form\Form'));
        $this->assertTrue(class_exists('FluentForm\App\Modules\Entries\Entries'));
        // Add more class checks as needed
    }
    
    /**
     * Test that Fluent Forms functions are defined
     */
    public function testFluentFormFunctionsExist(): void
    {
        $this->assertTrue(function_exists('wpFluentForm'));
        $this->assertTrue(function_exists('fluentFormMix'));
        // Add more function checks as needed
    }
} 
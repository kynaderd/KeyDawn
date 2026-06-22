<?php
/**
 * Tests for KeyDawn
 */

use PHPUnit\Framework\TestCase;
use Keydawn\Keydawn;

class KeydawnTest extends TestCase {
    private Keydawn $instance;

    protected function setUp(): void {
        $this->instance = new Keydawn(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Keydawn::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

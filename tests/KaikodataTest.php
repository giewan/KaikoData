<?php
/**
 * Tests for KaikoData
 */

use PHPUnit\Framework\TestCase;
use Kaikodata\Kaikodata;

class KaikodataTest extends TestCase {
    private Kaikodata $instance;

    protected function setUp(): void {
        $this->instance = new Kaikodata(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Kaikodata::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}

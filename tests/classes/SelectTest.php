<?php

use PHPUnit\Framework\TestCase;
use Otaodev\TddQueryBuilder\database\Select;

class SelectTest extends TestCase
{
    private Select $sut;

    protected function setUp(): void
    {
        $this->sut = new Select;
    }

    public function test_get_simple_select()
    {
        $query = $this->sut->query("select * from users")->get();

        self::assertEquals("select * from users", $query);
    }
}

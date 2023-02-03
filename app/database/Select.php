<?php

declare(strict_types=1);

namespace Otaodev\TddQueryBuilder\database;

class Select
{
    private string $sql;

    public function query(string $query): Select
    {
        $this->sql = $query;

        return $this;
    }

    public function get(): string
    {
        return $this->sql;
    }
}

<?php

namespace Osmianski\Traits;

trait HasLazyProperties
{
    public function __get(string $property): mixed {
        return $this->$property = $this->{"get_{$property}"}();
    }

    public function __isset(string $property): bool {
        return $this->__get($property) !== null;
    }
}

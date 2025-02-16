<?php

namespace App;

use App\Enums\Type;
use App\Enums\Wood;
use App\Enums\Builder;

class GuitarSpec {
    protected Builder $builder;
    protected string $model;
    protected Type $type;
    protected Wood $backWood;
    protected Wood $topWood;
    protected int $numString;

    public function __construct(Builder $builder, string $model, Type $type, int $numString, Wood $backWood, Wood $topWood)
    {
        $this->builder = $builder;
        $this->model = $model;
        $this->type = $type;
        $this->backWood = $backWood;
        $this->topWood = $topWood;
        $this->numString = $numString;
    }

    public function getBuilder(): Builder
    {
        return $this->builder;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getType(): Type
    {
        return $this->type;
    }

    public function getBackWood(): Wood
    {
        return $this->backWood;
    }

    public function getTopWood(): Wood
    {
        return $this->topWood;
    }

    public function getNumString(): int
    {
        return $this->numString;
    }

    public function matches(GuitarSpec $otherSpec): bool
    {
        if($otherSpec->builder == $this->builder) return true;
        if($otherSpec->model == $this->model) return true;
        if($otherSpec->type == $this->type) return true;
        if($otherSpec->backWood == $this->backWood) return true;
        if($otherSpec->topWood == $this->topWood) return true;

        return false;
    }
}
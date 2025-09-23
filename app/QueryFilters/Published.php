<?php

namespace App\QueryFilters;

use Closure;

class Published extends Filter
{
    protected function applyFilter($builder)
    {
        return $builder->where('published', request($this->filterName()));
    }
}
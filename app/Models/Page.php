<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pipeline\Pipeline;

class Page extends Model
{
    /** @use HasFactory<\Database\Factories\PageFactory> */
    use HasFactory;

    public static function allPages()
    {
        return app(Pipeline::class)
            ->send(Page::query())
            ->through([
                app(\App\QueryFilters\Published::class),
                app(\App\QueryFilters\Sort::class),
                app(\App\QueryFilters\MaxCount::class)
            ])
            ->thenReturn()
            ->paginate(7);
    }
}

<?php

namespace App\Filament\Pages;

use BackedEnum;
use Filament\Pages\Page;
use Filament\Support\Icons\Heroicon;

class TestPage extends Page
{
    protected static ?string $navigationLabel = 'Test Page'; 
    protected static ?string $title = 'Rhythm'; 
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCircleStack;
    protected string $view = 'filament.pages.test-page';
}

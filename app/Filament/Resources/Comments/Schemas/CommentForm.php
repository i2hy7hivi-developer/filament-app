<?php

namespace App\Filament\Resources\Comments\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CommentForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('user_id')
                    ->label('User')
                    ->relationship('user', 'name')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('commentable_type')
                    ->label('Comment On')
                    ->options([
                        \App\Models\Post::class => 'Post',
                        \App\Models\Task::class => 'Task',
                    ])
                    ->reactive()
                    ->required(),
                Select::make('commentable_id')
                ->label('Record')
                ->options(function (callable $get) {
                    $type = $get('commentable_type');

                    if ($type === \App\Models\Post::class) {
                        return \App\Models\Post::pluck('title', 'id');
                    }

                    if ($type === \App\Models\Task::class) {
                        return \App\Models\Task::pluck('title', 'id');
                    }

                    return [];
                })
                ->searchable()
                ->required(),
                Textarea::make('content')
                    ->default(null)
                    ->columnSpanFull(),
            ]);
    }
}

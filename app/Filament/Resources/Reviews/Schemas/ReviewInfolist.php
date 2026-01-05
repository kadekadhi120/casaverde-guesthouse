<?php

namespace App\Filament\Resources\Reviews\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class ReviewInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('user_name')
                    ->label('Reviewer Name'),
                TextEntry::make('comment')
                    ->label('Comment'),
                TextEntry::make('rating')
                    ->label('Rating')
                    ->formatStateUsing(fn (string $state): string => str_repeat('⭐', (int) $state))
                    ->color('warning'),   
            ]);
    }
}

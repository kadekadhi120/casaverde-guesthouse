<?php

namespace App\Filament\Resources\Facilities\Schemas;

use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class FacilityInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id')
                    ->label('Facility ID'),
                TextEntry::make('name')
                    ->label('Facility Name'),
                ImageEntry::make('image')
                    ->label('Facility Image')
                    ->disk('public')
                    ->height(400)
                    ->columnSpanFull(),
                    
            ]);
    }
}

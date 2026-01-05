<?php

namespace App\Filament\Resources\Banners\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ViewEntry;
use Filament\Schemas\Schema;

class BannerInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('id')
                    ->label('Banner ID'),
                TextEntry::make('name')
                    ->label('Banner Name'),
                ViewEntry::make('video')
                    ->label('Video Preview')
                    ->view('filament.infolists.video-player')
                    ->columnSpanFull(),
            ]);
    }
}

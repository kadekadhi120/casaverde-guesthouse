<?php

namespace App\Filament\Resources\Banners\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class BannerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Banner Name')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('video')
                    ->label('Video Promosi')
                    ->disk('public')
                    ->directory('Banner-videos') 
                    ->acceptedFileTypes(['video/mp4', 'video/quicktime']) 
                    ->maxSize(100 * 1024)
                    ->preserveFilenames()
                    ->columnSpanFull(),
            ]);
    }
}

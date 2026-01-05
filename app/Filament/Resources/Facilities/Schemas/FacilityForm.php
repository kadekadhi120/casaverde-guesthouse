<?php

namespace App\Filament\Resources\Facilities\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use League\Flysystem\Visibility;

class FacilityForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Facility Name')
                    ->required()
                    ->maxLength(255),
                FileUpload::make('image')
                    ->label('Facility Image')
                    ->image()
                    ->disk('public')
                    ->directory('Facility-images')
                    ->visibility(Visibility::PUBLIC)
                    ->maxSize(4096)
                    ->confirmSvgEditing()
                    ->downloadable()
                    ->openable()
                    ->previewable()
                    ->image()
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '16:9',
                    ])
            ]);
    }
}

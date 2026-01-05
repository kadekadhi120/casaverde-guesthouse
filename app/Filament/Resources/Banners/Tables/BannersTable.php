<?php

namespace App\Filament\Resources\Banners\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class BannersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id')
                    ->label('Banner ID')
                    ->sortable(),
                TextColumn::make('name')
                    ->label('Banner Name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('video')
                    ->label('Video File')
                    ->icon('heroicon-m-video-camera')
                    ->limit(30)
                    ->color('primary')
                    ->url(fn ($record) => $record->video ? asset('storage/' . $record->video) : null)
                    ->openUrlInNewTab(), 
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

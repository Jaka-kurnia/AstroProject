<?php

namespace App\Filament\Resources\Undangans\Tables;

use Filament\Actions\ActionGroup;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UndangansTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('judul')
                    ->searchable(),

                TextColumn::make('lokasi')
                    ->searchable(),
                TextColumn::make('tanggal_acara')
                    ->date()
                    ->sortable(),
                TextColumn::make('status'),
                TextColumn::make('user.name')
                ->label('Atas Nama')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
               ActionGroup::make([
                 ViewAction::make(),
                EditAction::make(),
                DeleteAction::make()
               ])
            ])
            ->toolbarActions([
            
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}

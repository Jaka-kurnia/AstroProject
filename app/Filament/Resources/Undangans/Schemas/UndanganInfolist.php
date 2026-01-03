<?php

namespace App\Filament\Resources\Undangans\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class UndanganInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('judul'),
                TextEntry::make('lokasi'),
                TextEntry::make('tanggal_acara')
                    ->date(),
                TextEntry::make('status'),
                TextEntry::make('user_id')
                    ->numeric(),
                TextEntry::make('created_at')
                    ->dateTime(),
                TextEntry::make('updated_at')
                    ->dateTime(),
            ]);
    }
}

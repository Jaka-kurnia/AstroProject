<?php

namespace App\Filament\Resources\Undangans\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class UndanganForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('judul')
                    ->required(),
                DatePicker::make('tanggal_acara')
                    ->required(),
                TextInput::make('lokasi')
                    ->required(),
                Select::make('status')
                    ->options(['draft' => 'Draft', 'published' => 'Published', 'archived' => 'Archived'])
                    ->default('draft')
                    ->required(),
                Select::make('user_id')
                    ->required()
                    ->relationship('user','name'),  
            ]);
    }
}

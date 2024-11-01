<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TabeltransaksipeminjamenResource\Pages;
use App\Filament\Resources\TabeltransaksipeminjamenResource\RelationManagers;
use App\Models\Tabeltransaksipeminjamen;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TabeltransaksipeminjamenResource extends Resource
{
    protected static ?string $model = Tabeltransaksipeminjamen::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('idanggota')
                    ->label('ID Anggota')
                    ->options('nama', 'id')
                    ->required(), 
                Forms\Components\TextInput::make('bukuid')
                    ->label('ID buku')
                    ->options('judul', 'id')
                    ->required(), 
                Forms\Components\TextInput::make('tanggalpinjam')
                    ->label('Tanggal Pinjam')
                    ->required(), 
                Forms\Components\TextInput::make('tanggalkembali')
                    ->label('Tanggal Kembali')
                    ->required(),
                Forms\Components\TextInput::make('status')
                    ->label('Status')
                    ->options([
                        'Lent' => 'Lent',
                        'Back' => 'Back',
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_anggota')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('id_buku')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('tanggal_pinjam')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('tanggal_pengembalian')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('status')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTabeltransaksipeminjamens::route('/'),
            'create' => Pages\CreateTabeltransaksipeminjamen::route('/create'),
            'edit' => Pages\EditTabeltransaksipeminjamen::route('/{record}/edit'),
        ];
    }
}

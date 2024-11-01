<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BukuResource\Pages;
use App\Filament\Resources\BukuResource\RelationManagers;
use App\Models\Buku;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BukuResource extends Resource
{
    protected static ?string $model = Buku::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul')
                ->label('Judul')
                ->required()
                ->maxLength(100),
                Forms\Components\TextInput::make('penulis')
                ->label('Penulis')
                ->required()
                ->maxLength(50),
                Forms\Components\TextInput::make('penerbit')
                ->label('Penerbit')
                ->required()
                ->maxLength(50),
                Forms\Components\TextInput::make('tahunTerbit')
                ->label('Tahun Terbit')
                ->numeric()
                ->required(),
                Forms\Components\TextInput::make('jumlahStok')
                ->label('Jumlah Stok')
                ->numeric()
                ->required(),
            
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('penulis')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('penerbit')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('tahunTerbit')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('jumlahStok')->sortable()->searchable(),
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
            'index' => Pages\ListBukus::route('/'),
            'create' => Pages\CreateBuku::route('/create'),
            'edit' => Pages\EditBuku::route('/{record}/edit'),
        ];
    }
}

<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('informasi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('provinsi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kota')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kecamatan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('harga')
                    ->required()
                    ->numeric(),
                //Forms\Components\Select::make('username')
                 //   ->relationship('hosts', 'username'),
                Forms\Components\TextInput::make('nomor_penjual')
                    ->maxLength(255),
                Forms\Components\TextInput::make('kategori')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('luas_tanah')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('luas_bangunan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kamar_mandi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('periode')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('kapasitas')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('deskripsi')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('thumbnail')
                    ->required(),
                Forms\Components\FileUpload::make('foto1'),
                Forms\Components\FileUpload::make('foto2'),
                Forms\Components\FileUpload::make('foto3'),
                Forms\Components\FileUpload::make('foto4'),
                Forms\Components\Toggle::make('verify'),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')
                    ->searchable(),
                Tables\Columns\IconColumn::make('verify')
                    ->boolean(),
                Tables\Columns\TextColumn::make('informasi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('provinsi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('harga')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('periode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageProducts::route('/'),
        ];
    }    
}

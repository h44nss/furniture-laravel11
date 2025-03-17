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
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\SelectColumn;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('nama_product')->required()
                    ->label('Nama')
                    ->placeholder('Masukkan Nama Produk'),
                TextInput::make('kode_product')->required()
                    ->label('Kode')
                    ->placeholder('Masukkan Kode Produk'),
                TextInput::make('harga_product')->required()
                    ->label('Harga')
                    ->placeholder('Masukkan Harga Produk'),
                TextInput::make('stok_product')->required()
                    ->label('Stok')
                    ->placeholder('Masukkan Stok Produk'),
                TextInput::make('deskripsi_product')->required()
                    ->label('Deskripsi')
                    ->placeholder('Masukkan Deskripsi Produk'),
                FileUpload::make('gambar_product')->required()
                    ->label('Gambar'),
                Select::make('kategori_product')
                    ->label('Kategori Produk')
                    ->options([
                        'kursi' => 'Kursi',
                        'meja' => 'Meja',
                        'sofa' => 'Sofa',
                        'kasur' => 'Kasur',
                        'lemari' => 'Lemari',
                    ])
                    ->required()
                    ->placeholder('Masukkan Kategori Produk'),
                TextInput::make('berat_product')->required()
                    ->label('Berat')
                    ->placeholder('Masukkan Berat Produk'),
                TextInput::make('ukuran_product')->required()
                    ->label('Ukuran')
                    ->placeholder('Masukkan Ukuran Produk'),
                TextInput::make('warna_product')->required()
                    ->label('Warna')
                    ->placeholder('Masukkan Warna Produk'),
                TextInput::make('diskon_product')->required()
                    ->label('Diskon')
                    ->placeholder('Masukkan Diskon Produk'),
                TextInput::make('status_product')->required()
                    ->label('Status')
                    ->placeholder('Masukkan Status Produk'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_product')
                    ->label('Nama')
                    ->searchable(),
                TextColumn::make('kode_product')
                    ->label('Kode'),
                TextColumn::make('harga_product')
                    ->label('Harga'),
                TextColumn::make('stok_product')
                    ->label('Stok'),
                TextColumn::make('deskripsi_product')
                    ->label('Deskripsi'),
                Tables\Columns\ImageColumn::make('gambar_product')
                    ->label('Gambar'),
                TextColumn::make('kategori_product')
                    ->label('Kategori')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('berat_product')
                    ->label('Berat'),
                TextColumn::make('ukuran_product')
                    ->label('Ukuran'),
                TextColumn::make('warna_product')
                    ->label('Warna'),
                TextColumn::make('diskon_product')
                    ->label('Diskon'),
                TextColumn::make('status_product')
                    ->label('Status'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}

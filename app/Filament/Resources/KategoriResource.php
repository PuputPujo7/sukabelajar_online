<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KategoriResource\Pages;
use App\Filament\Resources\KategoriResource\RelationManagers;
use App\Models\Kategori;
use App\Models\Kategoris;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Select;

class KategoriResource extends Resource
{
    protected static ?string $model = Kategoris::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $navigationGroup = 'Frontend Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')->required(),
                // Forms\Components\TextInput::make('jenis')->required(),
                Select::make('jenis')->required()
                        ->options([
                            'matematika' => 'Matematika',
                            'tik' => 'TIK',
                        ]),
                Forms\Components\FileUpload::make('gambar')->required(),
                // Select::make('status')
                //         ->options([
                //             'open' => 'Open',
                //             'closed' => 'Closed',
                //         ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->wrap(),
                Tables\Columns\TextColumn::make('jenis')->wrap(),
                Tables\Columns\ImageColumn::make('gambar'),
                Tables\Columns\TextColumn::make('status')->wrap(),
                // Tables\Columns\TextColumn::make('address')->wrap(),
                
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListKategoris::route('/'),
            'create' => Pages\CreateKategori::route('/create'),
            'edit' => Pages\EditKategori::route('/{record}/edit'),
        ];
    }    
}

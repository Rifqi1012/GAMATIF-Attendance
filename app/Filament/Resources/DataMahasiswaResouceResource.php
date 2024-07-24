<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DataMahasiswaResouceResource\Pages;
use App\Filament\Resources\DataMahasiswaResouceResource\RelationManagers;
use App\Models\DataMahasiswa;
use App\Models\DataMahasiswaResouce;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DataMahasiswaResouceResource extends Resource
{
    protected static ?string $model = DataMahasiswa::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-circle';

    protected static ?string $navigationGroup = "Mahasiswa Umum";

    protected static ?string $pluralModelLabel = 'Data Mahasiswa';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Data Mahasiswa')
                ->schema([
                    TextInput::make('nim')->required() ->placeholder('Masukkan Nim Mahasiswa'),
                    TextInput::make('nama')->required() ->placeholder('Masukkan Nama Mahasiswa'),
                    // TextInput::make('kelompok')->required()
                    Select::make('kelompok')
                    ->placeholder('Masukkan Nama Kelompok')
                    ->searchable()
                    ->options([
                        'Stark' => 'Stark',
                        'Lannister' => 'Lannister',
                        'Targaryen' => 'Targaryen',
                        'Baratheon' => 'Baratheon',
                        'Greyjoy' => 'Greyjoy',
                        'Tyrell' => 'Tyrell',
                        'Martell' => 'Martell',
                        'Arryn' => 'Arryn',
                        'Umber' => 'Umber',
                        'Bolton' => 'Bolton',
                        'Taryl' => 'Taryl',
                        'Frey' => 'Frey',
                        'Mormont' => 'Mormont',
                        'Dayne' => 'Dayne',
                        'Bracken' => 'Bracken',

                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('index')
                ->label('No')
                ->rowIndex(),
                TextColumn::make('nim')->searchable(),
                TextColumn::make('nama')->searchable(),
                TextColumn::make('kelompok')->searchable(),
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
            'index' => Pages\ListDataMahasiswaResouces::route('/'),
            'create' => Pages\CreateDataMahasiswaResouce::route('/create'),
            'edit' => Pages\EditDataMahasiswaResouce::route('/{record}/edit'),
        ];
    }
}

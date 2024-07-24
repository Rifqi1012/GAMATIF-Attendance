<?php

namespace App\Filament\Resources\DataMahasiswaResouceResource\Pages;

use App\Filament\Resources\DataMahasiswaResouceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDataMahasiswaResouces extends ListRecords
{
    protected static string $resource = DataMahasiswaResouceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

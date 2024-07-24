<?php

namespace App\Filament\Resources\DataMahasiswaResouceResource\Pages;

use App\Filament\Resources\DataMahasiswaResouceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDataMahasiswaResouce extends CreateRecord
{
    protected static string $resource = DataMahasiswaResouceResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

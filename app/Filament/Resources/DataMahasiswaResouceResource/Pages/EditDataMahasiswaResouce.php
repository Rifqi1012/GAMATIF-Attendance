<?php

namespace App\Filament\Resources\DataMahasiswaResouceResource\Pages;

use App\Filament\Resources\DataMahasiswaResouceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDataMahasiswaResouce extends EditRecord
{
    protected static string $resource = DataMahasiswaResouceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

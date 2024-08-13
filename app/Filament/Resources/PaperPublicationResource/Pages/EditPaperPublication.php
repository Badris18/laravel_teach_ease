<?php

namespace App\Filament\Resources\PaperPublicationResource\Pages;

use App\Filament\Resources\PaperPublicationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPaperPublication extends EditRecord
{
    protected static string $resource = PaperPublicationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

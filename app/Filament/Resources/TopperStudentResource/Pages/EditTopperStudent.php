<?php

namespace App\Filament\Resources\TopperStudentResource\Pages;

use App\Filament\Resources\TopperStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTopperStudent extends EditRecord
{
    protected static string $resource = TopperStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

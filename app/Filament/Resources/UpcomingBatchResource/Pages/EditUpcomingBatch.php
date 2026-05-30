<?php

namespace App\Filament\Resources\UpcomingBatchResource\Pages;

use App\Filament\Resources\UpcomingBatchResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUpcomingBatch extends EditRecord
{
    protected static string $resource = UpcomingBatchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

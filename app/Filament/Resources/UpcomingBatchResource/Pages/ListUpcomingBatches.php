<?php

namespace App\Filament\Resources\UpcomingBatchResource\Pages;

use App\Filament\Resources\UpcomingBatchResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUpcomingBatches extends ListRecords
{
    protected static string $resource = UpcomingBatchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\TopperStudentResource\Pages;

use App\Filament\Resources\TopperStudentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTopperStudents extends ListRecords
{
    protected static string $resource = TopperStudentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

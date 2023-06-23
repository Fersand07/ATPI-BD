<?php

namespace App\Filament\Resources\EmployeResource\Pages;

use App\Filament\Resources\EmployeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageEmployes extends ManageRecords
{
    protected static string $resource = EmployeResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\ProductDataResource\Pages;

use App\Filament\Resources\ProductDataResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProductData extends ListRecords
{
    protected static string $resource = ProductDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

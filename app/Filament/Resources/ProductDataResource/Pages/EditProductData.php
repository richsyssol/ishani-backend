<?php

namespace App\Filament\Resources\ProductDataResource\Pages;

use App\Filament\Resources\ProductDataResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProductData extends EditRecord
{
    protected static string $resource = ProductDataResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

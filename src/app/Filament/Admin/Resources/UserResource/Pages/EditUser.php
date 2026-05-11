<?php

namespace App\Filament\Admin\Resources\UserResource\Pages;

use App\Filament\Admin\Resources\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use STS\FilamentImpersonate\Pages\Actions\Impersonate as ActionsImpersonate;

class EditUser extends EditRecord
{
    protected static string $resource = UserResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function getHeaderActions(): array
    {
        return [
            ActionsImpersonate::make()->record($this->getRecord())->redirectTo(route('dashboard')),
            Actions\DeleteAction::make(),
        ];
    }
}

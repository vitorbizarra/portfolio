<?php

namespace App\Filament\Resources\Contacts\ContactResource\Pages;

use App\Enums\ContactStatus;
use App\Filament\Resources\Contacts\ContactResource;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListContacts extends ListRecords
{
    protected static string $resource = ContactResource::class;

    public function getTabs(): array
    {
        $tabs = ['all' => Tab::make()->label('Todos')];

        foreach (ContactStatus::cases() as $status) {
            $tabs[$status->value] = Tab::make()
                ->label($status->getLabel())
                ->icon($status->getIcon())
                ->modifyQueryUsing(fn (Builder $query) => $query->where('status', $status));
        }

        return $tabs;
    }
}
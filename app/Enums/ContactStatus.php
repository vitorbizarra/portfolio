<?php

namespace App\Enums;

use Filament\Support\Colors\Color;
use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum ContactStatus: string implements HasColor, HasIcon, HasLabel
{
    case New = 'new';
    case Answered = 'answered';

    public function getLabel(): ?string
    {
        return match ($this) {
            self::New => 'Novo',
            self::Answered => 'Respondido'
        };
    }

    public function getPluralLabel(): ?string
    {
        return match ($this) {
            self::New => 'Novos',
            self::Answered => 'Respondidos'
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::New => 'heroicon-o-clock',
            self::Answered => 'heroicon-o-check-circle'
        };
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::New => Color::Amber,
            self::Answered => Color::Green
        };
    }
}

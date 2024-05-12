<?php

namespace App\Livewire\Web\Components;

use App\Models\Content\Technology;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;

class Technologies extends Component
{
    public Collection $technologies;

    public function mount()
    {
        $this->technologies = Technology::orderBy('sort')->get();
    }
}

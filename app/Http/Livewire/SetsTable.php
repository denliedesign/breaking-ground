<?php

namespace App\Http\Livewire;

use App\Models\Table;
use Livewire\Component;

class SetsTable extends Component
{
    public $program;

    public function render()
    {
        return view('livewire.sets-table', [
            'tables' => Table::orderBy('position')->get()
        ]);
    }

    public function updateTableOrder($tables)
    {
        foreach($tables as $table) {
            Table::find($table['value'])->update(['position' => $table['order']]);
        }
    }
}

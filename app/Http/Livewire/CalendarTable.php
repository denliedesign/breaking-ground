<?php

namespace App\Http\Livewire;

use App\Models\Table;
use Livewire\Component;

class CalendarTable extends Component
{
    public function render()
    {
//        $tables = Table::orderBy('position')->get();
//        return view('livewire.tables-table', compact('tables'));
        return view('livewire.calendar-table', [
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

<?php

namespace App\Http\Livewire;

use App\Models\Table;
use Livewire\Component;

class DoublesTable extends Component
{
//    public $table;
    public $program;

    public function render()
    {
//        $tables = Table::orderBy('position')->get();
//        return view('livewire.tables-table', compact('tables'));
        return view('livewire.doubles-table', [
            'tables' => Table::orderBy('position')->get()
        ]);
    }

    public function updateTableOrder($tables)
    {
        foreach($tables as $table) {
            Table::find($table['value'])->update(['position' => $table['order']]);
        }
    }

//    public function updateTableOrder($list)
//    {
//        foreach($list as $item) {
//            Table::find($item['value'])->update(['position' => $item['order']]);
//        }
//    }

}

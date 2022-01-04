@can('update', \App\Table::class)
    <table class="table">
        <tbody wire:sortable="updateTableOrder">
        @foreach($tables as $table)
            {{--                @if($table->tableName == substr(request()->route()->uri, 0, 8) )--}}
            @if($table->tableName == 'faq' && $table->tableSection == "A" )
                <tr wire:sortable.item="{{ $table->id }}" wire:key="tuition-{{ $table->id }}">
                    <td>{{ $table->col1 }}</td>
                    <td>{{ $table->col2 }}</td>
                    <td>{{ $table->col3 }}</td>
                    <td>{{ $table->col4 }}</td>
                    <td>@include('/tables/admin')</td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
@endcan


<!-- TABLE USERS CAN SEE AND CANNOT SORT -->
@guest
    <table class="table">
        <tbody>
        @foreach($tables as $table)
            @if($table->tableName == 'faq' && $table->tableSection == "A")
                <tr>
                    <td>{{ $table->col1 }}</td>
                    <td>{{ $table->col2 }}</td>
                    <td>{{ $table->col3 }}</td>
                    <td>{{ $table->col4 }}</td>
                    <td>@include('/tables/admin')</td>
                </tr>
            @endif
        @endforeach
        </tbody>
    </table>
@endguest
<!-- END TABLE USERS CAN SEE AND CANNOT SORT -->

@can('update', \App\Table::class)
    {{--<table class="table">--}}
    {{--    @foreach($tables as $table)--}}
    {{--        @if($table->tableName == 'programs' && $table->tableSection == "$program->id")--}}
    {{--            <h2 class="table-title">{{ $table->title }}</h2>--}}
    {{--            @if($table->head1 == true)--}}
    {{--                <thead>--}}
    {{--                        <tr class="table-head">--}}
    {{--                            <th>{{ $table->head1 }}</th>--}}
    {{--                            <th>{{ $table->head2 }}</th>--}}
    {{--                            <th>{{ $table->head3 }}</th>--}}
    {{--                            <th>{{ $table->head4 }}</th>--}}
    {{--                        </tr>--}}
    {{--                </thead>--}}
    {{--            @endif--}}
    {{--        @endif--}}
    {{--            @endforeach--}}

    <tbody wire:sortable="updateTableOrder">
    @foreach($tables as $table)
        {{--                @if($table->tableName == substr(request()->route()->uri, 0, 8) )--}}
        @if($table->tableName == 'programs3' && $table->tableSection == "$program->id" )
            <tr wire:sortable.item="{{ $table->id }}" wire:key="table-{{ $table->id }}">
                <td>{{ $table->col1 }}</td>
                <td>{{ $table->col2 }}</td>
                <td>{{ $table->col3 }}</td>
                <td>{{ $table->col4 }}</td>
                <td>@include('/tables/admin')</td>
            </tr>
        @endif
    @endforeach
    </tbody>
    {{--</table>--}}
@endcan


<!-- TABLE USERS CAN SEE AND CANNOT SORT -->
@guest
    {{--    <table class="table">--}}
    <tbody>
    @foreach($tables as $table)
        @if($table->tableName == 'programs3' && $table->tableSection == "$program->id")
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
    {{--    </table>--}}
@endguest
<!-- END TABLE USERS CAN SEE AND CANNOT SORT -->

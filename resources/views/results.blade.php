@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner">
            <img src="/images/logo-family-flex-scheduler.jpg" alt="family flex scheduler" style="width: 100%; height: auto;">
        </div>
    </div>


    <div class="container my-5">
        <h1 class="text-center mb-4"><span style="font-size: 0.7em;">Personalized Dance Recommendations for You!</span></h1>
        <p class="text-center">
            Having filtered the dance classes based on your specified criteria, it's time to select your favorites. This will ensure you see only the classes that align perfectly with what you're looking for, making your registration process smoother and more tailored to your preferences.
        </p>
    {{--        <hr class="my-3" style="width: 60%; margin: 0 auto;">--}}

    <!-- Add sorting links/buttons -->
        <div class="text-center text-muted my-4 py-2 rounded shadow" style="border: 1px solid black;">
            <strong>Sort By:</strong>
            Age
            <a class="text-muted text-decoration-none" href="{{ route('filter', array_merge(request()->except(['sort_by', 'sort_order']), ['sort_by' => 'age_requirement', 'sort_order' => 'asc'])) }}"><ion-icon name="caret-up-outline"></ion-icon></a>
            <a class="text-muted text-decoration-none" href="{{ route('filter', array_merge(request()->except(['sort_by', 'sort_order']), ['sort_by' => 'age_requirement', 'sort_order' => 'desc'])) }}"><ion-icon name="caret-down-outline"></ion-icon></a>
            &nbsp; Dance Style
            <a class="text-muted text-decoration-none" href="{{ route('filter', array_merge(request()->except(['sort_by', 'sort_order']), ['sort_by' => 'dance_style', 'sort_order' => 'asc'])) }}"><ion-icon name="caret-up-outline"></ion-icon></a>
            <a class="text-muted text-decoration-none" href="{{ route('filter', array_merge(request()->except(['sort_by', 'sort_order']), ['sort_by' => 'dance_style', 'sort_order' => 'desc'])) }}"><ion-icon name="caret-down-outline"></ion-icon></a></a>
            &nbsp; Day of Week
            <a class="text-muted text-decoration-none" href="{{ route('filter', array_merge(request()->except(['sort_by', 'sort_order']), ['sort_by' => 'day_of_week', 'sort_order' => 'asc'])) }}"><ion-icon name="caret-up-outline"></ion-icon></a>
            <a class="text-muted text-decoration-none" href="{{ route('filter', array_merge(request()->except(['sort_by', 'sort_order']), ['sort_by' => 'day_of_week', 'sort_order' => 'desc'])) }}"><ion-icon name="caret-down-outline"></ion-icon></a></a>
            <!-- Add more sorting options for other fields as needed -->
        </div>

        @if(count($classes) > 0)
            <form id="favoritesForm" action="{{ route('processFavorites') }}" method="post">
                @csrf
                <table id="danceClassTable" class="table my-4">
                    <thead>
                    <tr>
                        <th>SELECT</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Dance Style</th>
                        <th>Day</th>
                        <th>Time</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($classes as $class)
                        <tr>
                            <td>
                                <input class="styled-checkbox" type="checkbox" name="selectedClasses[]" value="{{ $class->id }}">
                            </td>
                            <td><strong>{{ $class->name }}</strong></td>
                            <td>{{ $class->age_requirement }}</td>
                            <td>
                                @switch($class->name)
                                    @case('Spin & Sparkle')
                                    Ballet/Tap/Jazz
                                    @break
                                    @case('Contemporary/Lyrical')
                                    Contemporary/Lyrical
                                    @break
                                    @case('Ballet/Tap')
                                    Ballet/Tap
                                    @break
                                    @case('Ballet/Jazz')
                                    Ballet/Jazz
                                    @break
                                    @default
                                    {{ $class->dance_style }}
                                @endswitch
                            </td>
                            <td>{{ $class->day_of_week }}</td>
                            <td>{{ $class->time }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-lg btn-primary">Show Your Selected Favorites</button>
                </div>
            </form>

            <p class="text-center my-3">
                <em><strong>* and **</strong> Recommendation required</em><br><br>
                If you want to fine-tune your preferences feel free to go back and adjust.<br>We're here to help you find the perfect fit!
            </p>
            <div class="d-flex justify-content-center my-3">
                <a href="/scheduler" class="btn btn-outline-danger">Back</a>
            </div>

        @else
            <p class="text-center my-3">Oops! It looks like we couldn't find any matches for your criteria.<br>Feel free to adjust your preferences or reach out to us for personalized assistance!</p>
            <div class="d-flex justify-content-center my-3">
                <a href="/schedule" class="btn btn-outline-danger">Back</a>
            </div>
        @endif
    </div>
@endsection

<script>
    $(document).ready( function () {
        $('#danceClassTable').DataTable();
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const table = document.getElementById("danceClassTable");
        const seen = new Set(); // To track unique row contents

        Array.from(table.rows).slice(1) // Skip the header row by slicing from 1
            .forEach((row) => {
                const rowContent = Array.from(row.cells).map(cell => cell.textContent.trim()).join('|');
                if (seen.has(rowContent)) {
                    // If the row content has been seen, remove the row
                    row.parentNode.removeChild(row);
                } else {
                    // Otherwise, mark this row content as seen
                    seen.add(rowContent);
                }
            });
    });
</script>

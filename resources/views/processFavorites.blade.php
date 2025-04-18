@extends('layouts.app')
@section('content')

    <div class="banner-wrap">
        <div class="banner">
            <img src="/images/logo-family-flex-scheduler.jpg" alt="family flex scheduler" style="width: 100%; height: auto;">
        </div>
    </div>
    @if (session('sendEmail'))
        SUCCESS!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
    @endif


    <div class="container my-5">
        {{--        <hr class="my-3" style="width: 60%; margin: 0 auto;">--}}
        {{--        <h1 class="text-center mt-4 mb-0">Family Flex Scheduler</h1>--}}
        <h1 class="text-center mb-4 mt-0"><span style="font-size: 0.7em;">Your Selected Classes</span></h1>
        {{--        <hr class="my-3" style="width: 60%; margin: 0 auto;">--}}

        <table class="table my-4">
            <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Dance Style</th>
                <th>Day</th>
                <th>Time</th>
                {{--                <th>Enroll</th>--}}
                <th>Learn More</th>
            </tr>
            </thead>
            <tbody>
            @foreach($selectedClasses as $class)
                <tr>
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
                    {{--                    <td><a href="https://app.akadadance.com/customer/login?schoolId=AK600070J&c=1&danceClassId={{ $class->id }}" target="_blank" class="btn btn-danger" style="height: max-content;">Enroll</a></td>--}}
                    <td>
                        <div>
                            @switch($class->age_requirement)
                                @case('6 months-24 months')
                                <a href="https://www.breakinggrounddance.com/programs/boppin-babies"><img src="/images/jammin-juniors.png" alt="" class="img-fluid" style="height: auto; width: 100%; max-width: 200px;"></a>
                                @break
                                @case('2 years')
                                <a href="https://www.breakinggrounddance.com/programs/spin-sparkle"><img src="/images/spin-and-sparkle.png" alt="" class="img-fluid" style="height: auto; width: 100%; max-width: 200px;"></a>
                                @break
                                @case('3-4 years')
                                @case('5-6 years')
                                <a href="https://www.breakinggrounddance.com/programs/beautiful-beginnings"><img src="/images/beautiful-beginnings.png" alt="" class="img-fluid" style="height: auto; width: 100%; max-width: 200px;"></a>
                                @break
                                @case('7-9 years')
                                @case('10-12 years')
                                @case('13-18 years')
                                <a href="https://www.breakinggrounddance.com/programs/core-program"><img src="/images/core-program.png" alt="" class="img-fluid" style="height: auto; width: 100%; max-width: 200px;"></a>
                                @break
                            @endswitch
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <p class="text-center my-4">
            <em><strong>* and **</strong> Recommendation required</em><br><br>
            This page is not a submitted registration. You must hit the register now button and go through the process.
            <br>
            Student registration begins for Ages 6 & under <strong>April 22nd</strong>, for Ages 7-9 <strong>April 23rd</strong>, and for Ages 10+ <strong>April 24th</strong>.
        </p>

        <div class="d-flex justify-content-center">
            <!-- Enroll Button -->
            <a href="https://portal.akadadance.com/auth?schoolId=363" target="_blank" class="btn btn-lg text-white mx-2 btn-primary">Register Now!</a>

            <div class="d-flex align-items-center">
                <!-- Download Button -->
                <a href="{{ route('downloadFavorites') }}" class="btn text-white mx-2 btn-red" target="_blank">Download</a>
            </div>

            <div class="d-flex align-items-center">
                <!-- Print Button -->
                <button onclick="window.print()" class="btn text-white mx-2 btn-secondary">Print</button>
            </div>
        </div>

        <div class="d-flex justify-content-center mt-3">
            <!-- Email Button -->
            <form action="{{ route('sendFavoritesEmail') }}" method="post">
                @csrf
                @method('POST')
                <div>
                    <label for="email">Enter your email:</label>
                    <input class="rounded" type="email" name="sendEmail" required>
                    <input type="hidden" name="sendEmailFlag" value="1"> <!-- Add hidden input to indicate email sending -->
                    <button type="submit" class="btn text-white mx-2 btn-poison mt-2" style="background: #95A5A6; border: 1px solid #95A5A6;">
                        Send Favorites via Email
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection

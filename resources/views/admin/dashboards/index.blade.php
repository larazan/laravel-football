@foreach ($dates as $date => $schedules)
    <b>{{ $date }}</b>
    <ul>
        @foreach ($schedules as $schedule)
            <li>
                {{ $schedule->slug }}, ({{ $schedule->home_team }} vs {{ $schedule->away_team }} )
            </li>
        @endforeach
    </ul>
@endforeach
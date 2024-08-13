<?php
 
namespace App\Support;
 
use Carbon\Carbon;
 
class Calendar
{
    public static function buildYear($year) 
    {
        return [
            'year' => $year,
            'months' => collect(range(1, 12))
                ->map(fn ($month) => static::buildMonth($year, $month)),
        ];
    } 
 
    public static function buildMonth($year, $month, $day = null)
    {
        $selectedDate = CarbonImmutable::create($year, $month, $day ?? 1);
        $startOfMonth = $selectedDate->startOfMonth();
        $endOfMonth = $selectedDate->endOfMonth();
        $startOfWeek = $startOfMonth->startOfWeek(Carbon::SUNDAY);
        $endOfWeek = $endOfMonth->endOfWeek(Carbon::SATURDAY);
 
        return [
            'year' => $selectedDate->year,
            'month' => $selectedDate->format('F'),
            'weeks' => return collect($startOfWeek->toPeriod($endOfWeek)->toArray())
                ->map(fn ($date) => [
                    'path' => $date->format('/Y/m/d'),
                    'day' => $date->day,
                    'withinMonth' => $date->between($startOfMonth, $endOfMonth),
                    'selected' => $day && $date->is($selectedDate),
                ])
                ->chunk(7),
        ];
    }
}
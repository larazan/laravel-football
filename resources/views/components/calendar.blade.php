<div class="p-4 mb-8 text-4xl text-center text-white bg-gray-900">
    {{ $calendar['year'] }}
</div>
 
<div class="grid grid-cols-3 gap-8 px-8 pb-8">
    @foreach ($calendar['months'] as $month)
        <div>
            <div class="p-4 mb-4 text-2xl text-center text-white bg-gray-100 dark:bg-gray-800">
                {{ $month['month'] }}
            </div>
 
            <x-month :weeks="$month['weeks']" />
        </div>
    @endforeach
</div>

$calendar = Calendar::buildMonth(year: 2022, month: 2);
$calendar = Calendar::buildYear(2022);
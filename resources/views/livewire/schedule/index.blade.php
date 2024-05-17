

<div>
    <div id="calendar-container" wire:ignore>
        <div id="calendar"></div>
    </div>
</div>



@push('js')
<script>
   
    document.addEventListener('livewire:load', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            schedulerLicenseKey: 'CC-Attribution-NonCommercial-NoDerivatives',
            themeSystem: 'bootstrap',
            height: 700,
            buttonText: {
                resourceTimeGridDay: '日(グリッド)',
                resourceTimelineDay: '日',
            },
            headerToolbar: {
                left: "prev,next today",
                center: "title",
                right: "dayGridMonth,resourceTimelineDay,resourceTimeGridDay",
            },
            initialView: 'dayGridMonth',
            locale: 'ja',
            resourceAreaHeaderContent: "ユーザー",
            refetchResourcesOnNavigate: true,
            displayEventTime: false,
            navLinks: true,
            dayCellContent: function(e) {
                e.dayNumberText = e.dayNumberText.replace('日', '');
            },
            resources: function(fetchInfo, successCallback, failureCallback) {
                @this.
                getResources().then((response) => {
                    successCallback(response);
                })
            },
            events: function(info, successCallback) {
                @this.
                getEvents(info.start, info.end).then((response) => {
                    successCallback(response);
                })
            },
        });
        calendar.render();
        window.addEventListener('refreshCalendar', event => {
            calendar.refetchResources();
            calendar.refetchEvents();
        });
    });
</script>
@endpush
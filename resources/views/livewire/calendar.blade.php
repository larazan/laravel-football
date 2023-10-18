<div class="vs jj ttm vl ou uf na">

    <!-- Loading -->
    <x-loading-indicator />

    <!-- Page header -->
    <div class="je jd jc ii">

        <!-- Left: Title -->
        <div class="ri _y">
            <h1 class="gu teu text-slate-800 font-bold">Event ✨</h1>
        </div>
        
        <livewire:create-modal />

    </div>

    <div class="px-4 sm:px-6 lg:px-8 py-8 w-full max-w-9xl mx-auto">

        <div class="container max-w-screen-lg mx-auto cl border-slate-200">
            <div>
                <div id='calendar'></div>
            </div>
        </div>

    </div>

    

</div>

@push('styles')
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css' rel='stylesheet' />
@endpush

@push('js')
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js'></script>
<script>
    document.addEventListener('livewire:load', function () {
        const Calendar = FullCalendar.Calendar;
        const Draggable = FullCalendar.Draggable;
        const calendarEl = document.getElementById('calendar');
        // const calendar = new Calendar(calendarEl);
        const calendar = new Calendar(calendarEl, {
        headerToolbar: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
        // locale: '{{ config('app.locale') }}',
        events: JSON.parse(@this.events),
        editable: true,   
        selectable: true,
        displayEventTime: false,
        // refetchResourcesOnNavigate: true,
        droppable: true, // this allows things to be dropped onto the calendar
        dateClick(info)  {
            Livewire.emit('eventAdded')
            //    var title = prompt('Enter Event Title');
            //    var date = new Date(info.dateStr + 'T00:00:00');
            //    if(title != null && title != ''){
            //      calendar.addEvent({
            //         title: title,
            //         start: arg.start,
            //         end: arg.end,
            //         // allDay: true
            //       });
            //      var eventAdd = {title: title,start: date};
            //     //  @this.addevent(eventAdd);
            //      @this.eventAdd(calendar.getEventById(id));
            //      alert('Great. Now, update database...');
            //    }else{
            //     alert('Event Title Is Required');
            //    }
            },
        drop: function(info) {
            // is the "remove after drop" checkbox checked?
            if (checkbox.checked) {
            // if so, remove the element from the "Draggable Events" list
            info.draggedEl.parentNode.removeChild(info.draggedEl);
            }
        },             
        eventResize: info => @this.eventChange(info.event),
        eventDrop: info => @this.eventChange(info.event),
        
        // select: arg => {
        //     const title = prompt('Titre :');
        //     const id = create_UUID();
        //     if (title) {
        //         calendar.addEvent({
        //             id: id,
        //             title: title,   
        //             start: arg.start,
        //             end: arg.end,
        //             allDay: arg.allDay
        //         });
        //         @this.eventAdd(calendar.getEventById(id));
        //     };
        //     calendar.unselect();
        // },
    });        
        calendar.render();
        window.addEventListener('refreshCalendar', event => {
            calendar.refetchEvents();
        });
    });
</script>
@endpush

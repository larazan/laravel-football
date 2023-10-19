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

    <div class="px-0 sm:px-0 lg:px-0 py-8 w-full max-w-9xl mx-auto">

        <div class="container max-w-screen-lg mx-auto cl border-slate-200">
            <div>
                <div id='calendar'></div>
            </div>
            <div id="modal-action" class="modal" tabindex="-1">

            </div>
        </div>

    </div>



</div>

@push('styles')
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.css' rel='stylesheet' />
<style>
    :root {
        --bs-blue: #0d6efd;
        --bs-indigo: #6610f2;
        --bs-purple: #6f42c1;
        --bs-pink: #d63384;
        --bs-red: #dc3545;
        --bs-orange: #fd7e14;
        --bs-yellow: #ffc107;
        --bs-green: #198754;
        --bs-teal: #20c997;
        --bs-cyan: #0dcaf0;
        --bs-white: #fff;
        --bs-gray: #6c757d;
        --bs-gray-dark: #343a40;
        --bs-gray-100: #f8f9fa;
        --bs-gray-200: #e9ecef;
        --bs-gray-300: #dee2e6;
        --bs-gray-400: #ced4da;
        --bs-gray-500: #adb5bd;
        --bs-gray-600: #6c757d;
        --bs-gray-700: #495057;
        --bs-gray-800: #343a40;
        --bs-gray-900: #212529;
        --bs-primary: #0d6efd;
        --bs-secondary: #6c757d;
        --bs-success: #198754;
        --bs-info: #0dcaf0;
        --bs-warning: #ffc107;
        --bs-danger: #dc3545;
        --bs-light: #f8f9fa;
        --bs-dark: #212529;
        --bs-primary-rgb: 13, 110, 253;
        --bs-secondary-rgb: 108, 117, 125;
        --bs-success-rgb: 25, 135, 84;
        --bs-info-rgb: 13, 202, 240;
        --bs-warning-rgb: 255, 193, 7;
        --bs-danger-rgb: 220, 53, 69;
        --bs-light-rgb: 248, 249, 250;
        --bs-dark-rgb: 33, 37, 41;
        --bs-white-rgb: 255, 255, 255;
        --bs-black-rgb: 0, 0, 0;
        --bs-body-color-rgb: 33, 37, 41;
        --bs-body-bg-rgb: 255, 255, 255;
        --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
        --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
        --bs-body-font-family: var(--bs-font-sans-serif);
        --bs-body-font-size: 1rem;
        --bs-body-font-weight: 400;
        --bs-body-line-height: 1.5;
        --bs-body-color: #212529;
        --bs-body-bg: #fff;
    }

    table {
        caption-side: bottom;
        border-collapse: collapse;
    }

    caption {
        padding-top: 0.5rem;
        padding-bottom: 0.5rem;
        color: #6c757d;
        text-align: left;
    }

    th {
        text-align: inherit;
        text-align: -webkit-match-parent;
    }

    thead,
    tbody,
    tfoot,
    tr,
    td,
    th {
        border-color: inherit;
        border-style: solid;
        border-width: 0;
    }


    .btn:hover {
        color: #212529;
    }

    .btn-group {
        position: relative;
        display: inline-flex;
        vertical-align: middle;
    }

    .btn-group>.btn {
        position: relative;
        flex: 1 1 auto;
    }

    .btn-primary {
        color: #fff;
        background-color: #0d6efd;
        border-color: #0d6efd;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #0b5ed7;
        border-color: #0a58ca;
    }

    .btn:disabled {
        pointer-events: none;
        opacity: 0.65;
    }

    .bg-success {
        --bs-bg-opacity: 1;
        background-color: rgba(var(--bs-success-rgb), var(--bs-bg-opacity)) !important;
    }

    .bg-info {
        --bs-bg-opacity: 1;
        background-color: rgba(var(--bs-info-rgb), var(--bs-bg-opacity)) !important;
    }

    .bg-warning {
        --bs-bg-opacity: 1;
        background-color: rgba(var(--bs-warning-rgb), var(--bs-bg-opacity)) !important;
    }

    .bg-danger {
        --bs-bg-opacity: 1;
        background-color: rgba(var(--bs-danger-rgb), var(--bs-bg-opacity)) !important;
    }

    .btn-secondary {
        color: #fff;
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-secondary:hover {
        color: #fff;
        background-color: #5c636a;
        border-color: #565e64;
    }

    .modal {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1055;
        display: none;
        width: 100%;
        height: 100%;
        overflow-x: hidden;
        overflow-y: auto;
        outline: 0;
    }

    .modal-dialog {
        position: relative;
        width: auto;
        margin: 0.5rem;
        pointer-events: none;
    }

    .modal.fade .modal-dialog {
        transition: transform 0.3s ease-out;
        transform: translate(0, -50px);
    }

    @media (prefers-reduced-motion: reduce) {
        .modal.fade .modal-dialog {
            transition: none;
        }
    }

    .modal.show .modal-dialog {
        transform: none;
    }

    .modal.modal-static .modal-dialog {
        transform: scale(1.02);
    }

    .modal-dialog-scrollable {
        height: calc(100% - 1rem);
    }

    .modal-dialog-scrollable .modal-content {
        max-height: 100%;
        overflow: hidden;
    }

    .modal-dialog-scrollable .modal-body {
        overflow-y: auto;
    }

    .modal-dialog-centered {
        display: flex;
        align-items: center;
        min-height: calc(100% - 1rem);
    }

    .modal-content {
        position: relative;
        display: flex;
        flex-direction: column;
        width: 100%;
        pointer-events: auto;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 0.3rem;
        outline: 0;
    }

    .modal-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        z-index: 1050;
        width: 100vw;
        height: 100vh;
        background-color: #000;
    }

    .modal-backdrop.fade {
        opacity: 0;
    }

    .modal-backdrop.show {
        opacity: 0.5;
    }

    .modal-header {
        display: flex;
        flex-shrink: 0;
        align-items: center;
        justify-content: space-between;
        padding: 1rem 1rem;
        border-bottom: 1px solid #dee2e6;
        border-top-left-radius: calc(0.3rem - 1px);
        border-top-right-radius: calc(0.3rem - 1px);
    }

    .modal-header .btn-close {
        padding: 0.5rem 0.5rem;
        margin: -0.5rem -0.5rem -0.5rem auto;
    }

    .modal-title {
        margin-bottom: 0;
        line-height: 1.5;
    }

    .modal-body {
        position: relative;
        flex: 1 1 auto;
        padding: 1rem;
    }

    .modal-footer {
        display: flex;
        flex-wrap: wrap;
        flex-shrink: 0;
        align-items: center;
        justify-content: flex-end;
        padding: 0.75rem;
        border-top: 1px solid #dee2e6;
        border-bottom-right-radius: calc(0.3rem - 1px);
        border-bottom-left-radius: calc(0.3rem - 1px);
    }

    .modal-footer>* {
        margin: 0.25rem;
    }

    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 500px;
            margin: 1.75rem auto;
        }

        .modal-dialog-scrollable {
            height: calc(100% - 3.5rem);
        }

        .modal-dialog-centered {
            min-height: calc(100% - 3.5rem);
        }

        .modal-sm {
            max-width: 300px;
        }
    }

    @media (min-width: 992px) {

        .modal-lg,
        .modal-xl {
            max-width: 800px;
        }
    }

    @media (min-width: 1200px) {
        .modal-xl {
            max-width: 1140px;
        }
    }

    .modal-fullscreen {
        width: 100vw;
        max-width: none;
        height: 100%;
        margin: 0;
    }

    .modal-fullscreen .modal-content {
        height: 100%;
        border: 0;
        border-radius: 0;
    }

    .modal-fullscreen .modal-header {
        border-radius: 0;
    }

    .modal-fullscreen .modal-body {
        overflow-y: auto;
    }

    .modal-fullscreen .modal-footer {
        border-radius: 0;
    }

    @media (max-width: 575.98px) {
        .modal-fullscreen-sm-down {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0;
        }

        .modal-fullscreen-sm-down .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0;
        }

        .modal-fullscreen-sm-down .modal-header {
            border-radius: 0;
        }

        .modal-fullscreen-sm-down .modal-body {
            overflow-y: auto;
        }

        .modal-fullscreen-sm-down .modal-footer {
            border-radius: 0;
        }
    }

    @media (max-width: 767.98px) {
        .modal-fullscreen-md-down {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0;
        }

        .modal-fullscreen-md-down .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0;
        }

        .modal-fullscreen-md-down .modal-header {
            border-radius: 0;
        }

        .modal-fullscreen-md-down .modal-body {
            overflow-y: auto;
        }

        .modal-fullscreen-md-down .modal-footer {
            border-radius: 0;
        }
    }

    @media (max-width: 991.98px) {
        .modal-fullscreen-lg-down {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0;
        }

        .modal-fullscreen-lg-down .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0;
        }

        .modal-fullscreen-lg-down .modal-header {
            border-radius: 0;
        }

        .modal-fullscreen-lg-down .modal-body {
            overflow-y: auto;
        }

        .modal-fullscreen-lg-down .modal-footer {
            border-radius: 0;
        }
    }

    @media (max-width: 1199.98px) {
        .modal-fullscreen-xl-down {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0;
        }

        .modal-fullscreen-xl-down .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0;
        }

        .modal-fullscreen-xl-down .modal-header {
            border-radius: 0;
        }

        .modal-fullscreen-xl-down .modal-body {
            overflow-y: auto;
        }

        .modal-fullscreen-xl-down .modal-footer {
            border-radius: 0;
        }
    }

    @media (max-width: 1399.98px) {
        .modal-fullscreen-xxl-down {
            width: 100vw;
            max-width: none;
            height: 100%;
            margin: 0;
        }

        .modal-fullscreen-xxl-down .modal-content {
            height: 100%;
            border: 0;
            border-radius: 0;
        }

        .modal-fullscreen-xxl-down .modal-header {
            border-radius: 0;
        }

        .modal-fullscreen-xxl-down .modal-body {
            overflow-y: auto;
        }

        .modal-fullscreen-xxl-down .modal-footer {
            border-radius: 0;
        }
    }
</style>
@endpush

@push('js')
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js'></script>
<script>
    const modal = $('#modal-action')
    const csrfToken = $('meta[name=csrf_token]').attr('content')

    document.addEventListener('livewire:load', function() {
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
            dateClick: function(info) {
                $.ajax({
                    url: `{{ route('admin.events.create') }}`,
                    data: {
                        start_date: info.dateStr,
                        end_date: info.dateStr
                    },
                    success: function(res) {
                        modal.html(res).modal('show')
                        $('.datepicker').datepicker({
                            todayHighlight: true,
                            format: 'yyyy-mm-dd'
                        });

                        $('#form-action').on('submit', function(e) {
                            e.preventDefault()
                            const form = this
                            const formData = new FormData(form)
                            $.ajax({
                                url: form.action,
                                method: form.method,
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function(res) {
                                    modal.modal('hide')
                                    calendar.refetchEvents()
                                },
                                error: function(res) {

                                }
                            })
                        })
                    }
                })
            },
            eventClick: function ({event}) {
                $.ajax({
                    url: `{{ url('events') }}/${event.id}/edit`,
                    success: function (res) {
                        modal.html(res).modal('show')

                        $('#form-action').on('submit', function(e) {
                            e.preventDefault()
                            const form = this
                            const formData = new FormData(form)
                            $.ajax({
                                url: form.action,
                                method: form.method,
                                data: formData,
                                processData: false,
                                contentType: false,
                                success: function (res) {
                                    modal.modal('hide')
                                    calendar.refetchEvents()
                                }
                            })
                        })
                    }
                })
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

        });
        calendar.render();
        window.addEventListener('refreshCalendar', event => {
            calendar.refetchEvents();
        });
    });
</script>
@endpush
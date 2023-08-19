<x-mail::message>
# Contact From {{ $name }}

{{ $content }}

<x-mail::button :url="'http://laravel-football/'">
Visit
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

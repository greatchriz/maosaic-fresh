<x-mail::message>
# Admin Custom Email

this is the name of the user {{ $user->name }}, this is the name of the user {{ $user->email }}, this is the name of the user {{ $user->account_balance }},
{{ $input['textbody'] }}
<x-mail::button :url="''">
Dashboard
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

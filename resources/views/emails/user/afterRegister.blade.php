@component('mail::message')
# Welcome!

Hello {{$user->name}}
<br>Welcome to ABC Ticketing,
Your registration has been completed successfully. 
You can now purchase your preferred dream ticket!

@component ('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Thanks, <br>
{{config('app.name')}}
@endcomponent
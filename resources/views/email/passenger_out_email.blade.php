Hola {{$user->name}}!
<br>
Te informamos que {{$from->name}} {{$reason_message}} del viaje hacia {{$trip->to_town}}.
<br>
Click <a href={{$url}}>aquí</a> si quieres ver más detalles del viaje.
<br>
Saludos!
<br>
Carpoolear
<br>
<br>
<small>Si no deseás recibir más este tipo de correo, <a href="https://carpoolear.com.ar/desuscribirme?email={{ $user->email }}">hacé click aquí</a>.</small>
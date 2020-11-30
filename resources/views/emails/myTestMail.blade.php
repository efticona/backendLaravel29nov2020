<!DOCTYPE html>
<html>
<head>
    <title>Faviotic.com 10:21 OEP</title>
</head>
<body>
    <img src="{{$message->embedData($details['base64Data'], $details['name'] . '.' . $details['type'])}}" alt="Image"/>
    <h1>{{ $details['title'] }}</h1>
    <p>{{ $details['body'] }}</p>
    <p><b>Tu código de verificación es: {{ $details['codigo'] }} </b></p>
    <p>Gracias ZULAJ</p>
    <p>Saludos</p>
    <a class="dominio" href="https://www.oep.org.bo/">Órgano Electoral Plurinacional de Bolivia</a>
</body>
<style>
.dominio {
  margin-top: 15px;
  text-align: center;
  font-size: 12px;
  color: #5f50dd;
  display: block;
}
</style>
</html>


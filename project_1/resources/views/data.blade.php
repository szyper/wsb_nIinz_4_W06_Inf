<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Użytkownicy</title>
</head>
<body>
    <h4>Użytkownicy</h4>
    {{ print_r($tab)  }}

{{--    @foreach($tab as $user)--}}
{{--      <li>--}}
{{--        --}}{{--            Tytuł: {{ $user["title"] }}<br>--}}
{{--      </li>--}}
<ul>
  <li>{{ $tab["currency"] }}</li>
  <li>{{ $tab["code"] }}</li>
  <li>{{ $tab["rates"][0]["effectiveDate"] }}</li>
  <li>{{ $tab["rates"][0]["mid"] }}</li>
</ul>
{{--{{dd($tab["rates"])}}--}}
{{--{{dd($tab["rates"][0])}}--}}
{{dd($tab["rates"][0]["mid"])}}


</body>
</html>

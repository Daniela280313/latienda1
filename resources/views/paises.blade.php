<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paises</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" integrity="sha512-T584yQ/tdRR5QwOpfvDfVQUidzfgc2339Lc8uBDtcp/wYu80d7jwBgAxbyMh0a9YM9F8N3tdErpFI8iaGx6x5g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <h1>Paises de la región</h1>
    <table class="table table-bordered table-stripped">
        <theah>
            <tr>
                <th  style="background-color:cyan">Nombre</th>
                <th style="background-color:cyan">Capital</th>
                <th style="background-color:cyan">Moneda</th>
                <th style="background-color:cyan">Poblacion</th>
                <th style="background-color:cyan">Ciudades</th>
            </tr>
        </theah>
        <tbody>
            @foreach($paises as $pais => $infopais)
            <tr>
                <td style="background-color:orange" rowspan='{{ count($infopais["ciudades"]) }}'>
                    {{ $pais }}
                </td>
                <td style="background-color:yellow" rowspan='{{ count($infopais["ciudades"]) }}'>
                    {{ $infopais["capital"] }}
                </td>
                <td style="background-color:green"  rowspan='{{ count($infopais["ciudades"]) }}'>
                    {{ $infopais["moneda"] }}
                </td>
                <td  style="background-color:red"  rowspan='{{ count($infopais["ciudades"]) }}'>
                    {{ $infopais["poblacion"] }}
                </td>
                @foreach($infopais["ciudades"] as $ciudad )
                <th> 
                    {{  $ciudad  }}
                </th>
                </tr> 
                @endforeach

            @endforeach
        </tbody>
        <tfoot></tfoot>
    </table>
</body>
</html>
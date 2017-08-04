@extends('layouts/template')



@section('content')
    <h1> título sólo para la vista/productos </h1>
    <p> el valor de texto es : <strong> {{$texto}} </strong> </p>
    <p> el valor de texto es : <strong> <?php echo $texto?> </strong> </p>
    <p> {{@print_r($array)}} </p>
    <p>  <?php echo ucfirst('texto en minúsculas')?>  <br /> {{ ucfirst('texto en minúsculas') }}  </p>
@endsection
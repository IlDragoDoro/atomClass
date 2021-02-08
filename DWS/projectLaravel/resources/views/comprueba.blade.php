@include('header')
<table>
  <tr style="border:1px solid black;">
    <td>h1</td>
    <td>h1</td>
    <td>h1</td>
    <td>h1</td>
  </tr>
@foreach($usuarios as $usu)
  <tr>
    <td>{{$usu['id']}}</td>
    <td>{{$usu['name']}}</td>
    <td>{{$usu['lname']}}</td>
    <td>{{$usu['pass']}}</td>
  </tr>
@endforeach

</table>
@include('footer')

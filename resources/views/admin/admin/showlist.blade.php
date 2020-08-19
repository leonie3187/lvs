id&nbsp;&nbsp;name&nbsp;&nbsp;age&nbsp;&nbsp;email&nbsp;&nbsp;
@foreach($data as $val)
    {{$val -> id}} <br/>{{$val -> name}} <br/>{{$val -> age}} <br/>{{$val -> email}} <br/>
@endforeach
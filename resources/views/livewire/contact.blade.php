<div style="text-align: center">
    <h1>Contact</h1>
    {{print_r($data)}}
    @foreach ($data as $item) 
    <h1>{{$item}}</h1>  
    @endforeach
</div>

@extends("layouts.mainLayout")
@section('content')
<main class="main">
  <h1>Pacchetti viaggio</h1>

<div class="packets-container">
  @foreach ($pacchetti as $packet)
<div class="single-packet">
  <h4>Country: {{$packet['country']}}</h4>
  <h4>City: {{$packet['city']}}</h4>
  <h4>Accomodation: {{$packet['accomodation_type']}}</h4>
  <h4>Price: {{$packet['price']}}$</h4>
  <div class="image">
    <img src="{{$packet['img_url']}}" alt="">
  </div>
  
</div>



    
@endforeach

</div>
<div class="links text-align-center">
  {{$pacchetti->links()}}
</div>

</main>

@endsection

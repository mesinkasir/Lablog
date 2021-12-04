<div class="col-12 col-md-4 p-3 p-md-5">
    <h1><a href="{{ url('site/contact') }}">{{$contact->name}}</a></h1>
    <h3>{{$contact->description}}</h3>
    <p>WhatsApp : {{$contact->whatsapp}}</p>
    <p>Call us : {{$contact->phone}}</p>
    <p>{{$contact->email}}</p>
    <p>{{$contact->street}}</p>
</div>

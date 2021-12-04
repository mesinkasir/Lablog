<div class="container-fluid">
    <div class="masthead-followup row m-0">
        <div class="col-12 col-md-12 p-1 ">
            <h3>Contact Us</h3>
        </div>
        @foreach($contacts as $contact)
        @include('widget.contact.head')
        @include('widget.contact.address')
        @endforeach
    </div>
</div>

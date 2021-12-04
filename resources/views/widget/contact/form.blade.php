<form action="/article/contact/{{$contact->id}}" class="row" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group col-md-12">
                    <label for="contactName"><i class="fas fa-home"></i> Bussiness Name</label>
                    <input type="text" name="name" value="{{$contact->name}}" class="form-control"
                        placeholder="insert bussiness name..">
                </div>

                <div class="form-group col-md-4">
                    <label for="Phone"><i class="fas fa-mobile-alt"></i> Phone</label>
                    <input type="text" name="phone" value="{{$contact->phone}}" class="form-control"
                        placeholder="Insert Phone Number...">
                </div>
                <div class="form-group col-md-4">
                    <label for="Whatsapp"><i class="fab fa-whatsapp"></i> WhatsApp</label>
                    <input type="text" name="whatsapp" class="form-control" value="{{$contact->whatsapp}}"
                        placeholder="Insert WhatsApp Number...">
                </div>
                <div class="form-group col-md-4">
                    <label for="Map"><i class="fas fa-map"></i> Google Maps</label>
                    <input type="text" name="map" class="form-control" value="{{$contact->map}}"
                        placeholder="Copy paste google map embed...">
                </div>
                <div class="form-group col-md-12">
                    <label for="Email"><i class="fas fa-envelope"></i> Email</label>
                    <input type="text" name="email" class="form-control" value="{{$contact->email}}"
                        placeholder="Insert Email...">
                </div>
                <div class="form-group col-md-12">
                    <label for="Street"><i class="fas fa-street-view"></i> Complete Address</label>
                    <textarea type="text" name="street" class="form-control" value="{{$contact->street}}"
                        placeholder="Input complete address...">{{$contact->street}}</textarea>
                </div>



                <button type="submit" class="btn btn-lg btn-danger btn-block">Update</button>
            </form>
        </div>
    </div>
</div>
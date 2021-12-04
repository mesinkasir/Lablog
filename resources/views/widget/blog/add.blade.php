<img class="img-fluid" src="{{ asset('images/logotype.min.svg') }}"/>
       <h3 class="text-danger"><strong>Create New Blog</strong></h3>
        @if($errors->any())
          <div class="alert alert-danger">
              <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
              </ul>
          </div>
        @endif
<form action="/management/user/{{$user->id}}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name"><i class="fas fa-user"></i> Name</label>
        <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Name...">
    </div>
    <div class="form-group">
        <label for="email"><i class="fas fa-envelope"></i> Email</label>
        <input type="email" name="email" value="{{$user->email}}" class="form-control" placeholder="Email...">
    </div>
    <div class="form-group">
        <label for="password"><i class="fas fa-key"></i> Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password...">
    </div>
    <div class="form-group">
        <label for="Role"><i class="fas fa-sync"></i> Role</label>
        <select name="role" class="form-control">
            <option value="admin" {{$user->role == 'admin' ? 'selected':''}}>Admin</option>
            <option value="cashier" {{$user->role == 'cashier' ? 'selected':''}}>Cashier</option>
        </select>
    </div>

    <button type="submit" class="btn btn-danger btn-lg btn-block">Update </button>
</form>
</div>
</div>
</div>
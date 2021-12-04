<form action="/management/user" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name"><i class="fas fa-user"></i> Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name...">
                </div>
                <div class="form-group">
                    <label for="email"><i class="fas fa-envelope"></i> Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email...">
                </div>
                <div class="form-group">
                    <label for="password"><i class="fas fa-key"></i> Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password...">
                </div>
                <div class="form-group">
                    <label for="Role"><i class="fas fa-sync"></i> Role</label>
                    <select name="role" class="form-control">
                        <option value="admin">Admin</option>
                        <option value="cashier">Cashier</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-danger btn-lg btn-block">Save</button>
            </form>
        </div>
    </div>
</div>
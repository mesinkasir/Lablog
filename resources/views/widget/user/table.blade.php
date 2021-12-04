<table class="table">
                <thead>
                    <tr>
                        <!--<th scope="col">ID</th>-->
                        <th scope="col">Name</th>
                        <th scope="col">Role</th>
                        <th scope="col">Email</th>
                        <th scope="col" width="10%"></th>
                        <th scope="col" width="10%">Set</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <!--<td>{{$user->id}}</td>-->
                        <td>{{$user->name}}</td>
                        <td>{{$user->role}}</td>
                        <td>{{$user->email}}</td>
                        <td><a href="/management/user/{{$user->id}}/edit" class="btn btn-outline-danger">Edit</a></td>
                        <td>
                            <form action="/management/user/{{$user->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
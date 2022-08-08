<div>
    <h2>Gestion du blog</h2>
      <table class="table table-striped w-75">
        <thead>
          <tr>
            <th scope="col">Membres du blog</th>
            <th>Role</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($users as $user)
            <tr>
              <td>{{ $user->name }}</td>
              <td>{{ $user->role }}</td>
              <td><a href="{{ route('user',[$user->id,$user->name]) }}">Afficher le profil</a></td>
            </tr>   
          @endforeach
        </tbody>
      </table>
        {{ $users->links() }}
</div>



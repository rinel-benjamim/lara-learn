<div>
    @foreach ($users as $user)
        {{ $user->email }} - {{ $user->name }} <br>
    @endforeach
</div>

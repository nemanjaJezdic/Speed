<form action="@if($action == "users.update") {{ route($action, $user->id) }} @else {{ route($action) }} @endif" method="POST" enctype="multipart/form-data">

    @csrf
    @if($action == 'users.update')
        @method("PUT")
    @endif

    <div class="form-group">
        <label for="first_name">Name</label>
        <input class="form-control" id="first_name" name="first_name" value="{{ $user->first_name ?? old('first_name') }}" />
        <p class="help-block">Example: Pera</p>
        @error('first_name')
        <div class="text-danger">
            {{ $message }}
        </div>
        @enderror
        <label for="last_name">Surname</label>
        <input class="form-control" id="last_name" name="last_name" value="{{ $user->last_name ?? old('last_name') }}" />
        <p class="help-block">Example: Peric</p>
        @error('last_name')
        <div class="text-danger">
            {{ $message }}
        </div>
        @enderror
        <label for="email">Email</label>
        <input class="form-control" id="email" name="email" value="{{ $user->email ?? old('email') }}" />
        <p class="help-block">Example: pera@gmail.com</p>
        @error('email')
        <div class="text-danger">
            {{ $message }}
        </div>
        @enderror
        <label for="password">Password</label>
        <input class="form-control" id="password" name="password" value="{{ $user->password ?? old('password') }}" />
        <p class="help-block">Example: pera123</p>
        @error('password')
        <div class="text-danger">
            {{ $message }}
        </div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

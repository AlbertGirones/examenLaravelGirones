<h1>Login</h1>
<form action="{{ route('validateLogin') }}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-2">
        <label for="email" class="col-sm-2 col-form-label">Compte de mail:</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email...">
        </div>
    </div>
    <div class="form-group mb-2">
        <br>
        <label for="password" class="col-sm-2 col-form-label">Password:</label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="password"  id="password" placeholder="Password...">
        </div>
    </div>
    <div class="form-group mb-2">
        <br>
        <button class="btn btn-primary" type="submit">Enviar</button>
    </div>
</form>
<br>
<a href="{{ route('welcome') }}">Torna enrere ...</a>

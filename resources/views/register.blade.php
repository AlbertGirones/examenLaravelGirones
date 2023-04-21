<h1>Register</h1>
<form action="{{ route('validateRegister') }}" method="POST" role="form" enctype="multipart/form-data">
    @csrf
    <div class="form-group mb-2">
        <label for="email" class="col-sm-2 col-form-label">Compte de mail: </label>
        <div class="col-sm-10">
            <input type="email" class="form-control" name="email" id="email" placeholder="Email...">
        </div>
    </div>
    <div class="form-group mb-2">
        <br>
        <label for="password" class="col-sm-2 col-form-label">Password: </label>
        <div class="col-sm-10">
            <input type="password" class="form-control" name="password"  id="password" placeholder="Password...">
        </div>
    </div>
    <br>
    <div class="form-group mb-2">
        <label for="nom" class="col-sm-2 col-form-label">Nom: </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom...">
        </div>
    </div>
    <br>
    <div class="form-group mb-4">
        <label for="natiu" class="col-sm-2 col-form-label">Idioma natiu: </label>
        <select class="form-select" aria-label="Default select example" name="natiu">
            <option selected>Escollir idioma ...</option>
            <option value="Espanyol">Espanyol</option>
            <option value="Angles">Angles</option>
            <option value="Frances">Frances</option>
            <option value="Alemany">Alemany</option>
        </select>
    </div>
    <br>
    <div class="form-group mb-4">
        <label for="apracticar" class="col-sm-2 col-form-label">Idioma natiu: </label>
        <select class="form-select" aria-label="Default select example" name="apracticar">
            <option selected>Escollir idioma ...</option>
            <option value="Espanyol">Espanyol</option>
            <option value="Angles">Angles</option>
            <option value="Frances">Frances</option>
            <option value="Alemany">Alemany</option>
        </select>
    </div>
    <br>
    <div class="form-group mb-2">
        <br>
        <button class="btn btn-primary" type="submit">Aceptar</button>
    </div>
</form>
<br>
<a href="{{ route('welcome') }}">Torna enrere ...</a>


<form action="{{route('valida')}}" method="POST">
        {{csrf_field()}}
        <div class="mb-3">
            <label for="inuser" class="form-label">Usuario</label>
            <input type="text" class="form-control" name="inuser" id="inuser" >
        </div>
        <div class="mb-3">
            <label for="inpass" class="form-label">Contraseña</label>
            <input type="password" class="form-control" name="inpass" id="inpass">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
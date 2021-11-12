<?php


<form action="{{route('calculaarea')}}" method="POST">
        {{csrf_field()}}
        <div class="mb-3" class="rounded-pill border border-dark border-4" >
            <label for="inbase" class="form-label">Base</label>
            <input type="text" class="form-control" name="inbase" id="inbase" >
        </div>
        <div class="mb-3">
            <label for="inaltura" class="form-label">Altura</label>
            <input type="text" class="form-control" name="inaltura" id="inaltura">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    ?>
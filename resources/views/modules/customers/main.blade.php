<form method="POST" action="{{ route('customers.store') }}">
    @csrf
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="name">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" id="name" placeholder="John"/>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="surname">Apellido</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="surname" id="surname" placeholder="Doe." />
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="email">Email</label>
        <div class="col-sm-10">
            <div class="input-group input-group-merge">
                <input type="text" name="email" id="email" class="form-control"
                    placeholder="john.doe@example.com" aria-label="john.doe"
                    aria-describedby="email" />
            </div>
            <div class="form-text">Puedes usar letras, numeros & puntos</div>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="telephone">Teléfono</label>
        <div class="col-sm-10">
            <input type="text" name="telephone" id="telephone" class="form-control phone-mask"
                placeholder="658 799 8941" aria-label="658 799 8941"
                aria-describedby="telephone" />
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="direction">Dirección</label>
        <div class="col-sm-10">
            <input type="text" name="direction" id="direction" class="form-control phone-mask"
                placeholder="658 799 8941" aria-label="658 799 8941"
                aria-describedby="direction" />
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Send</button>
        </div>
    </div>
</form>
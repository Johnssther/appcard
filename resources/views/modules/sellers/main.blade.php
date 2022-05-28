<form method="POST" action="{{ route('sellers.store') }}">
    @csrf
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="name">Nombre</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="name" id="name" placeholder="John" />
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="surname">Apellido</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="surname" id="surname" placeholder="Doe." />
            @error('surname')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="email">Email</label>
        <div class="col-sm-10">
            <div class="input-group input-group-merge">
                <input type="text" name="email" id="email" class="form-control" placeholder="john.doe@example.com"
                    aria-label="john.doe" aria-describedby="email" />
            </div>
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
            <div class="form-text">Puedes usar letras, numeros & puntos</div>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="telephone">Teléfono</label>
        <div class="col-sm-10">
            <input type="text" name="telephone" id="telephone" class="form-control phone-mask"
                placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="telephone" />
            @error('telephone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="direction">Dirección</label>
        <div class="col-sm-10">
            <input type="text" name="direction" id="direction" class="form-control phone-mask"
                placeholder="cll 10 #..." aria-label="658 799 8941" aria-describedby="direction" />
            @error('telephone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="company">Compañia</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="company" id="company" placeholder="Doe." />
            @error('company')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="identification_card">Cédula</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="identification_card" id="identification_card" placeholder="1099..." />
            @error('identification_card')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Send</button>
        </div>
    </div>
</form>

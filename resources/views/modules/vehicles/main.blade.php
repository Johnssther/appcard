<form method="POST" action="{{ route('vehicles.store') }}">
    @csrf
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="model">Modelo</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="model" id="model" placeholder="AT1" />
            @error('model')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="maximum_power">Potencia Máxima</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="maximum_power" id="maximum_power" placeholder="0rmp" />
            @error('maximum_power')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="maximum_torque">Torque maxímo</label>
        <div class="col-sm-10">
            <input type="text" name="maximum_torque" id="maximum_torque" class="form-control phone-mask"
                placeholder="0"/>
            @error('maximum_torque')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="fuel_type">Combustible</label>
        <div class="col-sm-10">
            <input type="text" name="fuel_type" id="fuel_type" class="form-control phone-mask"
                placeholder="Gasolina"/>
            @error('fuel_type')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="color">Color</label>
        <div class="col-sm-10">
            <input type="text" name="color" id="color" class="form-control phone-mask"
                placeholder="Gasolina"/>
            @error('color')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="brand">Marca</label>
        <div class="col-sm-10">
            <input type="text" name="brand" id="brand" class="form-control phone-mask"
                placeholder="Brand"/>
            @error('brand')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="value">Valor</label>
        <div class="col-sm-10">
            <input type="number" name="value" id="value" class="form-control phone-mask"
                placeholder="00000"/>
            @error('value')
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

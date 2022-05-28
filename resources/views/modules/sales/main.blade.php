<form method="POST" action="{{ route('sales.store') }}">
    @csrf
    <div class="row mb-3">
        <div class="col-md-6">
            <div class="input-group">
                <label class="input-group-text" for="seller_id">Vendedor</label>
                <select class="form-select" id="seller_id" name="seller_id">
                    @foreach (App\Models\Modules\Seller::getSellers() as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group">
                <label class="input-group-text" for="customer_id">Cliente</label>
                <select class="form-select" id="customer_id" name="customer_id">
                    @foreach (App\Models\Modules\Customer::getCustomers() as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <div class="input-group">
                <label class="input-group-text" for="vehicle_id">Vehiculo</label>
                <select class="form-select" id="vehicle_id" name="vehicle_id">
                    @foreach (App\Models\Modules\Vehicle::getVehicles() as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="comments">Comentarios</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="comments" id="comments" placeholder="Comments" />
            @error('comments')
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

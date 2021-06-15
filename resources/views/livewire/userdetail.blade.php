<div>
    <div class="container">
        <h4 class="my-4 text-center">CRUD Opration With livewire - User Details</h4>
        <div class="jumbotron py-3 px-3 my-4 shadow text-capitalize">
            <h5 class="mx-1">Insert Data</h5>
            <form wire:submit.prevent="submit">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">phone number</label>
                        <input type="number" wire:model="phone_number"  class="form-control">
                        @error('phone_number')
                        <span class="error text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">account balance</label>
                        <input type="number" wire:model="account_balance"  class="form-control">
                        @error('account_balance')
                        <span class="error text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">age</label>
                        <input type="number" wire:model="age"  class="form-control">
                        @error('age')
                        <span class="error text-danger">{{$message}}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-around py-3">
                <button type="submit" class="btn btn-primary w-50">Submit</button>
            </div>
        </form>
    </div>
</div>
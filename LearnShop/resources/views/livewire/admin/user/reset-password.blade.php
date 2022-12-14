<div>
    <div class="card-body">
        <form wire:submit.prevent="resetPassword">
            <div class="row mb-3">
                <div class="col-sm-3">
                    <h6 class="mb-0">پسورد جدید</h6>
                </div>
                <div class="col-sm-9 text-secondary">
                    <input wire:model="password" type="password" class="form-control" name="password">
                    @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-9 text-secondary">
                    <input type="submit" class="btn btn-primary px-4" value="ذخیره">
                </div>
            </div>
        </form>
    </div>
</div>

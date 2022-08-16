<div>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent="updateInfo">

                        <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" wire:model="name" placeholder="Enter name " class="form-control">
                            @error('name')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="text" wire:model="email" placeholder="Enter email" class="form-control">
                            @error('email')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Update Info</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent="updatePassword">

                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password" wire:model="password" placeholder="Password" class="form-control">
                            @error('password')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="">Confirm Pasword</label>
                            <input type="password" wire:model="confirm_password" placeholder="Confirm Password"
                                class="form-control">
                            @error('confirm_password')
                                <span class="text-red-500">{{ $message }}</span>
                            @enderror
                        </div>


                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Update Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

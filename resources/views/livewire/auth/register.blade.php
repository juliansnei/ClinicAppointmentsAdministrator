<div>
    <form wire:submit.prevent="register">
        <!-- Nombre -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" id="name" wire:model.defer="state.name" class="mt-1 block w-full"/>
            @error('state.name') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Email -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" id="email" wire:model.defer="state.email" class="mt-1 block w-full"/>
            @error('state.email') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Select de Role -->
        <div class="mb-4">
            <label for="role" class="block text-sm font-medium text-gray-700">Role</label>
            <select id="role" wire:model.defer="state.role" class="mt-1 block w-full">
                <option value="admin">Admin</option>
                <option value="user">User</option>
            </select>
            @error('state.role') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Contraseña -->
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" id="password" wire:model.defer="state.password" class="mt-1 block w-full"/>
            @error('state.password') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <!-- Confirmar Contraseña -->
        <div class="mb-4">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input type="password" id="password_confirmation" wire:model.defer="state.password_confirmation" class="mt-1 block w-full"/>
            @error('state.password_confirmation') <span class="text-red-500">{{ $message }}</span> @enderror
        </div>

        <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-md">Register</button>
    </form>
</div>

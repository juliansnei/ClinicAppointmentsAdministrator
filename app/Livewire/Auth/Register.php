<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Spatie\Permission\Models\Role; // Si usas Spatie para roles
use Illuminate\Auth\Events\Registered;
use Illuminate\Validation\Rules\Password;

class Register extends Component
{
    public $state = [
        'name' => '',
        'email' => '',
        'password' => '',
        'password_confirmation' => '',
        'role' => 'user', // Valor por defecto
    ];

    protected $rules = [
        'state.name' => ['required', 'string', 'max:255'],
        'state.email' => ['required', 'string', 'email', 'max:255', 'unique:users,email'],
        'state.password' => ['required', 'confirmed', Password::defaults()],
        'state.role' => ['required', 'in:admin,user'], // Validación de roles
    ];

    public function register()
    {
        $this->validate();

        // Crear el usuario
        $user = User::create([
            'name' => $this->state['name'],
            'email' => $this->state['email'],
            'password' => Hash::make($this->state['password']),
        ]);

        // Asignar el rol según la opción seleccionada
        $role = $this->state['role']; // Obtener el rol seleccionado
        $user->assignRole($role); // Asignar el rol al usuario

        // Disparar el evento "Registered" (si es necesario)
        event(new Registered($user));

        // Iniciar sesión automáticamente
        auth()->login($user);

        // Redirigir al dashboard o a la página principal
        return redirect()->route('dashboard');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}

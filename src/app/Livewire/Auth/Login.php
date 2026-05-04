<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Filament\Facades\Filament;

class Login extends Component
{
    public string $email = '';
    public string $password = '';

    public function login()
    {
        // ✅ validasi
        $this->validate([
            'email' => 'required|email',
            'password' => 'required|min:5',
        ]);

        // ✅ auth
        if (! Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
        ])) {
            $this->addError('email', 'Email atau password salah');
            return;
        }

        session()->regenerate();

        $user = auth()->user();

        // ✅ redirect berdasarkan role (Spatie)
        return redirect()->to(
            Filament::getPanel(match (true) {
                $user->hasRole('super_admin') => 'admin',
                $user->hasRole('akademik') => 'akademik',
                $user->hasRole('guru') => 'guru',
                $user->hasRole('siswa') => 'siswa',
                $user->hasRole('orang_tua') => 'orangtua',
                default => 'admin',
            })->getUrl()
        );
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
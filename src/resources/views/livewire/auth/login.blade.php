<form wire:submit.prevent="login" class="space-y-5">

    {{-- EMAIL --}}
    <div>
        <label class="text-sm text-gray-600">Email</label>
        <input 
            type="email"
            wire:model.defer="email"
            class="w-full mt-1 px-4 py-2 border rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none"
            placeholder="admin@admin.com"
        >
        @error('email') 
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p> 
        @enderror
    </div>

    {{-- PASSWORD --}}
    <div>
        <label class="text-sm text-gray-600">Password</label>
        <input 
            type="password"
            wire:model.defer="password"
            class="w-full mt-1 px-4 py-2 border rounded-xl focus:ring-2 focus:ring-blue-500 focus:outline-none"
            placeholder="••••••••"
        >
        @error('password') 
            <p class="text-red-500 text-sm mt-1">{{ $message }}</p> 
        @enderror
    </div>

    {{-- BUTTON --}}
    <button 
        type="submit"
        class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-xl font-semibold transition"
    >
        Login
    </button>

</form>
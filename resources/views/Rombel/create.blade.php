<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           Tambah Rombel
        </h2>
    </x-slot>

    <x-content>
        
        <form  method="post" action="{{ route('rombel.store') }}"  class="mt-6 space-y-6">
        @csrf

        <div>
            <x-input-label for="name" :value="('Nama Kelas')"/>
            <x-text-input id="name" name="name" type="text" value="{{ old('name') }}" class="mt-1 w-full"/>
            <x-input-error class="mt-2" :messages="$errors->get('name')"/>
        </div>

        <x-primary-button>Simpan</x-primary-button>
        </form>
    </x-content>
    
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Data') }}
        </h2>
    </x-slot>
    <x-content>
        <form method="post" enctype="multipart/form-data" action="{{ route('student.store') }}" class="mt-6 space-y-6">
            @csrf
            <div>
                <x-input-label for="photo" value="photo_siswa" />
                <x-text-input id="photo" name="photo" type="file" class="mt-1 block w-full" value="{{old ('photo')}}" />
                <x-input-error class="mt-2" :messages="$errors->get('photo')" />
            </div>
            <div>
                <x-input-label for="nis" value="NIS" />
                <x-text-input id="nis" name="nis" type="text" class="mt-1 block w-full" value="{{old ('nis')}}" />
                <x-input-error class="mt-2" :messages="$errors->get('nis')" />
            </div>
            <div>
                <x-input-label for="name" value="Nama Murid" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" value="{{old ('name')}}" />
                <x-input-error class="mt-2" :messages="$errors->get('name')" />
            </div>
            <div>
                <x-input-label for="rombel" value="Rombel" />
              <select name="rombel_id" id="rombel">
                @foreach ($rombels as $r)
                    <option value="{{$r->id}}">{{$r->name}}</option>
                @endforeach
              </select>
                <x-input-error class="mt-2" :messages="$errors->get('rombel_id')" />
            </div>
            <div>
                <x-input-label for="Gender" value="Gender"/>
                    <select name="gender" id="Gender">
                        <option value="B">Laki-Laki</option>
                        <option value="G">Perempuan</option>
                    </select>

            </div>
            <x-primary-button>
                simpan
            </x-primary-button>
        </form>
    </x-content>
    </div>
</x-app-layout>
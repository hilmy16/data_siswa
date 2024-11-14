<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Kelas') }}
        </h2>
    </x-slot>
    <x-content>
        <form method="post" action="{{ route('student.update', $student->id) }}" class="mt-6 space-y-6">
            @csrf
            @method('PUT')

            <div>
                <x-input-label for="nis" value="NIS" />
                <x-text-input id="nis" name="nis" type="text" class="mt-1 block w-full" value="{{$student->nis}}" />
                <x-input-error class="mt-2" :messages="$errors->get('nis')" />
            </div>
            <div>
                <x-input-label for="name" value="Nama Murid" />
                <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" value="{{$student->name}}" />
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
            <x-primary-button>
                simpan
            </x-primary-button>
        </form>
    </x-content>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header flex">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Data Rombel
        </h2>
        <h1 class="text-end h-5 w-10">
            Create
        </h1>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a  href="{{route('rombel.create')}}">
                        <x-secondary-button class="mb-2 p-3">
                        Tambah
                        </x-secondary-button>
                    </a>
                    <x-table>
                        <x-slot:thead>
                        <tr>
                            <th class="p-3">no</th>
                            <th class="p-3">nama</th>
                            <th class="p-3">Action</th>
                        </tr>
 
                        </x-slot>
                        @foreach ($rombels as $rombel)
                            <tr class="border-b">
                               <td class="p-3">{{$loop->iteration}}</td>
                               <td class="p-3">{{$rombel->name}}</td>
                               <td class="p-3"><a  href="{{route('rombel.edit', $rombel ->id)}}">
                                <x-secondary-button class="mb-2 ">Edit</x-secondary-button>
                                </a>
                                <form method="post" action="{{ route('rombel.destroy', $rombel->id) }}" class="ms-2 inline">
                                @csrf
                                @method('DELETE')
                                <x-primary-button>Hapus</x-primary-button>
                    </form>
                              </td>  
                            </tr>
                        @endforeach
                    </x-table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
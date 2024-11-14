<x-app-layout>
    <x-slot name="header flex">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          Data student
        </h2>
        <h1 class="text-end h-5 w-10">
            Create
        </h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a  href="{{route('student.create')}}">
                        <x-secondary-button class="mb-2 p-3">
                        Tambah
                        </x-secondary-button>
                    </a> 
                    <a  href="{{route('students.export')}}">
                        <x-secondary-button class="mb-2 p-3">
                        Ekspor
                        </x-secondary-button>
                    </a>
                    <form action="{{ route('students.import') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <input type="file" name="file" accept=".xlsx, .xls" required>
    </div>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            @if(is_array(session('error')))
                @foreach(session('error') as $error)
                    <p>{{ $error }}</p>
                @endforeach
            @else
                {{ session('error') }}
            @endif
        </div>
    @endif
    
    <button type="submit">Import</button>
</form>
                    <x-table>
                        <x-slot:thead>
                        <tr>
                            <th class="p-3">no</th>
                            <th class="p-3">image</th>
                            <th class="p-3">nis</th>
                            <th class="p-3">nama</th>
                            <th class="p-3">Rombel Name</th>
                            <th class="p-3">Gender</th>
                            <th class="p-3">Action</th>
                        </tr>
                        </x-slot>
                            @foreach ($students as $student)
                            <tr class="border-b">
                           
                               <td class="p-3">{{$loop->iteration}}</td>
                               <td class="p-3"><img class="size-16" src="{{$student->photo}}" alt=""></td>

                               <td class="p-3">{{$student->nis}}

                               <td class="p-3">{{$student->name}}
                               <td class="p-3">{{ optional($student->rombel)->name ?? "Ilang Kelasnya" }}</td>
                               <td class="p-3">{{$student->gender == "B" ? "Laki-Laki" : "Perempuan"}}
                                
                               </td>
                               <td class="p-3"><a href="{{route('student.edit', $student->id)}}">
                                <x-secondary-button class="mb-2">Edit</x-secondary-button>
                               </a>
                               <form method="post" action="{{ route('student.destroy', $student->id) }}" class="ms-2 inline">
                                @csrf
                                @method('DELETE')
                                <x-primary-button>
                                    Hapus
                                </x-primary-button>
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
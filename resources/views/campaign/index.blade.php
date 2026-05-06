@extends('app')

@section('content')

@if(session('success'))
<div class="bg-green-200 p-2 mb-3 rounded">
    {{ session('success') }}
</div>
@endif

<table class="table-auto w-full mt-4 bg-white shadow rounded">
    <thead class="bg-gray-200">
        <tr>
            <th class="p-2">Judul</th>
            <th>Target</th>
            <th>Terkumpul</th>
            <th>Aksi</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($campaigns as $c)
        <tr class="border-t">
            <td class="p-2">{{ $c->title }}</td>
            <td>{{ $c->target_donation }}</td>
            <td>{{ $c->collected_donation }}</td>
            <td class="flex gap-2">
                
                <!-- EDIT -->
                <a href="{{ url('/campaign/'.$c->id.'/edit') }}" 
                   class="bg-yellow-400 px-3 py-1 rounded text-white">
                   Edit
                </a>

                <!-- DELETE -->
                <form action="{{ url('/campaign/'.$c->id) }}" method="POST"
                      onsubmit="return confirm('Yakin hapus data?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" 
                            class="bg-red-500 px-3 py-1 rounded text-white">
                        Hapus
                    </button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
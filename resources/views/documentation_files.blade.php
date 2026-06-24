@extends('app')

@section('title', 'Documentation Files')

@section('content')

<div class="max-w-5xl mx-auto">

    {{-- Pesan sukses --}}
    @if(session('success'))
        <div class="bg-green-200 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif


    {{-- Form Upload --}}
    <div class="bg-white shadow rounded p-6 mb-6">

        <h2 class="text-3xl font-bold mb-6">
            Upload Dokumen & Gambar
        </h2>

        <form action="/documentations"
              method="POST"
              enctype="multipart/form-data">

            @csrf

            {{-- Input Judul --}}
            <div class="mb-4">

                <label class="block mb-2 font-semibold">
                    Nama Dokumen/Gambar
                </label>

                <input type="text"
                       name="title"
                       placeholder="Masukkan nama dokumen atau gambar"
                       class="w-full border rounded p-3"
                       required>

            </div>


            {{-- Input File --}}
            <div class="mb-5">

                <label class="block mb-2 font-semibold">

                    Pilih File (PDF, DOCX, PNG, JPG - Maks 5 MB)

                </label>

                <input type="file"
                       name="attachment"
                       accept=".pdf,.doc,.docx,.png,.jpg,.jpeg"
                       class="block w-full text-sm text-gray-500

                              file:mr-4
                              file:py-2
                              file:px-4
                              file:rounded-md
                              file:border-0
                              file:bg-purple-100
                              file:text-purple-700

                              hover:file:bg-purple-200"

                       required>

            </div>


            <button type="submit"

                    class="bg-purple-700 text-white px-5 py-2 rounded hover:bg-purple-800">

                Unggah File

            </button>

        </form>

    </div>



    {{-- Tabel Data --}}
    <div class="bg-white shadow rounded p-6">

        <h2 class="text-2xl font-bold mb-5">

            Data File & Gambar

        </h2>


        <table class="w-full border">

            <thead class="bg-blue-100">

            <tr>

                <th class="p-3">No</th>

                <th class="p-3">Judul</th>

                <th class="p-3">Preview</th>

                <th class="p-3">Tipe File</th>

            </tr>

            </thead>


            <tbody>

            @foreach($files as $file)

            <tr class="border-t text-center">

                <td>

                    {{ $loop->iteration }}

                </td>


                <td>

                    {{ $file->title }}

                </td>


                <td>

                    @if(in_array($file->file_type,['jpg','jpeg','png']))

                        <img src="{{ asset('storage/'.$file->file_path) }}"

                             class="w-28 h-28 object-cover rounded mx-auto">


                    @elseif($file->file_type == 'pdf')

                        <a href="{{ asset('storage/'.$file->file_path) }}"

                           target="_blank"

                           class="text-blue-600">

                            Preview PDF

                        </a>


                    @else

                        <a href="{{ asset('storage/'.$file->file_path) }}"

                           target="_blank"

                           class="text-green-600">

                            Lihat File

                        </a>

                    @endif


                </td>


                <td>

                    {{ strtoupper($file->file_type) }}

                </td>

            </tr>

            @endforeach


            </tbody>

        </table>

    </div>

</div>

@endsection
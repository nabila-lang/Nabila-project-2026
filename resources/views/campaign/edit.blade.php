@extends('app')

@section('content')

<div class="max-w-lg mx-auto mt-10 bg-white p-6 rounded shadow">
    <h2 class="text-xl font-bold mb-4">Edit Campaign</h2>

    <form action="{{ url('/campaign/'.$campaign->id) }}" method="POST">
        @csrf
        @method('PUT')

        <!-- TITLE -->
        <div class="mb-4">
            <label class="block mb-1">Judul</label>
            <input type="text" name="title" 
                   value="{{ $campaign->title }}"
                   class="w-full border px-3 py-2 rounded">
        </div>

        <!-- TARGET -->
        <div class="mb-4">
            <label class="block mb-1">Target Donasi</label>
            <input type="number" name="target_donation" 
                   value="{{ $campaign->target_donation }}"
                   class="w-full border px-3 py-2 rounded">
        </div>

        <!-- TERKUMPUL (INI YANG TADI ERROR!) -->
        <div class="mb-4">
            <label class="block mb-1">Terkumpul</label>
            <input type="number" name="collected_donation" 
                   value="{{ $campaign->collected_donation }}"
                   class="w-full border px-3 py-2 rounded">
        </div>

        <button type="submit" 
                class="bg-blue-500 text-white px-4 py-2 rounded">
            Update
        </button>
    </form>
</div>

@endsection
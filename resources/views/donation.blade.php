@extends('app')

@section('content')

<div class="max-w-2xl mx-auto bg-white shadow-md rounded-lg p-6">
    <h2 class="text-2xl font-bold text-green-600 mb-6">
        Form Donasi
    </h2>

    <form action="/donation" method="POST">
        @csrf

        <div class="mb-4">
            <label class="block mb-2 font-medium">
                Campaign
            </label>

            <select name="campaign_id"
                class="w-full border rounded px-3 py-2">
                @foreach($campaigns as $campaign)
                    <option value="{{ $campaign->id }}">
                        {{ $campaign->title }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-4">
            <label class="block mb-2 font-medium">
                Nama Donatur
            </label>

            <input type="text"
                   name="donor_name"
                   class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-4">
            <label class="block mb-2 font-medium">
                Jumlah Donasi
            </label>

            <input type="number"
                   name="amount"
                   class="w-full border rounded px-3 py-2">
        </div>

        <div class="mb-6">
            <label class="block mb-2 font-medium">
                Pesan
            </label>

            <textarea name="message"
                      rows="4"
                      class="w-full border rounded px-3 py-2"></textarea>
        </div>

        <button type="submit"
            class="bg-green-600 text-white px-5 py-2 rounded hover:bg-green-700">
            Donasi Sekarang
        </button>
    </form>
</div>

@endsection
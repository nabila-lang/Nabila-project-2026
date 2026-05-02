@extends('app')

@section('title', 'Kontak')

@section('content')
<div class="container mx-auto p-6">
    <div class="bg-white p-8 rounded-lg shadow-md max-w-lg mx-auto">
        <h1 class="text-3xl font-bold text-green-600 mb-4 text-center">Hubungi Kami</h1>
        <p class="text-gray-700 mb-6 text-center">Jangan ragu untuk menghubungi kami jika Anda memiliki pertanyaan atau ingin bekerja sama.</p>
        
        <div class="space-y-4">
            <div class="flex items-center">
                <span class="font-bold w-24">Email:</span>
                <span class="text-gray-600">support@donasiku.com</span>
            </div>
            <div class="flex items-center">
                <span class="font-bold w-24">Telepon:</span>
                <span class="text-gray-600">0815-xxxx-xxxx</span>
            </div>
            <div class="flex items-center">
                <span class="font-bold w-24">Alamat:</span>
                <span class="text-gray-600">Jl. Kebaikan No. 123, Jakarta</span>
            </div>
        </div>
    </div>
</div>
@endsection
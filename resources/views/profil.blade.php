@extends('app')

@section('title', 'Profil')

@section('content')
<div class="container mx-auto p-6">
    <div class="bg-white p-8 rounded-lg shadow-md">
        <h1 class="text-3xl font-bold text-green-600 mb-4">Profil Kami</h1>
        <p class="text-gray-700 leading-relaxed">
            Selamat datang di <strong>Donasiku</strong>. Kami adalah platform yang berdedikasi untuk menghubungkan para dermawan dengan mereka yang membutuhkan. 
            Visi kami adalah menjadi jembatan kebaikan yang transparan, aman, dan tepat sasaran di seluruh pelosok Indonesia.
        </p>
        <h2 class="text-xl font-semibold mt-6 mb-2">Nilai-Nilai Kami:</h2>
        <ul class="list-disc ml-6 text-gray-700">
            <li>Transparan dalam setiap penyaluran dana.</li>
            <li>Terpercaya melalui verifikasi lembaga sosial.</li>
            <li>Cepat dalam merespon keadaan darurat.</li>
        </ul>
    </div>
</div>
@endsection
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Villa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

<div class="max-w-7xl mx-auto px-6 py-10">

    <!--  BEST VILLA -->
    <h2 class="text-2xl font-bold mb-4">Best Villa</h2>

    <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-6 mb-10">
        @foreach ($bestVillas as $villa)
        <div class="bg-white rounded-xl shadow-md overflow-hidden border-2 border-yellow-400">

            <img src="{{ asset('storage/'.$villa->foto) }}" class="w-full h-48 object-cover">

            <div class="p-4 space-y-2">

                <span class="bg-yellow-400 text-white text-xs px-2 py-1 rounded">
                    Best
                </span>

                <h3 class="font-bold text-lg">{{ $villa->nama }}</h3>

                <p class="text-sm text-gray-500">
                    👨‍👩‍👧 {{ $villa->kapasitas }} orang
                </p>

                <p class="text-sm">
                    🏊 Kolam Renang • 🛏 {{ $villa->jumlah_kamar_tidur }} kamar
                </p>

                <p class="text-blue-600 font-bold">
                    Rp {{ number_format($villa->harga_per_malam, 0, ',', '.') }}
                </p>

                <a href="#" class="block text-center bg-orange-500 text-white py-2 rounded hover:bg-orange-600">
                    Info Lengkap
                </a>

            </div>
        </div>
        @endforeach
    </div>


    <!-- SEARCH -->
    <form method="GET" action="{{ route('villas.index') }}" class="bg-white p-4 rounded shadow mb-8">
        <div class="grid md:grid-cols-4 gap-4">

            <select name="kolam_renang" class="border p-2 rounded">
                <option value="semua">Kolam Renang</option>
                <option value="1">Ada</option>
                <option value="0">Tidak Ada</option>
            </select>

            <input type="number" name="kapasitas" placeholder="Jumlah Orang"
                   class="border p-2 rounded">

            <select name="harga" class="border p-2 rounded">
                <option value="">Harga</option>
                <option value="1">< 500.000</option>
                <option value="2">500.000 - 1.000.000</option>
                <option value="3">> 1.000.000</option>
            </select>

            <button class="bg-blue-600 text-white rounded p-2 hover:bg-blue-700">
                Cari
            </button>

        </div>
    </form>


    <!-- 🏡 SEMUA VILLA -->
    <h2 class="text-xl font-bold mb-4">Semua Villa</h2>

    <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-6">

        @forelse ($villas as $villa)

        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition">

            <img src="{{ asset('storage/'.$villa->foto) }}" class="w-full h-48 object-cover">

            <div class="p-4 space-y-2">

                <h3 class="font-bold">{{ $villa->nama }}</h3>

                <p class="text-sm text-gray-500">
                    👨‍👩‍👧 {{ $villa->kapasitas }} orang
                </p>

                <p class="text-sm text-gray-500">
                    🛏 {{ $villa->jumlah_kamar_tidur }} |
                    🚿 {{ $villa->jumlah_kamar_mandi }}
                </p>

                <p class="text-sm">
                    @if($villa->ada_kolam_renang)
                        🏊 Kolam Renang
                    @else
                        ❌ Tanpa Kolam
                    @endif
                </p>

                <p class="text-blue-600 font-bold">
                    Rp {{ number_format($villa->harga_per_malam, 0, ',', '.') }}
                </p>

                <a href="#" class="block text-center bg-black text-white py-2 rounded hover:bg-gray-800">
                    Info Lengkap
                </a>

            </div>

        </div>

        @empty
            <p>Tidak ada villa ditemukan</p>
        @endforelse

    </div>

</div>

</body>
</html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Rapor — Rekap Nilai</title>

    {{-- Google Fonts - Inter --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Alpine.js --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.3.0/dist/flowbite.min.js"></script>

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>
<body class="bg-gray-50">

    {{-- Sidebar --}}
    @include('components.sidebar_admin')

    {{-- Main Content --}}
    <main class="ml-48 min-h-screen bg-gray-50 p-6">
        <div class="max-w-full">
            {{-- Page Header --}}
            <div class="mb-6">
                <h1 class="text-3xl font-bold text-gray-900">Rekap Nilai</h1>
                <p class="text-gray-600 mt-1">Rekap nilai seluruh siswa per mata pelajaran</p>
            </div>

            {{-- Card Container --}}
            <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                {{-- Toolbar --}}
                <div class="p-6 border-b border-gray-200">
                    <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                        {{-- Left: Search Input --}}
                        <div class="w-full md:w-auto md:max-w-xs">
                            <div class="relative group">
                                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400 group-focus-within:text-blue-500 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                                <input type="text" placeholder="Cari nama siswa, mapel..." 
                                       class="w-full pl-10 pr-4 py-2.5 text-sm border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all bg-white hover:border-gray-400">
                            </div>
                        </div>
                        
                        {{-- Right: Buttons & Filters --}}
                        <div class="flex items-center gap-3 w-full md:w-auto flex-wrap">
                            <select class="flex-1 md:flex-none px-4 py-2.5 text-sm font-medium text-gray-700 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all bg-white hover:border-gray-400">
                                <option>Filter Kelas</option>
                                <option>X A</option>
                                <option>X B</option>
                                <option>XI A</option>
                                <option>XI B</option>
                                <option>XII A</option>
                                <option>XII B</option>
                            </select>

                            <button class="px-5 py-2.5 bg-gray-100 text-gray-700 text-sm font-semibold rounded-lg hover:bg-gray-200 active:bg-gray-300 transition-all flex items-center gap-2 whitespace-nowrap border border-gray-300">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m4-3H8m15 0a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Export</span>
                            </button>
                        </div>
                    </div>
                </div>

                {{-- Table Section --}}
                <div class="overflow-x-auto">
                    <table class="w-full">
                        {{-- Table Head --}}
                        <thead class="bg-gradient-to-r from-gray-900 to-gray-800 border-b border-gray-200">
                            <tr>
                                <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider cursor-pointer hover:opacity-80 transition-opacity">
                                    <div class="flex items-center gap-2">
                                        <span>NO</span>
                                        <svg class="w-3.5 h-3.5 opacity-60" fill="currentColor" viewBox="0 0 20 20"><path d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3z"/></svg>
                                    </div>
                                </th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider cursor-pointer hover:opacity-80 transition-opacity">
                                    <div class="flex items-center gap-2">
                                        <span>Nama Siswa</span>
                                        <svg class="w-3.5 h-3.5 opacity-60" fill="currentColor" viewBox="0 0 20 20"><path d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3z"/></svg>
                                    </div>
                                </th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider cursor-pointer hover:opacity-80 transition-opacity">
                                    <div class="flex items-center gap-2">
                                        <span>Kelas</span>
                                        <svg class="w-3.5 h-3.5 opacity-60" fill="currentColor" viewBox="0 0 20 20"><path d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3z"/></svg>
                                    </div>
                                </th>
                                <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider cursor-pointer hover:opacity-80 transition-opacity">
                                    <div class="flex items-center gap-2">
                                        <span>Mata Pelajaran</span>
                                        <svg class="w-3.5 h-3.5 opacity-60" fill="currentColor" viewBox="0 0 20 20"><path d="M3 3a1 1 0 000 2h11a1 1 0 100-2H3zM3 7a1 1 0 000 2h5a1 1 0 000-2H3zM3 11a1 1 0 100 2h4a1 1 0 100-2H3z"/></svg>
                                    </div>
                                </th>
                                <th class="px-6 py-4 text-center text-xs font-bold text-white uppercase tracking-wider">Tugas</th>
                                <th class="px-6 py-4 text-center text-xs font-bold text-white uppercase tracking-wider">UTS</th>
                                <th class="px-6 py-4 text-center text-xs font-bold text-white uppercase tracking-wider">UAS</th>
                                <th class="px-6 py-4 text-center text-xs font-bold text-white uppercase tracking-wider">Nilai Akhir</th>
                                <th class="px-6 py-4 text-center text-xs font-bold text-white uppercase tracking-wider">Status</th>
                                <th class="px-6 py-4 text-center text-xs font-bold text-white uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>

                        {{-- Table Body --}}
                        <tbody class="divide-y divide-gray-200">
                            {{-- Row 1 --}}
                            <tr class="hover:bg-blue-50 transition-colors">
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">1</td>
                                <td class="px-6 py-4 text-sm text-gray-900 font-semibold">Budi Santoso</td>
                                <td class="px-6 py-4 text-sm text-gray-700">X A</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Matematika</td>
                                <td class="px-6 py-4 text-sm text-gray-900 text-center font-semibold">85</td>
                                <td class="px-6 py-4 text-sm text-gray-900 text-center font-semibold">80</td>
                                <td class="px-6 py-4 text-sm text-gray-900 text-center font-semibold">88</td>
                                <td class="px-6 py-4 text-sm text-center font-bold text-blue-600">84.3</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="inline-flex px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">
                                        Tuntas
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <button class="p-2 hover:bg-blue-100 rounded-lg transition-colors" title="Edit">
                                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-7-4l7-7m0 0l-7 7"/>
                                            </svg>
                                        </button>
                                        <button class="p-2 hover:bg-red-100 rounded-lg transition-colors" title="Hapus">
                                            <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            {{-- Row 2 --}}
                            <tr class="hover:bg-blue-50 transition-colors">
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">2</td>
                                <td class="px-6 py-4 text-sm text-gray-900 font-semibold">Siti Nurhaliza</td>
                                <td class="px-6 py-4 text-sm text-gray-700">X B</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Bahasa Indonesia</td>
                                <td class="px-6 py-4 text-sm text-gray-900 text-center font-semibold">78</td>
                                <td class="px-6 py-4 text-sm text-gray-900 text-center font-semibold">75</td>
                                <td class="px-6 py-4 text-sm text-gray-900 text-center font-semibold">72</td>
                                <td class="px-6 py-4 text-sm text-center font-bold text-orange-600">75</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="inline-flex px-3 py-1 bg-yellow-100 text-yellow-700 rounded-full text-xs font-semibold">
                                        Remedial
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <button class="p-2 hover:bg-blue-100 rounded-lg transition-colors" title="Edit">
                                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-7-4l7-7m0 0l-7 7"/>
                                            </svg>
                                        </button>
                                        <button class="p-2 hover:bg-red-100 rounded-lg transition-colors" title="Hapus">
                                            <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            {{-- Row 3 --}}
                            <tr class="hover:bg-blue-50 transition-colors">
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">3</td>
                                <td class="px-6 py-4 text-sm text-gray-900 font-semibold">Ahmad Riyadi</td>
                                <td class="px-6 py-4 text-sm text-gray-700">XI A</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Fisika</td>
                                <td class="px-6 py-4 text-sm text-gray-900 text-center font-semibold">92</td>
                                <td class="px-6 py-4 text-sm text-gray-900 text-center font-semibold">95</td>
                                <td class="px-6 py-4 text-sm text-gray-900 text-center font-semibold">90</td>
                                <td class="px-6 py-4 text-sm text-center font-bold text-green-600">92.3</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="inline-flex px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">
                                        Tuntas
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <button class="p-2 hover:bg-blue-100 rounded-lg transition-colors" title="Edit">
                                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-7-4l7-7m0 0l-7 7"/>
                                            </svg>
                                        </button>
                                        <button class="p-2 hover:bg-red-100 rounded-lg transition-colors" title="Hapus">
                                            <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            {{-- Row 4 --}}
                            <tr class="hover:bg-blue-50 transition-colors">
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">4</td>
                                <td class="px-6 py-4 text-sm text-gray-900 font-semibold">Rina Wijaya</td>
                                <td class="px-6 py-4 text-sm text-gray-700">XI B</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Kimia</td>
                                <td class="px-6 py-4 text-sm text-gray-900 text-center font-semibold">68</td>
                                <td class="px-6 py-4 text-sm text-gray-900 text-center font-semibold">70</td>
                                <td class="px-6 py-4 text-sm text-gray-900 text-center font-semibold">65</td>
                                <td class="px-6 py-4 text-sm text-center font-bold text-red-600">67.7</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="inline-flex px-3 py-1 bg-red-100 text-red-700 rounded-full text-xs font-semibold">
                                        Tidak Tuntas
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <button class="p-2 hover:bg-blue-100 rounded-lg transition-colors" title="Edit">
                                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-7-4l7-7m0 0l-7 7"/>
                                            </svg>
                                        </button>
                                        <button class="p-2 hover:bg-red-100 rounded-lg transition-colors" title="Hapus">
                                            <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            {{-- Row 5 --}}
                            <tr class="hover:bg-blue-50 transition-colors">
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">5</td>
                                <td class="px-6 py-4 text-sm text-gray-900 font-semibold">Doni Hermawan</td>
                                <td class="px-6 py-4 text-sm text-gray-700">XII A</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Biologi</td>
                                <td class="px-6 py-4 text-sm text-gray-900 text-center font-semibold">88</td>
                                <td class="px-6 py-4 text-sm text-gray-900 text-center font-semibold">85</td>
                                <td class="px-6 py-4 text-sm text-gray-900 text-center font-semibold">87</td>
                                <td class="px-6 py-4 text-sm text-center font-bold text-green-600">86.7</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="inline-flex px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">
                                        Tuntas
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <button class="p-2 hover:bg-blue-100 rounded-lg transition-colors" title="Edit">
                                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-7-4l7-7m0 0l-7 7"/>
                                            </svg>
                                        </button>
                                        <button class="p-2 hover:bg-red-100 rounded-lg transition-colors" title="Hapus">
                                            <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            {{-- Row 6 --}}
                            <tr class="hover:bg-blue-50 transition-colors">
                                <td class="px-6 py-4 text-sm font-medium text-gray-900">6</td>
                                <td class="px-6 py-4 text-sm text-gray-900 font-semibold">Evy Kartika</td>
                                <td class="px-6 py-4 text-sm text-gray-700">XII B</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Bahasa Inggris</td>
                                <td class="px-6 py-4 text-sm text-gray-900 text-center font-semibold">82</td>
                                <td class="px-6 py-4 text-sm text-gray-900 text-center font-semibold">80</td>
                                <td class="px-6 py-4 text-sm text-gray-900 text-center font-semibold">85</td>
                                <td class="px-6 py-4 text-sm text-center font-bold text-green-600">82.3</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="inline-flex px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">
                                        Tuntas
                                    </span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <button class="p-2 hover:bg-blue-100 rounded-lg transition-colors" title="Edit">
                                            <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-7-4l7-7m0 0l-7 7"/>
                                            </svg>
                                        </button>
                                        <button class="p-2 hover:bg-red-100 rounded-lg transition-colors" title="Hapus">
                                            <svg class="w-4 h-4 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                {{-- Pagination --}}
                <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between bg-gray-50">
                    <div class="text-sm text-gray-600">
                        Menampilkan <span class="font-semibold">1</span> hingga <span class="font-semibold">6</span> dari <span class="font-semibold">45</span> hasil
                    </div>
                    <div class="flex items-center gap-2">
                        <button class="px-3 py-2 text-sm font-medium text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-100 disabled:opacity-50 disabled:cursor-not-allowed transition-all" disabled>Sebelumnya</button>
                        <button class="px-3 py-2 text-sm font-medium bg-blue-600 text-white rounded-lg">1</button>
                        <button class="px-3 py-2 text-sm font-medium text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-100 transition-all">2</button>
                        <button class="px-3 py-2 text-sm font-medium text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-100 transition-all">3</button>
                        <button class="px-3 py-2 text-sm font-medium text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-100 transition-all">Selanjutnya</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
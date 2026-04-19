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
                <p class="text-gray-600 mt-1">Kelola dan lihat rekapan nilai seluruh siswa</p>
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
                        
                        {{-- Right: Filters --}}
                        <div class="flex items-center gap-3 w-full md:w-auto">
                            <select class="px-4 py-2.5 text-sm font-medium text-gray-700 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all bg-white hover:border-gray-400">
                                <option>Filter Kelas</option>
                                <option>Kelas X</option>
                                <option>Kelas XI</option>
                                <option>Kelas XII</option>
                            </select>
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
                                        <span>No</span>
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
                                <th class="px-6 py-4 text-left text-xs font-bold text-white uppercase tracking-wider">Mapel</th>
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
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-900 font-medium">1</td>
                                <td class="px-6 py-4 text-sm text-gray-900">Budi Santoso</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Kelas X-A</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Matematika</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">85</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">80</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">90</td>
                                <td class="px-6 py-4 text-center text-sm font-bold text-gray-900">85</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Tuntas</span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <button class="text-blue-600 hover:text-blue-900 font-medium text-xs" title="Lihat Detail">
                                        <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            {{-- Row 2 --}}
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-900 font-medium">2</td>
                                <td class="px-6 py-4 text-sm text-gray-900">Siti Nurhaliza</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Kelas X-B</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Bahasa Indonesia</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">75</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">70</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">68</td>
                                <td class="px-6 py-4 text-center text-sm font-bold text-gray-900">71</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-semibold">Belum Tuntas</span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <button class="text-blue-600 hover:text-blue-900 font-medium text-xs" title="Lihat Detail">
                                        <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            {{-- Row 3 --}}
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-900 font-medium">3</td>
                                <td class="px-6 py-4 text-sm text-gray-900">Ahmad Wijaya</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Kelas X-A</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Matematika</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">92</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">88</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">95</td>
                                <td class="px-6 py-4 text-center text-sm font-bold text-gray-900">91.5</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Tuntas</span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <button class="text-blue-600 hover:text-blue-900 font-medium text-xs" title="Lihat Detail">
                                        <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            {{-- Row 4 --}}
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-900 font-medium">4</td>
                                <td class="px-6 py-4 text-sm text-gray-900">Ratna Kusuma</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Kelas X-B</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Bahasa Inggris</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">80</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">82</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">85</td>
                                <td class="px-6 py-4 text-center text-sm font-bold text-gray-900">82.3</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Tuntas</span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <button class="text-blue-600 hover:text-blue-900 font-medium text-xs" title="Lihat Detail">
                                        <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            {{-- Row 5 --}}
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-900 font-medium">5</td>
                                <td class="px-6 py-4 text-sm text-gray-900">Eka Prasetyo</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Kelas XI-A</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Matematika</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">65</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">60</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">58</td>
                                <td class="px-6 py-4 text-center text-sm font-bold text-gray-900">61</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-semibold">Belum Tuntas</span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <button class="text-blue-600 hover:text-blue-900 font-medium text-xs" title="Lihat Detail">
                                        <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            {{-- Row 6 --}}
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-900 font-medium">6</td>
                                <td class="px-6 py-4 text-sm text-gray-900">Maya Saleha</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Kelas XI-B</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Bahasa Indonesia</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">88</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">90</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">92</td>
                                <td class="px-6 py-4 text-center text-sm font-bold text-gray-900">90</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Tuntas</span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <button class="text-blue-600 hover:text-blue-900 font-medium text-xs" title="Lihat Detail">
                                        <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            {{-- Row 7 --}}
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-900 font-medium">7</td>
                                <td class="px-6 py-4 text-sm text-gray-900">Fajar Ramadhan</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Kelas XII-A</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Bahasa Inggris</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">78</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">75</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">80</td>
                                <td class="px-6 py-4 text-center text-sm font-bold text-gray-900">77.7</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Tuntas</span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <button class="text-blue-600 hover:text-blue-900 font-medium text-xs" title="Lihat Detail">
                                        <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>

                            {{-- Row 8 --}}
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-900 font-medium">8</td>
                                <td class="px-6 py-4 text-sm text-gray-900">Putri Ayu Lestari</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Kelas XII-B</td>
                                <td class="px-6 py-4 text-sm text-gray-700">Matematika</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">95</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">94</td>
                                <td class="px-6 py-4 text-center text-sm text-gray-700 font-medium">96</td>
                                <td class="px-6 py-4 text-center text-sm font-bold text-gray-900">95</td>
                                <td class="px-6 py-4 text-center">
                                    <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Tuntas</span>
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <button class="text-blue-600 hover:text-blue-900 font-medium text-xs" title="Lihat Detail">
                                        <svg class="w-4 h-4 inline" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                {{-- Pagination --}}
                <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between">
                    <p class="text-sm text-gray-600">Menampilkan 1 hingga 8 dari 124 data</p>
                    <div class="flex items-center gap-2">
                        <button class="px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed" disabled>
                            ← Sebelumnya
                        </button>
                        <button class="px-3 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700">1</button>
                        <button class="px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">2</button>
                        <button class="px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">3</button>
                        <span class="px-3 py-2 text-sm text-gray-600">...</span>
                        <button class="px-3 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                            Selanjutnya →
                        </button>
                    </div>
                </div>
            </div>

            {{-- Footer Info --}}
            <div class="mt-6 bg-white rounded-lg shadow-sm border border-gray-200 p-6">
                <h3 class="text-sm font-semibold text-gray-900 mb-4">Keterangan Status</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div class="flex items-center gap-3">
                        <span class="px-3 py-1 bg-green-100 text-green-700 rounded-full text-xs font-semibold">Tuntas</span>
                        <p class="text-sm text-gray-600">Siswa telah mencapai standar ketuntasan minimum</p>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="px-3 py-1 bg-orange-100 text-orange-700 rounded-full text-xs font-semibold">Belum Tuntas</span>
                        <p class="text-sm text-gray-600">Siswa masih perlu perhatian dan remediasi</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
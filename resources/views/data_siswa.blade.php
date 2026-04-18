<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Rapor — Dashboard</title>

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
            {{-- Card Container --}}
            <div class="bg-white rounded-lg shadow-sm border border-gray-200">
                {{-- Toolbar --}}
                <div class="p-6 border-b border-gray-200 flex items-center justify-between gap-4">
                    {{-- Left: Search Input --}}
                    <div class="flex-1 max-w-xs">
                        <input type="text" placeholder="Cari siswa..." 
                               class="w-full px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition-colors">
                    </div>
                    
                    {{-- Right: Buttons --}}
                    <div class="flex items-center gap-3">
                        <button class="px-4 py-2 bg-gray-900 text-white text-sm font-medium rounded-md hover:bg-gray-800 transition-colors flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                            </svg>
                            Tambah
                        </button>
                        
                        <select class="px-3 py-2 text-sm border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-900 focus:border-transparent transition-colors">
                            <option>Filter Siswa</option>
                            <option>Aktif</option>
                            <option>Tidak Aktif</option>
                        </select>
                    </div>
                </div>

                {{-- Table Section --}}
                <div class="overflow-x-auto">
                    <table class="w-full">
                        {{-- Table Head --}}
                        <thead class="bg-gray-50 border-b border-gray-200">
                            <tr>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-900 uppercase tracking-wider cursor-pointer hover:bg-gray-100 transition-colors">
                                    <div class="flex items-center gap-2">
                                        <span>NO</span>
                                        <i class="fas fa-sort text-gray-600"></i>
                                    </div>
                                </th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-900 uppercase tracking-wider cursor-pointer hover:bg-gray-100 transition-colors">
                                    <div class="flex items-center gap-2">
                                        <span>NIS</span>
                                        <i class="fas fa-sort text-gray-600"></i>
                                    </div>
                                </th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-900 uppercase tracking-wider cursor-pointer hover:bg-gray-100 transition-colors">
                                    <div class="flex items-center gap-2">
                                        <span>Nama</span>
                                        <i class="fas fa-sort text-gray-600"></i>
                                    </div>
                                </th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-900 uppercase tracking-wider cursor-pointer hover:bg-gray-100 transition-colors">
                                    <div class="flex items-center gap-2">
                                        <span>Tanggal Lahir</span>
                                        <i class="fas fa-sort text-gray-600"></i>
                                    </div>
                                </th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-900 uppercase tracking-wider cursor-pointer hover:bg-gray-100 transition-colors">
                                    <div class="flex items-center gap-2">
                                        <span>Jenis Kelamin</span>
                                        <i class="fas fa-sort text-gray-600"></i>
                                    </div>
                                </th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-900 uppercase tracking-wider cursor-pointer hover:bg-gray-100 transition-colors">
                                    <div class="flex items-center gap-2">
                                        <span>Kelas</span>
                                        <i class="fas fa-sort text-gray-600"></i>
                                    </div>
                                </th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-900 uppercase tracking-wider cursor-pointer hover:bg-gray-100 transition-colors">
                                    <div class="flex items-center gap-2">
                                        <span>Status</span>
                                        <i class="fas fa-sort text-gray-600"></i>
                                    </div>
                                </th>
                                <th class="px-6 py-4 text-left text-sm font-bold text-gray-900 uppercase tracking-wider cursor-pointer hover:bg-gray-100 transition-colors">
                                    <div class="flex items-center gap-2">
                                        <span>No. HP</span>
                                        <i class="fas fa-sort text-gray-600"></i>
                                    </div>
                                </th>
                                <th class="px-6 py-4 text-center text-sm font-bold text-gray-900 uppercase tracking-wider">Aksi</th>
                            </tr>
                        </thead>

                        {{-- Table Body --}}
                        <tbody class="divide-y divide-gray-200">
                            {{-- Row 1 --}}
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-900">1</td>
                                <td class="px-6 py-4 text-sm text-gray-900">10039003</td>
                                <td class="px-6 py-4 text-sm text-gray-900">Samuel Simamethak</td>
                                <td class="px-6 py-4 text-sm text-gray-600">10/03/2007</td>
                                <td class="px-6 py-4 text-sm text-gray-900">Laki - Laki</td>
                                <td class="px-6 py-4 text-sm text-gray-900">X-IPA-1</td>
                                <td class="px-6 py-4 text-sm"><span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Aktif</span></td>
                                <td class="px-6 py-4 text-sm text-gray-600">0895868762323</td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <button class="p-1.5 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                        </button>
                                        <button class="p-1.5 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                        </button>
                                        <button class="p-1.5 text-gray-600 hover:text-red-600 hover:bg-red-50 rounded transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            {{-- Row 2 --}}
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-900">2</td>
                                <td class="px-6 py-4 text-sm text-gray-900">10039003</td>
                                <td class="px-6 py-4 text-sm text-gray-900">Damen hafiz Hendelo</td>
                                <td class="px-6 py-4 text-sm text-gray-600">16/03/2007</td>
                                <td class="px-6 py-4 text-sm text-gray-900">Laki - Laki</td>
                                <td class="px-6 py-4 text-sm text-gray-900">X-IPA-2</td>
                                <td class="px-6 py-4 text-sm"><span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Aktif</span></td>
                                <td class="px-6 py-4 text-sm text-gray-600">0895868762323</td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <button class="p-1.5 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                        </button>
                                        <button class="p-1.5 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                        </button>
                                        <button class="p-1.5 text-gray-600 hover:text-red-600 hover:bg-red-50 rounded transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            {{-- Row 3 --}}
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-900">3</td>
                                <td class="px-6 py-4 text-sm text-gray-900">10039003</td>
                                <td class="px-6 py-4 text-sm text-gray-900">Samuel Assadi</td>
                                <td class="px-6 py-4 text-sm text-gray-600">10/03/2007</td>
                                <td class="px-6 py-4 text-sm text-gray-900">Laki - Laki</td>
                                <td class="px-6 py-4 text-sm text-gray-900">X-IPA-1</td>
                                <td class="px-6 py-4 text-sm"><span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Aktif</span></td>
                                <td class="px-6 py-4 text-sm text-gray-600">0895868762323</td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <button class="p-1.5 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                        </button>
                                        <button class="p-1.5 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                        </button>
                                        <button class="p-1.5 text-gray-600 hover:text-red-600 hover:bg-red-50 rounded transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            {{-- Row 4 --}}
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-900">4</td>
                                <td class="px-6 py-4 text-sm text-gray-900">10039003</td>
                                <td class="px-6 py-4 text-sm text-gray-900">Badal Simago Ioga</td>
                                <td class="px-6 py-4 text-sm text-gray-600">10/03/2007</td>
                                <td class="px-6 py-4 text-sm text-gray-900">Perempuan</td>
                                <td class="px-6 py-4 text-sm text-gray-900">X-IPA-2</td>
                                <td class="px-6 py-4 text-sm"><span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Aktif</span></td>
                                <td class="px-6 py-4 text-sm text-gray-600">0895868762323</td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <button class="p-1.5 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                        </button>
                                        <button class="p-1.5 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                        </button>
                                        <button class="p-1.5 text-gray-600 hover:text-red-600 hover:bg-red-50 rounded transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            {{-- Row 5 --}}
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-900">5</td>
                                <td class="px-6 py-4 text-sm text-gray-900">10039003</td>
                                <td class="px-6 py-4 text-sm text-gray-900">Samuel Assadi</td>
                                <td class="px-6 py-4 text-sm text-gray-600">10/03/2007</td>
                                <td class="px-6 py-4 text-sm text-gray-900">Laki - Laki</td>
                                <td class="px-6 py-4 text-sm text-gray-900">X-IPA-1</td>
                                <td class="px-6 py-4 text-sm"><span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Aktif</span></td>
                                <td class="px-6 py-4 text-sm text-gray-600">0895868762323</td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <button class="p-1.5 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                        </button>
                                        <button class="p-1.5 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                        </button>
                                        <button class="p-1.5 text-gray-600 hover:text-red-600 hover:bg-red-50 rounded transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            {{-- Row 6 --}}
                            <tr class="hover:bg-gray-50 transition-colors">
                                <td class="px-6 py-4 text-sm text-gray-900">6</td>
                                <td class="px-6 py-4 text-sm text-gray-900">10039004</td>
                                <td class="px-6 py-4 text-sm text-gray-900">Badal Simago Ioga</td>
                                <td class="px-6 py-4 text-sm text-gray-600">10/03/2007</td>
                                <td class="px-6 py-4 text-sm text-gray-900">Perempuan</td>
                                <td class="px-6 py-4 text-sm text-gray-900">X-IPA-2</td>
                                <td class="px-6 py-4 text-sm"><span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Aktif</span></td>
                                <td class="px-6 py-4 text-sm text-gray-600">0895868762323</td>
                                <td class="px-6 py-4 text-center">
                                    <div class="flex items-center justify-center gap-2">
                                        <button class="p-1.5 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                            </svg>
                                        </button>
                                        <button class="p-1.5 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                        </button>
                                        <button class="p-1.5 text-gray-600 hover:text-red-600 hover:bg-red-50 rounded transition-colors">
                                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>

                            {{-- Rows 7-20 (Similar structure) --}}
                            @for ($i = 7; $i <= 20; $i++)
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $i }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">1003900{{ $i }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ ['Samuel Simamethak', 'Damen hafiz Hendelo', 'Samuel Assadi', 'Badal Simago Ioga', 'Samuel Assadi', 'Badal Simago Ioga', 'Samuel Simamethak', 'Damen hafiz Hendelo', 'Samuel Assadi', 'Badal Simago Ioga', 'Samuel Assadi', 'Badal Simago Ioga', 'Samuel Simamethak'][$i - 7] ?? 'N/A' }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-600">{{ rand(1, 28) }}/{{ rand(1, 12) }}/2007</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $i % 2 == 0 ? 'Perempuan' : 'Laki - Laki' }}</td>
                                    <td class="px-6 py-4 text-sm text-gray-900">{{ $i % 3 == 0 ? 'X-IPA-1' : ($i % 3 == 1 ? 'X-IPA-2' : 'X-IPS-1') }}</td>
                                    <td class="px-6 py-4 text-sm"><span class="px-3 py-1 bg-green-100 text-green-800 rounded-full text-xs font-medium">Aktif</span></td>
                                    <td class="px-6 py-4 text-sm text-gray-600">0895868762323</td>
                                    <td class="px-6 py-4 text-center">
                                        <div class="flex items-center justify-center gap-2">
                                            <button class="p-1.5 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded transition-colors">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                                                </svg>
                                            </button>
                                            <button class="p-1.5 text-gray-600 hover:text-gray-900 hover:bg-gray-100 rounded transition-colors">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                                </svg>
                                            </button>
                                            <button class="p-1.5 text-gray-600 hover:text-red-600 hover:bg-red-50 rounded transition-colors">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                                </svg>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>

                {{-- Pagination Footer --}}
                <div class="px-6 py-4 border-t border-gray-200 flex items-center justify-between bg-gray-50">
                    <span class="text-xs text-gray-600">Menampilkan 1 - 20 Data</span>
                    <div class="flex items-center gap-2">
                        <button class="px-3 py-1.5 text-xs border border-gray-300 rounded hover:bg-gray-100 transition-colors">‹</button>
                        <button class="px-2 py-1.5 text-xs bg-gray-900 text-white rounded">1</button>
                        <button class="px-2 py-1.5 text-xs border border-gray-300 rounded hover:bg-gray-100 transition-colors">2</button>
                        <button class="px-3 py-1.5 text-xs border border-gray-300 rounded hover:bg-gray-100 transition-colors">›</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
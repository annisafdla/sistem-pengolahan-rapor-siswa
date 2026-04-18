{{-- resources/views/components/sidebar.blade.php --}}
<aside id="sidebar" class="fixed top-0 left-0 z-50 flex flex-col w-56 min-h-screen bg-white border-r border-gray-100">

    {{-- Logo --}}
    <div class="px-4 py-5 border-b border-gray-100">
        <svg width="148" height="48" viewBox="0 0 148 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="0" y="6" width="20" height="26" rx="3" fill="#4B5563"/>
            <rect x="22" y="6" width="20" height="26" rx="3" fill="#6B7280"/>
            <line x1="21" y1="6" x2="21" y2="32" stroke="white" stroke-width="2"/>
            <circle cx="10" cy="19" r="4" fill="white" fill-opacity="0.3"/>
            <circle cx="32" cy="19" r="4" fill="white" fill-opacity="0.2"/>
            <text x="50" y="22" font-family="Plus Jakarta Sans, system-ui, sans-serif" font-size="17" font-weight="800" fill="#1F2937" letter-spacing="1">SMART</text>
            <text x="50" y="37" font-family="Plus Jakarta Sans, system-ui, sans-serif" font-size="11" font-weight="500" fill="#9CA3AF" letter-spacing="3">RAPOR</text>
        </svg>
    </div>

    {{-- Navigation --}}
    <nav class="flex-1 py-2 overflow-y-auto">

        {{-- Dashboard --}}
        <div class="px-2 mb-1">
            <a href="/dashboard"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-all duration-150
                      {{ request()->is('dashboard')
                         ? 'bg-blue-50 text-blue-700 font-semibold'
                         : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
                <svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M3 4a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 12a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1H4a1 1 0 01-1-1v-4zM11 4a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1V4zM11 12a1 1 0 011-1h4a1 1 0 011 1v4a1 1 0 01-1 1h-4a1 1 0 01-1-1v-4z"/>
                </svg>
                <span>Dashboard</span>
            </a>
        </div>

        {{-- Label section --}}
        <p class="px-5 pt-3 pb-1 text-xs font-semibold tracking-widest text-gray-400 uppercase">Master</p>

        {{-- Data Master (Dropdown) --}}
        <div class="px-2" x-data="{ open: {{ request()->is('data-master/*') ? 'true' : 'false' }} }">
            <button @click="open = !open"
                    class="flex items-center gap-3 w-full px-3 py-2.5 rounded-lg text-sm font-medium transition-all duration-150
                           {{ request()->is('data-master/*')
                              ? 'bg-blue-50 text-blue-700 font-semibold'
                              : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
                <svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M3 12v3c0 1.657 3.134 3 7 3s7-1.343 7-3v-3c0 1.657-3.134 3-7 3s-7-1.343-7-3z"/>
                    <path d="M3 7v3c0 1.657 3.134 3 7 3s7-1.343 7-3V7c0 1.657-3.134 3-7 3S3 8.657 3 7z"/>
                    <path d="M17 5c0 1.657-3.134 3-7 3S3 6.657 3 5s3.134-3 7-3 7 1.343 7 3z"/>
                </svg>
                <span class="flex-1 text-left">Data Master</span>
                <svg class="w-3.5 h-3.5 flex-shrink-0 transition-transform duration-200"
                     :class="{ 'rotate-180': open }"
                     viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
            </button>

            <div x-show="open"
                 x-transition:enter="transition ease-out duration-150"
                 x-transition:enter-start="opacity-0 -translate-y-1"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="mt-1 ml-4 pl-3 border-l-2 border-gray-100 space-y-0.5">
                <a href="#" class="block px-3 py-2 text-xs font-medium rounded-lg transition-colors
                                   {{ request()->is('data-master/siswa') ? 'text-blue-700 bg-blue-50' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-800' }}">
                    Data Siswa
                </a>
                <a href="#" class="block px-3 py-2 text-xs font-medium rounded-lg transition-colors
                                   {{ request()->is('data-master/guru') ? 'text-blue-700 bg-blue-50' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-800' }}">
                    Data Guru
                </a>
                <a href="#" class="block px-3 py-2 text-xs font-medium rounded-lg transition-colors
                                   {{ request()->is('data-master/kelas') ? 'text-blue-700 bg-blue-50' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-800' }}">
                    Data Kelas
                </a>
                <a href="#" class="block px-3 py-2 text-xs font-medium rounded-lg transition-colors
                                   {{ request()->is('data-master/mapel') ? 'text-blue-700 bg-blue-50' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-800' }}">
                    Data Mapel
                </a>
            </div>
        </div>

        {{-- Label section --}}
        <p class="px-5 pt-4 pb-1 text-xs font-semibold tracking-widest text-gray-400 uppercase">Akademik</p>

        {{-- Akademik (Dropdown) --}}
        <div class="px-2" x-data="{ open: {{ request()->is('akademik/*') ? 'true' : 'false' }} }">
            <button @click="open = !open"
                    class="flex items-center gap-3 w-full px-3 py-2.5 rounded-lg text-sm font-medium transition-all duration-150
                           {{ request()->is('akademik/*')
                              ? 'bg-blue-50 text-blue-700 font-semibold'
                              : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
                <svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"/>
                </svg>
                <span class="flex-1 text-left">Akademik</span>
                <svg class="w-3.5 h-3.5 flex-shrink-0 transition-transform duration-200"
                     :class="{ 'rotate-180': open }"
                     viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"/>
                </svg>
            </button>

            <div x-show="open"
                 x-transition:enter="transition ease-out duration-150"
                 x-transition:enter-start="opacity-0 -translate-y-1"
                 x-transition:enter-end="opacity-100 translate-y-0"
                 class="mt-1 ml-4 pl-3 border-l-2 border-gray-100 space-y-0.5">
                <a href="#" class="block px-3 py-2 text-xs font-medium rounded-lg transition-colors
                                   {{ request()->is('akademik/pengampu') ? 'text-blue-700 bg-blue-50' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-800' }}">
                    Pengampu
                </a>
                <a href="#" class="block px-3 py-2 text-xs font-medium rounded-lg transition-colors
                                   {{ request()->is('akademik/jadwal') ? 'text-blue-700 bg-blue-50' : 'text-gray-500 hover:bg-gray-50 hover:text-gray-800' }}">
                    Rekap Nilai
                </a>
            </div>
        </div>

        {{-- Label section --}}
        <p class="px-5 pt-4 pb-1 text-xs font-semibold tracking-widest text-gray-400 uppercase">Lainnya</p>

        {{-- Rapor --}}
        <div class="px-2">
            <a href="#"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-all duration-150
                      {{ request()->is('rapor')
                         ? 'bg-blue-50 text-blue-700 font-semibold'
                         : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
                <svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd"/>
                </svg>
                <span>Rapor</span>
            </a>
        </div>

        {{-- Ubah Kata Sandi --}}
        <div class="px-2 mt-1">
            <a href="/lupa_sandi"
               class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-sm font-medium transition-all duration-150
                      {{ request()->is('lupa_sandi')
                         ? 'bg-blue-50 text-blue-700 font-semibold'
                         : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }}">
                <svg class="w-4 h-4 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z" clip-rule="evenodd"/>
                </svg>
                <span>Ubah Kata Sandi</span>
            </a>
        </div>

    </nav>

    {{-- Logout --}}
    <div class="p-3 border-t border-gray-100">
        <form method="POST" action="/logout">
            @csrf
            <button type="submit"
                    class="w-full px-4 py-2.5 text-sm font-medium text-gray-500 bg-gray-50 border border-gray-200 rounded-lg
                           hover:bg-red-50 hover:text-red-600 hover:border-red-200 transition-all duration-150 cursor-pointer">
                Logout
            </button>
        </form>
    </div>

</aside>
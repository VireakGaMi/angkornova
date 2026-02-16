<footer class="relative bg-brand-dark pt-24 pb-12 overflow-hidden border-t border-white/5">
    <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-full h-[1px] bg-gradient-to-r from-transparent via-brand-blue/50 to-transparent"></div>

    <div class="max-w-7xl mx-auto px-6">
        <div class="grid grid-cols-1 md:grid-cols-12 gap-12 lg:gap-24 mb-20">

            <div class="md:col-span-5 space-y-8">
                <a href="{{ route('home') }}" class="flex items-center gap-3 group">
                    <div class="relative w-10 h-10 bg-slate-900 rounded-xl flex items-center justify-center border border-white/10 group-hover:border-brand-cyan/50 transition-all overflow-hidden shadow-2xl">
                        <img src="{{ asset('storage/img/logo-no-bg.png') }}" class="w-6 h-6 object-contain z-10" alt="AngkorNova">
                        <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent"></div>
                    </div>
                    <div class="flex flex-col -space-y-1">
                        <span class="text-xl font-black text-white tracking-tighter uppercase">
                            Angkor<span class="text-brand-blue italic">Nova</span>
                        </span>
                        <span class="text-[8px] font-mono text-slate-500 tracking-[0.3em] uppercase">Cloud Systems</span>
                    </div>
                </a>

                <p class="text-slate-400 text-sm leading-relaxed max-w-sm">
                    High-performance cloud engineering and DevOps automation. We architect scalable, secure, and cost-efficient infrastructure for ASEAN-driven enterprises.
                </p>

                <div class="flex gap-4">
                    <a href="#" class="w-10 h-10 rounded-xl glass border-white/5 flex items-center justify-center text-slate-500 hover:text-blue-500 hover:bg-blue-500/10 transition-all group" title="Facebook">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-xl glass border-white/5 flex items-center justify-center text-slate-500 hover:text-white hover:bg-black transition-all group" title="TikTok">
                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 448 512"><path d="M448 209.91a210.06 210.06 0 0 1-122.77-39.25V349.38A162.55 162.55 0 1 1 185 188.31V278.2a74.62 74.62 0 1 0 52.23 71.18V0l88 0a121.18 121.18 0 0 0 1.86 22.17h0A122.18 122.18 0 0 0 381 102.39a121.43 121.43 0 0 0 67 20.14Z"/></svg>
                    </a>
                    <a href="#" class="w-10 h-10 rounded-xl glass border-white/5 flex items-center justify-center text-slate-500 hover:text-pink-500 hover:bg-pink-500/10 transition-all group" title="Instagram">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                    </a>
                </div>
            </div>

            <div class="md:col-span-3">
                <h4 class="text-white font-mono text-xs tracking-[0.2em] uppercase mb-8">Navigation</h4>
                <ul class="space-y-4">
                    @foreach (['Services' => 'services', 'Case Studies' => 'projects', 'Architecture' => 'about', 'Contact' => 'contact'] as $label => $route)
                        <li>
                            <a href="{{ route($route) }}" class="text-slate-400 hover:text-white transition-colors text-sm flex items-center group">
                                <span class="w-0 group-hover:w-3 h-[1px] bg-brand-blue transition-all duration-300 mr-0 group-hover:mr-2"></span>
                                {{ $label }}
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>

            <div class="md:col-span-4">
                <h4 class="text-white font-mono text-xs tracking-[0.2em] uppercase mb-8">Get in Touch</h4>
                <div class="space-y-4">
                    <a href="mailto:hello@angkornova.com" class="block glass border-white/5 p-4 rounded-2xl group hover:border-brand-blue/30 transition-all">
                        <p class="text-[10px] font-mono text-slate-500 uppercase mb-1">Inquiry Protocol</p>
                        <p class="text-white font-semibold group-hover:text-brand-blue transition-colors">hello@angkornova.com</p>
                    </a>

                    <div class="block glass border-white/5 p-4 rounded-2xl relative overflow-hidden group">
                        <div class="absolute top-0 right-0 p-3 opacity-20 group-hover:opacity-40 transition-opacity">
                            <svg class="w-8 h-8 text-brand-cyan" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9h18" />
                            </svg>
                        </div>
                        <p class="text-[10px] font-mono text-brand-cyan uppercase mb-1 tracking-widest">Main Node</p>
                        <p class="text-white font-semibold flex items-center gap-2">
                            Phnom Penh, KH <span class="w-1.5 h-1.5 rounded-full bg-green-500 animate-pulse"></span>
                        </p>
                        <p class="text-slate-500 text-[11px] mt-1 font-mono uppercase tracking-tighter">Region: ap-southeast-1</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-12 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-6">
            <p class="text-slate-500 text-xs font-mono uppercase tracking-widest">
                &copy; {{ date('Y') }} ANGKORNOVA_SYSTEMS. SHIPPED_FROM_SEA.
            </p>
            <div class="flex gap-8 text-[10px] font-mono text-slate-500 uppercase tracking-[0.2em]">
                <a href="#" class="hover:text-white transition-colors">Privacy_Protocol</a>
                <a href="#" class="hover:text-white transition-colors">Terms_of_Service</a>
            </div>
        </div>
    </div>
</footer>

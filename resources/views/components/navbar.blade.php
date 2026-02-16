<nav class="fixed top-0 w-full z-[100] bg-[#020617]/80 backdrop-blur-xl border-b border-white/5 py-4">

    <div class="max-w-7xl mx-auto px-6 flex items-center justify-between">

        <a href="{{ route('home') }}" class="flex items-center gap-4 group">
            <div class="relative">
                <div class="absolute -inset-1 bg-brand-blue/20 blur-md rounded-xl group-hover:bg-brand-blue/40 transition duration-500"></div>

                <div class="relative w-10 h-10 bg-slate-900 rounded-xl flex items-center justify-center border border-white/10 group-hover:border-brand-cyan/50 transition-all shadow-2xl overflow-hidden">
                    <img src="{{ asset('storage/img/logo-no-bg.png') }}" class="w-6 h-6 object-contain z-10 group-hover:scale-110 transition-transform duration-500" alt="Logo">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent"></div>
                </div>
            </div>

            <div class="flex flex-col">
                <span class="text-xl font-black text-white tracking-tighter leading-none">
                    ANGKOR<span class="text-brand-cyan italic">NOVA</span>
                </span>
                <span class="text-[8px] font-mono text-slate-500 uppercase tracking-[0.3em] mt-1">AP-SOUTHEAST-1</span>
            </div>
        </a>

        <div class="hidden lg:flex items-center gap-10">
            @foreach(['Services' => 'services', 'Case Studies' => 'projects', 'Architecture' => 'about'] as $label => $route)
            <a href="{{ route($route) }}" class="relative py-2 text-[10px] font-mono uppercase tracking-[0.25em] text-slate-400 hover:text-white transition-colors group">
                {{ $label }}
                <span class="absolute bottom-0 left-0 w-0 h-px bg-brand-cyan transition-all duration-300 group-hover:w-full"></span>
            </a>
            @endforeach
        </div>

        <div class="hidden lg:flex items-center gap-6">
            <div class="flex items-center gap-3 py-2 px-4 bg-white/[0.03] border border-white/10 rounded-lg">
                <div class="relative flex h-1.5 w-1.5">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-cyan opacity-40"></span>
                    <span class="relative inline-flex rounded-full h-1.5 w-1.5 bg-brand-cyan"></span>
                </div>
                <span class="text-[9px] font-mono text-slate-300 uppercase tracking-widest">PNH_MESH_UP</span>
            </div>

            <a href="{{ route('contact') }}"
               class="px-6 py-2 rounded-lg bg-linear-to-r from-brand-blue to-blue-700 text-white text-[10px] font-black uppercase tracking-[0.2em] shadow-[0_0_20px_rgba(59,130,246,0.2)] hover:shadow-[0_0_30px_rgba(59,130,246,0.5)] hover:-translate-y-0.5 transition-all duration-300">
                Start Project
            </a>
        </div>

        <button class="lg:hidden flex flex-col items-end gap-1.5 p-2">
            <span class="w-8 h-px bg-white"></span>
            <span class="w-5 h-px bg-brand-cyan"></span>
            <span class="w-8 h-px bg-white"></span>
        </button>
    </div>
</nav>

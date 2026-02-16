@extends('layouts.app')

@section('content')
    <div class="relative bg-brand-dark min-h-screen overflow-hidden text-slate-300">

        <div class="absolute inset-0 bg-[url('https://grainy-gradients.vercel.app/noise.svg')] opacity-20 mix-blend-overlay pointer-events-none"></div>
        <div class="absolute inset-0 bg-grid-pattern opacity-[0.05] -z-10"></div>

        <div class="absolute top-[-10%] left-[-10%] w-[600px] h-[600px] bg-brand-blue/15 rounded-full blur-[140px] -z-10 animate-pulse-slow"></div>
        <div class="absolute bottom-[10%] right-[-5%] w-[400px] h-[400px] bg-brand-cyan/10 rounded-full blur-[120px] -z-10"></div>

        <section class="py-32 relative overflow-hidden">
            <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-brand-cyan/30 to-transparent"></div>

            <div class="max-w-7xl mx-auto px-6">
                <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">

                    <div class="w-full lg:w-1/2 space-y-10 animate-fade-in">
                        <div class="space-y-4">
                            <div class="flex items-center gap-3">
                                <span class="px-2 py-0.5 rounded border border-brand-cyan/30 bg-brand-cyan/5 text-[10px] font-mono tracking-[0.2em] text-brand-cyan uppercase">Latency_Report_v4.0</span>
                                <div class="h-px flex-1 bg-white/5"></div>
                            </div>
                            <h3 class="text-6xl md:text-[5.5rem] font-black text-white leading-[0.85] tracking-tighter">
                                Speed is <br><span class="text-brand-cyan italic">Paramount.</span>
                            </h3>
                        </div>

                        <p class="text-xl text-slate-400 leading-relaxed font-light border-l-2 border-white/5 pl-6">
                            Public routing is flawed. AngkorNova leverages <span class="text-white font-mono">AWS Global Accelerator</span> to bypass the open internet, onboarding traffic at the <span class="text-brand-cyan underline underline-offset-4 decoration-brand-cyan/30">Phnom Penh Edge Node</span>.
                        </p>

                        <div class="glass border-white/10 rounded-2xl overflow-hidden shadow-2xl">
                            <table class="w-full text-left text-sm font-mono">
                                <thead class="bg-white/[0.03] text-slate-500 uppercase text-[9px] tracking-[0.2em]">
                                    <tr>
                                        <th class="px-6 py-4">Network_Hop</th>
                                        <th class="px-6 py-4 text-center">Public_Internet</th>
                                        <th class="px-6 py-4 text-right text-brand-cyan">Angkor_Mesh</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-white/5">
                                    <tr class="group hover:bg-brand-cyan/[0.02] transition-colors">
                                        <td class="px-6 py-4 text-white">SGP ↔ PNH</td>
                                        <td class="px-6 py-4 text-center text-slate-500 line-through">85ms</td>
                                        <td class="px-6 py-4 text-right text-brand-cyan font-black">12ms</td>
                                    </tr>
                                    <tr class="group hover:bg-brand-cyan/[0.02] transition-colors">
                                        <td class="px-6 py-4 text-white">BKK ↔ PNH</td>
                                        <td class="px-6 py-4 text-center text-slate-500 line-through">64ms</td>
                                        <td class="px-6 py-4 text-right text-brand-cyan font-black">08ms</td>
                                    </tr>
                                    <tr class="group hover:bg-brand-cyan/[0.02] transition-colors">
                                        <td class="px-6 py-4 text-white">TYO ↔ PNH</td>
                                        <td class="px-6 py-4 text-center text-slate-500 line-through">190ms</td>
                                        <td class="px-6 py-4 text-right text-brand-cyan font-black">82ms</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="w-full lg:w-1/2 relative">
                        <div class="absolute -top-6 left-12 glass border-brand-cyan/30 p-4 rounded-2xl shadow-2xl z-20 animate-float">
                            <div class="flex items-center gap-3">
                                <span class="relative flex h-2 w-2">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-brand-cyan opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-2 w-2 bg-brand-cyan"></span>
                                </span>
                                <p class="text-[10px] font-mono text-white tracking-widest uppercase">Node: PNH-01-ACTIVE</p>
                            </div>
                        </div>

                        <div class="relative glass border-white/10 rounded-[3rem] p-12 aspect-square flex items-center justify-center overflow-hidden bg-slate-950/40">
                            <div class="absolute inset-0 animate-spin-slow opacity-20">
                                <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full border border-dashed border-brand-cyan rounded-full"></div>
                            </div>

                            <div class="relative z-10 w-32 h-32 rounded-full flex items-center justify-center bg-slate-900 border border-brand-cyan/50 shadow-[0_0_50px_rgba(34,211,238,0.2)]">
                                <svg class="w-12 h-12 text-white animate-pulse" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A10.003 10.003 0 0012 3m0 0c.886 0 1.758.113 2.583.326M12 3v1m0 16v1m10-10h-1M4 10H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </div>

                            <div class="absolute top-20 right-20 glass border-white/10 px-4 py-2 rounded-lg text-[10px] font-mono">
                                <span class="text-brand-cyan">●</span> ap-southeast-1
                            </div>
                            <div class="absolute bottom-20 left-20 glass border-white/10 px-4 py-2 rounded-lg text-[10px] font-mono">
                                <span class="text-brand-cyan">●</span> us-east-1
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-32 border-t border-white/5 bg-white/[0.01]">
            <div class="max-w-7xl mx-auto px-6">
                <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-6">
                    <div class="max-w-xl">
                        <h2 class="text-sm font-mono tracking-[0.3em] text-brand-blue uppercase mb-4">// System.Deployment</h2>
                        <h3 class="text-5xl font-black text-white tracking-tighter uppercase">Code to Cloud <br><span class="italic text-slate-600">in Realtime.</span></h3>
                    </div>
                    <a href="{{ route('services') }}" class="group text-[11px] font-mono tracking-widest text-brand-cyan uppercase flex items-center gap-4 py-2 px-6 border border-brand-cyan/20 rounded-full hover:bg-brand-cyan/10 transition-all">
                        View_Workflow_Specs
                        <span class="group-hover:translate-x-1 transition-transform">→</span>
                    </a>
                </div>

                <div class="grid md:grid-cols-4 gap-6">
                    @foreach ([
                        ['PUSH', 'Git trigger initialized', '0x01'],
                        ['TEST', 'Pest/Security Analysis', '0x02'],
                        ['BUILD', 'Container Hardening', '0x03'],
                        ['DEPLOY', 'Atomic Traffic Swap', '0x04']
                    ] as $step)
                        <div class="glass border-white/5 p-8 rounded-2xl hover:border-brand-blue/40 transition-all group relative overflow-hidden">
                            <div class="absolute top-0 right-0 p-4 text-[10px] font-mono text-white/5 group-hover:text-brand-blue/20 transition-colors">{{ $step[2] }}</div>
                            <h4 class="text-white font-black text-xl mb-2 group-hover:text-brand-cyan transition-colors uppercase tracking-widest">{{ $step[0] }}</h4>
                            <p class="text-slate-500 text-xs font-mono uppercase tracking-tighter">{{ $step[1] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="py-24">
            <div class="max-w-7xl mx-auto px-6">
                <div class="relative bg-gradient-to-br from-brand-blue/30 to-brand-cyan/30 p-[1px] rounded-[3rem]">
                    <div class="bg-[#020617] rounded-[3rem] p-12 md:p-24 overflow-hidden relative text-center">
                        <div class="relative z-10 space-y-10">
                            <h3 class="text-5xl md:text-7xl font-black text-white tracking-tighter max-w-4xl mx-auto leading-tight uppercase">
                                Make Infrastructure <br><span class="italic text-brand-cyan">Invisible.</span>
                            </h3>
                            <div class="flex flex-col sm:flex-row justify-center gap-6">
                                <a href="{{ route('contact') }}" class="px-12 py-5 text-white bg-brand-cyan text-[#020617] font-black rounded-xl hover:scale-105 transition-transform shadow-[0_0_40px_rgba(34,211,238,0.4)] uppercase tracking-widest">
                                    Initiate System Audit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="max-w-7xl mx-auto px-6 pb-24">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 p-10 bg-white/[0.02] border border-white/5 rounded-[32px]">
                @foreach([
                    ['500M+', 'Requests'],
                    ['100%', 'IaC Coverage'],
                    ['<15min', 'Response'],
                    ['-25%', 'OpEx Save']
                ] as $stat)
                <div class="text-center group">
                    <p class="text-3xl font-black text-white group-hover:text-brand-cyan transition-colors">{{ $stat[0] }}</p>
                    <p class="text-[10px] font-mono text-slate-500 uppercase tracking-widest mt-1">{{ $stat[1] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <style>
        .stroke-text { -webkit-text-stroke: 1.5px rgba(255, 255, 255, 0.2); }
        span:hover.stroke-text { -webkit-text-stroke: 1.5px #22d3ee; }

        @keyframes infinite-scroll {
            from { transform: translateX(0); }
            to { transform: translateX(-50%); }
        }
        .animate-infinite-scroll { animation: infinite-scroll 35s linear infinite; }

        @keyframes spin-slow {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        .animate-spin-slow { animation: spin-slow 20s linear infinite; }

        .animate-float {
            animation: float 6s ease-in-out infinite;
        }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
    </style>
@endsection

@extends('layouts.app')

@section('content')
<div class="relative min-h-screen bg-brand-dark pt-32 pb-24 overflow-hidden">
    <div class="absolute inset-0 bg-grid-pattern opacity-10 -z-10"></div>
    <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-brand-orange/5 blur-[120px] -z-10"></div>
    <div class="absolute top-1/4 right-0 w-[400px] h-[400px] bg-brand-cyan/5 blur-[100px] -z-10"></div>

    <div class="max-w-7xl mx-auto px-6">

        <div class="max-w-3xl mb-20 animate-fade-in">
            <h1 class="text-6xl md:text-7xl font-black text-white leading-tight mb-8 tracking-tighter">
                Proven <span class="text-gradient-orange italic">Architectures.</span>
            </h1>
            <p class="text-xl text-slate-400 leading-relaxed font-light">
                Explore how we solve complex infrastructure challenges with <span class="text-white font-mono">AWS</span>, <span class="text-white font-mono">Laravel</span>, and localized optimization for the <span class="text-white">SEA market.</span>
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

            <div class="group relative flex flex-col glass border-white/5 rounded-[2rem] overflow-hidden hover:border-brand-blue/30 transition-all duration-500 animate-slide-up">
                <div class="h-56 bg-brand-navy relative overflow-hidden flex items-center justify-center border-b border-white/5">
                    <div class="absolute inset-0 opacity-10 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')]"></div>
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-blue/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>

                    <div class="text-center z-10 transition-transform duration-500 group-hover:scale-110">
                        <p class="text-4xl font-black text-white">99.99%</p>
                        <p class="text-[10px] font-mono uppercase tracking-[0.2em] text-brand-blue">High Availability</p>
                    </div>
                </div>

                <div class="p-8 space-y-4 flex-grow flex flex-col">
                    <div class="flex justify-between items-center">
                        <span class="text-[10px] font-mono text-brand-blue uppercase tracking-widest px-2 py-1 bg-brand-blue/10 rounded">Marketplace</span>
                        <span class="text-[10px] font-mono text-slate-500 italic">PHNOM PENH</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white group-hover:text-brand-blue transition-colors">Scaling Laravel for 10k CCU</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Optimized a regional delivery app using <span class="text-slate-200">AWS Auto Scaling</span> and Redis clusters to handle peak dinner-time traffic surges without lag.
                    </p>
                    <div class="pt-6 mt-auto flex items-center justify-between border-t border-white/5">
                        <a href="#" class="text-xs font-bold text-white uppercase tracking-wider flex items-center gap-2 group/link">
                            View Specs
                            <span class="text-brand-blue transition-transform group-hover/link:translate-x-1">→</span>
                        </a>
                        <div class="flex gap-2">
                            <span class="text-[10px] font-mono text-slate-600 border border-white/10 px-2 py-0.5 rounded">RDS</span>
                            <span class="text-[10px] font-mono text-slate-600 border border-white/10 px-2 py-0.5 rounded">EC2</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="group relative flex flex-col glass border-white/5 rounded-[2rem] overflow-hidden hover:border-brand-orange/30 transition-all duration-500 animate-slide-up" style="animation-delay: 0.1s">
                <div class="h-56 bg-brand-navy relative overflow-hidden flex items-center justify-center border-b border-white/5">
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-orange/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="text-center z-10 transition-transform duration-500 group-hover:scale-110">
                        <p class="text-4xl font-black text-white">12ms</p>
                        <p class="text-[10px] font-mono uppercase tracking-[0.2em] text-brand-orange">Edge Response</p>
                    </div>
                </div>

                <div class="p-8 space-y-4 flex-grow flex flex-col">
                    <div class="flex justify-between items-center">
                        <span class="text-[10px] font-mono text-brand-orange uppercase tracking-widest px-2 py-1 bg-brand-orange/10 rounded">SaaS</span>
                        <span class="text-[10px] font-mono text-slate-500 italic">SINGAPORE-PNH</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white group-hover:text-brand-orange transition-colors">Multi-Tenant Data Isolation</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Designed a secure multi-tenant architecture for a regional HR platform, utilizing <span class="text-slate-200">Isolated S3 Buckets</span> and dynamic DB routing.
                    </p>
                    <div class="pt-6 mt-auto flex items-center justify-between border-t border-white/5">
                        <a href="#" class="text-xs font-bold text-white uppercase tracking-wider flex items-center gap-2 group/link">
                            Architecture
                            <span class="text-brand-orange transition-transform group-hover/link:translate-x-1">→</span>
                        </a>
                        <div class="flex gap-2">
                            <span class="text-[10px] font-mono text-slate-600 border border-white/10 px-2 py-0.5 rounded">Docker</span>
                            <span class="text-[10px] font-mono text-slate-600 border border-white/10 px-2 py-0.5 rounded">VPC</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="group relative flex flex-col glass border-white/5 rounded-[2rem] overflow-hidden hover:border-brand-purple/30 transition-all duration-500 animate-slide-up" style="animation-delay: 0.2s">
                <div class="h-56 bg-brand-navy relative overflow-hidden flex items-center justify-center border-b border-white/5">
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-purple/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    <div class="text-center z-10 transition-transform duration-500 group-hover:scale-110">
                        <p class="text-4xl font-black text-white">Zero</p>
                        <p class="text-[10px] font-mono uppercase tracking-[0.2em] text-brand-purple">Breach Incidents</p>
                    </div>
                </div>

                <div class="p-8 space-y-4 flex-grow flex flex-col">
                    <div class="flex justify-between items-center">
                        <span class="text-[10px] font-mono text-brand-purple uppercase tracking-widest px-2 py-1 bg-brand-purple/10 rounded">Fintech</span>
                        <span class="text-[10px] font-mono text-slate-500 italic">2025</span>
                    </div>
                    <h3 class="text-2xl font-bold text-white group-hover:text-brand-purple transition-colors">Hardened API Security</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">
                        Deployed <span class="text-slate-200">AWS WAF</span> and automated threat detection for a Cambodian payment gateway to block localized DDoS attempts.
                    </p>
                    <div class="pt-6 mt-auto flex items-center justify-between border-t border-white/5">
                        <a href="#" class="text-xs font-bold text-white uppercase tracking-wider flex items-center gap-2 group/link">
                            Security Audit
                            <span class="text-brand-purple transition-transform group-hover/link:translate-x-1">→</span>
                        </a>
                        <div class="flex gap-2">
                            <span class="text-[10px] font-mono text-slate-600 border border-white/10 px-2 py-0.5 rounded">WAF</span>
                            <span class="text-[10px] font-mono text-slate-600 border border-white/10 px-2 py-0.5 rounded">Shield</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="relative min-h-screen bg-brand-dark pt-32 pb-24 overflow-hidden">
    <div class="absolute inset-0 bg-grid-pattern opacity-10 -z-10"></div>
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[800px] h-[400px] bg-brand-blue/10 blur-[120px] -z-10 animate-pulse-slow"></div>

    <div class="max-w-7xl mx-auto px-6">

        <div class="grid lg:grid-cols-2 gap-16 lg:gap-24 items-center mb-32">
            <div class="animate-fade-in">
                <div class="flex items-center gap-3 mb-6">
                    <span class="w-8 h-px bg-brand-blue"></span>
                    <span class="text-xs font-mono tracking-[0.4em] text-brand-blue uppercase">About InfraNova</span>
                </div>

                <h1 class="text-6xl md:text-8xl font-black text-white leading-[0.85] tracking-tighter mb-10">
                    The <span class="text-gradient-blue italic">Nova</span> <br>Manifesto.
                </h1>

                <div class="space-y-6 text-xl text-slate-400 leading-relaxed font-light">
                    <p>
                        InfraNova was founded in <span class="text-white">Phnom Penh</span> to bridge the gap between high-level cloud architecture and the daily reality of app development.
                    </p>
                    <blockquote class="border-l-2 border-brand-blue pl-6 my-8">
                        <p class="text-white font-medium italic">
                            "Developers should focus on shipping features, not wrestling with server configurations."
                        </p>
                    </blockquote>
                    <p>
                        We specialize in the <span class="text-white font-mono uppercase tracking-widest text-sm bg-white/5 px-2 py-1 rounded">TALL Stack</span> and <span class="text-white font-mono uppercase tracking-widest text-sm bg-white/5 px-2 py-1 rounded">AWS</span>, bringing enterprise-grade stability to SEA startups without the corporate friction.
                    </p>
                </div>
            </div>

            <div class="relative hidden lg:block">
                <div class="absolute -top-6 -right-6 w-32 h-32 bg-brand-cyan/20 blur-3xl rounded-full animate-float"></div>

                <div class="glass border-white/10 p-12 rounded-[3rem] relative overflow-hidden group shadow-2xl bg-[#020617]/40">
                    <div class="absolute inset-0 bg-gradient-to-br from-brand-blue/10 via-transparent to-transparent opacity-50"></div>

                    <div class="relative z-10 flex flex-col items-center text-center space-y-8">
                        <div class="relative">
                            <div class="absolute inset-0 bg-brand-blue/40 blur-xl rounded-full scale-150 group-hover:scale-110 transition-transform duration-700"></div>
                            <div class="w-20 h-20 bg-brand-blue/20 rounded-full flex items-center justify-center relative border border-white/10">
                                <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                                </svg>
                            </div>
                        </div>

                        <div>
                            <h3 class="text-3xl font-black text-white mb-2 italic tracking-tight">Driven by Speed</h3>
                            <p class="text-slate-500 font-mono text-[10px] uppercase tracking-[0.3em]">Latency-First Infrastructure</p>
                        </div>

                        <div class="w-full space-y-2 pt-4 border-t border-white/5">
                            <div class="flex justify-between text-[10px] font-mono text-slate-400 uppercase">
                                <span>Optimization</span>
                                <span class="text-brand-cyan">98%</span>
                            </div>
                            <div class="w-full h-1 bg-white/5 rounded-full overflow-hidden">
                                <div class="w-[98%] h-full bg-brand-cyan shadow-[0_0_10px_#22d3ee]"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-t border-white/5 pt-24">
            <h2 class="text-sm font-mono tracking-[0.3em] text-brand-blue uppercase mb-16 text-center">Core Principles</h2>

            <div class="grid md:grid-cols-3 gap-12">
                <div class="relative group">
                    <div class="absolute -inset-6 bg-white/[0.02] rounded-[2rem] opacity-0 group-hover:opacity-100 transition-all duration-500 border border-white/5"></div>
                    <div class="relative space-y-4">
                        <div class="text-brand-blue font-mono text-xl font-bold">01/</div>
                        <h3 class="text-2xl font-bold text-white tracking-tight group-hover:text-brand-blue transition-colors">Reliability First</h3>
                        <p class="text-slate-400 text-sm leading-relaxed font-light">
                            If it's not stable, it's not finished. We prioritize <span class="text-slate-200">99.99% uptime</span> and self-healing architectures above all else.
                        </p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute -inset-6 bg-white/[0.02] rounded-[2rem] opacity-0 group-hover:opacity-100 transition-all duration-500 border border-white/5"></div>
                    <div class="relative space-y-4">
                        <div class="text-brand-orange font-mono text-xl font-bold">02/</div>
                        <h3 class="text-2xl font-bold text-white tracking-tight group-hover:text-brand-orange transition-colors">Radical Transparency</h3>
                        <p class="text-slate-400 text-sm leading-relaxed font-light">
                            We don't gatekeep. We provide full <span class="text-slate-200">Infrastructure-as-Code</span> (Terraform/CDK) files, so you own your cloud, forever.
                        </p>
                    </div>
                </div>

                <div class="relative group">
                    <div class="absolute -inset-6 bg-white/[0.02] rounded-[2rem] opacity-0 group-hover:opacity-100 transition-all duration-500 border border-white/5"></div>
                    <div class="relative space-y-4">
                        <div class="text-brand-purple font-mono text-xl font-bold">03/</div>
                        <h3 class="text-2xl font-bold text-white tracking-tight group-hover:text-brand-purple transition-colors">Security by Design</h3>
                        <p class="text-slate-400 text-sm leading-relaxed font-light">
                            Security isn’t a feature; it’s the foundation. Every port, IAM role, and S3 bucket is <span class="text-slate-200">hardened and encrypted</span> from Day 1.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

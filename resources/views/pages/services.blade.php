@extends('layouts.app')

@section('content')
<div class="relative min-h-screen bg-brand-dark pt-32 pb-24 overflow-hidden">
    <div class="absolute inset-0 bg-grid-pattern opacity-10 -z-10"></div>
    <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-brand-cyan/5 blur-[120px] -z-10 animate-pulse-slow"></div>

    <div class="max-w-7xl mx-auto px-6">

        <div class="max-w-3xl mb-24 animate-fade-in">
            <h1 class="text-6xl md:text-7xl font-black text-white leading-tight mb-8 tracking-tighter">
                Technical <span class="text-gradient-blue italic">Solutions.</span>
            </h1>
            <p class="text-xl text-slate-400 leading-relaxed font-light">
                We act as your <span class="text-white font-mono">Fractional DevOps Team</span> in South-East Asia, handling infrastructure complexity so your developers can stay focused on the product.
            </p>
        </div>

        <div class="space-y-12">

            <div class="group relative flex flex-col lg:flex-row gap-8 items-stretch animate-slide-up">
                <div class="lg:w-1/2 glass border-white/5 p-10 rounded-[2.5rem] group-hover:border-brand-blue/30 transition-all duration-500">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-brand-blue/10 rounded-xl flex items-center justify-center text-brand-blue">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        </div>
                        <h3 class="text-3xl font-bold text-white tracking-tight">Cloud Migration</h3>
                    </div>
                    <p class="text-slate-400 leading-relaxed mb-8">
                        Moving from legacy VPS or shared hosting to a high-availability AWS environment. We handle database dumps and DNS switchovers with <span class="text-white font-bold italic">zero data loss.</span>
                    </p>
                    <ul class="space-y-3 text-sm text-slate-500 font-mono">
                        <li class="flex items-center gap-2"><span class="text-brand-blue">▹</span> Zero-Downtime Migration Strategy</li>
                        <li class="flex items-center gap-2"><span class="text-brand-blue">▹</span> RDS Database Optimization</li>
                        <li class="flex items-center gap-2"><span class="text-brand-blue">▹</span> S3 Media Offloading</li>
                    </ul>
                </div>
                <div class="lg:w-1/2 glass border-white/5 rounded-[2.5rem] p-8 flex flex-col justify-center bg-brand-blue/[0.02] overflow-hidden relative">
                    <div class="font-mono text-sm space-y-2 relative z-10">
                        <p class="text-slate-600"># PNH-TO-AWS-MIGRATION</p>
                        <p class="text-brand-cyan">rsync -avz --progress /var/www/html aws-sgp:~/</p>
                        <p class="text-slate-400">Transferring blocks... [##########] 100%</p>
                        <p class="text-green-400">Latency (PNH -> SGP): 12ms <span class="animate-pulse">_</span></p>
                    </div>
                    <div class="absolute -right-10 -bottom-10 w-40 h-40 bg-brand-blue/10 blur-3xl rounded-full"></div>
                </div>
            </div>

            <div class="group relative flex flex-col lg:flex-row-reverse gap-8 items-stretch animate-slide-up" style="animation-delay: 0.1s">
                <div class="lg:w-1/2 glass border-white/5 p-10 rounded-[2.5rem] group-hover:border-brand-orange/30 transition-all duration-500">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-brand-orange/10 rounded-xl flex items-center justify-center text-brand-orange">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                        </div>
                        <h3 class="text-3xl font-bold text-white tracking-tight">Containerization</h3>
                    </div>
                    <p class="text-slate-400 leading-relaxed mb-8">
                        Standardizing your environment with Docker. No more <span class="text-brand-orange italic font-bold">"it works on my machine"</span> issues. We build production-grade, hardened images.
                    </p>
                    <ul class="space-y-3 text-sm text-slate-500 font-mono">
                        <li class="flex items-center gap-2"><span class="text-brand-orange">▹</span> Multi-stage Docker Builds</li>
                        <li class="flex items-center gap-2"><span class="text-brand-orange">▹</span> ECR Registry Management</li>
                    </ul>
                </div>
                <div class="lg:w-1/2 glass border-white/5 rounded-[2.5rem] p-8 flex items-center justify-center bg-brand-orange/[0.02] relative">
                    <div class="bg-brand-dark/50 p-6 rounded-2xl border border-white/5 w-full shadow-2xl">
                         <div class="flex gap-2 mb-4">
                            <span class="px-2 py-1 rounded bg-brand-orange/20 text-[10px] text-brand-orange font-bold uppercase">Dockerfile</span>
                            <span class="px-2 py-1 rounded bg-slate-800 text-[10px] text-slate-400 font-bold uppercase">v8.2-pnh</span>
                        </div>
                        <code class="text-xs text-slate-300 font-mono">
                            FROM php:8.2-fpm-alpine<br>
                            <span class="text-slate-500"># Optimized for SEA Region</span><br>
                            COPY --from=builder /app /var/www<br>
                            RUN install-php-extensions pdo_mysql redis
                        </code>
                    </div>
                </div>
            </div>

            <div class="group relative flex flex-col lg:flex-row gap-8 items-stretch animate-slide-up" style="animation-delay: 0.2s">
                <div class="lg:w-1/2 glass border-white/5 p-10 rounded-[2.5rem] group-hover:border-brand-purple/30 transition-all duration-500">
                    <div class="flex items-center gap-4 mb-6">
                        <div class="w-12 h-12 bg-brand-purple/10 rounded-xl flex items-center justify-center text-brand-purple">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.040L3 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622l-.618-3.016z"></path></svg>
                        </div>
                        <h3 class="text-3xl font-bold text-white tracking-tight">Security Hardening</h3>
                    </div>
                    <p class="text-slate-400 leading-relaxed mb-8">
                        Locking down your network surface. We implement <span class="text-brand-purple font-bold">AWS WAF</span>, private VPC subnets, and secret management to keep your local data encrypted.
                    </p>
                    <ul class="space-y-3 text-sm text-slate-500 font-mono">
                        <li class="flex items-center gap-2"><span class="text-brand-purple">▹</span> IAM Least Privilege Policy</li>
                        <li class="flex items-center gap-2"><span class="text-brand-purple">▹</span> SSH Bastion Host Setup</li>
                    </ul>
                </div>
                <div class="lg:w-1/2 glass border-white/5 rounded-[2.5rem] p-8 bg-brand-purple/[0.02] flex items-center">
                    <div class="w-full space-y-4">
                        <div class="flex items-center justify-between p-4 bg-brand-purple/10 border border-brand-purple/20 rounded-xl group-hover:scale-[1.02] transition-transform">
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 rounded-full bg-brand-purple animate-pulse"></div>
                                <span class="text-brand-purple font-mono text-xs font-bold uppercase tracking-widest">Phnom Penh Node</span>
                            </div>
                            <span class="text-[10px] font-black text-white bg-brand-purple/30 px-2 py-0.5 rounded">ENCRYPTED</span>
                        </div>
                        <div class="flex items-center justify-between p-4 bg-green-500/10 border border-green-500/20 rounded-xl">
                            <span class="text-green-400 font-mono text-xs tracking-tight">Geo-Blocking (Non-ASEAN)</span>
                            <span class="text-[10px] font-black text-green-500 bg-green-500/10 px-2 py-0.5 rounded uppercase">Active</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection

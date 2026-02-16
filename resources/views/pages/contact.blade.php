@extends('layouts.app')

@section('content')
    <section class="relative min-h-screen flex items-center justify-center py-20 overflow-hidden">
        <div class="absolute inset-0 bg-[#0B1120]"></div>
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-brand-blue/10 rounded-full blur-[120px] animate-pulse-slow"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-brand-cyan/5 rounded-full blur-[100px]"></div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-5xl mx-auto bg-[#1E293B]/40 backdrop-blur-2xl border border-white/10 rounded-[2.5rem] shadow-2xl overflow-hidden flex flex-col md:flex-row">

                <div class="md:w-2/5 bg-white/[0.02] p-10 flex flex-col justify-between border-r border-white/5 relative">
                    <div class="absolute inset-0 opacity-10 pointer-events-none"
                        style="background-image: radial-gradient(#ffffff 1px, transparent 1px); background-size: 20px 20px;">
                    </div>

                    <div class="relative z-10">
                        <h2 class="text-4xl font-black text-white mb-4 tracking-tighter">Let's <span class="text-gradient-blue italic">Build.</span></h2>
                        <p class="text-slate-400 text-sm mb-10 leading-relaxed">Ready to scale your infrastructure? Connect via our official channels or deploy an inquiry.</p>

                        <div class="space-y-6">
                            <a href="#" class="flex items-center gap-4 group cursor-pointer">
                                <div class="w-12 h-12 rounded-2xl bg-blue-600/10 border border-white/5 flex items-center justify-center text-blue-500 group-hover:scale-110 group-hover:bg-blue-600 group-hover:text-white transition-all duration-300">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                                </div>
                                <div>
                                    <p class="text-[10px] font-mono text-slate-500 uppercase tracking-widest">Facebook</p>
                                    <span class="text-sm text-slate-200 font-medium">@AngkorNova</span>
                                </div>
                            </a>

                            <a href="#" class="flex items-center gap-4 group cursor-pointer">
                                <div class="w-12 h-12 rounded-2xl bg-white/5 border border-white/5 flex items-center justify-center text-white group-hover:scale-110 group-hover:bg-black transition-all duration-300 shadow-[0_0_15px_rgba(255,255,255,0.1)]">
                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 448 512"><path d="M448 209.91a210.06 210.06 0 0 1-122.77-39.25V349.38A162.55 162.55 0 1 1 185 188.31V278.2a74.62 74.62 0 1 0 52.23 71.18V0l88 0a121.18 121.18 0 0 0 1.86 22.17h0A122.18 122.18 0 0 0 381 102.39a121.43 121.43 0 0 0 67 20.14Z"/></svg>
                                </div>
                                <div>
                                    <p class="text-[10px] font-mono text-slate-500 uppercase tracking-widest">TikTok</p>
                                    <span class="text-sm text-slate-200 font-medium">@angkornova_systems</span>
                                </div>
                            </a>

                            <a href="#" class="flex items-center gap-4 group cursor-pointer">
                                <div class="w-12 h-12 rounded-2xl bg-pink-500/10 border border-white/5 flex items-center justify-center text-pink-500 group-hover:scale-110 group-hover:bg-gradient-to-tr group-hover:from-yellow-400 group-hover:via-red-500 group-hover:to-purple-600 group-hover:text-white transition-all duration-300">
                                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                                </div>
                                <div>
                                    <p class="text-[10px] font-mono text-slate-500 uppercase tracking-widest">Instagram</p>
                                    <span class="text-sm text-slate-200 font-medium">@angkornova_cloud</span>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="mt-12 relative z-10 pt-8 border-t border-white/5">
                        <div class="flex items-center gap-3 glass border-white/5 p-3 rounded-xl bg-white/[0.01]">
                            <div class="flex -space-x-1.5">
                                <div class="w-5 h-5 rounded-full border-2 border-[#1E293B] bg-green-500 shadow-[0_0_8px_rgba(34,197,94,0.5)]"></div>
                                <div class="w-5 h-5 rounded-full border-2 border-[#1E293B] bg-brand-blue"></div>
                            </div>
                            <span class="text-[10px] font-mono text-slate-300 uppercase tracking-tight">On-Call: <span class="text-green-400">Active</span></span>
                        </div>
                    </div>
                </div>

                <div class="md:w-3/5 p-10 md:p-14">
                    @if (session('success'))
                        <div class="bg-green-500/10 text-green-400 p-4 rounded-xl mb-8 border border-green-500/20 text-sm font-mono flex items-center gap-3 animate-slide-up">
                            <span class="text-green-500">>></span> {{ session('success') }}
                        </div>
                    @endif

                    <form action="{{ route('contact.submit') }}" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <div class="space-y-2">
                                <label class="block text-[10px] font-mono font-bold text-slate-500 uppercase tracking-widest ml-1">Full Name</label>
                                <input type="text" name="name" required class="w-full bg-white/[0.03] border border-white/10 rounded-xl p-4 text-white placeholder:text-slate-700 focus:border-brand-blue focus:ring-1 focus:ring-brand-blue/30 transition duration-300 outline-none backdrop-blur-md" placeholder="e.g. Sok Dara">
                            </div>
                            <div class="space-y-2">
                                <label class="block text-[10px] font-mono font-bold text-slate-500 uppercase tracking-widest ml-1">Company / Project</label>
                                <input type="text" name="company" class="w-full bg-white/[0.03] border border-white/10 rounded-xl p-4 text-white placeholder:text-slate-700 focus:border-brand-blue focus:ring-1 focus:ring-brand-blue/30 transition duration-300 outline-none backdrop-blur-md" placeholder="Project Name">
                            </div>
                        </div>

                        <div class="space-y-2">
                            <label class="block text-[10px] font-mono font-bold text-slate-500 uppercase tracking-widest ml-1">Secure Email</label>
                            <input type="email" name="email" required class="w-full bg-white/[0.03] border border-white/10 rounded-xl p-4 text-white placeholder:text-slate-700 focus:border-brand-blue focus:ring-1 focus:ring-brand-blue/30 transition duration-300 outline-none backdrop-blur-md" placeholder="dara@company.com">
                        </div>

                        <div class="space-y-2">
                            <label class="block text-[10px] font-mono font-bold text-slate-500 uppercase tracking-widest ml-1">Scaling Needs</label>
                            <textarea name="message" rows="4" required class="w-full bg-white/[0.03] border border-white/10 rounded-xl p-4 text-white placeholder:text-slate-700 focus:border-brand-blue focus:ring-1 focus:ring-brand-blue/30 transition duration-300 outline-none backdrop-blur-md resize-none" placeholder="Describe your architecture bottlenecks..."></textarea>
                        </div>

                        <button type="submit" class="group relative w-full overflow-hidden rounded-xl bg-brand-blue p-[1.5px] font-bold transition-all duration-300 hover:shadow-[0_0_50px_rgba(59,130,246,0.4)]">
                            <div class="relative z-10 bg-[#0B1120] rounded-[10px] py-4 px-8 transition-all duration-300 group-hover:bg-transparent">
                                <span class="flex items-center justify-center gap-2 text-slate-200 group-hover:text-white transition-all duration-300">
                                    DEPLOY INQUIRY
                                    <svg class="w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                                </span>
                            </div>
                            <div class="absolute inset-0 w-full h-full bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover:animate-shimmer"></div>
                        </button>
                    </form>
                </div>
            </div>

            <p class="mt-12 text-center text-[10px] text-slate-600 font-mono tracking-widest uppercase">
                All data encrypted via TLS 1.3 &bull; ISO 27001 Compliant Handling
            </p>
        </div>
    </section>
@endsection

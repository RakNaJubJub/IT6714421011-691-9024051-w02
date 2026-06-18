@extends('layouts.app')

@section('title','EBD-W02')

@section('menu')
    <div class="bg-white/30 py-3 flex justify-center gap-8 shadow-sm">
        <a href="{{ url('/ebd') }}" class="hover:text-blue-600 transition font-bold">Home</a>
        <a href="{{ url('/bio') }}" class="hover:text-blue-600 transition">Bio</a>
        <a href="{{ url('/assignment') }}" class="hover:text-blue-600 transition">Assignment</a>
    </div>
@endsection

@section('coutent')
    <div class="max-w-xl mx-auto p-10 bg-white shadow-xl rounded-2xl mt-8">
        <h1 class="text-3xl font-bold text-indigo-700 border-b-2 border-indigo-100 pb-3">Project Status</h1>
        <div class="mt-6 space-y-4">
            <div class="flex items-center p-4 bg-indigo-50 rounded-xl">
                <div class="w-10 h-10 bg-indigo-500 rounded-lg text-white flex justify-center items-center font-bold">B</div>
                <div class="ml-4 font-semibold text-indigo-900">Blade Templating: <span class="text-green-600">Active</span></div>
            </div>
            <div class="flex items-center p-4 bg-emerald-50 rounded-xl">
                <div class="w-10 h-10 bg-emerald-500 rounded-lg text-white flex justify-center items-center font-bold">T</div>
                <div class="ml-4 font-semibold text-emerald-900">Tailwind Framework: <span class="text-green-600">Loaded</span></div>
            </div>
            <div class="flex items-center p-4 bg-rose-50 rounded-xl">
                <div class="w-10 h-10 bg-rose-500 rounded-lg text-white flex justify-center items-center font-bold">R</div>
                <div class="ml-4 font-semibold text-rose-900">Route Connection: <span class="text-blue-600">Stable</span></div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <div class="p-6 text-center text-gray-500 font-medium">
        <p>Suphawich - 6714421011</p>
    </div>
@endsection

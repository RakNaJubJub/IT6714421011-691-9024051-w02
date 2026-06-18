@extends('layouts.app')

@section('title','EDB-w02')

@section('menu')
    <div class="bg-white/30 py-3 flex justify-center gap-8 shadow-sm">
        <a href="{{ url('/ebd') }}" class="hover:text-blue-600 transition font-bold">Home</a>
        <a href="{{ url('/bio') }}" class="hover:text-blue-600 transition">Bio</a>
        <a href="{{ url('/assignment') }}" class="hover:text-blue-600 transition">Assignment</a>
    </div>
@endsection

@section('coutent')
    <div class="max-w-xl mx-auto p-10 bg-white shadow-xl rounded-2xl mt-8">
        <h1 class="text-2xl font-bold">Assignment List</h1>
        <table class="table-auto border-collapse border border-slate-400 mt-4 w-full">
            <thead>
                <tr>
                    <th class="border border-slate-300 px-4 py-2">Task Name</th>
                    <th class="border border-slate-300 px-4 py-2">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-slate-300 px-4 py-2">W01: Laravel Setup</td>
                    <td class="border border-slate-300 px-4 py-2 text-green-600">Completed</td>
                </tr>
                <tr>
                    <td class="border border-slate-300 px-4 py-2">W02: Blade & Routing</td>
                    <td class="border border-slate-300 px-4 py-2 text-blue-600">Pending</td>
                </tr>
            </tbody>
        </table>
    </div>    
@endsection

@section('footer')
    <address class="text-center">Suphawich-6714421011</address>
@endsection

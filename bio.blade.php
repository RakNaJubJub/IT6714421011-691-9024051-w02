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
        <H1>BIO</H1>
        <p>Suphawich Khanbubpha</p>
        <img src="{{ url('/images/anime.jpg') }}" alt="Profile" class="w-32 h-32">
        <div class="mt-4">
            <h3 class="font-bold">Education & Info</h3>
            <ul class="list-disc ml-5">
                <li>Student ID: 6714421011</li>
                <li>Faculty: Information Technology</li>
                <li>Major: Computer Science</li>
            </ul>
            <h3 class="font-bold mt-2">Skills</h3>
            <ul class="list-disc ml-5">
                <li>Laravel & Blade Template</li>
                <li>Tailwind CSS Styling</li>
                <li>PHP Development</li>
            </ul>
        </div>
    </div>    
@endsection

@section('footer')
    <address class="text-center">Suphawich-6714421011</address>
    <p></p>
@endsection

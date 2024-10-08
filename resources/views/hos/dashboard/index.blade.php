@extends('layouts.hos.app')

@section('Page Title', 'Dashboard')

@section('title')
    My Classes
@endsection

@section('content')
    <div class="px-14 py-6 flex flex-wrap gap-x-14 gap-y-5 items-center justify-center w-full">

        @forelse($subjectTeachers as $subjectTeacher)
        @if ($subjectTeacher->subject->type=="MAIN"|| $subjectTeacher->subject->type=="CREDIT")
        <a href="{{ route('hosForms.index', $subjectTeacher->id) }}"
            class="bg-background-gray h-40 w-64 flex flex-col items-center justify-center rounded-md border border-background-gray hover:border-black shadow-lg">
            <p class="font-bold text-lg">{{ $subjectTeacher->subject->name }}
            </p>
            <p class="text-sm">
                {{ $subjectTeacher->section->grade->name }} -
                {{ $subjectTeacher->section->name }}
            </p>
        </a>
        @elseif($subjectTeacher->subject->type=="Reading_Book")
        <a href="{{ route('hosReadingForms.index', $subjectTeacher->id) }}"
            class="bg-background-gray h-40 w-64 flex flex-col items-center justify-center rounded-md border border-background-gray hover:border-black shadow-lg">
            <p class="font-bold text-lg">{{ $subjectTeacher->subject->name }}
            </p>
            <p class="text-sm">
                {{ $subjectTeacher->section->grade->name }} -
                {{ $subjectTeacher->section->name }}
            </p>
        </a>
        @elseif($subjectTeacher->subject->type=="ECA")
        <a href="{{ route('hosEcaForms.index', $subjectTeacher->id) }}"
            class="bg-background-gray h-40 w-64 flex flex-col items-center justify-center rounded-md border border-background-gray hover:border-black shadow-lg">
            <p class="font-bold text-lg">{{ $subjectTeacher->subject->name }}
            </p>
            <p class="text-sm">
                {{ $subjectTeacher->section->grade->name }} -
                {{ $subjectTeacher->section->name }}
            </p>
        </a>
        @else
        <a href="{{ route('hosClubForms.index', $subjectTeacher->id) }}"
            class="bg-background-gray h-40 w-64 flex flex-col items-center justify-center rounded-md border border-background-gray hover:border-black shadow-lg">
            <p class="font-bold text-lg">{{ $subjectTeacher->subject->name }}
            </p>
            <p class="text-sm">
                {{ $subjectTeacher->section->grade->name }} -
                {{ $subjectTeacher->section->name }}
            </p>
        </a>
        @endif
        @empty
            <h2 class="text-red-500">No classes found</h2>
        @endforelse

    </div>
@endsection

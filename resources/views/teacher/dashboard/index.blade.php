@extends('layouts.teacher.app')

@section('Page Title', 'Dashboard')

@section('title')
    <p>My Classes</p>
    <a href="{{ route('teacherData.studentProfilerView') }}"
    class="bg-dark-orange text-white font-normal text-base px-3 py-2 rounded-md">Profiler
    </a>
@endsection

@section('content')
    <div class="px-14 py-6 flex flex-wrap gap-x-14 gap-y-5 items-center justify-center overflow-y-scroll hide-scrollbar">

        @forelse($subjectTeachers as $subjectTeacher)
        @if ($subjectTeacher->subject->type=="MAIN"|| $subjectTeacher->subject->type=="CREDIT")
            <a href="{{ route('teacherForms.index', $subjectTeacher->id) }}"
                class="bg-background-gray h-40 w-64 flex flex-col items-center justify-center rounded-md border border-background-gray hover:border-black shadow-lg">
                <p class="font-bold text-lg">{{ $subjectTeacher->subject->name }}
                </p>
                <p class="text-sm">
                    {{ $subjectTeacher->section->grade->name }} -
                    {{ $subjectTeacher->section->name }}
                </p>
            </a>
        </a>    
        @elseif($subjectTeacher->subject->type=="Reading_Book")
        {{-- reading teacher form link --}}
        <a href="{{ route('readingTeacherForms.index', $subjectTeacher->id) }}"
            class="bg-background-gray h-40 w-64 flex flex-col items-center justify-center rounded-md border border-background-gray hover:border-black shadow-lg">
            <p class="font-bold text-lg">{{ $subjectTeacher->subject->name }}
            </p>
            <p class="text-sm">
                {{ $subjectTeacher->section->grade->name }} -
                {{ $subjectTeacher->section->name }}
            </p>
        </a>    
        @elseif($subjectTeacher->subject->type=="ECA")
        {{-- Eca teachers form link --}}
        <a href="{{ route('ecaTeacherForms.index', $subjectTeacher->id) }}"
            class="bg-background-gray h-40 w-64 flex flex-col items-center justify-center rounded-md border border-background-gray hover:border-black shadow-lg">
            <p class="font-bold text-lg">{{ $subjectTeacher->subject->name }}
            </p>
            <p class="text-sm">
                {{ $subjectTeacher->section->grade->name }} -
                {{ $subjectTeacher->section->name }}
            </p>
        </a>    
        @else
        <a href="{{ route('clubTeacherForms.index', $subjectTeacher->id) }}"
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

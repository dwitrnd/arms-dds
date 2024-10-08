@extends('layouts.teacher.app')

@section('Page Title', 'View Exam')

@section('title')
    <div class="flex flex-col">
        <p>Marks of {{ $term->name }} of {{ $term->grade->name }}</p>
        <span class="text-sm text-gray-500 font-normal">{{ $subject->name }}</span>
    </div>
@endsection

@section('content')
    <div class="w-full object-contain">
        <form id="form" method="POST">
            @csrf

            {{-- SECTION FOR STUDENT MARKS --}}
            <div class="flex flex-col w-full">
                <table class="table-auto">

                    <thead class="*:text-left bg-dark-gray h-14 border">
                        <tr class="border  h-10">
                            <th class="pl-24 text-left w-1/4">Roll No</th>
                            <th class="px-2 text-left">Name</th>
                            <th class="px-2 text-left">Section</th>
                            <th class="px-2 text-left">Marks</th>
                        </tr>
                    </thead>

                    <tbody>

                        @forelse ($exams as $exam)
                            <tr class="h-14 border-b-2 hover:bg-dark-gray ">
                                <td class="pl-24 text-left w-1/4">{{ $exam->studentExam->student->roll_number }}</td>
                                <td class="px-2 text-left">{{ $exam->studentExam->student->name }}</td>
                                <td class="px-2 text-left">{{ $exam->studentExam->student->section->name }}</td>
                                <td class="px-2 text-left">
                                    {{ $exam->mark }}
                                </td>
                            </tr>
                        @empty
                            <tr class="h-14 border-b-2 hover:bg-dark-gray ">
                                <td class="pl-24 text-left w-1/4 text-red-600" colspan="3">No data found</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </form>
    </div>
@endsection

@section('script')

@endsection

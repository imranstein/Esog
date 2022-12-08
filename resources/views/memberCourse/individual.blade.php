@extends('layouts.components.index')
@section('model','Members Course')
{{-- @section('count', ($memberCourses)->count() ) --}}
@section('count',$count)
@section('title','Members Course')
@section('insert','Members Course')

@section('content')

                                    <table class="table">
                                        <thead class=" text-primary">
                                            <tr>
                                                <th>
                                                    Course title
                                                </th>
                                                <th>
                                                    Course Author
                                                </th>
                                                <th>
                                                    Approved
                                                </th>
                                                <th>
                                                    Started Date
                                                </th>
                                                <th>
                                                    Finished
                                                </th>
                                                <th class="text-right" width="25%">
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($memberCourses as $course)

                                            <tr>
                                                <td>{{ $course->id }}</td>

                                                <td>{{ $course->course->title }}</td>
                                                <td>{{ $course->course->author }}</td>
                                                @if($course->is_approved != null)
                                                <td>is Approved</td>
                                                @else
                                                <td>Waiting For Approval</td>
                                                @endif
                                                @if($course->started_at != null)
                                                <td>{{ $course->started_at }}</td>
                                                @else
                                                <td>Not Started</td>
                                                @endif
                                                @if($course->finished_at != null)
                                                <td>{{ $course->finished_at }}</td>
                                                @else
                                                <td>Not Finished</td>
                                                @endif

                                                <td class="td-actions text-right">
                                                    <div class="flex items-center space-x-4 text-sm">
@if($course->is_approved != null)

                                                        <a class="btn btn-primary" href="{{ route('course.show',$course->course_id) }}">Edit</a>

@endif

                                                    </div>

                                                </td>
                                            </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                    {!! $memberCourses->render() !!}


@endsection

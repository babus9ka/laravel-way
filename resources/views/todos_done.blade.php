
@extends('layouts.app')
@section('content')
<ol class="list-group list-group-numbered mt-4">
    <div class="flex">
        <a href="#">Выполнено</a>
        <a href="/todos/not/done">Не выполнено</a>
        <a href="/todos">Все</a>
    </div>

    @foreach($todos as $todo)
        <li class="list-group-item d-flex justify-content-between align-items-start">
            <div class="ms-2 me-auto">
                <div class="fw-bold">{{ $todo->title }}</div>
                {{ $todo->node }}
            </div>
            @if($todo->status == 1)
                <span class="badge bg-success rounded-pill">Выполнено</span>
            @else
                <span class="badge bg-danger rounded-pill">Не выполнено</span>

                @endif

        </li>
    @endforeach
</ol>
@endsection

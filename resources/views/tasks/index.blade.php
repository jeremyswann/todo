@extends('layout')

@section('content')

    <section class="todoapp">
        <header class="header">
            <h1>todo list</h1>
            <h2>laravel/homestead ed.</h2>
            {!! Form::open(['route' => 'task.store', 'method' => 'post']) !!}
            <input class="new-todo" name="name" autofocus="" autocomplete="off" placeholder="What needs to be done?">
            {!! Form::close() !!}


        </header>
        <section class="main">
            <input class="toggle-all" type="checkbox">
            <ul class="todo-list">

                {!! Form::open(['route' => 'task.update', 'method' => 'delete']) !!}
                @foreach($tasks as $task)

                    <li class="todo">
                        <div class="view">
                            <input class="toggle toggle{{ $task->completed }}" type="checkbox">
                            <label class="completed{{ $task->completed }}">{{ $task->name }}</label>
                            <input class="destroy" type="checkbox" name="task[{{ $task->id }}]" value="1">
                        </div>
                        <input class="edit" type="text">
                    </li>

                @endforeach
                <input class="" name="action" type="submit">
                {!! Form::close() !!}

            </ul>
        </section>
        <footer class="footer">
                    <span class="todo-count">
                        <strong></strong> 2 tasks left
                    </span>
            <ul class="filters">
                <li><a href="?filter=all">All</a></li>
                <li><a href="?filter=active" >Active</a></li>
                <li><a href="?filter=completed">Completed</a></li>
            </ul>
            <button class="clear-completed">
                Clear completed
            </button>
        </footer>
    </section>
                <?php
                //$name = $request->input('name');
                //$task = App\Task::create(['name' => 'new']);
                ?>

@endsection
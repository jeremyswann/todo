@extends('layout')

@section('content')

    <section class="todoapp">
        <header class="header">
            <h1>todo list</h1>
            <h2>laravel/homestead ed.</h2>
            <input class="new-todo" autofocus="" autocomplete="off" placeholder="What needs to be done?">
        </header>
        <section class="main">
            <input class="toggle-all" type="checkbox">
            <ul class="todo-list">

                    <li class="todo">
                        <div class="view">
                            <input class="toggle" type="checkbox">
                            <label>{{ $task->name }}</label>
                            <button class="destroy"></button>
                        </div>
                        <input class="edit" type="text">
                    </li>

            </ul>
        </section>
        <footer class="footer">
                    <span class="todo-count">
                        <strong></strong> [no.activeTasks] tasks left
                    </span>
            <ul class="filters">
                <li><a href="#/all">All</a></li>
                <li><a href="#/active" >Active</a></li>
                <li><a href="#/completed">Completed</a></li>
            </ul>
            <button class="clear-completed">
                Clear completed
            </button>
        </footer>
    </section>

@endsection
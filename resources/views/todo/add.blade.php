@extends('app')

@section('content')
    <div class="container">
        <h2>Add New Todo</h2>

        <form method="POST" action="/todo">

            <div class="form-group">
                <textarea name="name" class="form-control"></textarea>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Todo</button>
            </div>
        </form>


    </div>
@endsection
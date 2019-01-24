@extends('layouts.default')

@section('content')
    <div class="column">
        <div class="column is-half is-offset-one-quarter">
            <section class="section">
                <h1 class="title is-1 has-text-centered has-text-danger">Todolist</h1>
            </section>
            <form action="/task" method="post">
                {{csrf_field()}}
                <div class="field">
                    <label class="label">Name</label>
                    <div class="control">
                        <input class="input is-warning" name="name" type="text" placeholder="Text input">
                    </div>
                </div>
                <div class="field">
                    <div class="control has-text-centered">
                        <button class="button is-warning" type="submit">Valider</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div>
        @foreach($task as $t)
            <div class="column">
                <div class="column is-half is-offset-one-quarter">
                    <article class="message">
                        <div class="message-header">
                            {{$t->name}}
                            <form method="post" action="{{ route('delete', [$t->id]) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button class="delete"></button>
                            </form>
                        </div>
                    </article>
                </div>
            </div>
        @endforeach
        <div class="column">
            <div class="column is-half is-offset-one-quarter">
                {{ $task->links() }}
            </div>
        </div>
    </div>
@endsection
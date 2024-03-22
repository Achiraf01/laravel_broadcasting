
@extends('layouts.app')

@section('content')
   <div class="container">
            <form action="{{ route('send',5) }}" method="post">
                    {{ csrf_field() }}
                <button class="btn btn-primary">Notifier</button>
            </form>
    </div>
@endsection


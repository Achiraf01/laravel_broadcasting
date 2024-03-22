
@extends('layouts.app')

@section('content')
   <div class="container">
        <div class="row">
            @foreach ($groups as $group )
                <div class="col-sm-4">
                    <div class="panel-heading">
                        <strong>{{ $group->name }}</strong>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            @foreach ($group->users as $user )
                                @if (auth()->id() !== $user->id)
                                    <li class="list-group-items">
                                        <a href="{{ route('spy',$user->id) }}">
                                        {{ $user->name }}
                                        </a>

                                        <form action="{{ route('send',$user->id) }}" method="post">
                                            {{ csrf_field() }}
                                            <button class="btn btn-primary">Notifier</button>
                                        </form>
                                    </li>
                                 @endif
                            @endforeach
                        </ul>
                        <form action="{{ route('notify',$group->id) }}" method="post">
                            {{ csrf_field() }}
                            <button class="btn btn-primary">Notifier groupe</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>


@endsection



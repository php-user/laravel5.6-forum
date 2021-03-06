@extends('layouts.app')
@section('title', "| Channels")

@section('content')

<div class="card">
    <div class="card-header">
        <h5 class="medium-title mt-2">Channels</h5>
        <a href="{{ route('channels.create') }}" class="btn btn-outline-info float-right">Create channel</a>
    </div>

    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>Name</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach($channels as $channel)
                <tr>
                    <td>{{ $channel->title }}</td>
                    <td>
                        <a href="{{ route('channels.edit', ['channel' => $channel->id]) }}" class="btn btn-xs btn-info">Edit</a>
                    </td>                        
                    <td>
                        <form action="{{ route('channels.destroy', ['channel' => $channel->id]) }}" method="post">
                            @csrf
                            @method('delete')

                            <button class="btn btn-xs btn-danger" type="submit">Destroy</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

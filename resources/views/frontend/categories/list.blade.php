@extends('frontend.layouts.content')

@section('content')
    <h2>Category list</h2>
    @if(empty($categories))
        <p class="error">data empty</p>
    @else
        <table class="table table-bordered">
            <tr>
                <th>STT</th>
                <th>Name</th>
            </tr>
            @foreach($categories as $key=>$category)
                <tr>
                    <td>{{ $key+1 }}</td>
                    <td>{{ $category->name }}</td>
                </tr>
                @endforeach
        </table>
    @endif
    @stop

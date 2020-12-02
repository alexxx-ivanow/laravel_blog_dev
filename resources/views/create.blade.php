@extends('layouts/layout')

@section('title')
    @parent:: {{ $title }}
@endsection

@section('header')
    @parent

@endsection

@section('content')
    <div class="container">
        <form class="mt-5" method="post" action="{{ route('posts.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="title">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" rows="5" name="content"></textarea>
            </div>
            <div class="form-group">
                <label for="rubric_id">Example multiple select</label>
                <select class="form-control" id="rubric_id" name="rubric_id">

                    <option>Select Rubric</option>
                    @foreach($rubrics as $key => $rubric)

                    <option value="{{ $key }}">{{ $rubric }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection
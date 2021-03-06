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
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" placeholder="title" value="{{ old('title') }}">
            </div>
            @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control @error('content') is-invalid @enderror" id="content" rows="5" name="content">{{ old('content') }}</textarea>
            </div>
            @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="rubric_id">Example multiple select</label>
                <select class="form-control @error('content') is-invalid @enderror" id="rubric_id" name="rubric_id">

                    <option>Select Rubric</option>
                    @foreach($rubrics as $key => $rubric)

                    <option value="{{ $key }}" @if(old('rubric_id') == $key)selected @endif>{{ $rubric }}</option>
                    @endforeach
                </select>
            </div>
            @error('rubric_id')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
@endsection
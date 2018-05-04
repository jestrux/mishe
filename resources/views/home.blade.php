@extends('layouts.app')

@section('styles')
    {{-- <link rel="stylesheet" href="{{asset('css/home.css')}}"> --}}
    <style>
        
    </style>
@endsection

@section('content')
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor">All Poems</h3>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <a href="{{url('write_poem')}}" class="btn waves-effect waves-light btn-danger pull-right hidden-sm-down">Write A Poem</a>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        console.log("Locked and loaded!!!!");
    </script>
@endsection

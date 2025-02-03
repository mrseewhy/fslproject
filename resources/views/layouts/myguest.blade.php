@extends('layouts.master')
@section('body')
{{-- @include('components.navbar')     --}}
@livewire('Comps.Navigation')
{{ $slot }}
@livewire('Comps.Footer')
@endsection
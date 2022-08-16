@extends('admin.layouts.dashboard')

@section('content')
    <livewire:admin.remodel.edit-remodel :remodel="$remodel"  />
@endsection


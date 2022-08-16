@extends('admin.layouts.dashboard')

@section('content')
    <livewire:admin.model.edit-model :model="$model"  />
@endsection




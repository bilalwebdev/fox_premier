@extends('admin.layouts.dashboard')

@section('content')
<div class="d-flex justify-end">
    <button class="btn btn-primary rounded" type="button" data-toggle="modal" data-target="#model" >
      <i class="la la-plus-circle"></i>  Add new</button>
</div>
    <livewire:admin.type.listing-type/>
@endsection

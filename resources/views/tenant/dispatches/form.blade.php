@extends('tenant.layouts.app')

@section('content') 
    <tenant-dispatches-form :document="{{ json_encode($document) }}" 
                            :type-document="{{ json_encode($type) }}"
                            :dispatch="{{ json_encode($dispatch) }}" ></tenant-dispatches-form>
@endsection

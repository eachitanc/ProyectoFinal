@extends('master')
@section('content')
    <a class="btn btn-info btn-sm" href="{{route('expExcel')}}" title="Exportar a Excel"> <i class="fas fa-file-excel fa-2x green-text"></i></a>
    <a class="btn btn-info btn-sm" href="{{route('expPDF')}}"> <i class="far fa-file-pdf fa-2x red-text"></i></a>
@stop
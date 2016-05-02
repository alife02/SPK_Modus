@extends('layouts.main')

@section('content')
    <div id="page-wrapper">
        @include('admin.contents.dashboard')
    </div>
@endsection

@section('scripts')

    <script>
        $('.dashboard').click(function(){
            var element = $(this);
            $.ajax({
                url: '{{ url('admin/contents/dashboard') }}',
                success: function (results) {
                    $('.nav > li').removeClass('active');
                    element.parent().addClass('active');
                    $('#page-wrapper').html(results);
                }
            });
        });
        $('.employees').click(function(){
            var element = $(this);
            $.ajax({
                url: '{{ url('admin/contents/employees') }}',
                success: function (results) {
                    $('.nav > li').removeClass('active');
                    element.parent().addClass('active');
                    $('#page-wrapper').html(results);
                }
            });
        });
    </script>

@endsection
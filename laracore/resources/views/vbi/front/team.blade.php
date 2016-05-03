@extends('vbi/template/head')
@section('container')

        <div class="container">
            <div class='list-group gallery'>
                <div class='col-sm-2 col-xs-4'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="{{URL::asset('/teamdetail')}}">
                        <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                        <div class='text-center'>
                            <small class='text-muted'>Image Title</small>
                        </div>
                    </a>
                </div>
                <div class='col-sm-2 col-xs-4'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="{{URL::asset('/teamdetail')}}">
                        <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                        <div class='text-center'>
                            <small class='text-muted'>Image Title</small>
                        </div>
                    </a>
                </div>
                <div class='col-sm-2 col-xs-4'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="{{URL::asset('/teamdetail')}}">
                        <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                        <div class='text-center'>
                            <small class='text-muted'>Image Title</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>

@stop

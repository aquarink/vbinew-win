@extends('vbi/template/head')
@section('container')

        <div class="container">
            <div class='list-group gallery'>
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="{{URL::asset('/photo')}}">
                        <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                        <div class='text-right'>
                            <small class='text-muted'>Image Title</small>
                        </div>
                    </a>
                </div>
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="{{URL::asset('/photo')}}">
                        <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                        <div class='text-right'>
                            <small class='text-muted'>Image Title</small>
                        </div>
                    </a>
                </div>
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="{{URL::asset('/photo')}}">
                        <img class="img-responsive" alt="" src="http://placehold.it/320x320" />
                        <div class='text-right'>
                            <small class='text-muted'>Image Title</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>

@stop

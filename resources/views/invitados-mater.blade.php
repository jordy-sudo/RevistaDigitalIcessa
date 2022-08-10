@extends('home')
@section('Review')
@parent
<script src="{{ asset('/js/app.js') }}"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach ( $invitados as $post )
            <div class="card mb-4">
                <div class="card-body">
                    @if ($post->image)
                        <img src="{{$post->get_image}}" class="card-img-top" width="280" height="220" class="card-img-top">    
                    @elseif ($post->image_name)
                    <div class="embed-responsive embed-responsive-16by9">
                    {!! $post->image_name !!}    
                    </div>                          
                    @endif
                    <h5 class="card-title">{{$post->title_img}}</h5>
                    <p class="card-text">{{$post->descripcion}}</p>
                    
                    <P class="text-muted mb-0">
                        <em>
                            &ndash;{{$post->user->name}}
                        </em>
                        {{$post->created_at->format('d M Y')}}
                    </P>
                </div>
            </div>               
            @endforeach
        </div>
        {{$invitados->links()}}
    </div>
</div>
@endsection
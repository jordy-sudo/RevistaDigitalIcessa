@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row" id="gallery" data-toggle="modal" data-target="#exampleModal">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Productos
                </div>
                <div class="panel-body">
                    <div class="row" >
                        @foreach ($invitados as $post)
                            <div class="item col-xs-4 col-lg-4 mt-2">
                                <div class="card "   data-mdb-ripple-color="light" style="width: 18rem;">
                                    <a  data-bs-toggle="modal" data-bs-target="#staticBackdrop"  data-image="{{ $post->get_image }}">
                                        <img  value="" name="{{ $post->user->name }}" id="{{ $post->title_img }}" onclick="abreModalImagen(this)" src="{{$post->get_image}}" alt="{{ $post->descripcion }}" width="210" height="250"  class="card-img-top"> 
                                    </a>                     
                                    <div class="card-body">
                                        <h5 class="card-title" id="tituloCard">
                                            {{ $post->title_img }}
                                        </h5>
                                        <p class="card-text" id="desCard" style="text-align:justify">
                                            {{ $post->descripcion }}
                                        </p>
                                        <P class="text-muted mb-0" id="userCard">
                                            <em>
                                                &ndash;{{$post->user->name}}
                                            </em>
                                            {{$post->created_at->format('d M Y')}}
                                        </P>
                                       
                                     

                                    </div>
                                </div>
                            </div>
                        @endforeach
                           <!-- Modal -->
                           <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Titulo</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img id="data-image" src="{{ $post->get_image }}" alt="" width="210" height="320"  class="card-img-top">
                                    <p class="card-text" id="des" value=""  style="text-align:justify">
                                        {{ $post->descripcion }}
                                    </p>
                                    <P class="text-muted mb-0" id="user">
                                        <em>
                                            &ndash;{{$post->user->name}}
                                        </em>
                                        {{$post->created_at->format('d M Y')}}
                                    </P>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    <p class="mb-5">
        {{ $invitados->total() }} registros |
        página {{ $invitados->currentPage() }}
        de {{ $invitados->lastPage() }}
    </p>
</div>
{{$invitados->links()}}
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
<script>
    $(document).ready(function (e) {
      $('#staticBackdrop').on('show.bs.modal', function(e) {    
         var id = $(e.relatedTarget).data().id;
          $(e.currentTarget).find('#lista').val(id);
      });
    });
</script>      
@endsection
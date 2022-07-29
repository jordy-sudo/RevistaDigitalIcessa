@extends('home')
@section('Review')
@parent
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
<body>
<div class="container">
    <div class="row ">
        <div class="col-6">
            <div class="card" style="height: 310px">
                @if (session('status'))
                 <script type="text/javascript"> 
                      toastr["success"]("Lista para ser vista", "Creación exitosa")
                </script>
            @endif    
                <div class="card-body " >
                  
                    <form action="{{url('image/upload/store')}}" method="POST"
                    enctype="multipart/form-data">
                    @csrf <!-- {{ csrf_field() }} -->
                    <div class="form-group">
                        <label >Titulo *</label>
                        <input type="text" name="title_img" class="form-control " >
                    </div>
                    <div class="form-group">
                        <label >Image</label>
                        <input type="file" name="file" class="form-control" require>
                    </div>
                    
                  
                </div>
                
              </div>
              <div class="col text-center">
                
            </div>	
         
        </div>
        <div class="col-6">
            <div class="card "style="height: 310px">
                <div class="card-body ">
                    <textarea  placeholder="Descripcion de la imagen" id="text" name="descripcion" rows="4" style="overflow: hidden; word-wrap: break-word; resize: none; height: 100%; width: 100%" require></textarea>                                
                </div>  
            </div>
            <div class="col text-center">
                
            </div>	
        </div>
      
        <div class="text-left mt-4">
            <div class="form-group">
                <input  type="submit" value="Enviar Datos" class="btn btn-sm btn-success w-25" style="height: 50px; font-size:15px;">
            </div>
      </div> 
    </form> 
</body>
@endsection
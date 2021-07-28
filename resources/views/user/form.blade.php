<form method="POST" action="{{url($url)}}" class="inline-block">
    @csrf
    @method($method)
    <div class="">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-group row">
                    <label for="nombre">Nombre</label>                  
                    <input type="text" class="@error('nombre') is-invalid @enderror"  value="{{$user->nombre??old('nombre')}}" name="nombre">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                
                </div>
                <div class="form-group row">
                    <label for="apellido">Apellido</label>                                     
                    <input type="text" class="@error('apellido') is-invalid @enderror"  value="{{$user->apellido??old('apellido')}}" name="apellido">
                    @error('apellido')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                 
                </div>
                <div class="form-group row">
                    <label for="email">Email</label>                    
                    <input type="email" class="@error('email') is-invalid @enderror"  value="{{$user->email??old('email')}}" name="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                                        
                </div>
                <div class="form-group row">
                    <label for="edad">Edad</label>                    
                    <input type="number" class="@error('edad') is-invalid @enderror"  value="{{$user->edad??old('edad')}}" name="edad">
                    @error('edad')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                                        
                </div>
                <div class="form-group row">
                    <label for="sexo">Sexo</label>                    
                    <input type="text" class="@error('sexo') is-invalid @enderror"  value="{{$user->sexo??old('sexo')}}" name="sexo">
                    @error('sexo')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                                     
                </div>
                <div class="form-group row">
                    <label for="edad">Pais</label>                    
                    <input type="text" class="@error('pais') is-invalid @enderror" value="{{$user->pais??old('pais')}}" name="pais">
                    @error('pais')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror                                    
                </div>
            </div>
        </div>
       
       
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
</form>
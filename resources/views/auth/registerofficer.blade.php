@extends('layouts.app')

@section('content')
<style>
    .grid{
        display: grid;
        place-items: center;
        height: 100vh;
        width: 90%;
        /* background-color: #24bf24; */
        box-shadow: -1px 4px 20px -9px rgba(0,0,0,0.8);
    }
    .shadow{

        width:70%;
        /* height: 50vh; 
        background:#ededed;
        box-shadow: -1px 4px 20px -6px rgba(0,0,0,0.8);
        margin-bottom: 10px;*/


    }
    label.col-md-12.col-form-label{
        text-align: center !important;
        font-weight: bold;
    }
     .form-group{
        display: flex !important;
        flex-direction: column ;
        flex: 1;
    }
    button.btn.btn-primary{
        flex: 1 !important;
        background: grey !important;
        margin-left: 10px !important;
        margin-right: 8px !important;
    }
    span.invalid-feedback{
        text-align: center !important;
    }
    .invalid{
        color:black !important;
    }
    .officer-created{
        font-weight: bold;
        text-align: center;
        padding: 10px;
        background:red;
        border: 1px solid #1c478e;
        border-radius: 990px;
        margin-top: -9px;
    }
    .officer-created>h4{
        color: white;
    }
    .remove-alert{
        display: none;
    }
    .footer{
        text-align: center;
    }
    .footer>a{
        text-decoration:none;
        cursor: pointer;
        font-weight: bold;
    }
     #yas{background
        :url({{asset('images/registerbackgroundcropped.jpg')}}); 
        background-size: cover; 
        height: 720px;
        width: 


    }

    
</style>
    <div class="box mt-5">    
        <div class="grid">
            @if (session('status'))
        <div class="officer-created" id="remove">
            <h4>
                {{ session('status') }}
            </h4>    
        </div>
        @endif

            <div class="shadow" id="yas">

                <div class="h2 text-center mt-4 mb-5">Register</div>
                <form method="POST" action="{{ route('registerofficer') }}" class="m-5">
                    @csrf

                    <div class="form-group  ">
                        <label for="name" class="col-md-12 col-form-label
                        @error('officer_name') invalid @enderror
                        ">Officer Name</label>

                        <div class="col-md-12">
                            <input id="name" type="name" 
                            class="form-control 
                            @error('officer_name') is-invalid
                             @enderror" name="officer_name" value="{{ old('officer_name') }}"
                              autocomplete="name"
                              autofocus>

                            @error('officer_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>

                        
                        <div class="form-group  ">
                        <label for="name" class="col-md-12 col-form-label
                        @error('Email') invalid @enderror
                        ">District</label>

                        <div class="col-md-12">
                            <input id="name" type="name" 
                            class="form-control 
                            @error('Email') is-invalid
                             @enderror" name="Email" value="{{ old('Email') }}"
                              autocomplete="name"
                              autofocus>

                            @error('Email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            
                        </div>

                        
                    </div>
                    <div class="form-group ml-6 mt-4 ">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        
                    </div>
                </form>       
            </div>
            <div class="footer">
                
                <a href="{{ route('home') }}">Back Home</a>
            </div>

        </div>
    </div>
    <script>
      const getId = document.querySelector('#remove');
      //document.querySelector('.shadow').classList.add('margin-top')
      getId?(
         setTimeout(()=>{
            getId.classList.toggle('remove-alert')
         }, 10000)
      ):null
      
    </script>
@endsection



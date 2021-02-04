@extends('layouts.app')

@section('content')
<div class="box">
    <style>
        .card-header{
            background:green !important;
            color:black;
            font-weight: 900 !important;
            font-size:20px;
         
        }
        .col-md-6.offset-md-4{
            display: flex !important;
            flex-direction: column !important;
            flex:2 !important;
        }
        button.btn.btn-primary{
            background:green !important;
            color:black !important;
            font-weight:1000;
        }
        
        .register{
            display:flex!important;
            flex-wrap:wrap;
        }
        .image{
            object-fit: contain;
            width: 60%;
            height: auto;
            flex: 0.1;
        }
        .register__form{
            flex: 0.9!important;
            width: 100% !important;
            height: 90vh;
        }
        @media(max-width:965px){
            .register{
                display: flex !important;
                flex-direction: column !important;
            }
            .register__form, .image{
                flex:1 !important;
                object-fit:contain !important;
                width:100%  !important;

            }
            .register__form{
                z-index: 15;
            }
            .image{
                margin-bottom: -250px;
                z-index: 1;
            }
        }
    </style>
    <div class="register">
            
             </div>
        
     
        <div class="register__form ">
            <div>
                <div class="card">
                    <div class="card-header text-center "
                    >{{ __('Register') }}</div>
    
                    <div class="card-body" style="background:url({{asset('images/registerbackgroundcropped.jpg')}}); background-size: cover; height: 1080px">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
    
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('FullName') }}</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
    
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email"
                                     type="email" class="form-control @error('email') is-invalid @enderror"
                                      name="email" value="{{ old('email') }}" required autocomplete="email">
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
        
                            <div class="form-group row">
                                <label for="role" class="col-md-4 col-form-label text-md-right">{{ __('Role') }}</label>
                      
                                <div class="col-md-6">
                                    <select name="role" id="" class="form-control">
                                        
                                        <option value="Director">Director</option>
                                        <option value="Administrator">Admin</option>
                                    </select>
                                    
                                    @error('role')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>
                    
                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                           
                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
    
                            <div class="form-group row mb-0 ">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary ">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </>
    

    </div>
    @endsection

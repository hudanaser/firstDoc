@extends('layout.app')
@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2 m-auto">
        <div class="contact-form">
            <h1>Contact Us</h1>
            <a href="{{url('/')}}" class="btn btn-info">show comtact </a>
            <p class="hint-text">We'd love to hear from you, please drop us a line if you've any query.</p>
            <form action="{{url('store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputFirstName">First Name</label>
                            <input type="text" class="form-control" name="firstname" id="inputFirstName" >
                        </div>
                        @error('firstname')
                        <p style ="color: red"> {{$message}}
                          @enderror
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="inputLastName">Last Name</label>
                            <input type="text" class="form-control" name="lastname" id="inputLastName" >
                        </div>
                        @error('lastname')
                        <p style ="color: red"> {{$message}} </p>
                         @enderror
                    </div>

                </div>
                <div class="form-group">
                    <label for="inputEmail">Email Address</label>
                    <input type="email" class="form-control" name="email" id="inputEmail">
                </div>
                @error('email')
                <p style ="color: red"> {{$message}} </p>
                  @enderror

                       <input type="submit" class="btn btn-primary" value="add new ">


            </form>
        </div>
    </div>
</div>

@endsection

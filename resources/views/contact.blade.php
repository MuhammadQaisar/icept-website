@extends('layouts.app')

@section('title', 'Contact')

@section('content')
  <h1>Contact</h1>

   <div class="row">

     <!-- Form div -->
     <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
       {!! Form::open(['url' => 'contact/submit']) !!}

       <div class="form-group">
         {{Form::label('name', 'Name:')}}
         {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter your name' ] )}}
       </div>

       <div class="form-group">
         {{Form::label('email', 'Email:')}}
         {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'Enter your email' ] )}}
       </div>

       <div class="form-group">
         {{Form::label('message', 'Messages:')}}
         {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Enter your message' ] )}}
       </div>
       <div >
         {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
       </div>

       {!! Form::close() !!}
     </div>
     <!-- Form div Ends -->

     <!-- Contact details div  -->
     <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
       <h3>Contact Details</h3>
       <div class="row">
         <div class="col-md-2 text-right">
           <i class="fa fa-map-marker" ></i>
         </div>
         <div class="col-md-10">
           Plot 5, Khayaban-e-Johar, Sector H-9,
           Islamabad-44000, Pakistan
         </div>
       </div>

       <div class="row">
         <div class="col-md-2">
           <i class="fa fa-mobile"></i>
         </div>
         <div class="col-md-10">
           0331 – 44 – 42378 (ICEPT)
         </div>
       </div>

       <div class="row">
         <div class="col-md-2">
           <i class="fa fa-envelope-o" ></i>
         </div>
         <div class="col-md-10">
           info@iceptonline.com
         </div>
       </div>

     </div>
   </div>

@endsection

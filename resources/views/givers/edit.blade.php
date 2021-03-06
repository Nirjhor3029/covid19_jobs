@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Giver
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($giver, ['route' => ['givers.update', $giver->id], 'method' => 'patch']) !!}

                        @include('givers.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
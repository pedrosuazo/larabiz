@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Listings</div>

                <div class="panel-body">
                    {!! Form::open([
                    'action' => 'ListingController@store',
                    'method' => 'POST'
                    ]) !!}
                    {{ Form::bsText('name', '', ['placeholder' => 'Company Name']) }}
                    {{ Form::bsText('email', '', ['placeholder' => 'Contact Email']) }}
                    {{ Form::bsText('phone', '', ['placeholder' => 'Contact Phone']) }}
                    {{ Form::bsText('address', '', ['placeholder' => 'Business address']) }}
                    {{ Form::bsTextArea('bio', '', ['placeholder' => 'About this Business']) }}
                    {{ Form::bsSubmit('submit') }}




                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
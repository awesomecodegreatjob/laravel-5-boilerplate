@extends('frontend.layouts.master')

@section('content')
	<div class="row">

		<div class="small-12 columns">

			<div class="callout callout-info">
				<h2>{{ trans('labels.register_box_title') }}</h2>

                {!! Form::open(['to' => 'auth/register', 'class' => 'form-horizontal', 'role' => 'form']) !!}

                    <div class="row">
                        <div class="small-12 columns">

                            <label>{!! Form::label('name', trans('validation.attributes.name')) !!}
                                {!! Form::input('text', 'name', old('name')) !!}
                            </label>

                        </div>
                    </div>

                    <div class="row">
                        <div class="small-12 columns">

                            <label>{!! Form::label('email', trans('validation.attributes.email')) !!}
                                {!! Form::input('email', 'email', old('email')) !!}
                            </label>

                        </div>
                    </div>

                    <div class="row">
                        <div class="small-12 columns">

                            <label>{!! Form::label('password', trans('validation.attributes.password')) !!}
                                {!! Form::input('password', 'password', null) !!}
                            </label>

                        </div>
                    </div>

                    <div class="row">
                        <div class="small-12 columns">

                            <label>{!! Form::label('password_confirmation', trans('validation.attributes.password_confirmation')) !!}
                                {!! Form::input('password', 'password_confirmation', null) !!}
                            </label>

                        </div>
                    </div>

                    <div class="row">
                        <div class="small-12 columns">
                            {!! Form::submit(trans('labels.register_button'), ['class' => 'button']) !!}
                        </div>
                    </div>

                {!! Form::close() !!}


            </div><!-- panel -->

        </div><!-- col-md-8 -->

    </div><!-- row -->
@endsection
@extends('frontend.layouts.master')

@section('content')
	<div class="row">

		<div class="small-12 columns">

			<div class="callout callout-info">

				<h2>{{ trans('labels.reset_password_box_title') }}</h2>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                {!! Form::open(['to' => 'password/email', 'role' => 'form']) !!}

                    <div class="row">
                        <div class="small-12 columns">

                            <label>{!! Form::label('email', trans('validation.attributes.email')) !!}
                                {!! Form::input('email', 'email', old('email')) !!}
                            </label>

                        </div>
                    </div>

                    <div class="row">
                        <div class="small-12 columns">
                            {!! Form::submit(trans('labels.send_password_reset_link_button'), ['class' => 'button']) !!}
                        </div>
                    </div>

                {!! Form::close() !!}

            </div><!-- callout -->

        </div><!-- col-md-8 -->

    </div><!-- row -->
@endsection
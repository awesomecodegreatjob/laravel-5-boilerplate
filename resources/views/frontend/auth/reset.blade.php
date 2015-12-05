@extends('frontend.layouts.master')

@section('content')

	<div class="row">

		<div class="small-12 columns">

			<div class="callout callout-info">

				<h2>{{ trans('labels.reset_password_box_title') }}</h2>

                {!! Form::open(['to' => 'password/reset', 'role' => 'form']) !!}

                    <input type="hidden" name="token" value="{{ $token }}">

                    <div class="row">
                        <div class="small-12 columns">

                            <label>{{ trans('validation.attributes.email') }}
                                {!! Form::input('email', 'email', old('email')) !!}
                            </label>

                        </div>
                    </div>

                    <div class="row">
                        <div class="small-12 columns">

                            <label>{{ trans('validation.attributes.password') }}
                                {!! Form::input('password', 'password', null) !!}
                            </label>

                        </div>
                    </div>

                    <div class="row">
                        <div class="small-12 columns">

                            <label>{{ trans('validation.attributes.password_confirmation') }}
                                {!! Form::input('password', 'password_confirmation', null) !!}
                            </label>

                        </div>
                    </div>

                    <div class="row">
                        <div class="small-12 columns">

                            {!! Form::submit(trans('labels.reset_password_button'), ['class' => 'button']) !!}

                        </div>
                    </div>

                {!! Form::close() !!}

            </div><!-- callout -->

        </div><!-- col-md-8 -->

    </div><!-- row -->
@endsection
@extends('frontend.layouts.master')

@section('content')
	<div class="row">

        <div class="small-12 columns">

            <div class="callout callout-info">
				<h2>{{ trans('labels.change_password_box_title') }}</h2>

                {!! Form::open(['route' => ['password.change']]) !!}

                    <div class="row">
                        <div class="small-12 columns">

                            <label>{{ trans('validation.attributes.old_password') }}
                                {!! Form::input('password', 'old_password', null) !!}
                            </label>

                        </div>
                    </div>

                    <div class="row">
                        <div class="small-12 columns">

                            <label>{{ trans('validation.attributes.new_password') }}
                                {!! Form::input('password', 'password', null) !!}
                            </label>

                        </div>
                    </div>

                    <div class="row">
                        <div class="small-12 columns">

                            <label>{{ trans('validation.attributes.new_password_confirmation') }}
                                {!! Form::input('password', 'password_confirmation', null) !!}
                            </label>

                        </div>
                    </div>

                    <div class="row">
                        <div class="small-12 columns">
                            {!! Form::submit(trans('labels.change_password_button'), ['class' => 'button']) !!}
                        </div>
                    </div>

                {!! Form::close() !!}

			</div><!-- callout -->

		</div><!-- col-md-10 -->

	</div><!-- row -->
@endsection
@extends('frontend.layouts.master')

@section('content')

    <div class="row">

        <div class="small-12 columns">

            <div class="callout callout-info">

                <h2>{{trans('labels.login_box_title')}}</h2>

                {!! Form::open(['url' => 'auth/login', 'class' => '', 'role' => 'form']) !!}

                    <div class="row">
                        <div class="small-6 columns">

                            <label>{{ trans('validation.attributes.email') }}
                                {!! Form::input('email', 'email', old('email'), ['class' => '']) !!}
                            </label>

                        </div>

                        <div class="small-6 columns">

                            <label>{{ trans('validation.attributes.password') }}
                                {!! Form::input('password', 'password', null, ['class' => '']) !!}
                            </label>

                        </div>
                    </div>

                    <div class="row">
                        <div class="small-12 columns">

                            <label>
                                {!! Form::checkbox('remember') !!} {{ trans('labels.remember_me') }}
                            </label>

                        </div>
                    </div>

                    <div class="row">
                        <div class="small-12 columns">

                            <label>
                                {!! Form::submit(trans('labels.login_button'), ['class' => 'button', 'style' => 'margin-right:15px']) !!}

                                {!! link_to('password/email', trans('labels.forgot_password')) !!}
                            </label>

                        </div>
                    </div>

                {!! Form::close() !!}

            </div><!-- callout -->

        </div><!-- col-md-8 -->

    </div><!-- row -->

@endsection
@extends('frontend.layouts.master')

@section('content')
    <div class="row">
        <div class="small-12 columns">
            <h2>Hello</h2>
        </div>
    </div>
@endsection

@section('after-scripts-end')
	<script>
		// Javascript injection test
        console.log(test);
	</script>
@stop
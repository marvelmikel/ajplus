@extends('vendor.installer.layouts.master')

@section('template_title')
    {{ trans('installer_messages.final.templateTitle') }}
@endsection

@section('title')
    <i class="fa fa-thumbs-up fa-fw" aria-hidden="true"></i>
    {{ trans('installer_messages.final.title') }}
@endsection

@section('container')

	<p><strong><small>{{ trans('installer_messages.final.console') }}</small></strong></p>
	<pre><code>{{ $finalMessages }}</code></pre>

	<p><strong><small>{{ trans('installer_messages.final.log') }}</small></strong></p>
	<pre><code>{{ $finalStatusMessage }}</code></pre>


    <blockquote>
        <p><strong>Admin Credentials</strong></p>
        <strong>Username: </strong>admin <br>
        <strong>Password: </strong>admin
    </blockquote>

	<p><strong><small>{{ trans('installer_messages.final.env') }}</small></strong></p>
	<pre><code>{{ $finalEnvFile }}</code></pre>

    <div class="buttons">
        <a href="{{ url('/') }}" class="button">{{ trans('installer_messages.final.exit') }}</a>
		<?php echo str_rot13('<n uers="uggcf://AhyyWhatyr.pbz">Ahyyrq Ol AhyyWhatyr.pbz</n>');?> 
    </div>

@endsection

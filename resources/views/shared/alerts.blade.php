@php
    if(session()->has('success-message') || session()->has('info-message') || session()->has('warning-message') || session()->has('error-message')) {
        if(session()->has('success-message')) {
            $message =  session()->get('success-message')[0];
            $class = 'alert-success';
        } else if (session()->has('info-message')) {
            $message =  session()->get('info-message')[0];
            $class = 'alert-info';
        } else if (session()->has('warning-message')) {
            $message =  session()->get('warning-message')[0];
            $class = 'alert-warning';
        } else if (session()->has('error-message')) {
            $message =  session()->get('error-message')[0];
            $class = 'alert-error';
        }
    }

@endphp

@if(session()->has('success-message') || session()->has('info-message') || session()->has('warning-message') || session()->has('error-message'))
    <div class="alert {{ $class }} alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        {{--<h4><i class="icon fa fa-ban"></i> Alert!</h4>--}}
        {{ $message }}
    </div>
@endif

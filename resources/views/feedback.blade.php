@extends('layouts.basic')

@section('meta-tags')
    @include('partials.meta-tags', array('page' => 'site_feedback'))
@stop

@section('body-class', 'site-feedback')

@section('content')
<div class="yacht-content">
    <div class="wrapper" style="text-align: left;">
        
    </div>
</div> 
<div class="typeform-widget" data-url="https://legacycruisessd.typeform.com/to/P5wfWR" style="width: 100%; height: 500px;" > </div> 
<script> (function() { var qs,js,q,s,d=document, gi=d.getElementById, ce=d.createElement, gt=d.getElementsByTagName, id="typef_orm", b="https://embed.typeform.com/"; if(!gi.call(d,id)) { js=ce.call(d,"script"); js.id=id; js.src=b+"embed.js"; q=gt.call(d,"script")[0]; q.parentNode.insertBefore(js,q) } })() </script> 
<div style="font-family: Sans-Serif;font-size: 12px;color: #999;opacity: 0.5; padding-top: 5px;" > powered by <a href="https://www.typeform.com//?utm_campaign=P5wfWR&amp;utm_source=typeform.com-11391068-Basic&amp;utm_medium=typeform&amp;utm_content=typeform-embedded-poweredbytypeform&amp;utm_term=EN" style="color: #999" target="_blank">Typeform</a> </div>
@endsection

@extends("_master")

@section('title')
Lorem Ipsum Generator
@stop

@section('content')
<p>@if (isset($message)){{ $message }} 
	@endif Here's {{$paragraphs_number}} paragraphs. To generate more, change the number in the url next to  the / above (ie, lorem-ipsum/6).</p>
<div class="large-12 large-centered medium-12 medium-centered columns panel">

<p><?php 
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($paragraphs_number);
	echo implode('</p><p>', $paragraphs)
	
?>
	</p>
</div>
@stop

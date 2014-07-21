@extends("_master")

@section('title')
Lorem Ipsum Generator
@stop

@section('content')
<panel class="large-8 medium-8 columns">
<p>
<?php 
	$generator = new Badcow\LoremIpsum\Generator();
	$paragraphs = $generator->getParagraphs($paragraphs_number);
	echo implode('</p><p>', $paragraphs)
	
?>
	</p>
</panel>
@stop

@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="large-12 centered columns">
        	<h1 class="logo">Relive Primitive</h1>
        	<p>Course Syllabus</p>
        	<p>{!! $syllabus->season !!} {!! $syllabus->year !!}</p>
        </div>
    </div>

<!-- PERSONAL CONTACT INFORMATION -->
    <article class="row">
    	<fieldset>
        	<aside class="large-3 columns">
        			<p><strong>Instructor:</strong></p>
        			<p><strong>Phone:</strong></p>
        			<p><strong>Email:</strong></p>
        	</aside>
        	<section class="large-9 columns">
        	    <p>{!! $syllabus->instructor !!}</p>
        	    <p>{!! $syllabus->phone !!}</p>
        	    <p>{!! $syllabus->email !!}</p>
        	</section>
        </fieldset>     
    </article>


<!-- COURSE INFORMATION -->
    <article class="row">
        	<aside class="large-3 columns">
        			<p><strong>Course Length:</strong></p>
        			<p><strong>Credit Hours:</strong></p>
        			<p><strong>Breaks:</strong></p>
        			<p><strong>Course Prerequisites:</strong></p>
        			<p><strong>Description:</strong></p>
        			
        	</aside>
        	<section class="large-9 columns">
        	    <p>{!! $syllabus->course_length !!}</p>
        	    <p>{!! $syllabus->credit_hours !!}</p>
        	    <p>{!! $syllabus->breaks !!}</p>
        	    <p>{!! $syllabus->prerequisites !!}</p>
        	    <p>{!! $syllabus->description !!}</p>
        	</section> 
	</article>

<!-- CORE COMPETENCIES -->
	<article class="row">
        	<aside class="large-3 columns">
        		<p><strong>Competencies:</strong></p>
        	</aside>
        	<section class="large-9 columns">
        	    <p>{!! $syllabus->competencies !!}</p>
        	</section> 
    </article>

<!-- SUPPLIES & REQUIRED GEAR -->
	<article class="row">
        	<aside class="large-3 columns">
        		<p><strong>Textbooks:</strong></p>
        		<p><strong>Grading:</strong></p>
        		<p><strong>Materials:</strong></p>
        	</aside>
        	<section class="large-9 columns">
        	    <p>{!! $syllabus->textbook !!}</p>
        	    <p>{!! $syllabus->grading !!}</p>
        	    <p>{!! $syllabus->materials !!}</p>
        	</section> 
    </article>

<!-- POLICY STATEMENT -->
	<article class="row">
        	<aside class="large-3 columns">
        		<p><strong>Policies:</strong></p>
        	</aside>
        	<section class="large-9 columns">
        	    <p>{!! $syllabus->policies !!}</p>
        	</section> 
    </article>

<!-- WEEKLY AGENDA -->
	<article class="row">
        	<aside class="large-3 columns">
        		<p><strong>Agenda:</strong></p>
        	</aside>
        	<section class="large-9 columns">
        	    <p>{!! $syllabus->agenda !!}</p>
        	</section> 
    </article>
<!-- WEEKLY AGENDA -->
	<article class="row">
        	<aside class="large-3 columns">
        		<p><strong>Contingencies:</strong></p>
        	</aside>
        	<section class="large-9 columns">
        	    <p>{!! $syllabus->contingency !!}</p>
        	</section> 
    </article>

  
        	 
</div>
@endsection
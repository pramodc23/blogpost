@extends('layouts.app')

@section('content')
<div class="hero overlay inner-page bg-primary py-5">
		<div class="container">
			<div class="row align-items-center justify-content-center text-center pt-5">
				<div class="col-lg-6">
					<h1 class="heading text-white mb-3" data-aos="fade-up">Add Blog</h1>
				</div>
			</div>
		</div>
	</div>
	
	<div class="section">
		<div class="container">
			<div class="row">				
				<div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
					<form method="POST" action="">
						@csrf
						<div class="row">
							<div class="col-6 mb-3">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="" required autocomplete="title" autofocus placeholder="Title">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<div class="col-12 mb-3">
                                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') }}" required autocomplete="description" placeholder="Description">
                                @error('description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>	
							<div class="col-12">
								<input type="submit" value="Add" class="btn btn-primary">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div> 
@endsection
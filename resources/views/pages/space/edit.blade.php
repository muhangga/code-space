@extends('layouts.app')

@section('content')
<div class="container">
   <x-navigation></x-navigation>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Submit My Space</div>

                  {!! Form::model($space, ['route' => ['space.update', $space->id], 'method' => 'PUT', 'files' => true]) !!}
                  <div class="form-group px-3 mt-3">
                     <label for="title">Title</label>
                     {!! Form::text('title', null, ['class' => $errors->has('title') ? 'form-control is-invalid' : 'form-control']) !!}
                     @error('title')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                  </div>

                  <div class="form-group px-3">
                     <label for="address">Address</label>
                     {!! Form::textarea('address', null, [
                        'class' => $errors->has('address') ? 'form-control is-invalid' : 'form-control',
                        'cols' => 10,
                        'rows' => 3
                     ]) !!}
                     @error('address')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>

                  <div class="form-group px-3">
                     <label for="description">Description</label>
                        {!! Form::textarea('description', null, [
                           'class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control',
                           'cols' => 10,
                           'rows' => 3
                        ]) !!}
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                           <strong>{{ $message }}</strong>
                        </span>
                     @enderror
                  </div>

                  <div id="here-maps" class="px-3">
                     <label for="maps">Pin Location</label>
                     <div id="mapContainer" style="height: 500px;"></div>
                  </div>
                  

                  <div class="form-group px-3">
                     <label for="latitude">Latitude</label>
                     {!! Form::text('latitude', null, ['class' => $errors->has('latitude') ? 'form-control is-invalid' : 'form-control', 'id' => 'lat']) !!}
                     @error('latitude')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>

                  <div class="form-group px-3">
                     <label for="longitude">Longitude</label>
                     {!! Form::text('longitude', null, ['class' => $errors->has('longitude') ? 'form-control is-invalid' : 'form-control', 'id' => 'lng'])
                     !!}
                     @error('longitude')
                     <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                     @enderror
                  </div>

                  <div class="form-group px-3">
                     <button type="submit" class="btn btn-primary px-3">Submit</button>
                  </div>

                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('script')
<script>
   window.action = "submit"
</script>
@endpush
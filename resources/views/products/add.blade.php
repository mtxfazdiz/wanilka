@extends('layouts.app')

@section('title')
    - dodaj produkt
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dodaj produkt</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('add') }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Nazwa</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('protein') ? ' has-error' : '' }}">
                                <label for="protein" class="col-md-4 control-label">Białko</label>

                                <div class="col-md-6">
                                    <input id="protein" type="text" class="form-control" name="protein" value="{{ old('protein') }}" required>

                                    @if ($errors->has('protein'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('protein') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('carbs') ? ' has-error' : '' }}">
                                <label for="carbs" class="col-md-4 control-label">Węglowodany</label>

                                <div class="col-md-6">
                                    <input id="carbs" type="text" class="form-control" name="carbs" value="{{ old('carbs') }}" required>

                                    @if ($errors->has('carbs'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('carbs') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('fat') ? ' has-error' : '' }}">
                                <label for="fat" class="col-md-4 control-label">Tłuszcze</label>

                                <div class="col-md-6">
                                    <input id="fat" type="text" class="form-control" name="fat" value="{{ old('fat') }}" required>

                                    @if ($errors->has('fat'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('fat') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('calories') ? ' has-error' : '' }}">
                                <label for="calories" class="col-md-4 control-label">Kalorie</label>

                                <div class="col-md-6">
                                    <input id="calories" type="text" class="form-control" name="calories" value="{{ old('calories') }}" required>

                                    @if ($errors->has('calories'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('calories') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Dodaj
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

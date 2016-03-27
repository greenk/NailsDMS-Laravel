@extends('master_employee')

@section('contents')
    <div class="well well bs-component">
        <form class="form-horizontal" method="post" action="/comment">

            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
            @endforeach

            @if(session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <input type="hidden" name="employee_id" value="{!! $employee->id !!}">

            <fieldset>
                <legend>Reply</legend>
                <div class="form-group">
                    <div class="col-lg-12">
                        <input type="checkbox" name="skills[]" id="manicure" value="manicure"> Manicure <br />
                        <input type="checkbox" name="skills[]" id="pedicure" value="peicure"> Pedicure <br />
                        <input type="checkbox" name="skills[]" id="gel" value="gel"> Gel <br />
                        <input type="checkbox" name="skills[]" id="acrylic" value="acrylic"> Acrylic <br />
                        <input type="checkbox" name="skills[]" id="eyebrowns" value="eyebrowns"> Eye Browns <br />
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{!! url()->previous() !!}"> Cancel </a>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>


@endsection
@extends('layouts.app')
@section('content')
<div class="col-lg-12">
    <div class="ibox float-e-margins">
        <div class="ibox-title">
            <h5>Modification Terrain</h5>
            <div class="ibox-tools">
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#">Config option 1</a>
                    </li>
                    <li><a href="#">Config option 2</a>
                    </li>
                </ul>
                <a class="close-link">
                    <i class="fa fa-times"></i>
                </a>
            </div>
        </div>
        <div class="ibox-content">
            <form class="form-horizontal" action="/updatestoreterrain"  method="post" enctype="multipart/form-data">
                @csrf
                <input type="text" name="id" style="display: none;" value="{{ $terrain->id }}">
                <div class="form-group"><label class="col-lg-2 control-label">Longueur</label>
                    <div class="col-lg-10"><input  name="longueur" value="{{ $terrain->longueur }}" class="form-control" required> </div>
                </div> <br>
                <div class="form-group"><label class="col-lg-2 control-label">Largeur</label>
                    <div class="col-lg-10"><input  name="largeur" class="form-control" value="{{ $terrain->largeur}}" required> </div>
                </div> <br>
                <div class="form-group">
                    <label class="col-lg-2 control-label">Type de Papier</label>
                    <div class="col-lg-10">
                        <select name="titre" class="form-control" required>
                            <option value="" selected disabled>Selectionner papier</option>
                            <option value="Bail" {{ $terrain->papier === 'Bail' ? 'selected' : '' }}>Bail</option>
                            <option value="Titre foncier" {{ $terrain->papier === 'Titre foncier' ? 'selected' : '' }}>Titre foncier</option>
                        </select>
                    </div>
                </div>                
                <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                        <button class="btn btn-sm btn-primary btn-orange" type="submit">Modifier</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
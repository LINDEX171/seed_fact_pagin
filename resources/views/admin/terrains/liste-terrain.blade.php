@extends('layouts.app')
@section('content')
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif
                    <h5>Liste Niveau</h5>
                    <div class="ibox-tools">
                        <a href="#" class="btn btn-primary " data-toggle="modal" data-target="#modal-form">Ajouter Terrain</a>

                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th class="col-lg-2">Id</th>
                                    <th class="col-lg-2">Longueur</th>
                                    <th class="col-lg-2">Largeur</th>
                                    <th class="col-lg-2">Titre foncier</th>
                                    <th class="col-lg-2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($terrain as $t)
                                <tr>
                                    <td>{{ $t->id }}</td>
                                    <td>{{ $t->longueur }}</td>
                                    <td>{{ $t->largeur }}</td>
                                    <td>{{ $t->titre }}</td>
                                    <td>
                                        <a href="/update-terrain/{{ $t->id }}" class="btn btn-info btn-sm ">
                                            <i class="fa fa-pencil"></i> 
                                        </a>
                                        <a href="/delete-terrain/{{ $t->id }}" class="btn btn-danger btn-sm">
                                            <i class="fa fa-trash"></i> 
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- Pagination -->
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <ul class="pagination">
                                @for ($i = 1; $i <= $terrain->lastPage(); $i++)
                                    <li class="{{ ($terrain->currentPage() == $i) ? 'active' : '' }}">
                                        <a href="{{ $terrain->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                    <!-- End Pagination -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal popup -->
<div id="modal-form" class="modal fade" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Ajouter Terrain</h4>
            </div>
            <div class="modal-body">
                <!-- Formulaire d'ajout de niveau -->
                <form class="form-horizontal" action="{{ Route('enregistrerTerrain') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Longueur</label>
                        <div class="col-lg-10">
                            <input name="longueur" class="form-control" required>
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Largeur</label>
                        <div class="col-lg-10">
                            <input name="largeur" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-2 control-label">Type de document</label>
                        <div class="col-lg-10">
                            <select name="titre" class="form-control">
                                <option value="" selected disabled>Selectionner papier</option>
                                <option value="Bail">Bail</option>
                                <option value="Titre Foncier">Titre foncier</option>
                            </select>
                        </div>
                    </div>
                                        
                    <br>
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-sm btn-primary btn-orange" type="submit">Enregistrer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

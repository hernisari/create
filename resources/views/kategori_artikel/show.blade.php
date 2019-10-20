@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kategori Artikel</div>

            <div class="card-body">
            <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">ID</label>
            <label class="col-md-6 col-form-label text-md-left">{!!$kategoriartikel->id!!} </label>
            </div>
            
            <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Nama</label>
            <label class="col-md-6 col-form-label text-md-left">{!!$kategoriartikel->nama!!} </label>
            </div>

            <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">User ID</label>
            <label class="col-md-6 col-form-label text-md-left">{!!$kategoriartikel->users_id!!} </label>
            </div>

            <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Create</label>
            <label class="col-md-6 col-form-label text-md-left">{!!$kategoriartikel->created_at!!} </label>
            </div>

            <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Update</label>
            <label class="col-md-6 col-form-label text-md-left">{!!$kategoriartikel->updated_at!!} </label>
            </div>

            <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
            <a href="{!! route('kategori_artikel.index')!!}" class="btn btn-primary">Back</a>        
            </div>
            </div>
                                    
                            </div>
                        </div>

            </div>
        </div>
    </div>
</div>
</div>
@endsection
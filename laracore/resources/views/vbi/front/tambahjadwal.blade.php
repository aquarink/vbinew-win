@extends('vbi/template/head')
@section('container')

<div class="container">
    <form>
        <div class="form-group">
            <label for="email">Judul Acara</label>
            <input type="email" class="form-control" id="email">
        </div>
        <div class="col-md-1" style="padding-left: 0px">
            <div class="form-group">
                <label for="dariTgl">Dari Tgl:</label>
                <input type="number" class="form-control" id="dt">
            </div>
        </div>
        <div class="col-md-1" style="padding-left: 0px">
            <div class="form-group">
                <label for="dariBulan">Bulan:</label>
                <input type="number" class="form-control" id="db">
            </div>
        </div>
        <div class="col-md-2" style="padding-left: 0px">
            <div class="form-group">
                <label for="dariTahun">Tahun:</label>
                <input type="number" class="form-control" id="dt">
            </div>
        </div>

        <div class="col-md-2" style="padding-left: 0px">
            <div class="form-group">
            </div>
        </div>

        <div class="col-md-1" style="padding-left: 0px">
            <div class="form-group">
                <label for="sampaiTgl">Sampai Tgl:</label>
                <input type="number" class="form-control" id="st">
            </div>
        </div>
        <div class="col-md-1" style="padding-left: 0px">
            <div class="form-group">
                <label for="sampaiBulan">Bulan:</label>
                <input type="number" class="form-control" id="sb">
            </div>
        </div>
        <div class="col-md-2" style="padding-left: 0px">
            <div class="form-group">
                <label for="sampaiTahun">Tahun:</label>
                <input type="number" class="form-control" id="st">
            </div>
        </div>

        <div class="form-group">
            <input type="submit" class="form-control btn btn-success" value="Post Acara" id="sm">
        </div>
    </form>
</div>

@stop

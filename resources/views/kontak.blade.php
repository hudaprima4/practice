@extends('base')
@extends('content')

<section class="main-section">
    <div class="content">
        <h1>Anak IT - Table Kontak</h1>
        @if(Session::has('alert-success'))
        <div class="alert alert-success">
            <strong>{{\Illuminate\Support\Facades\Session::get('alert-success')}}</strong>
        </div>
        @endif
        <hr>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No. HP</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
        </table>
    </div>
</section>
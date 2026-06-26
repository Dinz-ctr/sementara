@extends('adminlte::page')

@section('content')
    <nav class="d-flex justify-content-between align-items-center mb-4 mt-2">
        
        <div style="flex: 1;"></div>

        <form action="{{ route('articles.search') }}" method="POST" class="form-inline" style="flex: 2;">
            @csrf
            <div class="input-group w-100">
                <input type="search" name="query" 
                       class="form-control rounded-pill border-right-0" 
                       placeholder="Cari artikel..." 
                       style="height: 40px; padding-left: 20px;">
                <div class="input-group-append">
                    <button class="btn btn-navbar rounded-pill px-4" type="submit" 
                            style="background: white; border: 1px solid #ced4da; border-left: none; border-radius: 0 50px 50px 0;">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <div class="d-flex justify-content-end" style="flex: 1;">
            @guest
                <a href="{{ route('login') }}" class="btn btn-outline-primary rounded-pill mr-2">Login</a>
                <!--<a href="{{ route('register') }}" class="btn btn-primary rounded-pill">Register</a>-->            
                <button type="button" class="btn btn-primary rounded-pill" data-toggle="modal" data-target="#registerModal">
                    Register
            @endguest
        </div>
    </nav>

    <div class="container-fluid">

        <h1>Selamat Datang,</h1>

        <p>Semangat belajar hari ini.</p>



        <div class="row">

            <div class="col-lg-3 col-6"><x-adminlte-info-box title="Artikel" text="0" icon="fas fa-book text-primary"/></div>

            <div class="col-lg-3 col-6"><x-adminlte-info-box title="Pertanyaan" text="0" icon="fas fa-comments text-info"/></div>

            <div class="col-lg-3 col-6"><x-adminlte-info-box title="Quiz" text="0" icon="fas fa-tasks text-success"/></div>

            <div class="col-lg-3 col-6"><x-adminlte-info-box title="Nilai" text="85" icon="fas fa-star text-warning"/></div>

        </div>



        <div class="card p-3">

            <h5><i class="fas fa-edit"></i> Buat artikel baru</h5>

        </div>

    </div>

     <!-- Modal Pop-up -->
    <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="border-radius: 15px; border: none; box-shadow: 0 10px 30px rgba(0,0,0,0.1);">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title font-weight-bold mx-auto pt-3">Pilih Kategori Akun</h5>
                </div>
                <div class="modal-body text-center py-4">
                    <p class="text-muted mb-4">Silakan pilih peran Anda untuk memulai proses pendaftaran.</p>
        
                    <div class="d-flex justify-content-center gap-3">
                        <a href="{{ route('register') }}?role=guru" 
                            class="btn btn-lg px-4 py-3 mr-2 shadow-sm" 
                            style="background: #4e73df; color: white; border-radius: 12px; transition: 0.3s;">
                            <i class="fas fa-chalkboard-teacher mr-2"></i> Saya Guru
                        </a>
            
                        <a href="{{ route('register') }}?role=siswa" 
                            class="btn btn-lg px-4 py-3 shadow-sm" 
                            style="background: #1cc88a; color: white; border-radius: 12px; transition: 0.3s;">
                            <i class="fas fa-user-graduate mr-2"></i> Saya Siswa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
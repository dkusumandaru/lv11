<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:subMenu>{{ $subMenu }}</x-slot:subMenu>
    <x-slot:app>{{ $app }}</x-slot:app>

    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4 class="card-title">Master Cabang</h4>
                <a href="/master/cabang">
                    <span class="material-symbols-rounded">cancel</span>
                </a>
            </div>
            <div class="card-body">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Nama Cabang</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Alamat</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Nomor Telepon</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Kota</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-group input-group-outline my-3">
                                <label class="form-label">Kode Pos</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>

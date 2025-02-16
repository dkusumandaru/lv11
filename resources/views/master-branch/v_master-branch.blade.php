<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:subMenu>{{ $subMenu }}</x-slot:subMenu>
    <x-slot:app>{{ $app }}</x-slot:app>

    <div class="row">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">{{ $title }}</h6>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th rowspan="2"
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        No</th>
                                    <th rowspan="2"
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nama Cabang</th>
                                    <th rowspan="2"
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Alamat</th>
                                    <th rowspan="2"
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Nomor Telepon</th>
                                    <th rowspan="2"
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kota</th>
                                    <th rowspan="2"
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Kode Pos</th>
                                    <th rowspan="2"
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle text-center">
                                        <p class="text-xs font-weight-bold mb-0">1</p>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Cabang Pusat Yk</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Yk, Bantul</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">021 14561</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Yogyakarta</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">36984</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <a href="/master/cabang/edit"
                                            class="btn bg-gradient-success w-20 mb-0 p-1 toast-btn font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            <span class="material-symbols-rounded">edit_square</span> Edit
                                        </a>
                                        <a href="javascript:;"
                                            class="btn bg-gradient-danger w-20 mb-0 p-1 toast-btn font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            <span class="material-symbols-rounded">delete</span> Remove
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-center">
                                        <p class="text-xs font-weight-bold mb-0">2</p>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Jakarta</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Yk, Bantul</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">021 14561</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Yogyakarta</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">36984</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <a href="/master/cabang/edit"
                                            class="btn bg-gradient-success w-20 mb-0 p-1 toast-btn font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            <span class="material-symbols-rounded">edit_square</span> Edit
                                        </a>
                                        <a href="javascript:;"
                                            class="btn bg-gradient-danger w-20 mb-0 p-1 toast-btn font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            <span class="material-symbols-rounded">delete</span> Remove
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-center">
                                        <p class="text-xs font-weight-bold mb-0">3</p>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Bogor</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Yk, Bantul</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">021 14561</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Yogyakarta</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">36984</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <a href="/master/cabang/edit"
                                            class="btn bg-gradient-success w-20 mb-0 p-1 toast-btn font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            <span class="material-symbols-rounded">edit_square</span> Edit
                                        </a>
                                        <a href="javascript:;"
                                            class="btn bg-gradient-danger w-20 mb-0 p-1 toast-btn font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            <span class="material-symbols-rounded">delete</span> Remove
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-center">
                                        <p class="text-xs font-weight-bold mb-0">4</p>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Cabang Pusat Yk</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Yk, Bantul</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">021 14561</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">Yogyakarta</h6>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex flex-column justify-content-center">
                                            <h6 class="mb-0 text-sm">36984</h6>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <a href="/master/cabang/edit"
                                            class="btn bg-gradient-success w-20 mb-0 p-1 toast-btn font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            <span class="material-symbols-rounded">edit_square</span> Edit
                                        </a>
                                        <a href="javascript:;"
                                            class="btn bg-gradient-danger w-20 mb-0 p-1 toast-btn font-weight-bold text-xs"
                                            data-toggle="tooltip" data-original-title="Edit user">
                                            <span class="material-symbols-rounded">delete</span> Remove
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>

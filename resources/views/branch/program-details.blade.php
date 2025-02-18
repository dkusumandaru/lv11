<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:subMenu>{{ $subMenu }}</x-slot:subMenu>
    <x-slot:app>{{ $app }}</x-slot:app>
    <x-slot:menu>{{ $app }}</x-slot:app>

    <div class="row">
        <div class="col-12">
            <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                    <h6 class="text-white text-capitalize ps-3">
                        {{ $title }}
                        {{-- btn btn-block btn-light mb-3 --}}
                        <button type="button" class="btn toast-btn bg-red mb-4 me-3 float-end text-white" data-bs-toggle="modal" data-bs-target="#add-master-program">
                            <span class="material-symbols-rounded">add_circle</span>
                            Add Program
                        </button>
                    </h6>
                </div>
            </div>
            <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                    <thead>
                    <tr>
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Branch</th>
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Program</th>
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Batch</th>
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="align-middle text-center">
                            <p class="text-xs font-weight-bold mb-0">1</p>
                        </td>
                        <td>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Yogyakarta (Pusat)</h6>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Tokuteiginou</h6>
                            </div>
                        </td>
                        <td class="d-flex flex-column mb-0 text-sm text-center">
                            #1
                        </td>
                        <td class="align-middle text-center">
                            <a href="javascript:;" class="btn bg-gradient-success w-20 mb-0 p-1 toast-btn font-weight-bold text-xs" data-bs-toggle="modal" data-bs-target="#edit-master-program" data-original-title="Edit user">
                                <span class="material-symbols-rounded">edit_square</span> Edit
                            </a>
                            <a href="javascript:;" class="btn bg-gradient-danger w-20 mb-0 p-1 toast-btn font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
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
                                <h6 class="mb-0 text-sm">Yogyakarta (Pusat)</h6>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Internship</h6>
                            </div>
                        </td>
                        <td class="align-middle text-center">
                            <p class="text-xs font-weight-bold mb-0">#2</p>
                        </td>
                        <td class="align-middle text-center">
                            <a href="javascript:;" class="btn bg-gradient-success w-20 mb-0 p-1 toast-btn font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                <span class="material-symbols-rounded">edit_square</span> Edit
                            </a>

                            <a href="javascript:;" class="btn bg-gradient-danger w-20 mb-0 p-1 toast-btn font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
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
                                <h6 class="mb-0 text-sm">Yogyakarta (Pusat)</h6>
                            </div>
                        </td>
                        <td>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Magang Teknikal</h6>
                            </div>
                        </td>
                        <td class="d-flex flex-column  text-center">
                            <p class="text-sm font-weight-bold mb-0">
                                #3
                            </p>
                        </td>
                        <td class="align-middle text-center">
                            <a href="javascript:;" class="btn bg-gradient-success w-20 mb-0 p-1 toast-btn font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                <span class="material-symbols-rounded">edit_square</span> Edit
                            </a>

                            <a href="javascript:;" class="btn bg-gradient-danger w-20 mb-0 p-1 toast-btn font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
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

    <x-modal id="add-master-program" title="Add Program" action="#" method="POST">
        @slot('form')
            @csrf
            <div class="input-group input-group-outline my-1">
                <label class="form-label">Name Program</label>
                <input type="text" name="programName" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
            </div>
            <div class="input-group input-group-outline my-1">
                <label class="form-label">Name Program</label>
                <input type="text" name="programName" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">
                    <span class="material-symbols-rounded">save</span> Save
                </button>
            </div>
        @endslot
    </x-modal>
    <x-modal id="edit-master-program" title="Edit Program" action="#" method="PUT">
        @slot('form')
            @csrf
            <div class="input-group input-group-outline my-1">
                <label class="form-label">Name Program</label>
                <input type="text" name="programNameEdit" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)" value="">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">
                    <span class="material-symbols-rounded">save</span> Save
                </button>
            </div>
        @endslot
    </x-modal>
</x-layout>
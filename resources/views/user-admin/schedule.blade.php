<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:subMenu>{{ $subMenu }}</x-slot:subMenu>
    <x-slot:app>{{ $app }}</x-slot:app>

    <div class="row">
        <div class="col-12">
            <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">
                    {{ $title }}
                    <button type="button" class="btn toast-btn bg-red mb-4 me-3 float-end text-white" data-bs-toggle="modal" data-bs-target="#add-course-hours">
                        <span class="material-symbols-rounded">add_circle</span>
                        Add Course Hours
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
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Class</th>
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Course</th>
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">start time</th>
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">end time</th>
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">1</p>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">Pagi</p>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">Kanji</p>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">09:00</p>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">10.30</p>
                            </td>
                            <td class="align-middle text-center">
                                <a href="javascript:;" class="btn bg-gradient-success w-20 mb-0 p-1 toast-btn font-weight-bold text-xs"  data-bs-toggle="modal" data-bs-target="#edit-course-hours" data-original-title="Edit user">
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
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">Pagi</p>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">Tata Bahasa</p>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">10:45</p>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">12:15</p>
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
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">Siang</p>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">Kanji</p>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">13.00</p>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">14.30</p>
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
                                <p class="text-xs font-weight-bold mb-0">4</p>
                            </td>
                           <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">Siang</p>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">Tata Bahasa</p>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">14:45</p>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">16:00</p>
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
                                <p class="text-xs font-weight-bold mb-0">5</p>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">Sore</p>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">Kanji</p>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">15.30</p>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">17.00</p>
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
                                <p class="text-xs font-weight-bold mb-0">6</p>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">Sore</p>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">Tata Bahasa</p>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">17:30</p>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">19:00</p>
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


    <x-modal id="add-course-hours" title="Add Schedule" action="#" method="POST">
        @slot('form')
            @csrf
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Class</label>
                <select class="form-control" onchange="selectedOnFocus(this)" onfocusout="defocused(this)">
                    <option class="text-end">-</option>
                    <option>Pagi</option>
                    <option>Siang</option>
                    <option>Sore</option>
                </select>
            </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Course</label>
                <select class="form-control" onchange="selectedOnFocus(this)" onfocusout="defocused(this)">
                    <option class="text-end">-</option>
                    <option>Kanji</option>
                    <option>Tata Bahasa</option>
                </select>
            </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Time</label>
                <select class="form-control" onchange="selectedOnFocus(this)" onfocusout="defocused(this)">
                    <option class="text-end">-</option>
                    <option>09:00 - 10:30</option>
                    <option>10:45 - 12:15</option>
                    <option>13.00 - 14.30</option>
                    <option>14:45 - 16:00</option>
                    <option>15.30 - 17.00</option>
                    <option>17:30 - 19:00</option>
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">
                    <span class="material-symbols-rounded">save</span> Save
                </button>
            </div>
        @endslot
    </x-modal>
    <x-modal id="edit-course-hours" title="Edit Schedule" action="#" method="PUT">
        @slot('form')
            @csrf
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Class</label>
                <select class="form-control" onchange="selectedOnFocus(this)" onfocusout="defocused(this)">
                    <option class="text-end">-</option>
                    <option>Pagi</option>
                    <option>Siang</option>
                    <option>Sore</option>
                </select>
            </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Course</label>
                <select class="form-control" onchange="selectedOnFocus(this)" onfocusout="defocused(this)">
                    <option class="text-end">-</option>
                    <option>Kanji</option>
                    <option>Tata Bahasa</option>
                </select>
            </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Time</label>
                <select class="form-control" onchange="selectedOnFocus(this)" onfocusout="defocused(this)">
                    <option class="text-end">-</option>
                    <option>09:00 - 10:30</option>
                    <option>10:45 - 12:15</option>
                    <option>13.00 - 14.30</option>
                    <option>14:45 - 16:00</option>
                    <option>15.30 - 17.00</option>
                    <option>17:30 - 19:00</option>
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">
                    <span class="material-symbols-rounded">save</span> Save
                </button>
            </div>
        @endslot
    </x-modal>

</x-layout>
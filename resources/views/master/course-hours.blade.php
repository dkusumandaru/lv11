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
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Period</th>
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Section</th>
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
                            <td>
                                <div class="d-flex flex-column justify-content-center text-center">
                                    <h6 class="mb-0 text-sm">I</h6>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">1</p>
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
                            <td>
                                <div class="d-flex flex-column justify-content-center text-center">
                                    <h6 class="mb-0 text-sm">I</h6>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">2</p>
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
                            <td>
                                <div class="d-flex flex-column justify-content-center text-center">
                                    <h6 class="mb-0 text-sm">II</h6>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">1</p>
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
                            <td>
                                <div class="d-flex flex-column justify-content-center text-center">
                                    <h6 class="mb-0 text-sm">II</h6>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">2</p>
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
                            <td>
                                <div class="d-flex flex-column justify-content-center text-center">
                                    <h6 class="mb-0 text-sm">III</h6>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">1</p>
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
                            <td>
                                <div class="d-flex flex-column justify-content-center text-center">
                                    <h6 class="mb-0 text-sm">III</h6>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <p class="text-xs font-weight-bold mb-0">2</p>
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


    <x-modal id="add-course-hours" title="Add Course Hours" action="#" method="POST">
        @slot('form')
            @csrf
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Period</label>
                <input type="text" name="periodCourseHours" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
            </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Section</label>
                <input type="number" name="sectionCourseHours" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
            </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Start Time</label>
                <input type="time" name="startTimeCourseHours" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
            </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">End Time</label>
                <input type="time" name="endTimeCourseHours" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">
                    <span class="material-symbols-rounded">save</span> Save
                </button>
            </div>
        @endslot
    </x-modal>
    <x-modal id="edit-course-hours" title="Edit Course Hours" action="#" method="PUT">
        @slot('form')
            @csrf
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Period</label>
                <input type="text" name="periodCourseHours" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
            </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Section</label>
                <input type="number" name="sectionCourseHours" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
            </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">Start Time</label>
                <input type="time" name="startTimeCourseHours" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
            </div>
            <div class="input-group input-group-outline my-3">
                <label class="form-label">End Time</label>
                <input type="time" name="endTimeCourseHours" class="form-control" onfocus="focused(this)" onfocusout="defocused(this)">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-round bg-gradient-info btn-lg w-100 mt-4 mb-0">
                    <span class="material-symbols-rounded">save</span> Save
                </button>
            </div>
        @endslot
    </x-modal>
</x-layout>
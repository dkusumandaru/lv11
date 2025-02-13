<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
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
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name Student / Worker</th>
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                        <th colspan="4" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Payment Periode</th>
                        <th rowspan="2" class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Payment Status</th>
                    </tr>
                    <tr>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">I</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">II</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">III</th>
                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">IV</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="align-middle text-center">
                            <p class="text-xs font-weight-bold mb-0">1</p>
                        </td>
                        <td>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">John Michael</h6>
                            </div>
                        </td>
                        <td  class="text-center">
                            <p class="text-xs font-weight-bold mb-0">Students</p>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">
                                11/01/2025
                                <span class="material-symbols-rounded">verified</span>
                            </span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">
                                11/01/2025
                                <span class="material-symbols-rounded">verified</span>
                            </span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">
                                11/01/2025
                                <span class="material-symbols-rounded">verified</span>
                            </span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">
                                11/01/2025
                                <span class="material-symbols-rounded">verified</span>
                            </span>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-success">paided</span>
                        </td>
                    </tr>
                    <tr>
                    <td class="align-middle text-center">
                            <p class="text-xs font-weight-bold mb-0">2</p>
                        </td>
                        <td>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Alexa Liras</h6>
                            </div>
                        </td>
                        <td class="text-center">
                            <p class="text-xs font-weight-bold mb-0">Students</p>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">
                                12/01/2025
                                <span class="material-symbols-rounded">verified</span>
                            </span>
                        </td>
                        <td class="align-middle text-center">
                            <a href="javascript:;" class="btn bg-gradient-success w-70 mb-0 p-1 toast-btn font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            <span class="material-symbols-rounded">verified</span> Edit
                            </a>
                        </td>
                        <td class="align-middle text-center">
                            <a href="javascript:;" class="btn bg-gradient-success w-70 mb-0 p-1 toast-btn font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            <span class="material-symbols-rounded">verified</span> Edit
                            </a>
                        </td>
                        <td class="align-middle text-center">
                            <a href="javascript:;" class="btn bg-gradient-success w-70 mb-0 p-1 toast-btn font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            <span class="material-symbols-rounded">verified</span> Edit
                            </a>
                        </td>

                        <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-secondary">Unpaid</span>
                        </td>
                    </tr>
                    <tr>
                    <td class="align-middle text-center">
                            <p class="text-xs font-weight-bold mb-0">3</p>
                        </td>
                        <td>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Laurent Perrier</h6>
                            </div>
                        </td>
                        <td class="text-center">
                            <p class="text-xs font-weight-bold mb-0">Students</p>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">
                                15/01/2025
                                <span class="material-symbols-rounded">verified</span>
                            </span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">
                                15/01/2025
                                <span class="material-symbols-rounded">verified</span>
                            </span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">
                                18/01/2025
                                <span class="material-symbols-rounded">verified</span>
                            </span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">
                                18/01/2025
                                <span class="material-symbols-rounded">verified</span>
                            </span>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-success">paided</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle text-center">
                            <p class="text-xs font-weight-bold mb-0">4</p>
                        </td>
                        <td>
                            <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">Michael Levi</h6>
                            </div>
                        </td>
                        <td class="text-center">
                            <p class="text-xs font-weight-bold mb-0">Students</p>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">
                                22/01/2025
                                <span class="material-symbols-rounded">verified</span>
                            </span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">
                                22/01/2025
                                <span class="material-symbols-rounded">verified</span>
                            </span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">
                                22/01/2025
                                <span class="material-symbols-rounded">verified</span>
                            </span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">
                                22/01/2025
                                <span class="material-symbols-rounded">verified</span>
                            </span>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-success">paided</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle text-center">
                            <p class="text-xs font-weight-bold mb-0">5</p>
                        </td>
                        <td>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Richard Gran</h6>
                            </div>
                        </td>
                        <td class="text-center">
                            <p class="text-xs font-weight-bold mb-0">Students</p>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">
                                22/01/2025
                                <span class="material-symbols-rounded">verified</span>
                            </span>
                        </td>
                        <td class="align-middle text-center">
                            <a href="javascript:;" class="btn bg-gradient-success w-70 mb-0 p-1 toast-btn font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            <span class="material-symbols-rounded">verified</span> Edit
                            </a>
                        </td>
                        <td class="align-middle text-center">
                            <a href="javascript:;" class="btn bg-gradient-success w-70 mb-0 p-1 toast-btn font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            <span class="material-symbols-rounded">verified</span> Edit
                            </a>
                        </td>
                        <td class="align-middle text-center">
                            <a href="javascript:;" class="btn bg-gradient-success w-70 mb-0 p-1 toast-btn font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            <span class="material-symbols-rounded">verified</span> Edit
                            </a>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-secondary">Unpaid</span>
                        </td>
                    </tr>
                    <tr>
                        <td class="align-middle text-center">
                            <p class="text-xs font-weight-bold mb-0">6</p>
                        </td>
                        <td>
                            <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Miriam Eric</h6>
                            </div>
                        </td>
                        <td class="text-center">
                            <p class="text-xs font-weight-bold mb-0">Students</p>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">
                                02/02/2025
                                <span class="material-symbols-rounded">verified</span>
                            </span>
                        </td>
                        <td class="align-middle text-center">
                            <span class="text-secondary text-xs font-weight-bold">
                                02/02/2025
                                <span class="material-symbols-rounded">verified</span>
                            </span>
                        </td>
                        <td class="align-middle text-center">
                            <a href="javascript:;" class="btn bg-gradient-success w-70 mb-0 p-1 toast-btn font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            <span class="material-symbols-rounded">verified</span> Edit
                            </a>
                        </td>
                        <td class="align-middle text-center">
                            <a href="javascript:;" class="btn bg-gradient-success w-70 mb-0 p-1 toast-btn font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            <span class="material-symbols-rounded">verified</span> Edit
                            </a>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <span class="badge badge-sm bg-gradient-secondary">Unpaid</span>
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
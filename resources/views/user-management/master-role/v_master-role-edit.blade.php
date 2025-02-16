<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <x-slot:subMenu>{{ $subMenu }}</x-slot:subMenu>
    <x-slot:app>{{ $app }}</x-slot:app>

    <div class="container">
        <!-- Master Role Form -->
        <div class="card">
            <div class="card-header card-header-primary d-flex justify-content-between">
                <h4 class="card-title">Master Edit/Add</h4>
                <a href="/master/role">
                    <span class="material-symbols-rounded">cancel</span>
                </a>
            </div>
            <div class="card-body">
                <form>
                    <div class="p-4">
                        <div class="input-group input-group-outline my-3">
                            <label class="form-label">Master Role</label>
                            <input type="MasterRole" class="form-control">
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

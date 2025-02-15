@php
    $id = $attributes->get('id');
    $title = $attributes->get('title');
    $method = $attributes->get('method');
    $action = $attributes->get('action');
@endphp

{{-- <div class="col-md-4"> --}}
<div class="modal fade" id="{{ $id }}" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content">
        <div class="modal-body p-0">
        <div class="card card-plain">
            <div class="card-header pb-0 text-left">
                <h5 class="">{{ $title }}
                    <button type="button" class="btn-close float-end text-dark" data-bs-dismiss="modal" aria-label="Close"></button>
                </h5>
                <div class="modal-title-line"></div>
            </div>
            <div class="card-body">
                <form role="form text-left" method="{{ $method }}" action="{{ $action }}"> 
                    @isset($form)
                        {{ $form }}
                    @endisset
                </form>
            </div>
        </div>
        </div>
    </div>
    </div>
</div>
{{-- </div> --}}




{{-- <div class="modal fade" id="{{ $modalId }}" ...>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="{{ $modalId }}Label">{{ $modalTitle }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                 @isset($modalAction)
                    <a href="{{ $modalAction }}" class="btn btn-primary">Save changes</a>
                @endisset
            </div>
        </div>
    </div>
</div> --}}
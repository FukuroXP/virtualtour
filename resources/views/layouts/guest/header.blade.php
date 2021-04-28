<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A==" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" />
<style>
    .select2-container--material {
        width: 100% !important; }
    .select2-container--material .select2-selection--single {
        background-color: transparent;
        border: none;
        border-bottom: 1px solid #ced4da;
        border-radius: 0;
        box-shadow: none;
        box-sizing: content-box;
        height: auto;
        margin: 0;
        outline: none;
        padding: 8px 0 5px 0;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
    .select2-container--material .select2-selection--single .select2-selection__rendered {
        color: #444;
        line-height: 28px;
        padding-left: 0; }
    .select2-container--material .select2-selection--single .select2-selection__clear {
        cursor: pointer;
        float: right;
        font-weight: bold; }
    .select2-container--material .select2-selection--single .select2-selection__placeholder {
        color: #999; }
    .select2-container--material .select2-selection--single .select2-selection__arrow {
        height: 26px;
        margin: 0.6rem 0 0.4rem 0;
        position: absolute;
        top: 1px;
        right: 1px;
        width: 20px; }
    .select2-container--material .select2-selection--single .select2-selection__arrow b {
        border-color: #888 transparent transparent transparent;
        border-style: solid;
        border-width: 5px 4px 0 4px;
        height: 0;
        left: 50%;
        margin-left: -4px;
        margin-top: -2px;
        position: absolute;
        top: 50%;
        width: 0; }
    .select2-container--material[dir="rtl"] .select2-selection--single .select2-selection__clear {
        float: left; }
    .select2-container--material[dir="rtl"] .select2-selection--single .select2-selection__arrow {
        left: 1px;
        right: auto; }
    .select2-container--material.select2-container--disabled .select2-selection--single {
        background-color: #eee;
        cursor: default; }
    .select2-container--material.select2-container--disabled .select2-selection--single .select2-selection__clear {
        display: none; }
    .select2-container--material.select2-container--open .select2-selection--single .select2-selection__arrow b {
        border-color: transparent transparent #888 transparent;
        border-width: 0 4px 5px 4px; }
    .select2-container--material .select2-selection--multiple {
        background-color: transparent;
        border: none;
        border-bottom: 1px solid #ced4da;
        border-radius: 0;
        box-shadow: none;
        box-sizing: content-box;
        cursor: text;
        height: auto;
        margin: 0;
        outline: none;
        padding: 5px 0 0 0;
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out; }
    .select2-container--material .select2-selection--multiple .select2-selection__rendered {
        box-sizing: border-box;
        list-style: none;
        margin: 0;
        padding: 0 5px;
        width: 100%; }
    .select2-container--material .select2-selection--multiple .select2-selection__rendered li {
        list-style: none; }
    .select2-container--material .select2-selection--multiple .select2-selection__placeholder {
        color: #999;
        margin-top: 5px;
        float: left; }
    .select2-container--material .select2-selection--multiple .select2-selection__clear {
        cursor: pointer;
        float: right;
        font-weight: bold;
        margin-top: 5px;
        margin-right: 10px; }
    .select2-container--material .select2-selection--multiple .select2-selection__choice {
        background-color: #ffca28;
        border-radius: 16px;
        color: rgba(0, 0, 0, 0.6);
        cursor: default;
        float: left;
        margin-right: 5px;
        margin-top: 6px;
        padding: 0 12px; }
    .select2-container--material .select2-selection--multiple .select2-selection__choice__remove {
        cursor: pointer;
        display: inline-block;
        font-weight: bold;
        float: right;
        margin-left: 5px; }
    .select2-container--material .select2-selection--multiple .select2-selection__choice__remove:hover {
        color: #333; }
    .select2-container--material[dir="rtl"] .select2-selection--multiple .select2-selection__choice, .select2-container--material[dir="rtl"] .select2-selection--multiple .select2-selection__placeholder, .select2-container--material[dir="rtl"] .select2-selection--multiple .select2-search--inline {
        float: right; }
    .select2-container--material[dir="rtl"] .select2-selection--multiple .select2-selection__choice {
        margin-left: 5px;
        margin-right: auto; }
    .select2-container--material[dir="rtl"] .select2-selection--multiple .select2-selection__choice__remove {
        margin-left: 2px;
        margin-right: auto; }
    .select2-container--material.select2-container--disabled .select2-selection--multiple {
        background-color: #eee;
        cursor: default; }
    .select2-container--material.select2-container--disabled .select2-selection__choice__remove {
        display: none; }
    .select2-container--material.select2-container--open.select2-container--above .select2-selection--single, .select2-container--material.select2-container--open.select2-container--above .select2-selection--multiple {
        border-top-left-radius: 0;
        border-top-right-radius: 0; }
    .select2-container--material.select2-container--open.select2-container--below .select2-selection--single, .select2-container--material.select2-container--open.select2-container--below .select2-selection--multiple {
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0; }
    .select2-container--material.select2-container--focus .select2-selection--single {
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        outline: 0; }
    .select2-container--material.select2-container--focus .select2-selection--multiple {
        transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        outline: 0; }
    .select2-container--material .select2-search--dropdown .select2-search__field {
        border: none;
        border-bottom: 1px solid #ced4da;
        border-radius: 0;
        outline: none; }
    .select2-container--material .select2-search--dropdown .select2-search__field:focus:not([readonly]) {
        box-shadow: 0 1px 0 0 #ced4da;
        border-bottom: 1px solid #ced4da; }
    .select2-container--material .select2-search--inline .select2-search__field {
        background: transparent;
        border: none !important;
        outline: 0;
        box-shadow: none !important;
        -webkit-appearance: textfield; }
    .select2-container--material .select2-results > .select2-results__options {
        max-height: 200px;
        overflow-y: auto; }
    .select2-container--material .select2-results__option[role=group] {
        padding: 0; }
    .select2-container--material .select2-results__option[aria-disabled=true] {
        color: #999; }
    .select2-container--material .select2-results__option[aria-selected=true] {
        background-color: #ddd; }
    .select2-container--material .select2-results__option .select2-results__option {
        padding-left: 1em; }
    .select2-container--material .select2-results__option .select2-results__option .select2-results__group {
        padding-left: 0; }
    .select2-container--material .select2-results__option .select2-results__option .select2-results__option {
        margin-left: -1em;
        padding-left: 2em; }
    .select2-container--material .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
        margin-left: -2em;
        padding-left: 3em; }
    .select2-container--material .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
        margin-left: -3em;
        padding-left: 4em; }
    .select2-container--material .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
        margin-left: -4em;
        padding-left: 5em; }
    .select2-container--material .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option .select2-results__option {
        margin-left: -5em;
        padding-left: 6em; }
    .select2-container--material .select2-results__option--highlighted[aria-selected] {
        background-color: #3f729b;
        color: white; }
    .select2-container--material .select2-results__group {
        cursor: default;
        display: block;
        padding: 6px; }

    .select2-dropdown {
        background-color: white;
        border: 1px solid #ced4da;
        border-radius: 4px;
        box-sizing: border-box;
        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
        display: block;
        position: absolute;
        left: -100000px;
        width: 100%;
        z-index: 1051;
        -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12); }

    .select2-results {
        display: block; }

    .select2-results__options {
        list-style: none;
        margin: 0;
        padding: 0; }

    .select2-results__option {
        padding: 6px;
        user-select: none;
        -webkit-user-select: none; }
    .select2-results__option[aria-selected] {
        cursor: pointer; }

    .select2-container--open .select2-dropdown {
        left: 0; }

    .select2-container--open .select2-dropdown--above {
        border-bottom: none;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0; }

    .select2-container--open .select2-dropdown--below {
        border-top: none;
        border-top-left-radius: 0;
        border-top-right-radius: 0; }

    .select2-search--dropdown {
        display: block;
        padding: 4px; }
    .select2-search--dropdown .select2-search__field {
        padding: 4px;
        width: 100%;
        box-sizing: border-box; }
    .select2-search--dropdown .select2-search__field::-webkit-search-cancel-button {
        -webkit-appearance: none; }
    .select2-search--dropdown.select2-search--hide {
        display: none; }
</style>
<div class="page-header">
    <nav class="navbar navbar-expand-lg d-flex justify-content-between">
        <div class="" id="navbarNav">
            <ul class="navbar-nav" id="leftNav">
                <li class="nav-item">
                    <a class="nav-link" id="sidebar-toggle" href="#"><i data-feather="arrow-left"></i></a>
                </li>
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Home</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Settings</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="#">Help</a>--}}
{{--                </li>--}}
            </ul>
        </div>
            <form class="logo" action="/search" method="post" enctype="multipart/form-data">
                @csrf
                <select class="browser-default select2" name="key">
                    <option value="" disabled selected>Cari Nama Room</option>
                </select>
                <button class="btn btn-secondary" type="submit"><i class="fas fa-search"></i></button>
            </form>
    </nav>
</div>

<script type="text/javascript">
    $('.select2').select2({
        theme: "material",
        ajax: {
            url: '/autocomplete',
            dataType: 'json',
            delay: 250,
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.name,
                            id: item.name
                        }
                    })
                };
            },
            cache: true
        }
    });
</script>


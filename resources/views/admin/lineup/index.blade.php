<x-app-layout>

    <div class="vs jj ttm vl ou uf na">

        <!-- Page header -->
        <div class="je jd jc ii">
            <!-- Left: Title -->
            <div class="ri _y">
                <h1 class="gu teu text-slate-800 font-bold">Lineup ✨</h1>
            </div>
        </div>

        <div class="je jd jc ii">

            <!-- Left side -->
            <div class="ri _y">
                <select wire:model="perPage" id="filter" class="a">
                    <option value="5">5 Per Page</option>
                    <option value="10">10 Per Page</option>
                    <option value="15">15 Per Page</option>
                </select>
            </div>

        </div>

        <div class="columns is-desktop main-area" bis_skin_checked="1">
            <div class="hidden column is-narrow is-5" id="canvas-container" bis_skin_checked="1">
                <div id="draft" bis_skin_checked="1">
                    <div class="draft-container" id="draft-container-0" style="left: 40%; top: 9%;" bis_skin_checked="1">
                        <div class="draft-pos" id="draft-pos-0" style="background-color: rgb(115, 126, 188);" bis_skin_checked="1">ST</div>
                    </div>
                    <div class="draft-container" id="draft-container-1" style="left: 64%; top: 14%;" bis_skin_checked="1">
                        <div class="draft-pos" id="draft-pos-1" style="background-color: rgb(11, 39, 198);" bis_skin_checked="1">RW</div>
                    </div>
                    <div class="draft-container" id="draft-container-2" style="left: 16%; top: 14%;" bis_skin_checked="1">
                        <div class="draft-pos" id="draft-pos-2" style="background-color: rgb(17, 99, 53);" bis_skin_checked="1">LW</div>
                    </div>
                    <div class="draft-container" id="draft-container-3" style="left: 56%; top: 34%;" bis_skin_checked="1">
                        <div class="draft-pos" id="draft-pos-3" style="background-color: rgb(254, 185, 6);" bis_skin_checked="1">CM</div>
                    </div>
                    <div class="draft-container" id="draft-container-4" style="left: 24%; top: 34%;" bis_skin_checked="1">
                        <div class="draft-pos" id="draft-pos-4" style="background-color: rgb(254, 185, 6);" bis_skin_checked="1">CM</div>
                    </div>
                    <div class="draft-container" id="draft-container-5" style="left: 40%; top: 37%;" bis_skin_checked="1">
                        <div class="draft-pos" id="draft-pos-5" style="background-color: rgb(254, 185, 6);" bis_skin_checked="1">CM</div>
                    </div>
                    <div class="draft-container" id="draft-container-6" style="left: 8%; top: 61%;" bis_skin_checked="1">
                        <div class="draft-pos" id="draft-pos-6" style="background-color: rgb(240, 246, 0);" bis_skin_checked="1">LB</div>
                    </div>
                    <div class="draft-container" id="draft-container-7" style="left: 72%; top: 61%;" bis_skin_checked="1">
                        <div class="draft-pos" id="draft-pos-7" style="background-color: rgb(166, 2, 26);" bis_skin_checked="1">RB</div>
                    </div>
                    <div class="draft-container" id="draft-container-8" style="left: 52%; top: 64%;" bis_skin_checked="1">
                        <div class="draft-pos" id="draft-pos-8" style="background-color: rgb(37, 197, 35);" bis_skin_checked="1">CB</div>
                    </div>
                    <div class="draft-container" id="draft-container-9" style="left: 28%; top: 64%;" bis_skin_checked="1">
                        <div class="draft-pos" id="draft-pos-9" style="background-color: rgb(37, 197, 35);" bis_skin_checked="1">CB</div>
                    </div>
                    <div class="draft-container" id="draft-container-10" style="left: 40%; top: 80%;" bis_skin_checked="1">
                        <div class="draft-pos" id="draft-pos-10" style="background-color: rgb(148, 187, 252);" bis_skin_checked="1">GK</div>
                    </div>
                </div>
                <canvas id="canvas1" width="1000" height="1400"></canvas>
            </div>

            <div class="column flex flex-col px-6 py-6 bg-white border w-full rounded shadow" bis_skin_checked="1">
                <div class="tool w-full" bis_skin_checked="1">
                    <div class="flex w-full justify-between" bis_skin_checked="1">
                        <div class="flex w-1/6" bis_skin_checked="1"><span class="font-bold">Position</span></div>
                        <div class="flex w-2/6" bis_skin_checked="1"><span class="font-bold">Search *</span></div>
                        <div class="flex w-2/6" bis_skin_checked="1"><span class="font-bold">Player Name</span></div>
                        <div class="flex w-1/6" bis_skin_checked="1"><span class="font-bold">Remove</span></div>
                    </div>
                    <div class="flex w-full justify-between  items-center hover:shadow hover:border" bis_skin_checked="1">
                        <div class="flex w-[10%] column is-1 is-flex" bis_skin_checked="1"><span class="position-label flex items-center px-2 py-1 rounded text-white font-semibold" style="background-color: rgb(115, 126, 188);">ST</span></div>
                        <div class="flex w-[20%] column is-6 search-level">
                            <select class="search-entity" placeholder="" style="width:100%"></select>
                        </div>
                        <div class="flex w-[20%] column is-4-tablet is-3-mobile search-selected" bis_skin_checked="1"></div>
                        <div class="flex w-[10%] column is-1-tablet is-2-mobile" bis_skin_checked="1">
                            <a class="delete is-medium remove-player">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="columns is-mobile position" bis_skin_checked="1">
                        <div class="column is-1 is-flex" bis_skin_checked="1"><span class="position-label" style="background-color: rgb(115, 126, 188);">ST</span></div>
                        <div class="column is-6 search-level" bis_skin_checked="1"><select class="search-entity select2-hidden-accessible" placeholder="" style="width:100%" data-id="1" data-cx="260" data-cy="126" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-aka7-container"><span class="select2-selection__rendered" id="select2-aka7-container"><span class="select2-selection__placeholder">Search for a player...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        <div class="column is-4-tablet is-3-mobile search-selected" bis_skin_checked="1"></div>
                        <div class="column is-1-tablet is-2-mobile" bis_skin_checked="1"><a class="delete is-medium remove-player"></a></div>
                    </div>
                    <div class="columns is-mobile position" bis_skin_checked="1">
                        <div class="column is-1 is-flex" bis_skin_checked="1"><span class="position-label" style="background-color: rgb(253, 44, 49);">LM</span></div>
                        <div class="column is-6 search-level" bis_skin_checked="1"><select class="search-entity select2-hidden-accessible" placeholder="" style="width:100%" data-id="2" data-cx="80" data-cy="434" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-jzz8-container"><span class="select2-selection__rendered" id="select2-jzz8-container"><span class="select2-selection__placeholder">Search for a player...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        <div class="column is-4-tablet is-3-mobile search-selected" bis_skin_checked="1"></div>
                        <div class="column is-1-tablet is-2-mobile" bis_skin_checked="1"><a class="delete is-medium remove-player"></a></div>
                    </div>
                    <div class="columns is-mobile position" bis_skin_checked="1">
                        <div class="column is-1 is-flex" bis_skin_checked="1"><span class="position-label" style="background-color: rgb(60, 255, 123);">RM</span></div>
                        <div class="column is-6 search-level" bis_skin_checked="1"><select class="search-entity select2-hidden-accessible" placeholder="" style="width:100%" data-id="3" data-cx="720" data-cy="434" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-p4fq-container"><span class="select2-selection__rendered" id="select2-p4fq-container"><span class="select2-selection__placeholder">Search for a player...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        <div class="column is-4-tablet is-3-mobile search-selected" bis_skin_checked="1"></div>
                        <div class="column is-1-tablet is-2-mobile" bis_skin_checked="1"><a class="delete is-medium remove-player"></a></div>
                    </div>
                    <div class="columns is-mobile position" bis_skin_checked="1">
                        <div class="column is-1 is-flex" bis_skin_checked="1"><span class="position-label" style="background-color: rgb(6, 159, 252);">CAM</span></div>
                        <div class="column is-6 search-level" bis_skin_checked="1"><select class="search-entity select2-hidden-accessible" placeholder="" style="width:100%" data-id="4" data-cx="400" data-cy="406" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-moig-container"><span class="select2-selection__rendered" id="select2-moig-container"><span class="select2-selection__placeholder">Search for a player...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        <div class="column is-4-tablet is-3-mobile search-selected" bis_skin_checked="1"></div>
                        <div class="column is-1-tablet is-2-mobile" bis_skin_checked="1"><a class="delete is-medium remove-player"></a></div>
                    </div>
                    <div class="columns is-mobile position" bis_skin_checked="1">
                        <div class="column is-1 is-flex" bis_skin_checked="1"><span class="position-label" style="background-color: rgb(15, 13, 14);">CDM</span></div>
                        <div class="column is-6 search-level" bis_skin_checked="1"><select class="search-entity select2-hidden-accessible" placeholder="" style="width:100%" data-id="5" data-cx="540" data-cy="686" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-u31j-container"><span class="select2-selection__rendered" id="select2-u31j-container"><span class="select2-selection__placeholder">Search for a player...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        <div class="column is-4-tablet is-3-mobile search-selected" bis_skin_checked="1"></div>
                        <div class="column is-1-tablet is-2-mobile" bis_skin_checked="1"><a class="delete is-medium remove-player"></a></div>
                    </div>
                    <div class="columns is-mobile position" bis_skin_checked="1">
                        <div class="column is-1 is-flex" bis_skin_checked="1"><span class="position-label" style="background-color: rgb(15, 13, 14);">CDM</span></div>
                        <div class="column is-6 search-level" bis_skin_checked="1"><select class="search-entity select2-hidden-accessible" placeholder="" style="width:100%" data-id="6" data-cx="260" data-cy="686" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-6sj1-container"><span class="select2-selection__rendered" id="select2-6sj1-container"><span class="select2-selection__placeholder">Search for a player...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        <div class="column is-4-tablet is-3-mobile search-selected" bis_skin_checked="1"></div>
                        <div class="column is-1-tablet is-2-mobile" bis_skin_checked="1"><a class="delete is-medium remove-player"></a></div>
                    </div>
                    <div class="columns is-mobile position" bis_skin_checked="1">
                        <div class="column is-1 is-flex" bis_skin_checked="1"><span class="position-label" style="background-color: rgb(37, 197, 35);">CB</span></div>
                        <div class="column is-6 search-level" bis_skin_checked="1"><select class="search-entity select2-hidden-accessible" placeholder="" style="width:100%" data-id="7" data-cx="650" data-cy="896" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-i8z9-container"><span class="select2-selection__rendered" id="select2-i8z9-container"><span class="select2-selection__placeholder">Search for a player...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        <div class="column is-4-tablet is-3-mobile search-selected" bis_skin_checked="1"></div>
                        <div class="column is-1-tablet is-2-mobile" bis_skin_checked="1"><a class="delete is-medium remove-player"></a></div>
                    </div>
                    <div class="columns is-mobile position" bis_skin_checked="1">
                        <div class="column is-1 is-flex" bis_skin_checked="1"><span class="position-label" style="background-color: rgb(37, 197, 35);">CB</span></div>
                        <div class="column is-6 search-level" bis_skin_checked="1"><select class="search-entity select2-hidden-accessible" placeholder="" style="width:100%" data-id="8" data-cx="150" data-cy="896" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-vtxh-container"><span class="select2-selection__rendered" id="select2-vtxh-container"><span class="select2-selection__placeholder">Search for a player...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        <div class="column is-4-tablet is-3-mobile search-selected" bis_skin_checked="1"></div>
                        <div class="column is-1-tablet is-2-mobile" bis_skin_checked="1"><a class="delete is-medium remove-player"></a></div>
                    </div>
                    <div class="columns is-mobile position" bis_skin_checked="1">
                        <div class="column is-1 is-flex" bis_skin_checked="1"><span class="position-label" style="background-color: rgb(37, 197, 35);">CB</span></div>
                        <div class="column is-6 search-level" bis_skin_checked="1"><select class="search-entity select2-hidden-accessible" placeholder="" style="width:100%" data-id="9" data-cx="400" data-cy="896" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-w1kt-container"><span class="select2-selection__rendered" id="select2-w1kt-container"><span class="select2-selection__placeholder">Search for a player...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        <div class="column is-4-tablet is-3-mobile search-selected" bis_skin_checked="1"></div>
                        <div class="column is-1-tablet is-2-mobile" bis_skin_checked="1"><a class="delete is-medium remove-player"></a></div>
                    </div>
                    <div class="columns is-mobile position" bis_skin_checked="1">
                        <div class="column is-1 is-flex" bis_skin_checked="1"><span class="position-label" style="background-color: rgb(148, 187, 252);">GK</span></div>
                        <div class="column is-6 search-level" bis_skin_checked="1"><select class="search-entity select2-hidden-accessible" placeholder="" style="width:100%" data-id="10" data-cx="400" data-cy="1120" tabindex="-1" aria-hidden="true"></select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-uj0a-container"><span class="select2-selection__rendered" id="select2-uj0a-container"><span class="select2-selection__placeholder">Search for a player...</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span></div>
                        <div class="column is-4-tablet is-3-mobile search-selected" bis_skin_checked="1"></div>
                        <div class="column is-1-tablet is-2-mobile" bis_skin_checked="1"><a class="delete is-medium remove-player"></a></div>
                    </div>
                </div>
                <div class="level extra-options" bis_skin_checked="1">
                    <div class="level-item" bis_skin_checked="1"><label class="checkbox"><input type="checkbox" id="clubSearch"> * Also search by club</label></div>
                    <div class="level-item" bis_skin_checked="1"><a class="button is-info is-rounded toggleModal">Save/Load Formation Data</a>
                        <div class="columns" bis_skin_checked="1"></div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</x-app-layout>

@push('styles')
<link href="{{ URL::asset('admin/css/select2.min.css') }}" rel="stylesheet" />
<style>
    .new {
        margin-right: 10px;
    }

    .field.is-horizontal {
        align-items: center;
    }

    #canvas-container {
        position: relative;
    }

    #canvas1 {
        width: 100%;
    }

    #draft {
        width: 100%;
        height: 700px;
        position: absolute;
        display: none;
    }

    .section-bg {
        background: #C9D6FF;
        background: linear-gradient(to right, #E2E2E2, #C9D6FF);
    }

    .box {
        box-shadow: none;
    }

    .beta {
        font-size: 75%;
        font-weight: 700;
        background-color: #ca2626;
        padding: 0px 3px 0px;
        border-radius: 5px;
        margin-left: 2px;
        margin-top: -15px;
    }

    .position-label {
        padding: 5px;
        border-radius: 5px;
        color: #fff;
        font-weight: bold;
    }

    .navbar .button.is-large {
        font-weight: 700;
        font-size: 16px;
        letter-spacing: 1px;
    }

    .logo {
        margin-right: 10px;
    }

    .site-title {
        text-transform: uppercase;
        font-weight: bold;
        color: #d6d6d6;
    }

    .tool-heading {
        font-size: 90%;
        text-transform: uppercase;
        color: #363636;
    }

    .position {
        padding: 4px;
        margin-left: 0;
        margin-right: 0;
    }

    .tool {
        box-shadow: 0px 0px 9px 3px rgba(207, 207, 207, 1);
        padding: 5px 10px;
    }

    .tool-headings {
        padding: 0 20px 0 10px;
        text-align: center;
    }

    .position.focused {
        box-shadow: 0px 0px 9px 3px rgba(207, 207, 207, 1);
    }

    .search-selected {
        text-align: center;
        font-weight: 700;
    }

    .navbar-brand,
    .navbar-tabs {
        min-height: 2rem;
    }

    @media screen and (min-width:1024px) {
        .navbar {
            min-height: 2rem;
        }

    }

    @media screen and (max-width:768px) {
        section.main {
            padding: 3rem .5rem;
        }

        .tool {
            padding: 0;
        }
    }

    section.main {
        background: #f3f3f3;
    }

    .player-img {
        max-width: 90px;
        margin: 0 auto;
        display: block;
    }

    .footer {
        background-color: #363636;
        padding: 1.5rem 1.5rem 10rem;
    }

    .wrapper ul {
        list-style: none;
    }

    .wrapper ul li {
        width: 40px;
        height: 40px;
        line-height: 35px;
        margin: 0 10px;
        text-align: center;
        border-radius: 50%;
        border: 5px solid #D8E2DC;
        float: right;
        transition: all 0.5s ease;
    }

    .wrapper ul li .fa {
        color: #D8E2DC;
        transition: all 0.5s ease;
        font-size: 1.25em;
    }

    .wrapper ul li:hover.facebook {
        border: 5px solid #3b5998;
        box-shadow: 0 0 15px #3b5998;
        transition: all 0.5s ease;
    }

    .wrapper ul li:hover .fa-facebook {
        color: #3b5998;
        text-shadow: 0 0 15px #3b5998;
        transition: all 0.5s ease;
    }

    .wrapper ul li:hover.instagram {
        border: 5px solid #bc2a8d;
        box-shadow: 0 0 15px #bc2a8d;
        transition: all 0.5s ease;
    }

    .wrapper ul li:hover .fa-instagram {
        color: #bc2a8d;
        text-shadow: 0 0 15px #bc2a8d;
        transition: all 0.5s ease;
    }

    @media screen and (max-width: 640px) {
        .wrapper {
            width: 350px;
        }

        .wrapper ul li {
            margin-top: 10px;
        }
    }

    @media screen and (max-width: 340px) {
        .wrapper {
            width: 150px;
        }

        .wrapper ul li {
            margin: 15px;
        }
    }

    .modal-card-body h3 {
        text-align: center;
        font-weight: 700;
        font-size: 1.25rem;
    }

    fieldset {
        border: none;
    }

    @media screen and (max-width: 768px) {
        #draft {
            max-width: 500px;
        }
    }

    .draft-container {
        position: absolute;
    }

    .draft-pos {
        width: 40px;
        height: 40px;
        font-weight: bold;
        border-radius: 50%;
        border: 1px #fff solid;
        color: #fff;
        display: flex;
        font-family: system-ui;
        align-items: center;
        justify-content: center;
        top: 30px;
        position: absolute;
        left: 30px;
    }

    .draft-pos.focused {
        box-shadow: 0px 0px 9px 3px rgb(220, 220, 220);
        border: 1px solid red;
    }

    .draft-img {
        width: 100px;
        height: 100px;
    }

    .draft-label {
        background: #444444;
        color: #fff;
        width: 90px;
        text-align: center;
        position: absolute;
        bottom: -10px;
        left: 5px;
    }

    #draft-title {
        background-color: #444;
        padding: 2px 5px;
        color: #f0f600;
        font-family: Fira Sans;
    }

    .extra-options {
        padding-top: 20px;
    }

    .notification.is-info {
        margin-bottom: 4rem;
    }

    .create-header {
        padding: 2rem;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .create-header ul {
        text-align: left;
    }

    .main-area {
        padding: 2rem 0;
    }

    #uniconsent-config {
        float: left;
    }

    #uniconsent-config a:hover {
        color: #3b5998;
    }
</style>
@endpush

@push('js')
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="{{ URL::asset('admin/js/select2.min.js') }}"></script>
<script src="{{ URL::asset('admin/js/formation.js') }}"></script>
<script src="{{ URL::asset('admin/js/main.js') }}"></script>
@endpush
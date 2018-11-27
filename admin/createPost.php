<div class="col-sm-12 col-md-12 col-lg-10 my-3">
    <form >
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">Nagłówek</span>
            </div>
            <input type="text" class="form-control" placeholder="Nagłówek" id="lol">
        </div>
    </form>
    <div class="p-3" style="background-color: #6c757d; border-radius: 3px">
        <button  id="addText" type="button" class="btn btn-light btn-sm">
            <img src="build/svg/pencil.svg" />
            Dodaj tekst
        </button>
        <button id="addLine" type = "button" class="btn btn-light btn-sm" >
            <img src="build/svg/dash.svg" />
            Dodaj linie
        </button>
        <div class="btn-group">
            <button type="button" class="btn btn-light dropdown-toggle btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="build/svg/text-size.svg" />
                Dodaj nagłówek
            </button>
            <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <button type="button" class="btn btn-light dropdown-item btn-sm">Mały</button>
                <button type="button" class="btn btn-light dropdown-item btn-sm">Średni</button>
                <button id="addH" type="button" class="btn btn-light dropdown-item btn-sm">Duży</button>
            </div>
        </div>

        <button id="addPhoto" type = "button" class="btn btn-light btn-sm" >
            <img src="build/svg/device-camera.svg" />
            Dodaj zdjęcie
        </button>
        <button id="addVideo" type = "button" class="btn btn-light btn-sm" >
            <img src="build/svg/device-desktop.svg" />
            Dodaj film
        </button>
    </div>


    <div class="test">
        <div contenteditable="true" id="papa" style="border:1px solid green; border-radius: 5px;" >I'm Editable. Edit me!</div>
    </div>
</div>

<div class=" col-md-12 my-3">
    <div class="float-right ">
        <button id="addLine" type="button" class="btn btn-success btn-sm">Zatwierdź</button>
        <button id="addLine" type="button" class="btn btn-danger btn-sm">Odrzuć</button>
    </div>
</div>
<script src="js/createPost.js"></script>
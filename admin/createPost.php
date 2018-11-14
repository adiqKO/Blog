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
        <button id="addH" type = "button" class="btn btn-light btn-sm" >
            <img src="build/svg/text-size.svg" />
            Dodaj nagłówek
        </button>
    </div>

    <div contenteditable="true" id="papa" style="border:1px solid green; border-radius: 5px;" >I'm Editable. Edit me!</div>
    <div class="test">

    </div>
</div>

<div class="col-sm-12 col-md-8 my-3">
    <div class="float-right ">
        <button id="addLine" type="button" class="btn btn-success btn-sm">Zatwierdź</button>
        <button id="addLine" type="button" class="btn btn-danger btn-sm">Odrzuć</button>
    </div>
</div>
<script src="js/createPost.js"></script>
<section id="contato">
    <div class="container">
        <div class="row">
            <div class="col-8 mx-auto">
                <h2>Form</h2>
                <form class="form">
                    <div class="mb-3 row">
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Seu nome">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="inputPassword" placeholder="Seu email">
                        </div>
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mensagem"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>


            <!-- <div class="col-sm-4">

                <h2>Form</h2>
                <form>
                    <fieldset>
                        <legend>Legend</legend>
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="text" readonly="" class="form-control-plaintext" id="staticEmail" value="email@example.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect1">Example select</label>
                            <select class="form-control" id="exampleSelect1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleSelect2">Example multiple select</label>
                            <select multiple="" class="form-control" id="exampleSelect2">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleTextarea">Example textarea</label>
                            <textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
                            <small id="fileHelp" class="form-text text-muted">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
                        </div>
                        <fieldset class="form-group">
                            <legend>Radio buttons</legend>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
                                    Option one is this and that—be sure to include why it's great
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios2" value="option2">
                                    Option two can be something else and selecting it will deselect option one
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="optionsRadios" id="optionsRadios3" value="option3" disabled="">
                                    Option three is disabled
                                </label>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <legend>Checkboxes</legend>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="" checked="">
                                    Option one is this and that—be sure to include why it's great
                                </label>
                            </div>
                            <div class="form-check disabled">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" value="" disabled="">
                                    Option two is disabled
                                </label>
                            </div>
                        </fieldset>
                        <fieldset class="form-group">
                            <legend>Sliders</legend>
                            <label for="customRange1">Example range</label>
                            <input type="range" class="custom-range" id="customRange1">
                        </fieldset>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </fieldset>
                </form>
            </div>


            <div class="col-sm-4">

                <h2>Form fields</h2>

                <div class="form-group">
                    <fieldset disabled="">
                        <label class="control-label" for="disabledInput">Disabled input</label>
                        <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input here..." disabled="">
                    </fieldset>
                </div>

                <div class="form-group">
                    <fieldset>
                        <label class="control-label" for="readOnlyInput">Readonly input</label>
                        <input class="form-control" id="readOnlyInput" type="text" placeholder="Readonly input here..." readonly="">
                    </fieldset>
                </div>

                <div class="form-group has-success">
                    <label class="form-control-label" for="inputValid">Valid input</label>
                    <input type="text" value="correct value" class="form-control is-valid" id="inputValid">
                    <div class="valid-feedback">Success! You've done it.</div>
                </div>

                <div class="form-group has-danger">
                    <label class="form-control-label" for="inputInvalid">Invalid input</label>
                    <input type="text" value="wrong value" class="form-control is-invalid" id="inputInvalid">
                    <div class="invalid-feedback">Sorry, that username's taken. Try another?</div>
                </div>

                <div class="form-group">
                    <label class="col-form-label col-form-label-lg" for="inputLarge">Large input</label>
                    <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="inputLarge">
                </div>

                <div class="form-group">
                    <label class="col-form-label" for="inputDefault">Default input</label>
                    <input type="text" class="form-control" placeholder="Default input" id="inputDefault">
                </div>

                <div class="form-group">
                    <label class="col-form-label col-form-label-sm" for="inputSmall">Small input</label>
                    <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="inputSmall">
                </div>

                <div class="form-group">
                    <label class="control-label">Input addons</label>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                            </div>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <div class="input-group-append">
                                <span class="input-group-text">.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <h2>Custom forms</h2>
                <fieldset>
                    <legend>Custom forms</legend>
                    <div class="form-group">
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked="">
                            <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" disabled="">
                            <label class="custom-control-label" for="customRadio3">Disabled custom radio</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1" checked="">
                            <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2" disabled="">
                            <label class="custom-control-label" for="customCheck2">Disabled custom checkbox</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" id="customSwitch1" checked="">
                            <label class="custom-control-label" for="customSwitch1">Toggle this switch element</label>
                        </div>
                        <div class="custom-control custom-switch">
                            <input type="checkbox" class="custom-control-input" disabled="" id="customSwitch2">
                            <label class="custom-control-label" for="customSwitch2">Disabled switch element</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <select class="custom-select">
                            <option selected="">Open this select menu</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <div class="input-group mb-3">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile02">
                                <label class="custom-file-label" for="inputGroupFile02">Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                            </div>
                        </div>
                    </div>
                </fieldset>
            </div> -->
        </div>
    </div>
</section>
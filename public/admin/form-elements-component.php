<?php include "../../resources/templates/back/header.php"; 
include "../../resources/templates/back/side_nav.php";?>


                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
									<!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="card-block">
                                            <h5 class="m-b-10">Basic Form Inputs</h5>
                                            <p class="text-muted m-b-10">lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                                            <ul class="breadcrumb-title b-t-default p-t-10">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html"> <i class="fa fa-home"></i> </a>
                                                </li>
                                               <li class="breadcrumb-item"><a href="#!">Basic Componenets</a>
                                                        </li>
                                                        <li class="breadcrumb-item"><a href="#!">Basic Form Inputs</a>
                                                        </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->
                                    
                                    <!-- Page body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Form Inputs card start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>Basic Form Inputs</h5>
                                                        <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                                        <div class="card-header-right"><i
                                                            class="icofont icofont-spinner-alt-5"></i></div>

                                                            <div class="card-header-right">
                                                                <i class="icofont icofont-spinner-alt-5"></i>
                                                            </div>

                                                        </div>
                                                        <div class="card-block">
                                                            <h4 class="sub-title">Basic Inputs</h4>
                                                            <form>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Simple Input</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Placeholder</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control"
                                                                        placeholder="Type your title in Placeholder">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Password</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="password" class="form-control"
                                                                        placeholder="Password input">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Read only</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control"
                                                                        placeholder="You can't change me" readonly>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Disable Input</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control"
                                                                        placeholder="Disabled text" disabled>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label class="col-sm-2 col-form-label">Predefine
                                                                        Input</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text" class="form-control"
                                                                            value="Enter yout content after me">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">Select Box</label>
                                                                        <div class="col-sm-10">
                                                                            <select name="select" class="form-control">
                                                                                <option value="opt1">Select One Value Only</option>
                                                                                <option value="opt2">Type 2</option>
                                                                                <option value="opt3">Type 3</option>
                                                                                <option value="opt4">Type 4</option>
                                                                                <option value="opt5">Type 5</option>
                                                                                <option value="opt6">Type 6</option>
                                                                                <option value="opt7">Type 7</option>
                                                                                <option value="opt8">Type 8</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">Round Input</label>
                                                                        <div class="col-sm-10">
                                                                            <input type="text"
                                                                            class="form-control form-control-round"
                                                                            placeholder=".form-control-round">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group row">
                                                                        <label class="col-sm-2 col-form-label">Maximum
                                                                            Length</label>
                                                                            <div class="col-sm-10">
                                                                                <input type="text" class="form-control"
                                                                                placeholder="Content must be in 6 characters"
                                                                                maxlength="6">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group row">
                                                                            <label class="col-sm-2 col-form-label">Disable
                                                                                Autocomplete</label>
                                                                                <div class="col-sm-10">
                                                                                    <input type="text" class="form-control"
                                                                                    placeholder="Autocomplete Off"
                                                                                    autocomplete="off">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label class="col-sm-2 col-form-label">Static Text</label>
                                                                                <div class="col-sm-10">
                                                                                    <div class="form-control-static">Hello !... This is
                                                                                        static text
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label class="col-sm-2 col-form-label">Color</label>
                                                                                <div class="col-sm-10">
                                                                                    <input type="color" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label class="col-sm-2 col-form-label">Upload File</label>
                                                                                <div class="col-sm-10">
                                                                                    <input type="file" class="form-control">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <label class="col-sm-2 col-form-label">Textarea</label>
                                                                                <div class="col-sm-10">
                                                                                    <textarea rows="5" cols="5" class="form-control"
                                                                                    placeholder="Default textarea"></textarea>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                        <div class="row">
                                                                            <div class="col-sm-6">
                                                                                <h4 class="sub-title">Input Sizes</h4>
                                                                                <form>
                                                                                    <div class="form-group row">
                                                                                        <div class="col-sm-12">
                                                                                            <input type="text"
                                                                                            class="form-control form-control-lg"
                                                                                            placeholder=".form-control-lg">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text" class="form-control"
                                                                                            placeholder=".form-control">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <div class="col-sm-8">
                                                                                            <input type="text"
                                                                                            class="form-control form-control-sm"
                                                                                            placeholder=".form-control-sm">
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                            <div class="col-sm-6 mobile-inputs">
                                                                                <h4 class="sub-title">Color Inputs</h4>
                                                                                <form>
                                                                                    <div class="form-group">
                                                                                        <input type="text"
                                                                                        class="form-control form-control-primary"
                                                                                        placeholder=".form-control-primary">
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"
                                                                                            class="form-control form-control-warning"
                                                                                            placeholder=".form-control-warning">
                                                                                        </div>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"
                                                                                            class="form-control form-control-default"
                                                                                            placeholder=".form-control-default">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"
                                                                                            class="form-control form-control-danger"
                                                                                            placeholder=".form-control-danger">
                                                                                        </div>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"
                                                                                            class="form-control form-control-success"
                                                                                            placeholder=".form-control-success">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"
                                                                                            class="form-control form-control-inverse"
                                                                                            placeholder=".form-control-inverse">
                                                                                        </div>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"
                                                                                            class="form-control form-control-info"
                                                                                            placeholder=".form-control-info">
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">
                                                                            <div class="col-sm-6 mobile-inputs">
                                                                                <h4 class="sub-title">Text-color</h4>
                                                                                <form>
                                                                                    <div class="form-group">
                                                                                        <input type="text"
                                                                                        class="form-control form-txt-primary"
                                                                                        placeholder=".form-txt-primary">
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"
                                                                                            class="form-control form-txt-warning"
                                                                                            placeholder=".form-txt-warning">
                                                                                        </div>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"
                                                                                            class="form-control form-txt-default"
                                                                                            placeholder=".form-txt-default">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"
                                                                                            class="form-control form-txt-danger"
                                                                                            placeholder=".form-txt-danger">
                                                                                        </div>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"
                                                                                            class="form-control form-txt-success"
                                                                                            placeholder=".form-txt-success">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"
                                                                                            class="form-control form-txt-inverse"
                                                                                            placeholder=".form-txt-inverse">
                                                                                        </div>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"
                                                                                            class="form-control form-txt-info"
                                                                                            placeholder=".form-txt-info">
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                            <div class="col-sm-6 mobile-inputs">
                                                                                <h4 class="sub-title">Background-color</h4>
                                                                                <form>
                                                                                    <div class="form-group">
                                                                                        <input type="text"
                                                                                        class="form-control form-bg-primary"
                                                                                        placeholder=".form-bg-primary">
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"
                                                                                            class="form-control form-bg-warning"
                                                                                            placeholder=".form-bg-warning">
                                                                                        </div>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"
                                                                                            class="form-control form-bg-default"
                                                                                            placeholder=".form-bg-default">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group row">
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"
                                                                                            class="form-control form-bg-danger"
                                                                                            placeholder=".form-bg-danger">
                                                                                        </div>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"
                                                                                            class="form-control form-bg-success"
                                                                                            placeholder=".form-bg-success">
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="row">
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"
                                                                                            class="form-control form-bg-inverse"
                                                                                            placeholder=".form-bg-inverse">
                                                                                        </div>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"
                                                                                            class="form-control form-bg-info"
                                                                                            placeholder=".form-bg-info">
                                                                                        </div>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- Basic Form Inputs card end -->
                                                                <!-- Input Grid card start -->
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h5>Input Grid</h5>
                                                                        <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>

                                                                    </div>
                                                                    <div class="card-block">
                                                                        <h4 class="sub-title">Basic Inputs</h4>
                                                                        <form>
                                                                            <div class="form-group row">
                                                                                <div class="col-sm-1">
                                                                                    <input type="text" class="form-control"
                                                                                    placeholder="col-sm-1">
                                                                                </div>
                                                                                <div class="col-sm-11">
                                                                                    <input type="text" class="form-control"
                                                                                    placeholder="col-sm-11">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-sm-2">
                                                                                    <input type="text" class="form-control"
                                                                                    placeholder="col-sm-2">
                                                                                </div>
                                                                                <div class="col-sm-10">
                                                                                    <input type="text" class="form-control"
                                                                                    placeholder="col-sm-10">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-sm-3">
                                                                                    <input type="text" class="form-control"
                                                                                    placeholder="col-sm-3">
                                                                                </div>
                                                                                <div class="col-sm-9">
                                                                                    <input type="text" class="form-control"
                                                                                    placeholder="col-sm-9">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control"
                                                                                    placeholder="col-sm-4">
                                                                                </div>
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" class="form-control"
                                                                                    placeholder="col-sm-8">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-sm-5">
                                                                                    <input type="text" class="form-control"
                                                                                    placeholder="col-sm-5">
                                                                                </div>
                                                                                <div class="col-sm-7">
                                                                                    <input type="text" class="form-control"
                                                                                    placeholder="col-sm-7">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-sm-6">
                                                                                    <input type="text" class="form-control"
                                                                                    placeholder="col-sm-6">
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <input type="text" class="form-control"
                                                                                    placeholder="col-sm-6">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-sm-12">
                                                                                    <input type="text" class="form-control"
                                                                                    placeholder="col-sm-12">
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                        <h4 class="sub-title">Flex Inputs</h4>
                                                                        <form>
                                                                            <div class="form-group row">
                                                                                <div class="col">
                                                                                    <input type="text" class="form-control" placeholder="col">
                                                                                </div>
                                                                                <div class="col-sm-4">
                                                                                    <input type="text" class="form-control"
                                                                                    placeholder="col-sm-4">
                                                                                </div>
                                                                                <div class="col">
                                                                                    <input type="text" class="form-control" placeholder="col">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col">
                                                                                    <input type="text" class="form-control" placeholder="col">
                                                                                </div>
                                                                                <div class="col-sm-6">
                                                                                    <input type="text" class="form-control"
                                                                                    placeholder="col-sm-6">
                                                                                </div>
                                                                                <div class="col">
                                                                                    <input type="text" class="form-control" placeholder="col">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col-sm-8">
                                                                                    <input type="text" class="form-control"
                                                                                    placeholder="col-sm-8">
                                                                                </div>
                                                                                <div class="col">
                                                                                    <input type="text" class="form-control" placeholder="col">
                                                                                </div>
                                                                                <div class="col">
                                                                                    <input type="text" class="form-control" placeholder="col">
                                                                                </div>
                                                                            </div>
                                                                            <div class="form-group row">
                                                                                <div class="col">
                                                                                    <input type="text" class="form-control" placeholder="col">
                                                                                </div>
                                                                                <div class="col-sm-10">
                                                                                    <input type="text" class="form-control"
                                                                                    placeholder="col-sm-10">
                                                                                </div>
                                                                                <div class="col">
                                                                                    <input type="text" class="form-control" placeholder="col">
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                <!-- Input Grid card end -->
                                                                <!-- Input Validation card start -->
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h5>Input Validation</h5>
                                                                        <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                                                        <div class="card-header-right"><i
                                                                            class="icofont icofont-spinner-alt-5"></i></div>
                                                                        </div>
                                                                        <div class="card-block">
                                                                            <h4 class="sub-title">Input Validation</h4>
                                                                            <div class="form-group has-success row">
                                                                                <div class="col-sm-2">
                                                                                    <label class="col-form-label" for="inputSuccess1">Input with
                                                                                        success</label>
                                                                                    </div>
                                                                                    <div class="col-sm-10">
                                                                                        <input type="text" class="form-control form-control-success"
                                                                                        id="inputSuccess1">
                                                                                        <div class="col-form-label">Success! You've done it.</div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group has-warning row">
                                                                                    <div class="col-sm-2">
                                                                                        <label class="col-form-label" for="inputWarning1">Input with
                                                                                            warning</label>
                                                                                        </div>
                                                                                        <div class="col-sm-10">
                                                                                            <input type="text" class="form-control form-control-warning"
                                                                                            id="inputWarning1">
                                                                                            <div class="col-form-label">Shucks, check the formatting of that
                                                                                                and try again.
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="form-group has-danger row">
                                                                                        <div class="col-sm-2">
                                                                                            <label class="col-form-label" for="inputDanger1">Input with
                                                                                                danger</label>
                                                                                            </div>
                                                                                            <div class="col-sm-10">
                                                                                                <input type="text" class="form-control form-control-danger"
                                                                                                id="inputDanger1">
                                                                                                <div class="col-form-label">Sorry, that username's taken. Try
                                                                                                    another?
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- Input Validation card end -->
                                                                                <!-- Input Alignment card start -->
                                                                                <div class="card">
                                                                                    <div class="card-header">
                                                                                        <h5>Input Alignment</h5>
                                                                                        <span>Add class of <code>.form-control</code> with <code>&lt;input&gt;</code> tag</span>
                                                                                        <div class="card-header-right"><i
                                                                                            class="icofont icofont-spinner-alt-5"></i></div>
                                                                                        </div>
                                                                                        <div class="card-block">
                                                                                            <form>
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-2 col-form-label">Normal Text</label>
                                                                                                    <div class="col-sm-10">
                                                                                                        <input type="text" class="form-control form-control-normal"
                                                                                                        placeholder=".form-control-normal">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-2 col-form-label">Bold Text</label>
                                                                                                    <div class="col-sm-10">
                                                                                                        <input type="text" class="form-control form-control-bold"
                                                                                                        placeholder=".form-control-bold">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-2 col-form-label">Capitalize Text</label>
                                                                                                    <div class="col-sm-10">
                                                                                                        <input type="text"
                                                                                                        class="form-control form-control-capitalize"
                                                                                                        placeholder=".form-control-capitalize">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-2 col-form-label">Uppercase Text</label>
                                                                                                    <div class="col-sm-10">
                                                                                                        <input type="text"
                                                                                                        class="form-control form-control-uppercase"
                                                                                                        placeholder=".form-control-uppercase">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-2 col-form-label">Lowercase Text</label>
                                                                                                    <div class="col-sm-10">
                                                                                                        <input type="text"
                                                                                                        class="form-control form-control-lowercase"
                                                                                                        placeholder=".form-control-lowercase">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-2 col-form-label">Varient Text</label>
                                                                                                    <div class="col-sm-10">
                                                                                                        <input type="text" class="form-control form-control-variant"
                                                                                                        placeholder=".form-control-variant">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-2 col-form-label">Left-Align Text</label>
                                                                                                    <div class="col-sm-10">
                                                                                                        <input type="text" class="form-control form-control-left"
                                                                                                        placeholder=".form-control-left">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-2 col-form-label">Center-Align Text</label>
                                                                                                    <div class="col-sm-10">
                                                                                                        <input type="text" class="form-control form-control-center"
                                                                                                        placeholder=".form-control-center">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-2 col-form-label">Right-Align Text</label>
                                                                                                    <div class="col-sm-10">
                                                                                                        <input type="text" class="form-control form-control-right"
                                                                                                        placeholder=".form-control-right">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="form-group row">
                                                                                                    <label class="col-sm-2 col-form-label">RTL Text</label>
                                                                                                    <div class="col-sm-10">
                                                                                                        <input type="text" class="form-control form-control-rtl"
                                                                                                        placeholder=".form-control-rtl">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </form>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- Input Alignment card end -->
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- Page body end -->
                                                                    </div>
                                                                </div>
                                                                <!-- Main-body end -->
                                                                <?php include "../../resources/templates/back/footer.php"; ?>
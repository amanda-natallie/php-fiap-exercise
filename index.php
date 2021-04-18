<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Sort Functions</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-9 mt-5">
                <div class="card p-4">
                    <h1 class="text-center mb-3 mt-3">PHP simple functions</h1>
                    <form autocomplete="off">

                        <div class="d-flex align-items-center">
                            <div class="form-check col-2">
                                <input class="form-check-input" type="radio" id="strtoupper_radio" checked name="function_radios" onchange='toggleInput("#strtoupper_radio", "#strtoupper_input")'>
                                <label class="form-check-label" for="strtoupper_radio">
                                    strtoupper
                                </label>
                            </div>
                            <div class="col-10">
                                <input type="text" name="strtoupper" class="form-control " id="strtoupper_input" placeholder="Digite o texto. Ex.: the quick brown fox jumps over the lazy dog">
                            </div>
                        </div>


                        <div class="d-flex align-items-center">
                            <div class="form-check col-2">
                                <input class="form-check-input" type="radio" id="strtolower_radio" name="function_radios" onchange='toggleInput("#strtolower_radio", "#strtolower_input")'>
                                <label class="form-check-label" for="strtolower_radio">
                                    strtolower
                                </label>
                            </div>
                            <div class="col-10">
                                <input type="text" name="strtolower" class="form-control invisible" id="strtolower_input" placeholder="Digite o texto. Ex.: the quick brown fox jumps over the lazy dog">
                            </div>
                        </div>


                        <div class="d-flex align-items-center">
                            <div class="form-check col-2">
                                <input class="form-check-input" type="radio" id="substr_radio" name="function_radios" onchange='toggleInput("#substr_radio", ".substr_input")'>
                                <label class="form-check-label" for="substr_radio">
                                    substr
                                </label>
                            </div>
                            <div class="col-10 d-flex">
                                <div class="container-fluid p-0 m-0">
                                    <div class="row p-0 m-0">
                                        <div class="col-4">
                                            <input type="text" name="substr" class="form-control invisible substr_input" id="substr_text" placeholder="Digite o texto. Ex.: the quick brown fox jumps over the lazy dog">
                                        </div>
                                        <div class="col-4 m-0 p-0">
                                            <input type="number" name="substr" class="form-control invisible substr_input" id="substr_init" placeholder="Digite a posição inicial">
                                        </div>
                                        <div class="col-4">
                                            <input type="number" name="substr" class="form-control invisible substr_input" id="substr_length" placeholder="Digite a quantidade de caracteres">
                                        </div>
                                        <div class="col-12">
                                            <small class="text-danger" id="substr_small" style="display: none;">você precisa fornecer ao menos o texto e a posição inicial para mostrar o resultado</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="d-flex align-items-center">
                            <div class="form-check col-2">
                                <input class="form-check-input" type="radio" id="str_replace_radio" name="function_radios" onchange='toggleInput("#str_replace_radio", ".str_replace_input")'>
                                <label class="form-check-label" for="str_replace_radio">
                                    str_replace
                                </label>
                            </div>
                            <div class="col-10 d-flex">
                                <div class="container-fluid p-0 m-0">
                                    <div class="row p-0 m-0">
                                        <div class="col-4">
                                            <input type="text" name="str_replace" class="form-control invisible str_replace_input" id="str_replace_text" placeholder="Neste texto">
                                        </div>
                                        <div class="col-4">
                                            <input type="text" name="str_replace" class="form-control invisible str_replace_input" id="str_replace_search" placeholder="Substitua isso">
                                        </div>
                                        <div class="col-4 m-0 p-0">
                                            <input type="text" name="str_replace" class="form-control invisible str_replace_input" id="str_replace_subject" placeholder="Por isso">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="d-flex align-items-center">
                            <div class="form-check col-2">
                                <input class="form-check-input" type="radio" id="strpos_radio" name="function_radios" onchange='toggleInput("#strpos_radio", ".strpos_input")'>
                                <label class="form-check-label" for="strpos_radio">
                                    strpos
                                </label>
                            </div>
                            <div class="col-10 d-flex">
                                <div class="container-fluid p-0 m-0">
                                    <div class="row p-0 m-0">
                                        <div class="col-9">
                                            <input type="text" name="strpos" class="form-control invisible strpos_input" id="strpos_text" placeholder="Neste texto">
                                        </div>
                                        <div class="col-3">
                                            <input type="text" name="strpos" class="form-control invisible strpos_input" id="strpos_find" placeholder="Encontre-me">
                                        </div>
                                        <div class="col-12">
                                            <small class="text-danger" id="strpos_small" style="display: none;">você precisa preencher todos os campos para mostrar o resultado</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="d-flex align-items-center">
                            <div class="form-check col-2">
                                <input class="form-check-input" type="radio" id="str_pad_radio" name="function_radios" onchange='toggleInput("#str_pad_radio", ".str_pad_input")'>
                                <label class="form-check-label" for="str_pad_radio">
                                    str_pad
                                </label>
                            </div>
                            <div class="col-10 d-flex">
                                <div class="container-fluid p-0 m-0">
                                    <div class="row p-0 m-0">
                                        <div class="col-3">
                                            <input type="text" name="str_pad" class="form-control invisible str_pad_input" id="str_pad_text" placeholder="Neste texto">
                                        </div>
                                        <div class="col-3">

                                            <input type="number" name="str_pad" class="form-control invisible str_pad_input" id="str_pad_size" placeholder="Com este tamanho">
                                        </div>
                                        <div class="col-3 m-0 p-0">

                                            <input type="text" name="str_pad" class="form-control invisible str_pad_input" id="str_pad_char" placeholder="Insira isto">
                                        </div>
                                        <div class="col-3">
                                            <div class="form-group">
                                                <select class="form-control invisible str_pad_input" name="" id="str_pad_side">
                                                    <option value="">onde?</option>
                                                    <option value="0">na esquerda</option>
                                                    <option value="1">na direita</option>
                                                    <option value="2">em ambos os lados</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <small class="text-danger" id="str_pad_small" style="display: none;">você precisa preencher todos os campos para mostrar o resultado</small>
                                        </div>   
                                    </div>
                                </div>
                            </div>
                        </div>



                       
                        <div class="d-flex align-items-center">
                            <div class="form-check col-2">
                                <input class="form-check-input" type="radio" id="str_repeat_radio" name="function_radios" onchange='toggleInput("#str_repeat_radio", ".str_repeat_input")'>
                                <label class="form-check-label" for="str_repeat_radio">
                                    str_repeat
                                </label>
                            </div>
                            <div class="col-10 d-flex">
                                <div class="container-fluid p-0 m-0">
                                    <div class="row p-0 m-0">
                                        <div class="col-9">
                                            <input type="text" name="str_repeat" class="form-control invisible str_repeat_input" id="str_repeat_text" placeholder="Neste texto">
                                        </div>
                                        <div class="col-3">
                                            <input type="number" name="str_repeat" class="form-control invisible str_repeat_input" id="str_repeat_repeat" placeholder="Repita-me">
                                        </div>
                                        <div class="col-12">
                                            <small class="text-danger" id="str_repeat_small" style="display: none;">você precisa preencher todos os campos para mostrar o resultado</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                       
                    </form>
                </div>
            </div>
            <div class="col-9 mt-2">
                <div class="card p-4">
                    <h3 class="text-center">Resultado</h3>
                    <p id="result_text"></p>
                </div>
            </div>
        </div>
    </div>



</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<script src="functions.js"></script>

</html>
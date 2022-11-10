<?php /** @var $exception Exception **/ ?>

<div class="px-4 py-5 text-center">
    <i class="fa-solid fa-exclamation fa-2xl"></i>
    <h1 class="display-5 fw-bold"><?php echo $exception->getCode(); ?></h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4"><?php echo $exception->getMessage(); ?></p>
    </div>
</div>













<style>
    .diamondCon {
        position: absolute;
        width: 80px;
    }
    .diamondCon ul, .diamondCon li {
        list-style: none;
    }
    .diamond li {
        position: absolute;
        opacity: 0;
        transform:rotate(45deg);
    }
    .diamond li:nth-child(1) {
        height: 30px;
        width: 30px;
        background-color: #3ea9f0;
        animation: DIAMOND1 200ms 2.2s ease, opacity 2s 2.8s ease infinite;
        animation-fill-mode: forwards;
    }
    .diamond li:nth-child(2) {
        height: 30px;
        width: 30px;
        background-color: #f07739;
        animation: DIAMOND2 200ms 1.6s ease, opacity 2s 2.8s ease infinite;
        animation-fill-mode: forwards;
    }
    .diamond li:nth-child(3) {
        height: 30px;
        width: 30px;
        background-color: #ebb42e;
        animation: DIAMOND3 200ms 1.4s ease, opacity 2s 2.8s ease infinite;
        animation-fill-mode: forwards;
    }
    .diamond li:nth-child(4) {
        height: 30px;
        width: 30px;
        background-color: #82bd33;
        animation: DIAMOND4 200ms 1s ease, opacity 2s 2.8s ease infinite;
        animation-fill-mode: forwards;
    }
    .FromNumberID {
        position: absolute;
        min-width: 350px;
        opacity: 0;
        animation: text 500ms 2.4s ease;
        animation-fill-mode: forwards;
    }
    @keyframes DIAMOND1 {
        0% {
            top: -50px;
            opacity: 0;
        }
        100% {
            top: 0;
            opacity: 1;
        }
    }
    @keyframes DIAMOND2 {
        0% {
            top: -50px;
            opacity: 0;
        }
        100% {
            left: 66px;
            top: 22px;
            opacity: 1;
        }
    }
    @keyframes DIAMOND3 {
        0% {
            top: -50px;
            opacity: 0;
        }
        100% {
            left: 22px;
            top: 22px;
            opacity: 1;
        }
    }
    @keyframes DIAMOND4 {
        0% {
            top: -50px;
            opacity: 0;
        }
        100% {
            top: 44px;
            opacity: 1;
        }
    }
    @keyframes opacity {
        0% {
            opacity: 1;
        }
        50% {
            opacity: 0.3;
        }
        100% {
            opacity: 1;
        }
    }
    @keyframes FromNumberID {
        0% {
            top: 0;
            opacity: 0;
        }
        100% {
            top: 90px;
            opacity: 1;
        }
    }


    .wrap{
        width:50%;
        margin-left:13%;
        transform-origin:60% 0;
        transform: rotate(-45deg);
    }
    .wrap > a{
        float:left;
        width:19%;
        padding-bottom:19%;
        margin:0.5%;
        background:teal;
    }
    .wrap > a:hover{
        background:gold;
    }
    .wrap > a:nth-child(4){
        clear:left;
        margin-left:20.5%;
    }
    .wrap > a:nth-child(7){
        clear:left;
        margin-left:60.5%;
    }
</style>

<div class="diamondCon">
    <ul class="diamond">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
    </ul>
</div>


<div class="FromNumberID">
    jordan
</div>


<!--
<form>
    <div class="input-group FromNumberID">
        <input
                type="number"
                class="form-control"
                placeholder="Please Enter Payment Number"
                aria-label="UniversityID"
                aria-describedby="button-addon2"
                required
        >
        <button class="btn btn-outline-primary" type="button" id="button-addon2">Login</button>
    </div>
</form>
-->


<div class="wrap">
    <a href="#"></a>
    <a href="#"></a>
    <a href="#"></a>
    <a href="#"></a>
    <a href="#"></a>
    <a href="#"></a>
    <a href="#"></a>
    <a href="#"></a>
</div>
<style>
    .judul {
        font-family: 'Oleo Script', cursive;
        font-size: 30pt;
        text-align: center;
        color: white;
    }

    .jud-bawah {
        font-size: 12pt;
        text-align: center;
        color: black;
        margin: -1px 0 0 0;
    }

    .profile {
        text-align: center;
        margin-left: -462px;
        color: azure;
        margin-top: 17px;
    }

    .awal {
        width: 60vw;
        margin-left: 325px;
    }

    #myBtn {
        display: none;
        position: fixed;
        bottom: 20px;
        left: 23px;
        z-index: 3;
        font-size: 18px;
        border: none;
        outline: none;
        background: rgb(9, 255, 0);
        background: -moz-linear-gradient(163deg, rgba(9, 255, 0, 1) 0%, rgba(17, 170, 255, 1) 0%, rgba(255, 239, 0, 1) 100%);
        background: -webkit-linear-gradient(163deg, rgba(9, 255, 0, 1) 0%, rgba(17, 170, 255, 1) 0%, rgba(255, 239, 0, 1) 100%);
        background: linear-gradient(163deg, rgba(9, 255, 0, 1) 0%, rgba(17, 170, 255, 1) 0%, rgba(255, 239, 0, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#09ff00", endColorstr="#ffef00", GradientType=1);
        color: darkred;
        cursor: pointer;
        padding: 15px;
        border-radius: 100%;
    }

    #myBtn:hover {
        background-color: #555;
    }

    .boton {
        border-color: dimgray;
        border-radius: 4px;
        border: 12px;
    }

    .tabel2 {
        border-collapse: collapse;
        border-spacing: 0;
        border: 1px solid #ddd;
        font-weight: bold;
        color: #000000;
        font-size: 16px;
        width: 130%;
    }

    .tabel2 th {
        width: 190px;
    }

    .tabel3 {
        border: none;
        font-weight: bold;
        color: #000000;
        font-size: 16px;
        width: 98%;
    }

    .tabel3 th td {
        width: 90px;

    }

    .menu {
        /* position: relative; */
        text-align: center;
        width: 56vw;
        margin-left: 270px;
    }

    #tambah {
        text-decoration: none;
    }

    .tagline {
        background: rgb(9, 255, 0);
        background: -moz-linear-gradient(163deg, rgba(9, 255, 0, 1) 0%, rgba(0, 164, 255, 1) 0%, rgba(255, 89, 0, 1) 100%);
        background: -webkit-linear-gradient(163deg, rgba(9, 255, 0, 1) 0%, rgba(0, 164, 255, 1) 0%, rgba(255, 89, 0, 1) 100%);
        background: linear-gradient(163deg, rgba(9, 255, 0, 1) 0%, rgba(0, 164, 255, 1) 0%, rgba(255, 89, 0, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#09ff00", endColorstr="#ff5900", GradientType=1);
        /* background-color: transparent; */
        border: 3px solid whitesmoke;
        opacity: 0.9;
    }

    body {
        background: url('assets/gambar/bg-03.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    table thead {
        background: rgb(9, 255, 0);
        background: -moz-linear-gradient(163deg, rgba(9, 255, 0, 1) 0%, rgba(0, 164, 255, 1) 0%, rgba(255, 89, 0, 1) 100%);
        background: -webkit-linear-gradient(163deg, rgba(9, 255, 0, 1) 0%, rgba(0, 164, 255, 1) 0%, rgba(255, 89, 0, 1) 100%);
        background: linear-gradient(163deg, rgba(9, 255, 0, 1) 0%, rgba(0, 164, 255, 1) 0%, rgba(255, 89, 0, 1) 100%);
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr="#09ff00", endColorstr="#ff5900", GradientType=1);
        color: #fff;
        text-transform: uppercase;
    }

    .anim {
        width: 100px;
        height: 30px;
        text-align: center;
        margin: auto;
    }

    .icon {
        margin-left: -13px;
        color: orangered;
        margin-top: 0px;
        font-size: 2px;
        /* position: relative; */
        transition: 1s;
    }

    .icon2 {
        margin-left: 13px;
        margin-top: -27px;
        font-size: 2px;
        transition: 1s;
        color: orangered;
    }

    .tulisan {
        opacity: 0;
        /* position: absolute; */
        margin-top: -23px;
        margin-left: 0px;
        text-align: center;
        font-size: 9px;
        transition: 0.5s;
    }

    .anim:hover .icon {
        margin-left: -90px;
        padding-right: 25px;
    }

    .anim:hover .icon2 {
        margin-left: 101px;
    }

    .anim:hover .tulisan {
        opacity: 1;
        transition: 1.2s;
    }

    #myInput {
        background-image: url('./assets/gambar/search-2.png');
        background-color: whitesmoke;
        border-radius: 4px;
        background-position: 10px 12px;
        background-repeat: no-repeat;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 4px solid darkred;
        margin-bottom: 12px;
        margin-top: -15px;
        margin-left: 15px;
        font-family: 'Oleo Script', cursive;
        width: 130px;
        -webkit-transition: width 0.7s ease-in-out;
        transition: width 0.4s ease-in-out;
    }

    /* When the input field gets focus, change its width to 100% */
    #myInput:focus {
        width: 23%;
    }

    .container {
        display: inline-block;
        cursor: pointer;
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 0px;
        width: 56vw;
        z-index: 1;
    }

    .bar1,
    .bar2,
    .bar3 {
        width: 35px;
        height: 5px;
        background-color: oldlace;
        margin: 6px 0;
        transition: 0.7s;
    }

    .change .bar1 {
        -webkit-transform: rotate(-45deg) translate(-9px, 6px);
        transform: rotate(-45deg) translate(-9px, 6px);
    }

    .change .bar2 {
        opacity: 0;
    }

    .change .bar3 {
        -webkit-transform: rotate(45deg) translate(-8px, -8px);
        transform: rotate(45deg) translate(-8px, -8px);
    }

    .bungkus {
        opacity: 0;
        display: block;
        margin-left: 38px;
        transition: 0.7s;
    }

    .change .bungkus {
        opacity: 1;
        transition: 1.2s;
    }

    .bungkus button {
        border: 3px solid #ddd;
        ;
    }

    .bungkus button:hover {
        border: 3px solid #ddd;
        ;
    }

    /* .sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 0;
    } */


    /* The Modal (background) */
    .modall {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 1;
        /* Sit on top */
        padding-top: 100px;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content */
    .modall-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 30%;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .modall {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Stay in place */
        z-index: 999;
        /* Sit on top */
        padding-top: auto;
        /* Location of the box */
        left: 0;
        top: 0;
        width: 100%;
        /* Full width */
        height: 100%;
        /* Full height */
        overflow: auto;
        /* Enable scroll if needed */
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black w/ opacity */
    }

    /* Modal Content */
    .modall-content {
        background-color: #fefefe;
        margin: auto;
        padding: 20px;
        border: 1px solid #888;
        width: 100%;
        height: auto;
        width: 634px;
        height: 565px;
        left: 6%;
        right: auto;
        margin-top: -45px;
        margin-left: auto;
    }

    /* The Close Button */
    .close {
        color: #aaaaaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: #000;
        text-decoration: none;
        cursor: pointer;
    }

    .modal-mini {
        width: 300px;
    }

    .button-modal {
        margin-left: 85px;
    }

    @media (max-width:480px) {
        .modall {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 9999;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modall-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 30%;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }


        .modall {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: auto;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.4);
            /* Black w/ opacity */
        }

        /* Modal Content */
        .modall-content {
            background-color: #fefefe;
            margin: auto;
            padding: 20px;
            border: 1px solid #888;
            width: 100%;
            height: auto;
            width: 300px;
            height: 565px;
            left: 6%;
            right: auto;
            margin-top: -45px;
            margin-left: auto;
        }

        /* The Close Button */
        .close {
            color: #aaaaaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: #000;
            text-decoration: none;
            cursor: pointer;
        }

        .modal-mini {
            width: 250px;
        }

        .button-modal {
            margin-left: 5px;
        }
    }


    #buatPV:hover {
        border: none;
    }

    /* .show {
            background-color: maroon;
            border-radius: 5px;
            border: 2px solid black;
            color: white;
            width: 140px;
            height: 40px;
            margin-left: 1180px;
            margin-top: -680px;
            margin-bottom: 30px;
        } */
    .footer {
        height: 60px;
        background: darkslategray;
        color: #fff;
        bottom: 0px;
        width: 98vw;
        /*biar memenuhi layar*/
        margin-top: 12px;
        margin-left: -6px;
        border: 1px solid cyan;
        height: 30px;
        text-align: center;

    }
</style>
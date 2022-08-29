<?php
    class satelite{
        function getSatelite(){
            return new PDO('mysql:host=localhost;dbname=bandungsugoi','root','');
        }
    }
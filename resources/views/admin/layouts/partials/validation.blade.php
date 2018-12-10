<?php
/**
 * Created by PhpStorm.
 * User: Bruce
 * Date: 2018/12/10
 * Time: 下午 11:12
 */
@foreach($erros->all() as $error)
    <li>{{$error}}</li>
@endforeach

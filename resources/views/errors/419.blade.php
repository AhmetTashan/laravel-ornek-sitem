@extends('errors::minimal')

@section('title', __('Page Expired'))
@section('code', '419')
@section('message', __('CSRF token geçerli değil.'))

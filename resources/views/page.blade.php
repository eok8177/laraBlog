@extends('layout')

@section('content')

@foreach($blocks as $block)
    {!! $block->html !!}
@endforeach





<!--Define Siema-->
<!--only on this page-->


<style>
    .dark.cc_dialog {
        position: fixed;
        top: auto;
        bottom: 0;
        padding: 5px !important;
    }
    .dark.cc_dialog .cc_dialog_headline {
        font-size: 16px;
        margin: 0;
        min-width: 130px;
    }
    .dark.cc_dialog .cc_dialog_text {
        font-size: 12px;
        margin: 0;
    }
    .cc_dialog button {
        font-size: 12px;
        padding: 4px 8px;
        white-space: nowrap;
    }
    .dark.cc_dialog button.cc_b_ok {
        color: #fff;
        background-color: #EF3E42;
    }
    @media (min-width: 768px) {
        .dark.cc_dialog > div {
            display: flex;
            align-items: center;
        }
        .dark.cc_dialog > div div:last-child {
            min-width: 230px;
        }
    }
</style>


@endsection
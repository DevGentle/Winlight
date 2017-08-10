@extends('layouts.app')

@section('htmlheader_title')
    Product
@endsection

@section('contentheader_title')
    <h1>Edit product</h1>
@endsection

@section('main-content')
    @include('tinymce.textarea')
    @include('admin.validation.error')

    <div class="box-body">
        {!! Form::model($promotion, ['method' => 'PATCH', 'action' => ['Admin\Promotion\PromotionsController@update', $promotion->id], 'files' => true]) !!}
            {{ Form::token() }}
            <div class="col-lg-12">
                <div class="margin">
                    {{ Form::label('product_id', 'เลือกผลิตภัณฑ์') }}
                    {{ Form::select('product_id', $product, null, ['class' => 'form-control' ,'placeholder' => 'Select product name']) }}
                </div>
                <div class="margin">
                    {{ Form::label('title', 'Title') }} <span class="text-red">*</span>
                    {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter promotion title']) }}
                </div>
                <div class="margin">
                    {{ Form::label('description', 'Description') }} <span class="text-red">*</span>
                    {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter promotion description']) }}
                </div>
                <div class="margin">
                    {{ Form::label('offer_price', 'Offer price') }} <span class="text-red">*</span>
                    {{ Form::text('offer_price', null, ['class' => 'form-control' ]) }}
                </div>
                <div class="margin">
                    {{ Form::label('start_time', 'Start time') }} <span class="text-red">*</span>
                    {{ Form::datetime('start_time', null, ['class' => 'form-control' ]) }}
                </div>
                <div class="margin">
                    {{ Form::label('end_time', 'End time') }} <span class="text-red">*</span>
                    {{ Form::datetime('end_time', null, ['class' => 'form-control' ]) }}
                </div>
                <div>
                    {{ Form::label('cover', 'Image') }}
                    {{ Form::file('cover', null, ['class' => 'form-control']) }}
                    <div class="row">
                        <div class="col-xs-12" style="padding-top: 5px; padding-bottom: 5px">
                            <table class="table table-bordered" style="background: #ffffff">
                                <tbody>
                                @if($promotion->cover)
                                    <tr>
                                        <td><img src="{{ asset($promotion->cover) }}" width="200" height="100" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td><b>File name: </b>{{ $promotion->cover }}</td>
                                    </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="margin">
                    {{ Form::submit('Update', ['class'=>'btn btn-primary']) }}
                    <a href= "{{ url('admin/promotions') }}" class="btn btn-danger">Cancel</a>
                </div>
            </div>
        {!! Form::close() !!}
    </div>
@endsection
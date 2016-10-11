@extends('web.layout')

@section('content')
    <div class="row product-index p-r-l-0">
        <div class="container product-index__header"></div>
    </div>
    <div class="contact-bg">
        <div class="container">
            <div class="contact-index">
                <div class="row">
                    <div class="col-xs-4 contact-index__header-left">ติดต่อ/สอบถาม</div>
                    <div class="col-xs-8 contact-index__header-right">
                        <span>{{ "Tel. 0-2415-7576-7" }}</span><br>
                        <span>{{ "Fax. 0-2415-7578" }}</span><br>
                        <span>{{ "sale_wlc@winnerlight.co.th" }}</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-4">Form</div>
                    <div class="col-xs-8">Map by iFrame</div>
                </div>
            </div>
        </div>
    </div>

@endsection
